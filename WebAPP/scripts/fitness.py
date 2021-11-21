#Modules 

from googleplaces import GooglePlaces, types, lang
import requests
import json
import urllib.parse
import pandas as pd
import mysql.connector
#Database Component 

import mysql.connector

mydb = mysql.connector.connect(
    host = 'localhost',
    user = 'root',
    password = '',
    port = '3306',
    database = 'pcoded'
)

mycursor = mydb.cursor()

query='DELETE FROM fitness'
mycursor.execute(query)
mydb.commit()

query='SELECT * FROM fitnessplace ORDER BY dt DESC LIMIT 1'
mycursor.execute(query)

myresult = mycursor.fetchall()

result_List =[]
for x in myresult:
    print(type(x))
    result_List=list(x)
    
user=result_List[0:2]
user = user[1]
city=result_List[2]
country=result_List[3]


import mysql.connector

mydb = mysql.connector.connect(
    host = 'localhost',
    user = 'root',
    password = '',
    port = '3306',
    database = 'pcoded'
)

#API integreation 

#API_KEY = db_API_KEY
mycursor = mydb.cursor()
query='SELECT * FROM apikey ORDER BY dt DESC LIMIT 1'
mycursor.execute(query)

myresult = mycursor.fetchall()

result_List =[]
for x in myresult:
    print(type(x))
    result_List=list(x)
    
API_KEY=result_List[0]

# url variable store url 
url = "https://maps.googleapis.com/maps/api/place/textsearch/json?"
  
# The text string on which to search 

query = "Fitness centre near "+ city 
  
# get method of requests module 
# return response object 
text_search_request = requests.get(url + 'query=' + query +
                        '&key=' + API_KEY) 
  
# json method of response object convert 
#  json format data into python format data 
result_json = text_search_request.json() 
  
# now x contains list of nested dictionaries 
# we know dictionary contain key value pair 
# store the value of result key in variable y 
y = result_json['results'] 
  
"""
# keep looping upto lenght of y 
for i in range(len(y)): 
      
    # Print value corresponding to the 
    # 'name' key at the ith index of y 
    print(y[i]['name']) 
"""

fitness={'name':[],'place':[]}

# Iterate over the search results
for i in range(len(y)):
    c=y[i]['name']
    fitness['name'].append(c)
    fitness['place'].append(city)
      


fitness=pd.DataFrame(fitness)

mydb = mysql.connector.connect(
    host = 'localhost',
    user = 'root',
    password = '',
    port = '3306',
    database = 'pcoded'
)

mycursor = mydb.cursor()
for i in range(0,10):
    query='INSERT INTO fitness(name,place) VALUES (%s,%s)'

    values=[(fitness['name'][i],fitness['place'][i])]
    mycursor.executemany(query,values)
    mydb.commit()