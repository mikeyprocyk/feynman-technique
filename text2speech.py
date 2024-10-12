from gtts import gTTS
import os 



def t2s(Usertext):
    
    TtoS = gTTS(text = Usertext, lang = 'en')
    TtoS.save("output.mp3")

    return os.system("open output.mp3")