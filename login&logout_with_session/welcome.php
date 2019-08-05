
<?php
    session_start();
 
    if(isset($_SESSION['uname']))
    {
        echo ' WelCome ' . $_SESSION['uname'].'<br/>';
        echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:main.php");
    }
 
?>