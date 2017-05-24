<?php

header('Content-Type: text/html; charset=UTF-8');
//Veritabanı bağlantı dosyası
include_once "connect.php";

//giriş formu verileri
$userid = $_POST['userid'];
$password = $_POST['password'];
$department = $_POST['department'];
$username = $_POST['username'];
$usertype = $_POST['usertype'];

//sorgu
$sorgu = "insert into users (userid,passw,utype,name,deptname) values ('" . $userid . "','" . $password . "','" . $usertype . "','" . $username . "','" . $department . "')";
$sorgu2 = "select * from users where userid='" . $userid . "' and passw='" .$password . "' and utype='" . $usertype . "' ";
$result2 = mysqli_query($connection,$sorgu2);
$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);

if (mysqli_num_rows($result2) > 0)
{
    $response['message']='UserAlreadyExist';
  $response['type']="UserAlreadyExist";
}
else
{
    
$result = mysqli_query($connection,$sorgu);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$result2 = mysqli_query($connection,$sorgu2);
$row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);

if (mysqli_num_rows($result2) > 0)
{
 
    $response['message']='UserAddedSuccess';
    $response['type']= "$username";
    $returnValue = $row2;
}    
else
{
  $response['message']='Error';
  $response['type']="NotRegistered";
}
}

echo json_encode($response);

mysqli_close($connection);
