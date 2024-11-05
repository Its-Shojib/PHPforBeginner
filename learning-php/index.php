<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>
    <?php

    echo"Hello World!";
    echo "<br>";
    $text = "I love PHP";

    $text .= " & I also Love Laravel";

    echo "<br>";
    echo "Hello! $text";
    echo "<br>";

    $num= 12.12;
    echo "<br>";
    echo $num;
    echo "<br>";

    echo " Leanth of the string is : ", +  strlen($text);
    echo "<br>";
    echo var_dump(is_float($num)) ;
    echo "<br>";
    echo strtoupper($text) ;

    echo "<br>";

    echo strtolower($text) ;

    echo "<br>";


    echo str_replace("PHP", "Dolly", $text);

    echo "<br>";

    // echo strrev($text) ;

    echo "<br>";
    echo substr($text, 10, length: 6);
    echo "<br>";
    echo substr($text   , 6);


    // var_dump($text)


    ?>
</body>
</html>