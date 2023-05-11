<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="testingapi.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <div class=bottomStuff>
        <a href=logout.php> || Logout ||</a>

        <H1> Admin Home </H1>

        <style>
            div.allWeather {
                margin: 0 auto;
                /* horizontally centers the div */
                display: flex;
                /* makes the div a flex container */
                flex-wrap: wrap;
                /* allows the child divs to wrap to the next row */
                justify-content: center;
                /* centers the child divs horizontally */
            }

            div.weatherBlock {
                border: 1px black solid;
                width: 80px;
                height: 200px;
                float: left;
                text-align: center;
                ;
            }

            div.bottomStuff {
                clear: both;
            }

            h1, h3 {
                text-align: center;
            }

            .choices {
                display: flex;
                justify-content: center;

            }

            .buttonChoice {
                display: flex;
                align-items: flex-end;
                text-align: center;
                float: left;
                border: 4px black solid;
                height: 150px;
                width: 200px;
                border-radius: 35px;
                margin: 5px;
            }

            .image {
                width: 100px;
                height: 50px;
                margin-bottom: 70px;
                padding-left: 25%;
                position: relative;
            }

            .text {
                padding-left: 3%;
                position: absolute;
            }

            button {
                text-align: center;
                width: 175px;
                height: 200px;
                text-align: center;
                margin: 5px;
            }
        </style>
        <div class="allWeather">
            <div class="weatherBlock">
                <p id="time1"></p>
                <img id="weatherimg1" src="https://developer.accuweather.com/sites/default/files/01-s.png" />
                <p id="temp1"></p>
                <p id="weather1">It is sunny today</p>
            </div>
            <div class="weatherBlock">
                <p id="time2"></p>
                <img id="weatherimg2" src="https://developer.accuweather.com/sites/default/files/01-s.png" />
                <p id="temp2"></p>
                <p id="weather2">It is sunny today</p>
            </div>
            <div class="weatherBlock">
                <p id="time3"></p>
                <img id="weatherimg3" src="https://developer.accuweather.com/sites/default/files/01-s.png" />
                <p id="temp3"></p>
                <p id="weather3">It is sunny today</p>
            </div>
            <div class="weatherBlock">
                <p id="time4"></p>
                <img id="weatherimg4" src="https://developer.accuweather.com/sites/default/files/01-s.png" />
                <p id="temp4"></p>
                <p id="weather4">It is sunny today</p>
            </div>
            <div class="weatherBlock">
                <p id="time5"></p>
                <img id="weatherimg5" src="https://developer.accuweather.com/sites/default/files/01-s.png" />
                <p id="temp5"></p>
                <p id="weather5">It is sunny today</p>
            </div>
            <div class="weatherBlock">
                <p id="time6"></p>
                <img id="weatherimg6" src="https://developer.accuweather.com/sites/default/files/01-s.png" />
                <p id="temp6"></p>
                <p id="weather6">It is sunny today</p>
            </div>
            <div class="weatherBlock">
                <p id="time7"></p>
                <img id="weatherimg7" src="https://developer.accuweather.com/sites/default/files/01-s.png" />
                <p id="temp7"></p>
                <p id="weather7">It is sunny today</p>
            </div>
            <div class="weatherBlock">
                <p id="time8"></p>
                <img id="weatherimg8" src="https://developer.accuweather.com/sites/default/files/01-s.png" />
                <p id="temp8"></p>
                <p id="weather8">It is sunny today</p>
            </div>
            <div class="weatherBlock">
                <p id="time9"></p>
                <img id="weatherimg9" src="https://developer.accuweather.com/sites/default/files/01-s.png" />
                <p id="temp9"></p>
                <p id="weather9">It is sunny today</p>
            </div>
            <div class="weatherBlock">
                <p id="time10"></p>
                <img id="weatherimg10" src="https://developer.accuweather.com/sites/default/files/01-s.png" />
                <p id="temp10"></p>
                <p id="weather10">It is sunny today</p>
            </div>
            <div class="weatherBlock">
                <p id="time11"></p>
                <img id="weatherimg11" src="https://developer.accuweather.com/sites/default/files/01-s.png" />
                <p id="temp11"></p>
                <p id="weather11">It is sunny today</p>
            </div>
            <div class="weatherBlock">
                <p id="time12"></p>
                <img id="weatherimg12" src="https://developer.accuweather.com/sites/default/files/01-s.png" />
                <p id="temp12"></p>
                <p id="weather12">It is sunny today</p>
            </div>
        </div>
        </br>
        </br>

        <div class="choices">

            <button type="button">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Magnifying_glass_icon.svg" width="80"
                    height="80  " />
                <h3>
                    Search Patient
                </h3>
            </button>

            <button type="button">
                <img src="person.svg" width="80"
                    height="80  " />
                <h3>
                    Create Paitent
                </h3>
            </button>

        </div>
    </div>


</body>

</html>