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
        <title>Confirmation</title>
    </head>
    <body>


        <p>Personal Details: </p> 
        <p>First Name: <?php echo $_SESSION['fname'] ?></p>
        <p>Last Name:<?php echo $_SESSION["lname"] ?></p>
        <p>E-mail:<?php echo $_SESSION["email"] ?></p>
        <p>Date of Applying:<?php echo $_SESSION["date"] ?></p>
        <p>He is :<?php echo $_SESSION["runner"] ?></p>
        <p>The Favorite Terrain:<?php echo $_SESSION["terrain"] ?></p>
        <p>The Rate of Shoes From One to Ten is :<?php echo$_SESSION["shoesrating"] ?></p>



        <p>Address Information: </p> 
        <p>Street Name: <?php echo $_SESSION["street"] ?></p>
        <p>City:<?php echo $_SESSION["city"] ?></p>
        <p>Province:<?php echo $_SESSION["province"] ?></p>
        <p>Post-Code:<?php echo $_SESSION["postcode"] ?></p>


        <p>Address Information: </p> 
        <?php $_SESSION["postoffice"] = $_POST["postoffice"]; ?>
        <p>Your Favorite Post Office: <?php echo $_SESSION["postoffice"] ?></p>


        <form action="CompletedPage.php" method="POST">
            <button name ="submit" type="submit" id="submit" >SUBMIT</button>
        </form>



    </body>
</html>
