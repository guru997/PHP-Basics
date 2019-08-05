<?php

include('connect.php');

if(isset($submit1))
{
    if(!empty($username) && !empty($password))
    {  
$username = $_POST["uname1"];
$password = $_POST["pass1"];
$submit1 = $_POST["submit1"];

$query = "INSERT INTO reg(uname,pass) VALUES ('$username','$password')";
if($query){echo 'hai';}
$execute = mysqli_query($con,$query);

header('location:main.php');
   
}
else
{
    echo "fill the fields";
}

    
}


?>

<html>
<head>
    <title>Registration</title>
</head>
    <body>
        <form action = "register.php" method = "POST">
        USERNAME:<input type = "text" Name = "uname1"><br><br>
        PASSOWRD:<input type = "password" Name = "pass1"><br><br>
        <input type = "submit" name = "submit1">
        </form>
    </body>


</html>