<?php
$username=array("Justin","Mwathi", "Kimani");
$phone_number='07-95-62-21-94';
//$username=strtoupper($username);
//$username=strtolower($username);
//$username= str_pad($username,20,"X");
//$username=strrev($username);
//$fullname=explode(" ",$username);
//foreach($fullname as $name){
//    echo$name."<br>";
//}
//$first_name=substr($username,0,6);
//$last_name=substr($username,7);
$username=implode(" ",$username);
echo$username;
$phone_number=str_replace("-","/",$phone_number);
echo $phone_number;
echo $last_name;
?>