<?php

include "db.php";

$email = $_POST['email'];

$password = $_POST['password'];

$key="testproject123";

$pasword = openssl_encrypt($password,"AES256",$key);

$sql = "INSERT INTO users (email,password) VALUES ('email','password');"

$result = mysqli_query($conn,$sql);

if($result){
	echo json_encode(array("status"=>200,"msg"=>"OK"));
}else{
	echo json_encode(array("status"=>400,"msg"=>"ERROR"));
}

?>