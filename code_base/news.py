# # api_key = '3d407e0fa039429db1746b153bc77bb4'


# # import requests    
 
# # def NewsFromBBC():
     
# #     # BBC news api
# #     # following query parameters are used
# #     # source, sortBy and apiKey
# #     query_params = {
# #       "q" :"PCOD",
# #       "sortBy": "top",
# #       "apiKey": api_key
# #     }
# #     main_url = " https://newsapi.org/v1/articles"
 
# #     # fetching data in json format
# #     res = requests.get(main_url, params=query_params)
# #     open_bbc_page = res.json()
 
# #     # getting all articles in a string article
# #     article = open_bbc_page["articles"]
 
# #     # empty list which will
# #     # contain all trending news
# #     results = []
     
# #     for ar in article:
# #         results.append(ar["title"])
         
# #     for i in range(len(results)):
         
# #         # printing all trending news
# #         print(i + 1, results[i])
 
# #     #to read the news out loud for us
# #     from win32com.client import Dispatch
# #     speak = Dispatch("SAPI.Spvoice")
# #     speak.Speak(results)                
 
# # # Driver Code
# # if __name__ == '__main__':
     
# #     # function call
# #     NewsFromBBC()

# # # from newsapi import NewsApiClient
# # # import newsapi
# # # top_headlines = NewsApiClient.get_top_headlines(self= ,
# # #     q='PCOD',
# # #     language='en',
# # # )
# # # for article in top_headlines['articles']:
# # #     print('Title : ',article['title'])
# # #     print('Description : ',article['description'],'\n\n')

from GoogleNews import GoogleNews
from newspaper import Article
import pandas as pd

googlenews=GoogleNews(start='05/01/2017',end='07/12/2021')
googlenews.search('Polycystic Ovarian Disease')
result=googlenews.result()
desc = googlenews.get_texts()
df=pd.DataFrame(result)
desc_pd = pd.DataFrame(desc)
print(df.head())
print(desc_pd.head())
