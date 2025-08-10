<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="collage";

$conn =mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo "connection suceesfull";
}
else{
    echo "connection failed";
}


?>

