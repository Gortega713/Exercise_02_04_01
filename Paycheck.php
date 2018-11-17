<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 
    Author: Gabriel Ortega 
    Date: 10.1.18
    
    Filename: Paycheck.php
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Title </title>
</head>

<body>

    <h2 style="text-align: center; color: blueviolet;">Paycheck</h2>
    
    <?php
    function validateHours($hourData, $fieldName) {
        if (preg_match("/^[0-9]+(\.[0-9]{1,2})?$/", $hourData)) {
            echo "You worked " . $hourData . " hours this week.<br>";
        } else {
            echo "$fieldName is Invalid<br>";
            back();
        }
        return $hourData;
    }
    
    // Function to validate wage field, make sure that only numbers are allowed
    function validateWage($wageData, $fieldName) {
        if (preg_match("/^[0-9]+(\.[0-9]{1,2})?$/", $wageData)) {
            echo "You get paid $" . $wageData . " per hour.<br>";
        } else {
            echo "$fieldName is Invalid<br>";
            back();
        }
        return $wageData;
    }
    
    
    
    // Function to create paycheck
    function createPaycheck($hours, $wages) {
        echo "<br>You will get paid $" . ($hours * $wages) . " this week!<br>";
    }
    
    // Display back button
    function back() {
            echo "<p><a href=\"Paycheck.html\">Try Again</a></p>";
    }
    
    $paycheck = createPaycheck(validateHours($_POST["HoursWorked"], "Hours Worked"), validateWage($_POST["Wage"], "Wage"));
    ?>

</body>

</html>
