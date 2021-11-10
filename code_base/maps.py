#libraries 
import googlemaps
from pprint import pprint

"""

API_KEY ='AIzaSyDppRBoXbm67pKwuXg6TfS8eH5VmpPX56w'
map_client = googlemaps.Client(API_KEY)

workplace = 'Pathanamthitta'
response = map_client.geocode(workplace)
pprint(response)
"""

import requests

url = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=-33.8670522%2C151.1957362&radius=1500&type=Fertitlity_Center&key=AIzaSyCi1tnvxHzntl0Y34sFB2bhtED0xQiiaBQ"


payload={}
headers = {}

response = requests.request("GET", url, headers=headers, data=payload)

print(response.text)