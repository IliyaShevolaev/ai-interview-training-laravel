function startRecognition() {
    const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
    recognition.lang = 'ru-RU';
    recognition.start();

    recognition.onresult = function (speech) {
        document.getElementById('userAnswer').innerText = speech.results[0][0].transcript;
    };

    recognition.onerror = function (event) {
        console.error(speech.error);
    };
}