<?php 
$conn=new mysqli("localhost","root","","session");
$uname = $_POST['username'];
$pass = $_POST['password'];

$query = "select * from rec_sess where uname = '$uname' and pass = '$pass' ";
$result =  $conn->query($query);
$row = mysqli_fetch_array($result);
$hai =$row['uname'];


if($hai)
{   
    session_start();
    $_SESSION['u_name']= $row['uname'];
   echo $n=$_SESSION['u_name'];
}


?>

