<?php
require("connect.php");
header('Content-Type: text/html; charset=iso-8859-1');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cities Details</title>
        <style>
            tr,th{ width: 33.3%; border:1px black solid}
            table {border:1px black solid; width:100%}

        </style>
    </head>
    <body>
        <form action="DataBase.php" method='GET'>
            <input title="Just Numbers, and Not less than 0" type='number' name='min' min='0'> 
            <input title="Accept Just Numbers" type='number' name='max'> 
            <input type='submit' value='submit'>
        </form>
        <?php
        //Connect to database
        try {
            $dbConn = new PDO("mysql:host=$hostname;dbname=jebry_Bashar", $username, $passwd);
            echo "Successfully connected to database <br> <br>";
        } catch (PDOException $error) {
            echo "Connection error: $error <br> <br>";
        }
        ?>


        <?php
        $command = "SELECT * FROM City WHERE Population BETWEEN ? AND ? ";
        $arrey = array($_GET['min'], $_GET['max']);
        $stmt = $dbConn->prepare($command);
        $execOK = $stmt->execute($arrey);
        if ($execOK) {
            if ($row = $stmt->fetch()) {
                echo"<h1 align='middle'> CITIES SELECTED</h1>";
                echo '<table><tr> <th>NAME  </th><th> CountryCode </th><th>Population</th></tr></table>';
                while ($row = $stmt->fetch()) {

                    echo " <table> <tr> <th> $row[Name] </th><th>  $row[CountryCode] </th><th>$row[Population]</th></tr> </table>";
                }
            } else {
                echo "There are zero records in the database <br> <br>";
            }
        } else {
            echo "Error executing SQL query <br> <br>";
        }
        ?>            
    </body>
</html>


