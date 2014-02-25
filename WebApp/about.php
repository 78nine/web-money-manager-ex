<?php
require_once "functions.php";
session_start();
security::redirect_if_not_loggedin();
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	
        <title>Money Manager EX</title>
        <link rel="icon" href="res\favicon.ico" />
        
        <link rel="stylesheet" href="res\bootstrap.min.css" />
        <link rel="stylesheet" href="res\bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="style_global.css" />
    </head>
    
    <body>
        <div class="container" align="center">
            <br />
            <img src="res\mmex.ico" alt="Money Manager Ex Logo" height="150" width="150"/>
            <br />
            <h2><strong>Money Manager Ex - Web App</strong></h2>
            <?php
	           echo "<h4> Version ".costant::app_version()."</h4>";
            ?>
            <br />
            <h4> Developer: Gabriele [Gabriele-v]</h4>
            <a href="https://sourceforge.net/projects/moneymanagerex-webapp"><h4> Sourceforge WebPage</h4></a>
            <br />
            <p>
                Used components:
                <br />
                <a href="http://getbootstrap.com/">Bootstrap</a>
                <br />
                <a href="http://modernizr.com/">Modernizr</a>
                <br />
                <a href="http://www.sqlite.org/">SQLite</a>
            </p>
            <br />
            <input type="button" class="btn btn-lg btn-success btn-block" value="Return" onclick="top.location.href = 'landing.php'" />
            <br />
        </div>
    </body>

</html>