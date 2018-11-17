<!DOCTYPE html>
<html lang="en">

<head>
   <!--   
   
   Author: Gabriel Ortega  
   Date: 9.25.18
   
   Filename: ProcessScholarship.php
   
   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Process Scholarship </title>
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <h2>Process Scholarship</h2>
    
    <?php
    $firstName = stripslashes($_POST['fName']);
    $lastName = stripslashes($_POST['lName']);    
    echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
    ?>

</body>

</html>
