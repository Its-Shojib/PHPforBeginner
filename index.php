<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP for Beginers</title>
</head>
<style>
    * {
        padding: 0px;
        margin: 0px;
    }

    body {
        display: grid;
        place-items: center;
        height: 100vh;
        font-size: 24px;
        font-weight: 700;

    }
</style>

<body>
    <?php
    // PHP code goes here
    $greeting = "You have read dark matter";
    echo "<br>";
    $read = true;

    $write = false;
    if ($read && $write) {
        $greeting = "You have read both dark matter and dark energy,";
    } else {
        $greeting = "You have not read the book, Read fast.";
    }
    echo "$greeting" . " " . "Thank You!";

    echo "<br>";


    $array = ["Shojib", "Masum", "Aowal", "Refat"];

    //For loop
    // for ($i = 0; $i < count($array); $i++) {
    //     echo " " . $i . " " . $array[$i] . "<br>";
    // }

    //while Loop
    // $i=0;
    // while($i<count($array)) {
    //     echo " " . $i. " " . $array[$i]. "<br>";
    //     $i++;
    // }
    
    //foreach loop
    // foreach ($array as $key => $value) {
    //     echo "". $key ."". $value ."";
    // }

    //Do-while Loop
    $i=0;
    do{
        echo " " . $i. " " . $array[$i]. "<br>";
        $i++;
    }while($i<count($array));
    ?>

</body>

</html>