<?php
include ("db_connection.php");
if(empty($_POST['bugName']) || empty($_POST['category']) || empty($_POST['summary'])){
    echo "Enter all values";
}else {
    $bugname = $_POST['bugName'];
    $bugcategory = $_POST['category'];
    $bugsummary = $_POST['summary'];
    $getbugs = "INSERT INTO bugs(bugname, bugcategory, bugsummary) VALUES ('$bugname', '$bugcategory', '$bugsummary')";
    $result = mysqli_query($db, $getbugs);
    header("Location: showbugs.php");
}
?>