<?php
/**
 * Created by PhpStorm.
 * User: Haro231
 * Date: 03/05/2016
 * Time: 21:34
 */

include("dbconnect.php");
if(empty($_POST["username"])|| empty($_POST["password"])){
    echo "Both fields are required";
}
else
{

}

$username = $_POST [username];
$password = $_POST [password];

$sql = "SELECT uid FROM users WHERE username ='$username' and password = '$password'";

$result = mysqli_query($db,$sql);

if(mysqli_num_rows($result) == 1){
    header("location: home.php");
}
else{
    echo "Incorrect username or password" . mysqli_errno($result);
}
?>

