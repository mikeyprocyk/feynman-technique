import librosa
import json

def process_audio(audio_file):
    # Load audio data
    y, sr = librosa.load(audio_file)

    # Extract features (e.g., amplitude)
    amplitude = np.abs(y)

    # Normalize data to [0, 1]
    normalized_amplitude = amplitude / np.max(amplitude)

    # Save data as JSON
    with open('audio_data.json', 'w') as f:
        json.dump(normalized_amplitude.tolist(), f)

# Process an audio file
process_audio('your_audio_file.wav')