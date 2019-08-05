<?php
session_start();

include('connect.php');

if(isset($_POST['submit']))
{
    if($_POST['uname'] && $_POST['pass'])
    {
        $username = $_POST['uname'];
        $password = $_POST['pass'];
        $query = "select * from reg where uname = '$username' and pass = '$password'";
        $execute = mysqli_query($con,$query);

        $log = mysqli_fetch_array($execute);

        if($log){echo 'vellai seithu';} else { echo 'vellai seiyala';}
        $user = $log['uname']; echo $user;
        $pass = $log['pass'];   echo $pass;

        if($user && $pass)
        {
            $_SESSION['uname'] = $user;
            header('location:welcome.php');
        }
        else
        {
            header('location:main.php');
            
        }



    }
    else
    {
        header('location:main.php'); ?>
        <script> alert("login failed!");</script>
   <?php } 
   



}
?>

