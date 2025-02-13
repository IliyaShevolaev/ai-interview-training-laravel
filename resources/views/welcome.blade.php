<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    test

    <button onclick="startRecognition()">Говорите</button>
    <p id="result"></p>
</body>

</html>

<script>
    function startRecognition() {
        const recognition = new(window.SpeechRecognition || window.webkitSpeechRecognition)();
        recognition.lang = 'ru-RU';
        recognition.start();

        recognition.onresult = function(speech) {
            document.getElementById('result').innerText = speech.results[0][0].transcript;
        };

        recognition.onerror = function(event) {
            console.error(speech.error);
        };
    }
</script>