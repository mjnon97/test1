<!DOCTYPE html>
<?php
header('access-Control-Allow-Origin: *');
include 'connect.php';
if (isset($_GET['frind'])){$frind = 1;}else{$frind = 0;}
if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['adress']) && isset($_GET['phone'])&& isset($_GET['accept'])){
$name = $_GET['name'];
$mail = $_GET['mail'];
$adress = $_GET['adress'];
$phone = $_GET['phone'];
$frind = $frind;
$accept = $_GET['accept'];

if (isset($frind)){$frind = 1;}else{$frind = 0;}

if(isset($accept)){
$accept = 1;

if(strlen($name)>2 && strlen($mail) > 2 && strlen($adress)> 2 && strlen($phone)> 2){
$sql = "INSERT INTO accounts (name, mail, adress, phone,frind,accept) VALUES ('$name', '$mail', '$adress', '$phone','$frind','$accept')";
$result = mysqli_query($conn,$sql);


$st1="תודה פנייתך התקבלה";
$st2="החוברת תשלח אליך במייל בהקדם!";
$im=`<image src="v.png" style="text-align: center" height="200px" width="200px" />`;

}else{
    echo "Erorr2";
}
}
else{
    echo "Erorr1";
}}
else{
    $st1="we are sorry";
    $st2="-_-";
    $im="^_^";

}
// $row = mysqli_fetch_assoc($result);
    
?>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
<div style="margin-top:100px;background:blue;" width="100%" hieght="400px" class="container top">
    <div style="text-align: center"> <?php echo $im ?>
    <!-- <image src="v.png" style="text-align: center" height="200px" width="200px" /> -->
    </div>
    <br><br><br>
    <div style="text-align: center">
    <h1 style="text-align: center;text-size:39;color:white"><strong><?php echo $st1 ?></strong></h1><br>
    <h2 style="text-align: center;text-size:39;color:white"><strong><?php echo $st2 ?></strong></h2><br>
    </div>

</div>
</body>
</html>