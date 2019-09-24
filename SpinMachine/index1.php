
<html>
    <head>
        <meta charset="UTF-8">
        <title>bashar jebry</title>
        <link rel="stylesheet" type="text/css" href="stryle.css">

    </head>
    <body>
        <form name="form" action="index1.php"  method="post">
            <div align="center">
                <div>
                    <table >
                        <tr> 
                            <td>
                                <?php
                                $random1 = rand(1, 7);
                                switch ($random1) {
                                    case 1: echo '<img  src="fruit/apple.png">';
                                        $apple = $apple + 1;
                                        break;
                                    case 2: echo '<img  src="fruit/cherry.png">';
                                        $cherry = $cherry + 1;
                                        break;
                                    case 3: echo '<img  src="fruit/grapes.png">';
                                        $grapes = $grapes + 1;
                                        break;
                                    case 4: echo '<img  src="fruit/lemon.png">';
                                        $lemon = $lemon + 1;
                                        break;
                                    case 5: echo '<img  src="fruit/orange.png">';
                                        $orange = $orange + 1;
                                        break;
                                    case 6: echo '<img  src="fruit/pear.png">';
                                        $pear = $pear + 1;
                                        break;
                                    case 7: echo '<img  src="fruit/watermelon.png">';
                                        $watermelon = $watermelon + 1;
                                        break;
                                }
                                ?>                            
                            </td>
                            <td>
                                <?php
                                $random2 = rand(1, 7);
                                switch ($random2) {
                                    case 1: echo '<img  src="fruit/apple.png">';
                                        $apple = $apple + 1;
                                        break;
                                    case 2: echo '<img  src="fruit/cherry.png">';
                                        $cherry = $cherry + 1;
                                        break;
                                    case 3: echo '<img  src="fruit/grapes.png">';
                                        $grapes = $grapes + 1;
                                        break;
                                    case 4: echo '<img  src="fruit/lemon.png">';
                                        $lemon = $lemon + 1;
                                        break;
                                    case 5: echo '<img  src="fruit/orange.png">';
                                        $orange = $orange + 1;
                                        break;
                                    case 6: echo '<img  src="fruit/pear.png">';
                                        $pear = $pear + 1;
                                        break;
                                    case 7: echo '<img  src="fruit/watermelon.png">';
                                        $watermelon = $watermelon + 1;
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                $random3 = rand(1, 7);
                                switch ($random3) {
                                    case 1: echo '<img  src="fruit/apple.png">';
                                        $apple = $apple + 1;
                                        break;
                                    case 2: echo '<img  src="fruit/cherry.png">';
                                        $cherry = $cherry + 1;
                                        break;
                                    case 3: echo '<img  src="fruit/grapes.png">';
                                        $grapes = $grapes + 1;
                                        break;
                                    case 4: echo '<img  src="fruit/lemon.png">';
                                        $lemon = $lemon + 1;
                                        break;
                                    case 5: echo '<img  src="fruit/orange.png">';
                                        $orange = $orange + 1;
                                        break;
                                    case 6: echo '<img  src="fruit/pear.png">';
                                        $pear = $pear + 1;
                                        break;
                                    case 7: echo '<img  src="fruit/watermelon.png">';
                                        $watermelon = $watermelon + 1;
                                }
                                ?>
                            </td>
                            <td> 
                                <button name ="submit" type="submit" id="submit" >SPIN</button>
                            </td>
                        </tr>
                    </table> 
                </div>
                <div >
                    <label>Enter Your Name</label>
                    <br>
                    <input  type="text" name="name" pattern="[a-zA-Z]*" 
                            value="" id="name" required title="Names, No charecters"  >
                    <br>
                    <label>Bet Money</label>
                    <input title="more than 0" type="number" name="betMoney" min="1"  required>
                    <label>credit</label>
                    <input type="text" name="credit" id="Credit" min="0" required value= "100" readonly="true"> 
                    <br>
                </div>
            </div>     
            <?php
            $_POST['submit'] = $_POST['submit'] + 1;
            echo "<script>document.getElementById('submit').value='{$_POST['submit']}';</script>";
            echo "<script>document.getElementById('name').value='{$_POST['name']}';</script>";
            if ($_POST['submit'] != 1) {
                if (isset($_POST['betMoney']) == true) {


                    if ($_POST['credit'] >= 0) {
                        if ($apple == 3 || $cherry == 3 || $grapes == 3 || $lemon == 3 || $orange == 3 || $pear == 3 || $watermelon == 3) {
                            $_POST['credit'] = $_POST['credit'] + 30;
                            echo "you win 30 bucks";
                        } elseif ($apple == 2 || $cherry == 2 || $grapes == 2 || $lemon == 2 || $orange == 2 || $pear == 2 || $watermelon == 2) {
                            $_POST['credit'] = $_POST['credit'] + 10;
                            echo"you win 10 bucks";
                        } else {

                            $_POST['credit'] = $_POST['credit'] - $_POST['betMoney'];
                            echo "You Lost";
                            if ($_POST['credit'] <= 0) {
                                echo " every thing, play again";
                                echo "<script>document.getElementById('name').value='';</script>";
                            }
                        }
                        if ($_POST['credit'] >= 0) {
                            echo "<script>document.getElementById('Credit').value='{$_POST['credit']}';</script>";
                        }
                    }
                }
            }
            ?>
        </form>
    </body>
</html>

