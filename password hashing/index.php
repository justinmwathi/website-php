<?php
$password="justin2006";
$hash=password_hash($password,PASSWORD_DEFAULT);
if(password_verify("justin2006",$hash)){
    echo "You are logged in";
}
else{
    echo"Incorrect password!";
}


?>