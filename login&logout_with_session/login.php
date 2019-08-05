<?php
session_start();

include('connect.php');

if(isset($_POST['submit'])){
   
   if(empty($_POST['uname']) || empty($_POST['pass']))
   {
        header("location:main.php?Empty = please fill in the blakns");
   }
   else
   {
       $query = "select * from employee where UName='".$_POST['uname']."' and Pass='".$_POST['pass']."'";
       $result=mysqli_query($con,$query);

       if(mysqli_fetch_assoc($result))
       {
           $_SESSION['user']=$_POST['uname'];
           header("location:welcome.php");
       }
       else
       {
           header("location:main.php?Invalid= Please Enter Correct User Name and Password ");
       }
   }    



}
?>

