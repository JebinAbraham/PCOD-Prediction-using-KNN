#!/usr/bin/env python

#loading the modules 
import pickle
import pandas as pd 
import mysql.connector
from datetime import datetime

# datetime object containing current date and time
now = datetime.now()
#loading the model 
with open('C:/xampp/htdocs/pcoded/templates/model_23.sav', 'rb') as f:
    model = pickle.load(f)

#retriveing the questionare data from the database 
mydb = mysql.connector.connect(
    host = 'localhost',
    user = 'root',
    password = '',
    port = '3306',
    database = 'pcoded'
)

mycursor = mydb.cursor()
query='SELECT * FROM question ORDER BY dt DESC LIMIT 1'
mycursor.execute(query)

myresult = mycursor.fetchall()

result_List =[]
for x in myresult:
    print(type(x))
    result_List=list(x)
    
user=result_List[0:2]
user = user[1]
lists=result_List[2:]

#prediction 
# Test List  -- 
df1=pd.DataFrame(lists)
df1=pd.DataFrame.transpose(df1)
pred = model.predict(df1)
df4=pd.DataFrame(pred)
pred_diag={0:'Predicted Diagnosis'}
df4.rename(pred_diag, axis=1, inplace=True)
if df4['Predicted Diagnosis'][0]==0:
    df4['Predicted Diagnosis'][0]='Low Risk of PCOS'
elif df4['Predicted Diagnosis'][0]==1:
    df4['Predicted Diagnosis'][0]='High Risk of PCOS'

prediction=df4['Predicted Diagnosis'].iloc[0]

#passing the output to the database 
mydb = mysql.connector.connect(
    host = 'localhost',
    user = 'root',
    password = '',
    port = '3306',
    database = 'pcoded'
)

mycursor = mydb.cursor()

query='INSERT INTO result (user,prediction,dt) VALUES (%s,%s,%s)'
values=[(user,prediction,now)]
mycursor.executemany(query,values)
mydb.commit()
