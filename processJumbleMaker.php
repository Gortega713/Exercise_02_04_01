<!DOCTYPE html>
<html lang="en">

<head>
   <!--  
     Author: Gabriel Ortega
     Date: 9.27.18
     
     Filename: processJumbleMarker.html
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Process JUmble Maker </title>
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <h2>Process Jumble Maker</h2>
    <?php
    $errorCount = 0;
    $words = array();
    
    // If there is an error, display it and increase errorCount
    function displayError($fieldName, $errorMsg) {
        global $errorCount;
        echo "Error for \"$fieldName\": $errorMsg<br>\n";
        ++$errorCount;
    }
    
    // Make sure that the word is between 4 and 7 letters and only has letters
    // Shuffle the letters and turn them all to uppercase
    function validateWord($data, $fieldName) {
        global $errorCount;
        $retval = "";
        if (empty($data)) {
            displayError($fieldName, "This field is required");
            ++$errorCount;
            $retval = "";
        } else {
            $retval = trim($data);
            $retval = stripslashes($retval);
            if (strlen($retval) < 4 || strlen($retval) > 7) {
                displayError($fieldName, "Words must be between 4 and 7 characters in length");
            }
            if (preg_match("/^[A-Za-z]+$/i", $retval) == 0) {
                displayError($fieldName, "Words must consist only of letters");
            }
        }
        
        $retval = strtoupper($retval);
        $retval = str_shuffle($retval);
        return $retval;
    }
    
    // Validate each word
    $words[] = validateWord($_POST['word1'], "Word 1");
    $words[] = validateWord($_POST['word2'], "Word 2");
    $words[] = validateWord($_POST['word3'], "Word 3");
    $words[] = validateWord($_POST['word4'], "Word 4");
    
    // If we have any errors, show them
    if ($errorCount > 0) {
        echo "Please use the \"back\" button to re-enter any missing data.<br>\n";
    } else {
        $wordNum = 0;
        foreach ($words as $word) {
            echo "Word" . ++$wordNum . ": $word<br>\n";
        }
    }
    ?>

</body>

</html>
