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
        <title>Address Form</title>
    </head>
    <body>


        <?php
        $_SESSION["fname"] = $_POST["fname"];
        $_SESSION["lname"] = $_POST["lname"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["date"] = $_POST["date"];
        $_SESSION["runner"] = $_POST["runner"];
        if ($_SESSION["runner"] == "Runner") {
            $_SESSION["terrain"] = $_POST["terrain"];
        } else {
            $_SESSION["terrain"] = "No Effect, Applicant does not have shoes";
        }
        $_SESSION["shoesrating"] = $_POST["shoesrating"];
        ?>


        <?php
        if (isset($_SESSION["fname"]) || isset($_SESSION["lname"])) {
            $fname = clean($_SESSION["fname"]);
            $lname = clean($_SESSION["lname"]);
            if (empty($fname) || empty($lname)) {
                echo "<p class='error'>first nameand last name must be a legal variable name. Please <a href='index.html'>try again.</a></p>";
            }
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


        <h1>Hi Mr.<?php echo $_SESSION["fname"]; ?>  </h1>
        <h1>Please Enter Your Address</h1>
        <form name="form" action="ShippingPage.php" method="POST">
            <label>Street Name</label><input title=" The max charecter is 100" type="text" maxlength="100"  name="street" required><br>
            <label>City Name</label><input title=" No signs, no spaces" pattern="[a-zA-Z]*" type="text" maxlength="20"  name="city" required><br>
            <label>Choose your Province</label>
            <select name="province">
                <option value="Ontario">Ontario</option>
                <option value="British-Colombia">British-Colombia</option>
                <option value="Nova Scotia">NovaScotia</option>
                <option value="New Brunswick">New Brunswick</option>
                <option value="Alberta">Alberta</option>
                <option value="Saskatchewan">Saskatchewan</option>
                <option value="Yukon">Yukon</option>
                <option value="Nunavut">Nunavut</option>
                <option value="Manitoba">Manitoba</option>
                <option value="Quebec">Quebec</option>
                <option value="Prince Edward Island">Prince Edward Island</option>
            </select>
            <label>Postal Code</label><input  title=" The max charecter is 6 dont put spaces" type="text" maxlength="6" name="postcode" required>
            <button name ="submit" type="submit" id="submit" >SUBMIT</button>
        </form>
    </body>
</html>


