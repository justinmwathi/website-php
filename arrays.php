<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="arrays.php" method="post">
        <label>Enter a country:</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php
//Arrays
//$foods=array('apple','orange','banana','coconut');
//$foods[0]="pineapple";
//array_push($foods,'pineapple');
//array_pop($foods);
//array_shift($foods);
//$reversed_foods=array_reverse($foods);
//echo count($foods);
//foreach($reversed_foods as $food){
//echo $food . "<br>";
//}

//Associative arrays-An array made of key=>value pairs
  $capitals=array("USA"=>"Washington DC","Japan"=>"Tokyo","Kenya"=>"Nairobi");
  $capital=$capitals[$_POST["country"]];
  echo "The capital is {$capital}";
?>