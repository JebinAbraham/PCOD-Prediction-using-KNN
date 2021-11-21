import pickle 
import pandas as pd
import mysql.connector


#loading the model 
with open('C:/xampp/htdocs/pcoded/templates/bangaloredoctorssoup.sav', 'rb') as f:
    soup = pickle.load(f)

dicts={'doctor':[],'place':[]}
for result in soup.select('.cXedhc'):
    doctor = str(result.find("div", {"class": "dbg0pd"}))
    doctor=doctor.replace('<div aria-level="3" class="dbg0pd" role="heading"><span>',"")
    doctor=doctor.replace('</span></div>',"")
    doctor=' '.join(doctor.split()[:3])
    dicts['doctor'].append(doctor)
    dicts['place'].append('Delhi')
    
    
df=pd.DataFrame(dicts)

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
    query='INSERT INTO bangaloredoctors(doctor,place) VALUES (%s,%s)'
    values=[(df['doctor'][i],df['place'][i])]
    mycursor.executemany(query,values)
    mydb.commit()