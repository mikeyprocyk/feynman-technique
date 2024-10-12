import speech_recognition as sr

recognize = sr.Recognizer()

with sr.Microphone() as speech:
    print("Start Teaching!")

    audio = recognize.listen(speech)

try:
    text = recognize.recognize_google(audio)
    print(text)
except sr.UnknownValueError:
    print("Audio could not be understood")
except sr.RequestError as error:
    print("ERROR")