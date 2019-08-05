
<html>
<head>
    <title>Registration</title>
</head>
<?php
include('connect.php');
    //work after submit button clicked
    if(isset($_POST['submitName'])){
        
        echo nl2br("\n inside if");
        if($_POST['uname'] && $_POST['pass']){
            $username = $_POST['uname'];
            $password = $_POST['pass'];
            $query = "INSERT INTO reg(uname,pass) VALUES ('$username','$password')";

            if($query){
                echo nl2br("\n---- query work");
            }
            else{
                echo nl2br("\n---- query did not work");
            }

            $execute = mysqli_query($con,$query);
            if($execute){
                echo nl2br("\n---- query executed");
            }
            else{
                echo nl2br("\n---- query not executed");
            }
            header('location:main.php');
        }
        else{
            echo "<script>alert('Fill all fields')</script>";
        }
    }
?>
<body>
    <h2>New User</h2>
    <form name="formname" action="" method = "post">
        USERNAME:<input type = "text" name = "uname" required /><br><br>
        PASSOWRD:<input type = "password" name = "pass" required /><br><br>
        <button type = "submit"  name= "submitName" value = "submit">Submit</button>
    </form>
</body>
</html>