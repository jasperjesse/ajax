<?php
session_start();
header('location:bro.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$name = $_POST['user'];
$pass = $_POST['password'];
$s="select * from jaspero where name= '$name'";
$result= mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo "username already taken";

}
else{
    $reg= "insert into jaspero(name, password) values('$name', '$pass')";
    mysqli_query($con, $reg);
    echo "Registration succefull";

}


?>