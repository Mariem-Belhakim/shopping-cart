<?php

include("bd.php");
if(isset($_POST['submit'])){
$name=htmlspecialchars(trim(strtolower($_POST['uname'])));
$password=$_POST['upassword'];
$query="SELECT * FROM users WHERE user_name='$name' && password='$password'";

if(mysqli_num_rows(mysqli_query($conn,$query))>0){
    session_start();
    $_SESSION['user_name']=$name;
    header("location:admin.php");
}else{
    echo "password incorrect";
}

}



?>