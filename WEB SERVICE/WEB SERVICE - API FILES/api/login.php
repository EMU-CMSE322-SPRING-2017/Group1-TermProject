<?php

header('Content-Type: text/html; charset=UTF-8');
//Veritabanı bağlantı dosyası
include_once "connect.php";

//giriş formu verileri
$email = $_POST['email'];
$password = $_POST['password'];

//sorgu
$sorgu = "select * from users where userid='" . $email . "' and passw='" .$password . "' and utype='student' ";
$sorgu2 = "select * from users where userid='" . $email . "' and passw='" .$password . "' and utype='instructor' ";
$sorgu3 = "select * from users where userid='" . $email . "' and passw='" .$password . "' and utype='admin' ";


$result = mysqli_query($connection,$sorgu);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$result2 = mysqli_query($connection,$sorgu2);
$row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
$result3 = mysqli_query($connection,$sorgu3);
$row3=mysqli_fetch_array($result3,MYSQLI_ASSOC);

if (mysqli_num_rows($result) > 0)
{
 if (!empty($row)) 
 {
    $response['message']='LoginOK';
    $response['type']= 'student';
    $returnValue = $row;
  }
}
else if (mysqli_num_rows($result2) > 0)
{
    if (!empty($row2)) 
 {
    $response['message']='LoginOK';
    $response['type']='instructor';
    $returnValue = $row2;
  }
}
else if(mysqli_num_rows($result3) > 0)
{
    if (!empty($row3)) 
 {
    $response['message']='LoginOK';
    $response['type']='admin';
    $returnValue = $row3;
  }
}    
else
{
  $response['message']='hatali';
  $response['type']="HATA: Böyle bir kullanici bulunamadi";
}
echo json_encode($response);

mysqli_close($connection);
