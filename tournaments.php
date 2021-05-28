<?php
    if (isset ($_COOKIE["username"])) {
        $user = $_COOKIE["username"];
        //        print "Welcome, $user!";
        displayPage($user);
    } else {
        print <<<PAGE
        <html lang="en">
        <head>
        <meta charset="utf-8">
        
        <title>Tournaments</title>
        
        <link rel="stylesheet" href="phase3.css">
        
        </head>
        
        <body>
        <div id='navigationBar'>
        <a href='rules.html'>Rules</a>
        <a href='tutorials.html'>Tutorials</a>
        <a href='coursesnearby.html'>Courses Nearby</a>
        <a href='tournaments.php'>Tournaments</a>
        <a href='shopping.php'>Shopping</a>
        <a href='contactus.html'>Contact Us</a>
        <a href='login.html'>Login</a>
        </div>
        
        <div id='logo'>
        <a href='phase3.html'><img src = "logo.png" height="100px"></a>
        </div>
        
        <div class='TextBox'>
        <p>You must be a member to view this page. Please login or register.</p>
        </div>
        
        <div id='footer'>
        <p>5/03/2021 by William Connell, Ian McIntosh</p>
        </div>
        </body>
        </html>
PAGE;
    }
    
    function displayPage($user) {
        print <<<PAGE
        <html lang="en">
        <head>
        <meta charset="utf-8">
        <title>Tournaments</title>
        <link rel="stylesheet" href="phase3.css">
        </head>
        <body>
        <div id='navigationBar'>
        <a href='rules.html'>Rules</a>
        <a href='tutorials.html'>Tutorials</a>
        <a href='coursesnearby.html'>Courses Nearby</a>
        <a href='tournaments.php'>Tournaments</a>
        <a href='shopping.php'>Shopping</a>
        <a href='contactus.html'>Contact Us</a>
        <a href='login.html'>Login</a>
        </div>
        <div id='logo'>
        <a href='phase3.html'><img src = "logo.png" height="100px"></a>
        </div>
        <div class = "TextBox3">
        <div style = "text-align: center">
        <h2>Tournaments</h2>
        </div>
        <div class = "column">
        <p>Welcome, $user!</p>
        <p>Here are some tournaments near the Austin Area. Click on one of the tournaments listed below to figure out if it would be a good fit for you.</p>
            </div>
            <div><a href='https://www.pdga.com/tour/event/50223'>The Fling at The Fort</a></div>
            <div><a href='https://www.pdga.com/tour/event/50968'>2021 Central Texas Wildflower Open sponsored by Dynamic Discs</a></div>
            <div><a href='https://www.pdga.com/tour/event/48862'>Manor Mash 3 presented by Black Zombie</a></div>
            <div><a href='https://www.pdga.com/tour/event/51008'>The 2021 Ian Hovey Memorial</a></div>
            <div><a href='https://www.pdga.com/tour/event/49462'>WGE - Women Throwing Frisbees</a></div>
            <div><a href='https://www.pdga.com/tour/event/51092'>Vibe DIsc Golf and The Weekday Warriors ATX Spring League</a></div>
            <div><a href='https://www.pdga.com/tour/event/49936'>RAD Vibes Ladies League</a></div>
            </div>
            <div id='footer'>
            <p>5/03/2021 by William Connell, Ian McIntosh</p>
            </div>
            </body>
            </html>
PAGE;
    }
    
    
?>
