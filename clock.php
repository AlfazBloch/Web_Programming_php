<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Clock</title>
    <link href="https://fonts.cdnfonts.com/css/digital-7-mono" rel="stylesheet">
    <style>
        @import url('https://fonts.cdnfonts.com/css/digital-7-mono');
        *{
            margin:0;
            padding:0;
        }
        .main-container{
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .custom-clock {
            background: #000;
            color: #fff;
            padding: 20px;
            border: 3px solid #5a6163;
            border-radius: 30px;
            height: 400px;
        }
        .custom-clock td {  
            text-align: center;
            color: #e01b21;
            
        }
        .date-num td {
            font-family: 'Digital-7', sans-serif;
        }
        .custom-clock-container {
            border: 3px solid #8d8e94;
            padding: 20px;
            width: 35%;
            background-color: black;
        }
        .date {
            color: #aabdc1;
            font-size: 20px;
        }
        .date-num {
            font-size: 60px;
            box-shadow: 0 0 0 3px #5a6163;
            border-radius: 10px;
        }
        .custom-hours {
            box-shadow: 0 0 0 3px #5a6163;
            border-radius: 10px;
        }
        .custom-hours td {
            font-size: 60px;
            font-family: 'Digital-7', sans-serif;
        }
        .time th {
            color: #aabdc1;
            font-size: 20px;
        }
        .ampm p{
            color: #fff;    
        }
        .ampm{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .about{
            color:white;    
        }
        #pm{
            margin-left:10px;
        }
    </style>
</head>
<body>
    <section class="main-container">
        <div class="custom-clock-container">
            <table class="custom-clock" width="100%">
                <tr class="date">
                    <th colspan="2">DATE</th>
                    <th colspan="4">MONTH</th>
                    <th colspan="3">YEAR</th>
                </tr>
                <tr class="date-num">
                    <td colspan="2"><?php echo date("d"); ?></td>
                    <td colspan="4"><?php echo date("m"); ?></td>
                    <td colspan="3"><?php echo date("y"); ?></td>
                </tr>
                <tr class="time">
                    <th colspan="2">HOUR</th>
                    <th colspan="4">MINUTE</th>
                    <th colspan="3">SECOND</th>
                </tr>
                <tr class="custom-hours">
                    <td colspan="2" id="hours"><?php echo date("h"); ?></td>
                    <td colspan="1">:</td>
                    <td colspan="2" id="minutes"><?php echo date("i"); ?></td>
                    <td colspan="1">:</td>
                    <td colspan="2" id="seconds"><?php echo date("s"); ?></td>
                    
                </tr>
                <tr class="days">
                    <td><input type="radio" name="day"   <?= date("D") == "Sun" ? "checked": "disabled" ?>> SUN</td>
                    <td><input type="radio" name="day"  <?= date("D") == "Mon" ? "checked": "disabled" ?>> MON</td>
                    <td><input type="radio" name="day"  <?= date("D") == "Tue" ? "checked": "disabled" ?>> TUE</td>
                    <td><input type="radio" name="day"  <?= date("D") == "Wed" ? "checked": "disabled" ?> > WED</td>
                    <td><input type="radio" name="day"  <?= date("D") == "Thu" ? "checked": "disabled" ?>> THU</td>
                    <td><input type="radio" name="day"  <?= date("D") == "Fri"   ? "checked": "disabled" ?>> FRI</td>
                    <td><input type="radio" name="day"  <?= date("D") == "Sat" ? "checked": "disabled" ?>> SAT</td>
                </tr>
            </table>
            <div class="ampm">
                <div id="am">
                    <input type="radio" name="ampm" id="am" <?= date("A") == "AM" ? "checked" : "disabled" ?> >
                </div>
                <p>am</p>
                <div id="pm">
                    <input type="radio" name="ampm" id="am" <?= date("A") == "PM" ? "checked" : "disabled" ?>>
                </div>
                <p>pm</p>
            </div>
            <div class="about">
                Alfaz Bloch
            </div>
        </div>
    </section>
    <?php
        echo date("A");
    ?>


    <script type="text/javascript">
        function updateTime() {
            var currentTime = new Date();
            var hours = String(currentTime.getHours()).padStart(2, '0');
            var minutes = String(currentTime.getMinutes()).padStart(2, '0');
            var seconds = String(currentTime.getSeconds()).padStart(2, '0');

            document.getElementById('hours').innerHTML = hours;
            document.getElementById('minutes').innerHTML = minutes;
            document.getElementById('seconds').innerHTML = seconds;
        }

        setInterval(updateTime, 1000); // Update time every second
    </script>   
</body>
</html>
