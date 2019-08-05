<?php 
session_start();






?>



<html>
<head>
    <title>Login</title>
</head>
<body>

<form action = "login.php" method = "POST">
    
        USERNAME:<input type = "text" name = "uname"><br><br>
        PASSOWRD:<input type = "password" name = "pass"><br><br>
        <input type = "submit" name = "submit">
        not a user? Register Here! /<a href = "register.php">register</a>
 </form>




</body>
</html>