##List all running ec2 instances in all regions.

import boto3
import os
import sys
import pymysql
import pymysql.cursors
import re
os.environ['PYTHONWARNINGS']="ignore:Unverified HTTPS request"
from time import time, ctime
#mysql connection
conn = pymysql.connect(host="localhost", port=3306, user="root", password="P@ssw0rd1", db="tagsync")
cursor = conn.cursor()
account_id =sys.argv[1].strip();
#account_id ="282902823755"
sql = "select * from aws_account_details where account_id ='"+account_id +"';";

cursor.execute(sql)
REGION='us-west-2'
records = cursor.fetchall()
for row in records:
    Access_key=row[5].strip()
    Secret_key=row[4].replace(" ","+").strip()
   #print(row[4])
conn.commit()
#print(Access_key,Secret_key)
## Get ec2 instances in every region
#Access_key='AKIAT4AZFG4CTNOQMZEM'
#Secret_key='QmUWb65Y2F5jID20t3KezYm/znvVSL1yTD5XRq0b'
ec2 = boto3.client('ec2',REGION,aws_access_key_id = Access_key,aws_secret_access_key = Secret_key,verify=False)

response = ec2.describe_instances()
#print(response)

for reservation in response['Reservations']:
            print(reservation)
            for instance in reservation['Instances']:
                    print("_________________________________________",REGION, instance['InstanceId'],instance['State']['Name'],"___________________________________")

                    if (instance['State']['Name']=="running") or (instance['State']['Name']=="stopped") :
                            #if (instance['State']['Name']=="running"):
                            #print(instance['Tags'])
                            if (instance['Tags'] != None):
                                for tags in instance['Tags']:
                                    if (tags["Key"] == 'Name' or tags["Key"] == 'Owner'):
                                        if (tags["Key"] == 'Name'):
                                            instancename = tags["Value"]
                                       # if (tags["Key"] == 'Owner'):
                                            #owner = tags["Value"]
                            else:
                                instancename='-'
                                
                    existing_resource_details="SELECT * FROM `tag_store` where `account_id`='"+account_id+"' and `instance_id`='"+instance['InstanceId']+"';"
                    print(existing_resource_details)
                    rows_count = cursor.execute(existing_resource_details)
                    if rows_count > 0:
                        rs = cursor.fetchall()
                    else:                    
                        #print(REGION+","+instancename+","+instance['InstanceId']+","+instance['State']['Name']+","+('; '.join(map(str, instance['Tags'])))+"\n")
                        insert_resource_details="INSERT INTO `tag_store` (`account_id`, `instance_id`, `resource_name`, `region`, `resource_type`,`compliance`) VALUES ('"+account_id+"', '"+instance['InstanceId']+"', '"+instancename+"', '"+REGION+"', 'Ec2','Non-compliant')";
                        #print(insert_resource_details)
                        cursor.execute(insert_resource_details)
                        conn.commit()
                    conn.commit()
update_import_time = 'UPDATE `aws_account_details` SET `imported_timestamp` = "'+ctime(time())+'" WHERE `account_id` ="'+account_id+'"'
# print(update_import_time)
cursor.execute(update_import_time)
conn.commit()
# disconnect from server
conn.close()