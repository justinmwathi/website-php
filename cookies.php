<?php
//cookie=Information about a user stored in a user's web-browser targeted advertisements,browsing preferences,and other non-sensitive data
//set the time to -0 to delete a cookie
setcookie("fav_food","pizza",time()+ (86400*2),"/");
setcookie("fav_drink","Coke",time()+ (86400*3),"/");
setcookie("fav_team","Arsenal",time()+ (86400*4),"/");



if(isset($_COOKIE['fav_food'])){
    echo"Buy some {$_COOKIE['fav_food']}!!";
}
else{
    echo"I don't know your favourite food!";
}
?>