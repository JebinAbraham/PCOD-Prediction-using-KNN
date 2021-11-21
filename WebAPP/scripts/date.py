#!/usr/bin/env python

from datetime import datetime

# datetime object containing current date and time
now = datetime.now()

mydb = mysql.connector.connect(
    host = 'localhost',
    user = 'root',
    password = '',
    port = '3306',
    database = 'pcoded'
)

mycursor = mydb.cursor()

query='INSERT INTO result (dt) VALUES (%s)'

values=[(now)]
mycursor.executemany(query,values)
mydb.commit()