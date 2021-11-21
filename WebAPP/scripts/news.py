import mysql.connector
import requests
import pandas as pd
from bs4 import BeautifulSoup
from nltk.tokenize import word_tokenize
from nltk.probability import FreqDist
import mysql.connector
import re

def make_clickable(val):
    return '<a href="{}">{}</a>'.format(val,val)

mydb = mysql.connector.connect(
    host = 'localhost',
    user = 'root',
    password = '',
    port = '3306',
    database = 'pcoded'
)

mycursor = mydb.cursor()


headers = {"User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36 Edge/18.19582"}
params = {"q": "PCOS","hl": "en","tbm": "nws",}

response = requests.get("https://www.google.com/search", headers=headers, params=params)
soup = BeautifulSoup(response.text, 'lxml')

dicts={'source':[],'heading':[],'snippet':[],'link':[]}

for result in soup.select('.ftSUBd'):
    heading = str(result.find("div", {"class": "mCBkyc tNxQIb ynAwRc JIFdL JQe2Ld nDgy9d"}))
    heading=heading.replace('<div aria-level="3" class="mCBkyc tNxQIb ynAwRc JIFdL JQe2Ld nDgy9d" role="heading" style="-webkit-line-clamp:3">',"")
    heading=heading.replace('</div>',"")
    heading=heading.replace('\n',"")
    
    link = result.a['href']

    source = str(result.find("div", {"class": "CEMjEf"}))
    source=source.replace('<div class="CEMjEf"><g-img class="QyR1Ze BA0A6c" style="margin-right:8px"><img alt="" class="rISBZc zr758c" data-deferred="1" height="16" id="dimg_',"")

    source=source.replace('src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="border-radius:2px 2px 2px 2px" width="16"/></g-img><span>',"")
    source=source.replace('</span></div>',"")
    source=re.sub(r'\d\d" ',"",source)


    snippet = str(result.find("div", {"class": "GI74Re nDgy9d"}))
    snippet=snippet.replace('<div class="GI74Re nDgy9d" style="margin-top:8px;-webkit-line-clamp:3">',"")
    snippet=snippet.replace('</div>',"")
    

    dicts['heading'].append(heading)
    dicts['link'].append(link)
    dicts['snippet'].append(snippet)
    dicts['source'].append(source)


mydb = mysql.connector.connect(
    host = 'localhost',
    user = 'root',
    password = '',
    port = '3306',
    database = 'pcoded'
)

mycursor = mydb.cursor()
for i in range(0,10):
    query='INSERT INTO news (source,heading,snippet,link) VALUES (%s,%s,%s,%s)'

    values=[(dicts['source'][i],dicts['heading'][i],dicts['snippet'][i],dicts['link'][i])]
    mycursor.executemany(query,values)
    mydb.commit()