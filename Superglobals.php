<!DOCTYPE html>
<html lang="en">

<head>
   <!--   
   
   Author: Gabriel Ortega  
   Date: 9.25.18
   
   Filename: Superglobals.php
   
   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Superglobals </title>
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <h1>Superglobals</h1>
    
    <?php
    echo "<h3>Superglobal Array \$_SERVER[]</h3>";
    echo "<p>The name of the current script is: " , $_SERVER["SCRIPT_NAME"] , "<br>";
    echo "This script was executed with the following server software: " , $_SERVER["SERVER_SOFTWARE"] , "<br>";
    echo "This script was requested with the following server protocol: " , $_SERVER["SERVER_PROTOCOL"] , "<br>";
    echo "This script is running on the following server name: " , $_SERVER["SERVER_NAME"] , "<br>";
    echo "This script is running on the following server address: " , $_SERVER["SERVER_ADDR"] , "<br>";
    echo "This script is running on the following gateway interface: " , $_SERVER["GATEWAY_INTERFACE"] , "<br>";
    echo "This script is running on the following request method: " , $_SERVER["REQUEST_METHOD"] , "<br>";
    ?>

</body>

</html>
