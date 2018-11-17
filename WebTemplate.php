<!DOCTYPE html>
<html lang="en">

<head>
    <!--  
       Author: Gabriel Ortega
       Date: 9.26.18
       
       Filename: WebTemplate.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Web Template </title>
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <?php include("inc_header.html"); ?>
    <div style="width: 20%; text-align: center; float: left;"></div>
    <?php include("inc_buttonnav.html"); ?>
    <!-- Start of Dynamic Content Section -->
    <?php
    if (isset($_GET['content'])) {
        switch ($_GET['content']) {
            case 'About Me':
                include("inc_about.html");
                break;
            case 'Contact Me':
                include("inc_contact.html");
                break;
            case 'Home':
                // A value of home means to display default page
                default;
                include("inc_home.html");
                break;
        }
    } else {
        // No button selected
        include("inc_home.html");
    }
    ?>
    <!-- End of Dynamic Content Section -->
    <?php include("inc_footer.php"); ?>

</body>

</html>
