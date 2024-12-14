<?php

$sever = "localhost";
$username = "root";
$password="";
$dbname = "marathon";


$con = mysqli_connect($sever,$username,$password,$dbname);

if(!$con){
    echo "not connected";

}

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$contact_name=$_POST['contact_name'];
$contact_phone=$_POST['contact_phone'];


$sql = "INSERT INTO `users`(`name`, `email`, `phone`, `contact_name`, `contact_phone`) VALUES ('$name','$email','$phone','$contact_name','$contact_phone')";

$result= mysqli_query($con , $sql);

if($result){
    echo "RegisteredSuccesfully";
}else{
    echo "query failled ....";
}


?>