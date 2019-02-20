<?php
$host="localhost";
$user="root";
$pass="";
$db="dairy";

$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);

if(isset($_POST['uname'])){
    $username=$_POST['uname'];
    $password=$_POST['pword'];

    $sql="SELECT * from login where uname='".$username."' AND pword='".$password."' limit 1";
    
    $result=mysqli_query($conn,$sql);
    
    $check=mysqli_num_rows($result);
    if($check==1){
        
        //exit();
        echo "<script> location.href='new.html'; </script>";
        echo "you have logged in sucessfully";

    }
    else{
          
                
                echo '<p style="color:white;text-align:center;padding-top:70px;font-size:20px;font-family:sans-serif;">
      Enter correct username/password</p> ';

   // echo "Enter correct username/password";
    //exit();
    }
}

?>

<html>
<head>
<title>LOGIN FORM</title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<div class="loginbox">
<img src="avatar.png" class="avatar">
<h1><div class="new">VishwaCTF</div></h1>
<form  method="POST">
Username:<input type="text" name="uname" placeholder="Enter username">
Password:<input type="password" name="pword" placeholder="Enter Password">
         <input type="submit" value="Let's Hack">
</form>
</div>
</body>
</head>
</html>
