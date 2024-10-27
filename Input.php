<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Input.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">

    </form>
</body>
</html>

<?php
if(isset($_POST['login'])){
    //Sanitize input
    //$username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    //$age=filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
    //$email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
    
    //Validate input
    $age=filter_input(INPUT_POST,'age',FILTER_VALIDATE_INT);
    $email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);

    if(empty($email)){
        echo "Invalid email!";
    }
    else{
        echo"Your email is:{$email}.";
    }

    echo $username;
    echo $age;
    echo $email;

}
?>