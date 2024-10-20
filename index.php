<?php
    echo"I love pizza <br>";
    echo"It's really good";
    //This is a comment
    /*This 
    is
     a 
     multi-line 
     comment*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>Order a pizza</button>
</body>
</html>

<?php
//VARIABLES IN PHP
    $name="Justin Mwathi";//String variables
    $food='pizza';
    $email="ted123@gmail.com";

    $age=18;//Integer variables
    $users=2;
    $quantity=3;

    $gpa=2.5;//Floating numbers
    $price=2.99;
    $tax_rate=5.1;

    $employed=true;//Boolean variables
    $online=false;
    $for_sale=true;

    $total=null;
    /*echo "Hello {$name} <br>";//A string literal
    echo"You like {$food}<br>";
    echo"Your email is {$email}<br>";
    echo"You are {$age} years old.<br>";
    echo"There are {$users} users online <br>";
    echo"You would like to buy {$quantity} cars tomorrow <br>";
    echo"My GPA is {$gpa}";
    echo"Your pizza is ksh.{$price}<br>";
    echo"The sales tax rate is {$tax_rate}%";
    echo"Online status {$online}<br>"/*If a boolean value is false,nothing is displayed on the browser*/;
    echo"You have ordered {$quantity} x {$food}s <br>";
    $total=$quantity * $price;
    echo"Your total is Ksh.{$total}";

?>