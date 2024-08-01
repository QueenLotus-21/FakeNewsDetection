from sklearn.feature_extraction.text import TfidfVectorizer
import pickle
import pandas as pd
from sklearn.model_selection import train_test_split
import sys

loaded_model = pickle.load(open('/home/lotus/Documents/FND/routes/pythonFile/model.pkl', 'rb')) 
dataframe = pd.read_csv('/home/lotus/Documents/FND/routes/pythonFile/news.csv')
x = dataframe['text']
y = dataframe['label']
x_train, x_test, y_train, y_test = train_test_split(x, y, test_size=0.2, random_state=0)
tfvect = TfidfVectorizer(stop_words='english', max_df=0.7)

def reconstruct(inp):
    i = 0
    text = ""
    for x in inp:
        # just to jump the first argument
        if i == 0:
            i+=1
        elif i == 1:
            i+=1
        # to avoid whitespace before the first word
            text = x
        else:
            text = text +" "+x
    return text

def fake_news_det(news):    
    tfid_x_train = tfvect.fit_transform(x_train)
    tfid_x_test = tfvect.transform(x_test)
    input_data = [news]
    vectorized_input_data = tfvect.transform(input_data)
    prediction = loaded_model.predict(vectorized_input_data)
    if prediction==['REAL']:
        return True
    elif prediction==['FAKE']:
       return False
    return prediction

# pred=fake_news_det(sys.argv[2]);
# print(sys.argv[2])
pred=fake_news_det(reconstruct(sys.argv));
print(pred)