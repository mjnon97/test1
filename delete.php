<!DOCTYPE html>
<?php
header('access-Control-Allow-Origin: *');
include 'connect.php';
if(isset($_GET['id']))
$id = $_GET['id'];
else
$id = 0;
$sql = "DELETE  FROM accounts WHERE id = $id";

$result = mysqli_query($conn,$sql);
echo "Success";
?>

