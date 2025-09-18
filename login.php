<?php
$conn = mysqli_connect("localhost", "root", "", "examdb");
if (!$conn){
    die("connection failed:".mysqli_connect_error);
}

$mobile = $_POST['mobile'];
$password = $_POST['password'];


$sql = "SELECT * FROM customer WHERE  mobile = '$mobile' AND password = '$password'";

$result = mysqli_query($conn, $sql);
if(!$result){
    die("query failed:".mysqli_errror($conn));
}
if (mysqli_num_rows($result) > 0) { 
    echo "login successful";
    
    
}
else{
    echo "invalid username or password";
}