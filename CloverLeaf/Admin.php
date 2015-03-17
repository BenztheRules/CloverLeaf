
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
    <script src="jquery-ui-1.11.2.custom/jquery-ui.min.js"></script>
    <script src="AdminScripts.js" type="text/javascript"></script>
</head>


<?php
session_start();
if (!isset($_SESSION['isAdmin'])){
	header("Location:SignOut.php");
}

if (isset($_SESSION['userId']))
{    
    $userId = $_SESSION["userId"];
    $fisrtName = $_SESSION["firstName"];
    ?>
        <body>
            <input id="hiddenUserId" value="<?php echo $userId; ?>" class="noDisplay" />
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
            <a href="Products.php" class="item">Products</a>
            <a href="Login.html" class="item">Sign In</a>
            <a href="SignUp.html" class="item">Register</a>
        </div>
    </div>

    <?php
		}
		$db = new PDO("mysql:dbname=florok85; host=localhost",
		"florok85","0531785");
	?>	

	<div class="ui grid green inverted stackable relaxed feature segment">
<div class="ui center inverted black menu large">
    <div class="ui header black item">Add Employee</div>
	</div>      
</div>    
<div class="ui inverted form">
    <br/>
    <h4 class="ui dividing header">Select user to hire</h4>
    <select id="empDropdown">
        <option>Select user...</option>

<?php
    $query = "SELECT First_Name, Last_Name, Id
    FROM User";
    $rows = $db -> query ($query);
    foreach ( $rows as $row ){
?>   
    <option value="<?php echo $row["Id"]; ?>">
        <?= $row["First_Name"]." ".$row["Last_Name"] ?> 
    </option>  
<?php       
    }
?>    
        
    </select><br/><br/>
<input id="makeEmpButton" class="ui green submit button" value="Convert to Employee"/>
    </div>    
</div>
    </div>
</body>
</html>

