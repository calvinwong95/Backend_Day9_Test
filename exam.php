<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exam.php" method="get">
        User 1: <input type='text' name="input1">
        User 2: <input type='text' name="input1">
        User 3: <input type='text' name="input1">
    </form>
    <?php

    
    
    $array1 = array(3,4,5,6,7);
    forEach($array1 as $value) {
        if ($value >=5) {
            echo $value .' ';
        }
    }
    echo "<br>";
    echo "<br>";

    $array2 = array(3,1,9,2,6);
    forEach($array2 as $value) {
        if ($value <=5) {
            echo $value .' ';
        }
    }

    $array3 = array(6,8,3,7,3);
    $maxThree = max($array3);
    $maxOne = max($array1);

    if ($maxThree> $maxOne) {
        echo "The largest number is " .$maxThree ."which belongs to user 3";
    } else {
        echo "The largest number is " .$maxOne ."which belongs to user 1";
    }


    

    ?>
</body>
</html>