<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CloverLeaf Landscaping
    </title>
    <meta name="description" content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- build:css styles/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.13.0/css/semantic.min.css">
    <!-- endbower -->
    <!-- endbuild -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,vietnamese' rel='stylesheet' type='text/css'>

    <!-- build:css styles/main.css -->
    <link rel="stylesheet" href="main.css">
    <!-- endbuild -->
</head>

<?php
session_start();

if (isset($_SESSION['userId']))
{    
    $userId = $_SESSION["userId"];
    $fisrtName = $_SESSION["firstName"];
    ?>
        <body>
        <a name="LilyTop"></a>
        <div class="ui fixed menu green inverted navbar">
            <a href="Index.php" id="logo" class="brand large active item">Cloverleaf</a>
            <a href="Products.php" id="logo" class="brand large active item">View Products</a>
            <div class="right menu">
                <div class="item">Hi <?= $fisrtName ?>, Welcome back!</div>
                <a href="User.php" class="item">My Account</a>
                <a href="SignOut.php" class="item">Sign out</a>
            </div>
        </div>
    <?php
} else{
    ?>
<body>
    <a name="homeTop"></a>
    <div class="ui fixed menu green inverted navbar">
        <a href="Index.php" id="logo" class="brand large active item">Cloverleaf</a>
        <div class="right menu">
            <a href="Login.html" class="item">Sign In</a>
            <a href="SignUp.html" class="item">Register</a>
        </div>
    </div>

    <?php
}

$db = new PDO("mysql:dbname=florok85; host=localhost",
"florok85","0531785");
?>

<div class="ui grid stackable relaxed default feature segment" style="padding-top: 30px; ">
        <div class="one column row">
            <div class="column">
                <div class="ui large images">
                  <img src="Imgs/PathwayBefore1">
                  <img src="Imgs/PathwayBefore2">
                  <img src="Imgs/PathwayBefore1">
                  <img src="Imgs/PathwayBefore2">
                </div>
            </div> 
        </div>
    </div>
    <div class="ui dividing block inverted black huge header">
        <a class="icon item">
        <i class="down arrow icon"></i>
        Learn More
            </a>
    </div>
		
    <div class="ui grid stackable relaxed feature segment" style="padding-top: 30px; background:url(Dark-Mississippi-River-Rock-75.jpg); background-repeat: no-repeat; background-size: cover;">
        <div class="two column row">
            <div class="column">
                <div class="ui segment">
                    <div class="video-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5732.358110330399!2d-88.54342198677884!3d44.07965802074747!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa57215e8f894bf1d!2sCloverleaf+Landscaping+and+Retail+Center%2C+Inc!5e0!3m2!1sen!2sus!4v1416362115616" width="600" height="450" frameborder="0" style="border:0"></iframe>
                    </div>
                    <div class="content">
                        <p class="description">
                            Located just off of Interstate Hwy 41 in Oshkosh, you can find is on the corner of Cty Hwy 76 and Cty Hwy Y. 
                            You won't miss our giant stone slab of a sign, it's ludacris!
                        </p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="ui segment">
                    <div class="image">
                        <img src="What_A_EFFING_SIGN.jpg" />
                    </div>
                </div>
                </div> 
        </div>
    </div>
    <div class="ui dividing block inverted black huge header">
        <a class="icon item">
        <i class="down arrow icon"></i>
        Learn More
            </a>
    </div>
    <div class="ui grid green inverted stackable relaxed page feature segment" >
        <div class="column row">
            <div class="column">
                <div class="ui segment">
                    <div class="video-container">
                        <object width="1000" height="1000" data="http://www.cloverleaflandscaping.com/new/wp-content/plugins/media-element-html5-video-and-audio-player/mediaelement/flashmediaelement.swf" type="application/x-shockwave-flash">
			<param value="http://www.cloverleaflandscaping.com/new/wp-content/plugins/media-element-html5-video-and-audio-player/mediaelement/flashmediaelement.swf" name="movie">
			<param value="controls=true&amp;file=http://www.cloverleaflandscaping.com/new/wp-content/uploads/2013/05/Cloverleaf-Landscaping-and-Retail-Center.mp4" name="flashvars">			
		</object>
                    </div>
                    <div class="content">
                        <div class="name">What can we create for you?</div>
                        <p class="description">
                            Description filler.  Description filler.   Description filler.   Description filler.   Description filler.  Description filler.  Description filler.  
				Description filler.  Description filler.  Description filler.  Description filler.  Description filler.  Description filler.  
Description filler.  Description filler.  Description filler.  Description filler.  Description filler.  
                             
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui divider"></div>
        <div class="ui huge horizontal green inverted footer link list divided fluid two item menu">
                       
        </div>

    </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.13.0/javascript/semantic.min.js"></script>
        <script src="main.js"></script>

</body>
</html>