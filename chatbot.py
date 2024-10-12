#Location of chatbot
import google.generativeai as ai
from speech2text import s2t
from text2speech import t2s

API_KEY = "AIzaSyAFfjsNbtMehEGQTzFM5kprKJnsjZWn2Vc"
ai.configure(api_key=API_KEY)

model = ai.GenerativeModel("gemini-pro")
chat = model.start_chat()


message = "Act like you are a teacher of some sort and your job is to determine whether my depiction of a topic that I select is correct. You will take the topic that I say I am going to explain and once I explain what it is or what it does, you will tell me how similar my definition or explanation of a topic is to the actual explanation or definition of the topic. You will explain how it is similar or not, only using 3 sentences and then give my definition a rating from 1 - 10. Wait for my next input so I can tell you the topic that we are selecting first please."
response = chat.send_message(message)
print("Chatbot: ", response.text)
isAudio = True
message = s2t()


def init_chat_text(message):
    while not isAudio:
        # inputting topic name
        message = input("You: ")
        # inputting explanation name
        messageExplanation = input("You: ")
        message = "The topic I will be explaining is: " + message + " and my explanation for it is: " + messageExplanation
        response = chat.send_message(message)
        print("Chatbot: ", response.text)
        break

def init_chat_microphone(message):
    while isAudio:
        print(message)
        #message = "The topic I will be explaining is: " + message + " and my explanation for it is: " + messageExplanation
        response = chat.send_message(message)
        print("Chatbot: ", response.text)
        t2s(response.text)
        break

init_chat_microphone(message)