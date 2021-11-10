# import requests

# response = requests.get('https://maps.googleapis.com/maps/api/geocode/json?address=Delhi,+CA&key=AIzaSyA3nSKC2ZI0Jy71dVQ3gXo4PutkZjoYynM')

# resp_json_payload = response.json()

# print(resp_json_payload['results'][0]['geometry']['location'])

# import requests
# import urllib.parse

# address = 'Shivaji Nagar, Bangalore, KA 560001'
# url = 'https://nominatim.openstreetmap.org/search/' + urllib.parse.quote(address) +'?format=json'

# response = requests.get(url).json()
# print(response)


import requests
import urllib.parse

city = "Pathanamthitta"
country = "India"
url = "https://nominatim.openstreetmap.org/?addressdetails=1&q=" + city + "+" + country +"&format=json&limit=1"

response = requests.get(url).json()
print(response[0]["lat"])
print(response[0]["lon"])


# # importing geopy library
# from geopy.geocoders import Nominatim
  
# # calling the Nominatim tool
# loc = Nominatim(user_agent="GetLoc")
  
# # entering the location name
# getLoc = loc.geocode("Pathanamthitta kerala")
  
# # printing address
# print(getLoc.address)
  
# #printing latitude and longitude
# print("Latitude = ", getLoc.latitude, "\n")
# print("Longitude = ", getLoc.longitude)
