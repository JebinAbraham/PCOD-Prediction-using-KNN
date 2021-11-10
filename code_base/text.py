
import requests

url = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=-33.8670522%2C151.1957362&radius=1500&type=Fertitlity_Center&key=AIzaSyCi1tnvxHzntl0Y34sFB2bhtED0xQiiaBQ"


payload={}
headers = {}

response = requests.request("GET", url, headers=headers, data=payload)

print("Response Collected")
#open text file
text_file = open("data.txt", "w")

#write string to file
text_file.write(response.text)

#close file
text_file.close()