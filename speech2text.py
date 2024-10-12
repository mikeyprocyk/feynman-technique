import speech_recognition as sr

def s2t():

    recognize = sr.Recognizer()

    with sr.Microphone() as speech:
        print("Start Teaching!")

        audio = recognize.listen(speech)

    try:
        text = recognize.recognize_google(audio)
        return(text)
        
    except sr.UnknownValueError:
        # we need to show this on the screen
        return("Audio could not be understood")
    except sr.RequestError as error:
        # could not request results from google speech (idk why)
        print("ERROR")