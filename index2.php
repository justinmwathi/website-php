<?php
//Arithmetic operators
//$x=10;
//$y=2;
//$z=null;

//$z=$x + $y;
//$z=$x - $y;
//$z=$x * $y;
//$z=$x/$y;
//$z=$x **$y;
//$z=$x %$y;
//echo"{$z}";

//Increment/Decrement operators

//$counter=0;

//$counter++
//$counter--
//$counter+=2
//$counter+=2;
//echo"{$counter}";

//Operator Precedence[PEMDAS]
//()
//**
//* / %
//+ -
//$total=1+2-3*4/5 ** 6;
//echo $total;
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method='post'>
    <label>Quantity:</label><br>
    <input type='text' name='quantity'><br>
    <input type="submit" value='total'>
</form>
</body>
</html>
<?php

    $item="pizza";
    $price=200;
    $_POST[]
   // echo"{$_POST['username']}<br>";
    //echo"{$_POST['password']}<br>";

    //$_GET = Data is appended to the url
    //        NOT SECURE
    //        char limit
    //        Bookmark is possible w/values
    //        GET requests can be cached
    //        Better for a search page.

    //$_POST= Data is packaged inside the body of the HTTP request
    //        MORE SECURE
    //        No data limit
    //        Cannot bookmark
    //        GET requests cannot be cached
    //        Better for submitting credentials
?>