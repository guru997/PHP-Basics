<html>
<head>
    <title> Establish connection </title>
<body>  

<!--- PHP ---->


<?php 
if(isset($_POST["submit"]))
{
$Ename = $_POST["ename"];
$Ssn = $_POST["ssn"];
$Dept = $_POST["dept"];
$Salary = $_POST["salary"];
$Homeaddress = $_POST["homeaddress"];
$conn = mysqli_connect('localhost','root','');
$select = mysqli_select_db($conn,'record');

$query = "Insert into emp_record(enam,ssn,dept,salary,homeaddress) Values('$Ename','$Ssn','$Dept','$Salary','$Homeaddress')";
$execute = mysqli_query($conn,$query);
}
?>




<!--HTML --------->
<form action = "index.php" method = "Post">
<fieldset>

  Employee Name:<input type = "text" Name="ename" value=""><br><br>
  SSN:<input type = "text" Name="ssn" value=""><br><br>
 Department:<input type = "text" Name="dept" value=""><br><br>
  Salary:<input type = "text" Name="salary" value=""><br><br>
  Home Address:<textarea Name="homeaddress" value=""></textarea><br><br>
<input type = "submit" Name = "submit" value="submit"><br>


</fieldset>

</body>
</html>
