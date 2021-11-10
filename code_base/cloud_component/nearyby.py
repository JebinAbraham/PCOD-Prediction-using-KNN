#Modules 

from googleplaces import GooglePlaces, types, lang
import requests
import json
import urllib.parse
#Database Component 



#API integreation 

#API_KEY = db_API_KEY
API_KEY = "AIzaSyCucy4RSr_0UuPwlvyUc7lghiNegeNkmPQ"

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

hospitals={'name':[],'latitude':[]}

# Iterate over the search results
for place in H_query_result.places:
	print(place.name)
	print(place.geo_location['lat'])
    print(place.geo_location['lng'])  


print(hospitals)
# #Retriving Nearby Fitness Centers 
# F_query_result = google_places.nearby_search(
# 				lat_lng ={'lat': lat, 'lng': lon},
# 		radius = 5000,
# 		types =[types.TYPE_GYM])

# if F_query_result.has_attributions:
# 	print (F_query_result.html_attributions)


# # Iterate over the search results
# for place in F_query_result.places:
# 	#print(type(place))
# 	#place.get_details()
#     #make this into a dictionary 
# 	print (place.name)
# 	print("Latitude", place.geo_location['lat'])
# 	print("Longitude", place.geo_location['lng'])
# 	print()
