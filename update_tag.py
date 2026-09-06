import boto3
import os
import sys
import pymysql
import pymysql.cursors
import re
from time import time, ctime
import json

print("hello from python")
print(sys.argv[1])
print(type(sys.argv[1]))
data=sys.argv[1]

#data='\{\"account_id\":\"282902823755\",\"instance_id\":\"i-04aee62c6db9eb6ab\",\"resource_name\":\"CIS_AmazonLinux_2\",\"region\":\"us-west-2\",\"resource_type\":\"Ec2\",\"patching:patch-group\":\"Phase-2\",\"backupstatus:backup\":\"\"\}'
if("\\" in data):
	data=data.replace("\\",'').replace("\{","{").replace("\}","}")
	print("if loop",data)
formdata=json.loads(data)
print((formdata))
print(formdata['account_id'])
#formdata={"account_id":"282902823755","instance_id":"i-04aee62c6db9eb6ab","resource_name":"AMI-2016","region":"us-west-2","resource_type":"Ec2","Testtag":"Tagsync"}
#mysql connection
conn = pymysql.connect(host="localhost", port=3306, user="root", passwd="P@ssw0rd1", db="tagsync")
cursor = conn.cursor()
sql = "select * from aws_account_details where account_id ='"+formdata['account_id'] +"'";
print(sql)
cursor.execute(sql)
#REGION='us-west-2'
records = cursor.fetchall()
for row in records:
    Access_key=row[5].strip()
    Secret_key=row[4].replace(" ","+").strip()
   
conn.commit()

## Get ec2 instances in every region
ec2 = boto3.client('ec2',formdata['region'],aws_access_key_id = Access_key,aws_secret_access_key = Secret_key,verify=False)

for i, (key, value) in enumerate(formdata.items()):
    if(i>4):
        print(key,value)
        response =ec2.create_tags(Resources=[formdata['instance_id']], Tags=[{'Key':''+key+'', 'Value':''+value+''}])
