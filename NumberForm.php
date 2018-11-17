<!DOCTYPE html>
<html lang="en">

<head>
   <!--   
   
   Author: Gabriel Ortega  
   Date: 9.26.18
   
   Filename: NumberForm.php
   
   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Number Form </title>
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <h2>Number Form</h2>
    <?php
    // Global Variables
    $displayForm = true;
    $number = "";
    
    // Determining if we have a form submission 
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];
        if (is_numeric($number)) {
            $displayForm = false;
        } else {
            echo "<p>You need to enter a numeric value.</p>\n";
            $displayForm = true;
        }
    }
    
    if ($displayForm) {
    ?>
    <form name="numberForm" action="NumberForm.php" method="post">
        <p>
            Enter a number: <input type="text" name="number" value="<?php echo $number; ?>">
        </p>
        <p>
            <input type="reset" value="Clear Form">&nbsp;&nbsp;
            <input type="submit" name="submit" value="Send Form">
        </p>
    </form>
    <?php        
    } else {
        echo "<p>Thank you for entering a number</p>\n";
        echo "<p>Your number, $number, squared is " . ($number * $number) . "</p>\n";
        echo "<p><a href=\"NumberForm.php\">Try again?</a></p>\n";
    }
    ?>

</body>

</html>
