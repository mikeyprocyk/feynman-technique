const sphere = document.getElementById('sphere');

const audioContext = new (window.AudioContext || window.webkitAudioContext)();
const analyser = audioContext.createAnalyser();
analyser.fftSize = 256;

navigator.mediaDevices.getUserMedia({ audio: true })
    .then(stream => {
        const source = audioContext.createMediaStreamSource(stream);
        source.connect(analyser);
        visualize();
    })
    .catch(err => {
        console.error('Error accessing audio devices:', err);
    });

function visualize() {
    requestAnimationFrame(visualize);
    const dataArray = new Uint8Array(analyser.frequencyBinCount);
    analyser.getByteFrequencyData(dataArray);

    const average = dataArray.reduce((sum, value) => sum + value, 0) / dataArray.length;
    const scale = Math.max(1, average / 50);
    sphere.style.transform = `scale(${scale}) rotateY(${Math.sin(Date.now() / 500) * 10}deg)`;

    const red = Math.min(255, Math.max(0, Math.floor((average / 255) * 255)));
    const green = 0;
    const blue = Math.max(0, 255 - red);
    
    sphere.style.backgroundColor = `rgba(${red}, ${green}, ${blue}, 0.7)`;

    const pulsate = 0.1;
    const newScale = scale + Math.sin(Date.now() / 500) * pulsate;
    sphere.style.transform = `scale(${Math.max(1, newScale)}) rotateY(${Math.sin(Date.now() / 500) * 10}deg)`;
}
