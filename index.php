<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoodrich Official Store | From Nothing To Something</title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="assets/hh.png" type="image/png">
</head>
<body>
    <nav id="header" >
     <div id="inheader">
        <ul style="list-style: none; display: flex; align-content: space-between;">
            <li class="headerli">
                <a class="titre" href="./page men.html">MEN</a>
            </li>
            <li class="headerli">
                <a class="titre" href="./page women.html">WOMEN</a>
            </li>
        </ul>
        <img src="assets/hoodrich.png" alt="Hoodrich logo" style="height:7vh; margin-top: 1vh ;">
        <span id="spanheader">
            <input style="border: black 2px solid;
    border-radius: 10px;
    height:2.1rem;
    width:20rem;
    margin-bottom:10px;
    margin-right:5px;"id="loop" type="text" placeholder="Search..">
            <label for="loop"><img src="assets/loop.png"  ></label>
            <a href="./bucket.html"><img src="assets/basket.png" >
            </a>
        </span>
     </div>
    </nav>
    <marquee behavior="" direction="">Hoodrich | Sales 50% off on limited quantities.</marquee>
    <div id="mainWest">
        <div><h1>New Drop for him</h1>
            <nav><a style="text-decoration: none;" href="./page men.html"><button class="button">Shop now</button></div></a></nav>
        <img src="assets/mainmenu1.jpg">
    
    </div>
    <div>
        <br>
        <br>
        <br>
        <div id="shopping0">
            <div id="shopping">
                <div id="hoverElement">

                    <a href="OGTacticalBalaclava/OGTacticalBalaclava.html">
                        <img src="assets/BACKGROUNDVAULT142631094_088df962-e800-43f8-b4bd-066c884430a3.webp">
                    </a>
                    <h3>Hoodrich OG Tactical Balaclava</h3>
                    <p>130£</p>
                </div>
                <div id="hoverElement1"><a href="AdornFullZipHoodie/AdornFullZipHoodie.html">

                        <img src="assets/Hoodrich2501244781_700x.webp">
                    </a>
                    <h3>Adorn Full Zip Hoodie</h3>
                    <p>130£</p>
                </div>
                <div id="hoverElement2"><a href='RitualBackprintHoodie/RitualBackprintHoodie.html'>
                        <img src="assets/Hoodrich1101240911_700x.webp">
                    </a>
                    <h3>Ritual Backprint Hoodie</h3>
                    <p>130£</p>
                </div>
                <div id="hoverElement3"><a href="OGBreezeJoggers/OGBreezeJoggers.html">
                        <img src="assets/HoodrichEcom2206233352_700x.webp"></a>
                    <h3>OG Breeze Joggers</h3>
                    <p>130£</p>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div id="shopping2">


                <div id="hoverElement4"><a href="CaliberHoodie/CaliberHoodie.html">
                    <img src="assets/Hoodrich1912230896_1200x.jpg"></a>
                    <h3>Men's Hoodrich OG Akira V6 Hoodie</h3>
                    <p>130£</p>
                </div>
                <div id="hoverElement5"><a href="LunaFullZipHoodie/LunaFullZipHoodie.html">
                        <img src="assets/Hoodrich2501245055_700x.webp">
                    </a>
                    <h3>Luna Full Zip Hoodie</h3>
                    <p>130£</p>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>
    </div>
    <div id="form"><br><br>
        <form action="send.php" method="post">
            <h1>Subscribe to our newsletter</h1>
            <h3>Be the first to know about new collections and exclusive offers.</h3>
            <input type="email" id="email"><input type="submit" value="SIGN UP" class="button">
        </form>

    </div>
<?php include "footer.html" ?>
        
    </footer>
    <audio id="myAudio" src="./assets/NEMZZZ - L'S (OFFICIAL VIDEO).mp3"></audio>
    <script type="text/javascript">
        const hoverElement = document.getElementById('hoverElement');
        const audio = document.getElementById('myAudio');

        hoverElement.addEventListener('mouseenter', function () {
            audio.play();
        });

        hoverElement.addEventListener('mouseleave', function () {
            audio.pause();
        });
        const hoverElement1 = document.getElementById('hoverElement1');

        hoverElement1.addEventListener('mouseenter', function () {
            audio.play();
        });

        hoverElement1.addEventListener('mouseleave', function () {
            audio.pause();
        });
        const hoverElement2 = document.getElementById('hoverElement2');
        hoverElement2.addEventListener('mouseenter', function () {
            audio.play();
        });

        hoverElement2.addEventListener('mouseleave', function () {
            audio.pause();
        });
        const hoverElement3 = document.getElementById('hoverElement3');

        hoverElement3.addEventListener('mouseenter', function () {
            audio.play();
        });

        hoverElement3.addEventListener('mouseleave', function () {
            audio.pause();
        });
        const hoverElement4 = document.getElementById('hoverElement4');

        hoverElement4.addEventListener('mouseenter', function () {
            audio.play();
        });

        hoverElement4.addEventListener('mouseleave', function () {
            audio.pause();
        });
        const hoverElement5 = document.getElementById('hoverElement5');

        hoverElement5.addEventListener('mouseenter', function () {
            audio.play();
        });

        hoverElement5.addEventListener('mouseleave', function () {
            audio.pause();
        });

    </script>
</body>
</html>