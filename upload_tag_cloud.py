import sys
import pandas as pd
import boto3
import os
import pymysql
import pymysql.cursors
import re
from time import time, ctime

path="./tag_file_upload/"+sys.argv[1]
##print(path)
df = pd.read_csv(path, sep = ',', index_col=0, na_filter=False)
df = df.loc[:, ~df.columns.str.contains('^Unnamed')]
##:print(df)
route_cols = [col for col in df.columns]
##print(df.columns)
conn = pymysql.connect(host="localhost", port=3306, user="root", password="P@ssw0rd1", db="tagsync")
cursor = conn.cursor()

for idx in df.index:
    formdata = dict()
    updatesql=""
    for column in route_cols:
        ##print(f'{column} {df.loc[idx, column]}')
        formdata[column] = df.loc[idx, column]
        updatesql+="`"+column+"`='"+str(df.loc[idx, column])+"',"
   ## print(formdata)
    sql = "select * from aws_account_details where account_id ='"+(formdata['account_id']).astype(str) +"'";
    ##print(sql)
    cursor.execute(sql)
    records = cursor.fetchall()
    for row in records:
        Access_key=row[5].strip()
        Secret_key=row[4].replace(" ","+").strip()   
    conn.commit()
    ec2 = boto3.client('ec2',(formdata['region']),aws_access_key_id = Access_key,aws_secret_access_key = Secret_key,verify=False)
    for i, (key, value) in enumerate(formdata.items()):
        if(i>6):        
            #print(key,value,formdata['Instance_id']) 
            #print(type(key),type(value),type(formdata['Instance_id']))
            key_1=key
            value_1=value
            #print('Key:'+str(key), 'Value'+str(value))
            response =ec2.create_tags(Resources=[str(formdata['instance_id'])], Tags=[{'Key':''+str(key)+'', 'Value':''+str(value)+''}])    
    placeholders =" ','".join([str(x) for x in formdata.values()])
    columns = "`,`".join(formdata.keys())
    sql = "INSERT INTO %s ( `%s` ) VALUES ( '%s' )" % ("`tag_store`", columns, placeholders)
    ##print(sql)
    #cursor.execute(sql)
    #conn.commit()
    
    #print("**********************")
    existing_resource_details="SELECT * FROM `tag_store` where `account_id`='"+(formdata['account_id']).astype(str) +"' and `instance_id`='"+formdata['instance_id']+"';"
    rows_count = cursor.execute(existing_resource_details)
    if rows_count > 0:
        sql = ("UPDATE tag_store SET "+ updatesql +"where `instance_id`='"+formdata['instance_id']+"';").replace(',where',' where')
        #print(sql)
        cursor.execute(sql)
        conn.commit()
        
    else:
        sql = "INSERT INTO %s ( `%s` ) VALUES ( '%s' )" % ("`tag_store`", columns, placeholders)
        cursor.execute(sql)
        conn.commit()
print("successfull")
   




