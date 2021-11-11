import requests, lxml
from bs4 import BeautifulSoup
from serpapi import GoogleSearch
import pandas as pd
import re


headers = {"User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36 Edge/18.19582"}
params = {"q": "Best Gynaecologists in  delhi","hl": "en",}

response = requests.get("https://www.google.com/search", headers=headers, params=params)
soup = BeautifulSoup(response.text, 'lxml')

dicts={'doctor':[],'place':[]}
for result in soup.select('.cXedhc'):
    doctor = str(result.find("div", {"class": "dbg0pd"}))
    doctor=doctor.replace('<div aria-level="3" class="dbg0pd" role="heading"><span>',"")
    doctor=doctor.replace('</span></div>',"")
    doctor=' '.join(doctor.split()[:3])
    dicts['doctor'].append(doctor)
    dicts['place'].append('Delhi')
    
    
df=pd.DataFrame(dicts)

import mysql.connector
#passing the output to the database 
mydb = mysql.connector.connect(
    host = 'localhost',
    user = 'root',
    password = '',
    port = '3306',
    database = 'pcoded'
)

mycursor = mydb.cursor()

for i in range (0,len(df)):
    query='INSERT INTO delhidoctors (doctor,place) VALUES (%s,%s)'
    values=[(df['doctor'][i],df['place'][i])]
    mycursor.executemany(query,values)
    mydb.commit()