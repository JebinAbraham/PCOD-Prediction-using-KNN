#Modules 

from googleplaces import GooglePlaces, types, lang
import requests
import json
import urllib.parse
import pandas as pd
#Database Component 



#API integreation 

#API_KEY = db_API_KEY
API_KEY = "AIzaSyAIQPDENlLTWXu_UYJUeXi9LKEiMrBv3fQ"

#Code to retrun co-ordinates. 
city = "Pathanamthitta"         #retrive this location from DB 
country = "India"               #retrive this location from DB 
url = "https://nominatim.openstreetmap.org/?addressdetails=1&q=" + city + "+" + country +"&format=json&limit=1"
LL_response = requests.get(url).json()
lat = LL_response[0]["lat"]
lon = LL_response[0]["lon"]

#print(lat)
#print(lon)

#GoogleNearby API 
google_places = GooglePlaces(API_KEY)

#Retriveing Nearby Hospitals 

H_query_result = google_places.nearby_search(
				lat_lng ={'lat': lat, 'lng': lon},
		radius = 5000,
		types =[types.TYPE_HOSPITAL])

if H_query_result.has_attributions:
	print (H_query_result.html_attributions)

hospitals={'name':[],'Address':[],}

# Iterate over the search results
for place in H_query_result.places:
    p_name = place.name
    p_address = place.get_details()
    hospitals['name'].append(p_name)
    hospitals['Address'].append(p_address)
    


hospitals=pd.DataFrame(hospitals)
print(hospitals)