<?php
    session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="width=device-width,initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

body {
    text-align: center;
}
#novelDiv {
    width: 800px;
    height: 600px;
    border: 1px solid black;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    text-align: center;
}

.menuItem {
    width: 75%;
    margin: 0.5em auto;
    padding: 0.5em 3em;
    background-color: #0050a0;
    position: relative;
    text-align: center;
    color: white;
    font-family: "Deja Vu Sans", Helvetica, Arial, sans-serif;
    font-size: 18px;
    -moz-border-radius: 15px;
    border-radius: 15px;
}

div.menuItem:hover {
    background-color: #00a0ff;
}

#dialogDiv {
    font-family: "Deja Vu Sans", Helvetica, Arial, sans-serif;
    font-size: 20px;
    position: absolute;
    width: 790px;
    height: 140px;
    background-color: #3d372c;
    color: white;
    top: 450px;
    left: 0;
    padding: 5px;
    text-align: left;
    filter: alpha(opacity=75);
    opacity: 0.75;
}

</style>

<script type="text/javascript" src="js-vine.js"></script>
<script type="text/javascript">
// <![CDATA[
imgPath = "novelimages/";
audioPath = "audio/";

var preload = [
"RVN.png",
"RVNgrin.png",
"RVNflirt.png",
"RVNnormal.png"
];

var preloadObj = new Array(preload.length);
for (var i = 0; i < preload.length; i++)
{
    preloadObj[i] = new Image();
    preloadObj[i].src = imgPath + preload[i];
}

var s;
var m;
var monokuma;
var narrator;
var diagram;
var male;
var female;
var textArea;
var leftSide;
var rightSide;
var nearTop;
var center;
var textCenter;
var textTop;
var bigFont;
var script;

function prepareNovel()
{
    novel.imagePath = "novelimages/";
    novel.audioPath = "audio/";
    s = new Character('R', {color: "#c8ffc8"});
    m = new Character('Me', {color: "#c8c8ff"});
    monokuma = new Character('monokuma', {color: "#c8c8ff"});
    narrator = new Character('');
    center = new Position(0.5, 0.5, 0.5, 0.5);

    script = [

    label, "start",
    clearTableau, "",
    showDialog, "visible",
    audio, {src: "illurock", format:["ogg"], loop: true, action: "play"},

    scene, "hopespeak.png",
    narrator, "Hopespeak Academy.",
    narrator, "An elite academy that gathered propect students from all over Japan. ",
    narrator, "Each students have distinct characters,skills and specialization. ",
    narrator, "As for me, I don't really had any good grades or special skills sort of, guess I was just super lucky...",
    narrator,"or do I really am?",
    narrator, "As I am entering the designated classroom, I recognized a very familiar face. . .",

    scene, {image: "backgroundroom.png", effect: "dissolve"},
    narrator, "Something weird with the room, why are there are so many cameras all over the place. I mean are we on a reality show or something???, I instantly recognizes someone from the crowd, no way its R, ",

    s, {image: "RVN.png", position: center},
    narrator, "She was my childhood friend.",
    narrator, "Ive known her ever since we were children, and she&rsquo;s always been a good friend. Our parents are working on the same project so we had a chance to know each other well and we always play together back then. . .",
    narrator, "But it was a long time ago, an incident happened that costs both her parent&rsquo;s life. ",
    narrator, "It was so devastating to her, she was traumatized.",
    narrator, "They&rsquo;re family were rich and so she was adopted by her relatives .",
    narrator, "...but still, I haven&rsquo;t seen her smile again from that day on, I havent seen her for a long time... ",
    narrator, "Im glad she was doing okay now, she greeted me, and oh...",
    narrator, "Is she grinning back at me???",

    label, "choice1",
    menu, [
        "",
        "...to ask her how she&rsquo;s been doing.", [jump, "askher"],
        "...to instantly jump and kill her.", [jump, "kill"]
    ],

    label, "askher",
    scene, "backgroundroom2.png",
    s, {image: "RVNgrin.png", position: center,
    say: "Oh, hi, V its you!, Im so glad I&rsquo;ve met you again here. " },
    m, "How&rsquo;d you doing?",
    narrator, "First I was hesitant to ask her, just before she could reply, the bell rang and a speaker were instructing the students about going to the gym. ",

    scene, {image: "club.jpg", effect: "dissolve"},
    narrator, "We reached the gym just outside the classroom.",
    narrator, "All of the students were in here, and its my first time to look on each one of them. ",
    scene, {image: "allhall.png", effect: "dissolve"},
    narrator, "There were some weird looking fellas while the others well, I felt would be ok to be with and of course there is R again trying to catch up with me",
    scene, {image:"club.jpg", effect: "dissolve"},
    m, "Hey... uhmmm...",
    s, {image: "RVNflirt.png"},
    narrator, "She turned to me and oh, is it me or is she flirting to me.",
    narrator, "I wonder on what are we doing here.",
    m, "Do you have any idea on what are we doing here",
    m, "I havent seen any professors or  school admins since weve arrived?",

    s, {image: "RVNnormal.png"},
    s, "Yeah me too",
    s, "Ive asked the others and they havent seen any school admin as well",
    m, "So what should we do then?",
    
    narrator, "Just before I could answer a wild Monobear appear in front of us.",

    scene, {image: "club.jpg", effect: "dissolve"},
    monokuma, {image:"monokuma.png", position:center},
    monokuma, "Good morning students! What a pleasant day to die isnt it? ",
    monokuma, "pufuufuufuu. . .",
    monokuma, " I am Monokuma, the school director and Im about to give you the school rules. ",
    monokuma, "pufuufuufuu. . .",

    narrator, "Say what? The Director? Who  or rather What is this guy?. ",
   

    jump, "tobecontinued",

    label, "kill",

    scene, {image: "black.png", effect: "dissolve"},

    narrator, "And so I decided to kill her.",
    narrator, "It turns out that she is the main antagonist of the story.",
    narrator, "You have figured out the culprit and save  the lives of your classmates",
    narrator, "You are an oracle...Good job!",

    narrator, ".:. Good Ending.",

    label, "tobecontinued",
    scene, "tobecontinued.png",
    showDialog, "hidden",
    menu, [
        "You may close the window, or start over again.",
        "Replay the story", [jump, "start"]
    ]
    ];
}
// ]]>
</script>

</head>
<body onload="initNovel(800, 600);">
    <div id="background" class="container-fluid col-md-12 col-sm-12 col-xs-12">



        <nav class="navbar navbar-inverse navbar-fixed-top">
            
            <?php  require_once('parts/navigation.php');
            ?>
            
        </nav>

        <?php require('parts/modallogin.php'); 
              require('parts/modalregister.php');
        ?>

        <div class="container col-sm-12 col-md-12 col-xs-12">

            <div id="body" >

                <div class="section container">
                    <div id="background">

                    <div id="debug"></div>
                    <div id="novelDiv">
                        <div style="position: absolute;
                            left:0; top: 0; z-index:-1">
                            <img id="background0" src="novelimages/empty.png">
                        </div>
                        <div style="position: absolute;
                            left:0; top: 0; z-index:-1">
                            <img id="background1" src="novelimages/empty.png">
                        </div>
                        <div id="dialogDiv" style="z-index:100">
                        </div>
                    </div>

                    <div style="text-align:center; margin-top: 0.5em;"><input type="button"
                        value="Back to Beginning" onclick="initNovel(800, 600)"/>
                    </div>
                </div>
            </div>        
        </div>

        <div class="container-fluid col-sm-12 col-md-12 col-xs-12">
            <div id="footer">
                
                <?php require_once('parts/footer.php');
                ?>
                
            </div>
        </div>

    </div>  




</body>
</html>
