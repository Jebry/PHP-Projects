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
        <title>Order Page</title>
    </head>
    <body>
        <h1 align="middle">YOUR ORDER HAS BEEN PLACED</h1>
        <a href="index.html">Go Back To The first Page</a>
        <?php
        session_destroy();
        ?>
    </body>
</html>
