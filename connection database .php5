<?php
$servername="localhost";
$username="eddlee";
$password="lee3b@7#";
$dbname="dbproject.php";
//connection goes here
$conn =new mysql($servername,$username,$password,$dbname);
//checking connection varidity.
If ($conn ->connection_error) {
    die("connection failed" .$conn ->connection_error);
}
echo "connection saccessfully";
?>