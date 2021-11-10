# Python program to get a set of  
# places according to your search  
# query using Google Places API 
  
# importing required modules 
import requests, json 
  
# enter your api key here 
api_key = 'AIzaSyDIwZx8f9OTaY_KN0zlh5YksgokNXPic9M'
  
# url variable store url 
url = "https://maps.googleapis.com/maps/api/place/textsearch/json?"
  
# The text string on which to search 

query = input('Search query: ') 
  
# get method of requests module 
# return response object 
text_search_request = requests.get(url + 'query=' + query +
                        '&key=' + api_key) 
  
# json method of response object convert 
#  json format data into python format data 
result_json = text_search_request.json() 
  
# now x contains list of nested dictionaries 
# we know dictionary contain key value pair 
# store the value of result key in variable y 
y = result_json['results'] 
  
# keep looping upto lenght of y 
for i in range(len(y)): 
      
    # Print value corresponding to the 
    # 'name' key at the ith index of y 
    print(y[i]['name']) 
    print(y[i]['address'])