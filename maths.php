<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="maths.php" method="post">
     <label>radius in cm:</label>
     <input type="text" name="radius">
     <input type="submit" value="calculate">   

    </form><br>
</body>
</html>
<?php

    $radius=$_POST['radius'];
    $circumference=null;
    $area=null;
    $volume=null;
    $volume=4/3 * pi() * pow($radius,3);
    $volume=round($volume,2);
    $area=pi()* pow($radius,2);
    $area=round($area,2);
    $circumference=2 * pi() * $radius;
    $circumference=round($circumference,2);
    echo"Circumference={$circumference}cm<br>";
    echo"Area={$area}cm^2<br>";
    echo"Volume={$volume}cm^3";
    //$x=$_POST['x'];
    //$y=$_POST['y'];
    //$z=$_POST['z'];
    //$total=null;


   //$total=abs($x);Absolute value
   //$total=round($x);
   //$total=floor($x);Round down
   //$total=ceil($x);Round up
   //$total=pow($x,$y);Raises a base to a given power
   //$total=sqrt($x);
   //$total=max($x,$y,$z);
   //$total=min($x,$y,$z);
   //$total=pi();3.14
  // $total=rand(1,6);Generates random numbers between 1 and 6

    //echo"Total:{$total}";
    

 ?>