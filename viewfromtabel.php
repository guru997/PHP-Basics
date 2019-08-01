<html>

<head><title>View from Table</title>
</head>
<body>


    <table width = "1000" border= "5" align = "center">
    <caption>View From Table</caption>
    <tr>
        <th>ID</th>   
        <th>Emplyee Name</th>
        <th>SSN</th>
        <th>Department</th>
        <th>Salary</th>
        <th>Homeaddress</th> 
    </tr>
    
<?php
$conn = mysqli_connect('localhost','root','');
$select=mysqli_select_db($conn,'record');
$view = "Select * from emp_record";
$execute = mysqli_query($conn,$view);

 while($datarows = mysqli_fetch_array($execute,MYSQLI_BOTH))
 {
    $Id = $datarows['id'];
    $Ename = $datarows['enam'];
    $Ssn = $datarows['ssn'];
    $Dept = $datarows['dept'];
    $Salary = $datarows['salary'];
    $Homeaddress = $datarows['homeaddress'];





?>
<td><?php echo $Id; ?></td>
<td><?php echo $Ename; ?></td>
<td><?php echo $Ssn; ?></td>
<td><?php echo $Dept; ?></td>
<td><?php echo $Salary; ?></td>
<td><?php echo $Homeaddress; ?></td>

 <?php } ?>



</table>



</body>
</html>

