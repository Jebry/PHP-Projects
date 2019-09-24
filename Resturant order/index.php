<html>
    <head>
        <meta charset="UTF-8">
        <title>Here is your order</title>
        <link rel="stylesheet" type="text/css" href="Css.css">
    </head>
    <body>
        <?php
        $NumCoffee = $_POST['NumberOfCoffee'];
        $cream = $_POST['cream'];
        $sizeOfCoffee = $_POST['sizeOfCoffee'];
        $sugar = $_POST['sugar'];

// slang varaible = vlaue of slang input.
        // all these ratio input has one value that is slang
        $coffeeType = $_POST['slang'];
//check the coffeetype for the slang section
        switch ($coffeeType) {
            case(regular):$cream = 1;
                $sugar = 1;
                break;
            case(doubledouble):$cream = 2;
                $sugar = 2;
                break;
            case(tripletriple):$cream = 3;
                $sugar = 3;
                break;
            case(blackonesugar):$cream = 0;
                $sugar = 1;
                break;
            case(blacktwosugar):$cream = 0;
                $sugar = 2;
                break;
            case(blackthreesugar):$cream = 0;
                $sugar = 3;
                break;
        }
//number of loop == number of coffee.
//each loop will upload a photo of a coffee
        for ($i = 0; $i < $NumCoffee; $i++) {
            switch ($sizeOfCoffee) {
                case(small):
                    echo '<img class="imgcupsmall" src="folder/cup.jpg">';
                    if ($sugar != 0) {
                        echo '<img src="folder/plus.jpg" >';
                    }

                    for ($j = 0; $j < $sugar; $j++) {
                        echo '<img src="folder/sugar.jpg" >';
                    }

                    if ($cream != 0) {
                        echo '<img src="folder/plus.jpg" >';
                    }

                    for ($j = 0; $j < $cream; $j++) {
                        echo '<img src="folder/cream.jpg">';
                    }
                    break;
                case(meduim):
                    echo '<img class="imgcupmeduim" src="folder/cup.jpg" >';
                    if ($sugar != 0) {
                        echo '<img src="folder/plus.jpg" >';
                    }

                    for ($j = 0; $j < $sugar; $j++) {
                        echo '<img src="folder/sugar.jpg" >';
                    }

                    if ($cream != 0) {
                        echo '<img src="folder/plus.jpg" >';
                    }

                    for ($j = 0; $j < $cream; $j++) {
                        echo '<img src="folder/cream.jpg">';
                    }
                    break;
                case(large):
                    echo '<img class="imgcuplarge" src="folder/cup.jpg">';
                    if ($sugar != 0) {
                        echo '<img src="folder/plus.jpg" >';
                    }

                    for ($j = 0; $j < $sugar; $j++) {
                        echo '<img src="folder/sugar.jpg">';
                    }

                    if ($cream != 0) {
                        echo '<img src="folder/plus.jpg" >';
                    }

                    for ($j = 0; $j < $cream; $j++) {
                        echo '<img src="folder/cream.jpg">';
                    }
            }
            echo "<br></br>";
        }
        ?>


    </body>
</html>