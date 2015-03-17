<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Cloverleaf Landscaping</title>
    <meta name="description" content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.13.0/css/semantic.min.css">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="main.css">     
    <script src="jquery-1.11.1.js"></script>
    <script src="ProductScripts.js" type="text/javascript"></script>
</head>


<?php
session_start();

if (isset($_SESSION['userId']))
{    
    $userId = $_SESSION["userId"];
    $fisrtName = $_SESSION["firstName"];
}
?>
        <body>
            <input id="hiddenUserId" value="<?php echo $userId; ?>" class="noDisplay" />
        <a name="LilyTop"></a>
        <div class="ui fixed menu green inverted navbar">
            <a href="Index.php" id="logo" class="brand large active item">Cloverleaf</a>
            <a href="Products.php" id="logo" class="brand large active item">View Products</a>
            <div class="right menu">
                
<?php
	if (isset($_SESSION['isEmployee'])){ ?>
		<div class="item">Hi <?= $fisrtName ?>, Welcome back!</div>
		<a href="Employee.php" class="item">My Account</a>
		<a href="SignOut.php" class="item">Sign out</a>	<?php
}
	if (isset($_SESSION['isUser'])){ ?>
		<div class="item">Hi <?= $fisrtName ?>, Welcome back!</div>
		<a href="User.php" class="item">My Account</a>
		<a href="SignOut.php" class="item">Sign out</a>	<?php
}
	if (isset($_SESSION['isAdmin'])){ ?>
		<div class="item">Hi <?= $fisrtName ?>, Welcome back!</div>
		<a href="Admin.php" class="item">My Account</a>	
		<a href="SignOut.php" class="item">Sign out</a> <?php
}
	if (!isset($_SESSION['isUser']) && !isset($_SESSION['isEmployee']) && !isset($_SESSION['isAdmin'])){ ?>
		<a href="Login.html" class="item">Sign In</a>
           	<a href="SignUp.html" class="item">Register</a> <?php
}

?>
                
                
            </div>
        </div>
<?php

$db = new PDO("mysql:dbname=florok85; host=localhost",
"florok85","0531785");

?>	
<div class="ui grid green inverted stackable relaxed feature segment">
        <div class="ui center inverted black menu large">
            <div class="ui header black item">Products</div>
        </div>        
        </div>
        </div>
        <div class="ui green header center aligned large inverted" style="margin: 0;">
                Stones     
        </div>
        <div class="ui grid green inverted stackable relaxed feature segment">
            <div class="eight column row">
<?php
                    $query = "SELECT Id, Name, Price, Is_In_Stock, Photo
                    FROM Product
                    WHERE Product_Type_Id = 1";
                    $rows = $db -> query ($query);
                    foreach ( $rows as $row ){
?>                  <div class="column">
                       <div class="ui segment canFavorite" id="<?php echo $row["Id"]; ?>">
                            <div class="image">
                                <img src="
                                <?= $row["Photo"] ?>
                                "/>                                
                            </div>
                            <div class="content">
                                <p class="description">
                                    <?= $row["Name"] ?>
                                </p>
                            </div>
                       </div>
                    </div>

<?php       
                    }
?>
                    </div>
                    </div>
                    <div class="ui green header center aligned large inverted" style="margin: 0;">
                            Plants     
                    </div>
                    <div class="ui grid green inverted stackable relaxed feature segment">
                        <div class="eight column row">
<?php
                    $query = "SELECT Id, Name, Price, Is_In_Stock, Photo
                    FROM Product
                    WHERE Product_Type_Id = 2";
                    $rows = $db -> query ($query);
                    foreach ( $rows as $row ){                        
?>                  
                    
                    <div class="column">
                       <div class="ui segment canFavorite" id="<?php echo $row["Id"]; ?>">
                            <div class="image">
                                <img src="
                                <?= $row["Photo"] ?>
                                "/>                                
                            </div>
                            <div class="content">
                                <p class="description">
                                    <?= $row["Name"] ?>
                                </p>
                            </div>
                       </div>
                    </div>

<?php       
                    }
?>
                    </div>
                    </div>
                    <div class="ui green header center aligned large inverted" style="margin: 0;">
                            Mulch     
                    </div>
                    <div class="ui grid green inverted stackable relaxed feature segment">
                        <div class="eight column row">       
<?php
                    $query = "SELECT Id, Name, Price, Is_In_Stock, Photo
                    FROM Product
                    WHERE Product_Type_Id = 3";

                    $rows = $db -> query ($query);
                    foreach ( $rows as $row ){
?>                  
                    <div class="column">
                       <div class="ui segment canFavorite" id="<?php echo $row["Id"]; ?>">
                            <div class="image">
                                <img src="
                                <?= $row["Photo"] ?>
                                "/>                                
                            </div>
                            <div class="content">
                                <p class="description">
                                    <?= $row["Name"] ?>
                                </p>
                            </div>
                       </div>
                    </div>
<?php    
                    }
                    ?>
                    </div>
                    </div>
                    <div class="ui green header center aligned large inverted" style="margin: 0;">
                            Packages     
                    </div>
                    <div class="ui grid green inverted stackable relaxed feature segment">
                        <div class="eight column row">
<?php
                    $query = "SELECT Id, Name, Price, Is_In_Stock, Photo
                    FROM Product
                    WHERE Product_Type_Id = 4";

                    $rows = $db -> query ($query);
                    foreach ( $rows as $row ){
?>                  
                    <div class="column">
                       <div class="ui segment canFavorite" id="<?php echo $row["Id"]; ?>">
                            <div class="image">
                                <img src="
                                <?= $row["Photo"] ?>
                                "/>                                
                            </div>
                            <div class="content">
                                <p class="description">
                                    <?= $row["Name"] ?>
                                </p>
                            </div>
                       </div>
                    </div>
<?php    
                }
?>
                </div>
                </div>
			</body>
		</html>