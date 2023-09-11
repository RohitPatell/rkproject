<?php
$firstname =    $_POST['firstname'];
$lastname =    $_POST['last_name'];
$city =    $_POST['city'];
$state =    $_POST['state'];
$username =    $_POST['username'];
$password =    $_POST['password'];

$conn = new mysqli( 'localhost','root','formdata');
if(conn->connect_error){
    die('Connection Failed : '.conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstname,lastname,city,state,username,password)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$firstname,$lastname,$city,$state,$username,$password);
    $stmt->execute();
    echo "registration successfully.....";
    $stmt->close();
    $conn->close();
}

?>