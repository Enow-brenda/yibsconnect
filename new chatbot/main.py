from flask import Flask, render_template, request
import nltk
from nltk.stem.lancaster import LancasterStemmer
stemmer = LancasterStemmer()

import numpy
import tflearn
import tensorflow
import random
import json
import pickle

app = Flask(__name__)

with open("intents.json") as file:
    data = json.load(file)

try:
    with open("data.pickle", "rb") as f:
        words, labels, training, output = pickle.load(f)
except:
    # code for loading data omitted for brevity
    pass

tensorflow.compat.v1.reset_default_graph()

net = tflearn.input_data(shape=[None, len(training[0])])
net = tflearn.fully_connected(net, 8)
net = tflearn.fully_connected(net, 8)
net = tflearn.fully_connected(net, len(output[0]), activation="softmax")
net = tflearn.regression(net)

model = tflearn.DNN(net)

try:
    model.load(model.tflearn)
except:
    model.fit(training, output, n_epoch=500, batch_size=8, show_metric=True)
    model.save("model.tflearn")

def bag_of_words(s, words):
    # code for bag of words function omitted for brevity
    pass

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/chat', methods=['POST'])
def chat():
    user_input = request.form['user_input']
    results = model.predict([bag_of_words(user_input, words)])
    results_index = numpy.argmax(results)
    tag = labels[results_index]

    for tg in data["intents"]:
        if tg['tag'] == tag:
            responses = tg['responses']

    bot_response = random.choice(responses)
    return {'bot_response': bot_response}

if __name__ == '__main__':
    app.run(debug=True)