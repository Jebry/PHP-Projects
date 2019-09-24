<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $_SESSION["street"] = $_POST["street"];
        $_SESSION["city"] = $_POST["city"];
        $_SESSION["province"] = $_POST["province"];
        $_SESSION["postcode"] = $_POST["postcode"];
        ?>
        <?php
        if (isset($_SESSION["postcode"])) {
            $postcode = clean($_GET["postcode"]);
            if (strlen($postcode) < 1 || strlen($postcode > 6))
                echo "<p class='error'>Second parameter must be 1 to 6 characters long. Please <a href='AddressForm.php'>try again.</a></p>";
        } else {
            echo "<p class='error'>Second parameter missing. Please <a href='AddressForm.php'>try again.</a></p>";
        }
        ?>

        <?php

        function clean($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <form action="ConfirmationPage.php" method="POST">
            <label>Please Select Your Favorite Post Office</label><br>
            Post Office:<input type="radio" name="postoffice" value="Post Office"><br>
            FEDEX:<input type="radio" name="postoffice" value="FEDEX" checked><br>
            UBS:<input type="radio" name="postoffice" value="UBS"><br>
            <button name ="submit" type="submit" id="submit" >SUBMIT</button>
        </form>
    </body>
</html>
