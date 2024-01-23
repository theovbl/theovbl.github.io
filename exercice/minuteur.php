<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>Minuteur</title>
</head>
<body>
    <p id="minuteur">00h: 00min: 00s: 00ms</p>
    
    <button type="button" id="pause" onclick="pauseTimer()">Stop</button>
    <button type="button" id="play" onclick="startTimer()">Start</button>
    <button type="button" id="reset" onclick="resetTimer()">Reset</button>

    <script>
        var startTimestamp = 0;
        var isRunning = false;

        function affichage(elapsedTime) {
            var totalMilliseconds = Math.floor(elapsedTime);
            var totalSeconds = Math.floor(totalMilliseconds / 1000);
            var totalMinutes = Math.floor(totalSeconds / 60);
            var totalHours = Math.floor(totalMinutes / 60);
            var milliseconds = totalMilliseconds % 1000;
            var seconds = totalSeconds % 60;
            var minutes = totalMinutes % 60;
            var hours = totalHours;

            document.getElementById("minuteur").innerHTML =
                `${(hours < 10 ? "0" : "") + hours}h:${(minutes < 10 ? "0" : "") + minutes}min:${(seconds < 10 ? "0" : "") + seconds}s:${(milliseconds < 10 ? "00" : milliseconds.toString().slice(0, 2))}`;
        }

        function timer() {
            if (!isRunning) return;
            var currentTime = Date.now();
            var elapsedTime = currentTime - startTimestamp;
            affichage(elapsedTime);
            requestAnimationFrame(timer);
        }

        function pauseTimer() {
            isRunning = false;
            document.getElementById("minuteur").style.opacity = "1";
        }

        function resetTimer() {
            isRunning = false;
            document.getElementById("minuteur").style.opacity = "1";
            affichage(0);
        }

        function startTimer() {
            if (!isRunning) {
                isRunning = true;
                startTimestamp = Date.now();
                requestAnimationFrame(timer);
                document.getElementById("minuteur").style.opacity = "1";
            }
        }
    </script>
</body
