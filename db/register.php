<?php 


$id = uniqid("");
$user = $_POST['username'];
$pass = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$nickname = $_POST['nickname'];
$sex = $_POST['sex'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$address = $_POST['address'];
$image = $_POST['image'];
require 'connect.php';
$sql = "INSERT INTO members (username,password,firstname,lastname,nickname,sex,tel,email,address,image,id) 
    VALUES ('$user','$pass','$firstname','$lastname','$nickname','$sex','$tel','$email','$address','$image','$id')";
    
if ($conn->query($sql) === false) {
    echo "Error: " . $sql . "<br>" . $conn->error;


}  
?>