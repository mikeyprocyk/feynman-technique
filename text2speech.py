from gtts import gTTS
import os 

text = input("Start typing lesson here: ")

TtoS = gTTS(text=text, lang = 'en')
TtoS.save("output.mp3")

os.system("open output.mp3")