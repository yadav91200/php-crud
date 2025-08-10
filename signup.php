<?php

$survername ="localhost";
$username   ="root";
$password   ="";
$dbname     ="collage";

$conn =mysqli_connect($survername,$username,$password,$dbname);

if($conn){
    echo "connection sucesfull";
}
else{
    echo "connection failed";
}


$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$email =$_POST['email'];
$password  =$_POST['password'];
$mobileno  =$_POST['mobile no'];
$gender   =$_POST['gender'];

$sql= "insert into 'boy'  ('firstname','lastname','email','password','mobileno','gender')
values ('$firstname','$lastname','$email','$password','$mobileno','$gender')";

$result =mysqli_query($con,$sql);

if($result){
    echo "data submit";
}
else{
    echo "data not submit";
}
?>