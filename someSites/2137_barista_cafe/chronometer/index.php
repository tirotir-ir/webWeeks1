<!DOCTYPE html>
<html>
<head>
    <title>PHP Chronometer</title>
    <style>
        #chronometer {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div id="chronometer">00:00:00</div>
    <button onclick="startChronometer()">Start</button>
    <button onclick="stopChronometer()">Stop</button>
    <button onclick="resetChronometer()">Reset</button>

    <script>
        let startTime = 0;
        let timerInterval;

        function updateChronometer() {
            const currentTime = Math.floor((Date.now() - startTime) / 1000);
            const hours = Math.floor(currentTime / 3600);
            const minutes = Math.floor((currentTime % 3600) / 60);
            const seconds = currentTime % 60;
            document.getElementById("chronometer").innerHTML = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        }

        function startChronometer() {
            if (!timerInterval) {
                startTime = Date.now() - (startTime > 0 ? startTime : 0) * 1000;
                timerInterval = setInterval(updateChronometer, 1000);
            }
        }

        function stopChronometer() {
            clearInterval(timerInterval);
            timerInterval = null;
        }

        function resetChronometer() {
            clearInterval(timerInterval);
            timerInterval = null;
            startTime = 0;
            document.getElementById("chronometer").innerHTML = "00:00:00";
        }
    </script>
</body>
</html>
