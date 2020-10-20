<?php

session_start();

header('location:index2.php');


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregistrations');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = " select * from usertables where name = '$name' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);


if ($num == 1) {
    echo" Username already taken";
}else{
    $reg = " insert into usertables(name , password) values ('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo" Registration Successfull";
}









?>