<?php

header('Content-Type: text/html; charset=UTF-8');
//Veritabanı bağlantı dosyası
include_once "connect.php";

//giriş formu verileri
$userid = $_POST['userid'];

//sorgu
$sorgu = "delete from users where userid='" . $userid . "'";
$sorgu2 = "select * from users where userid='" . $userid . "' ";

$result = mysqli_query($connection,$sorgu);
$result2 = mysqli_query($connection,$sorgu2);
$row=mysqli_fetch_array($result2,MYSQLI_ASSOC);



if (1)
{
    $result2 = mysqli_query($connection,$sorgu2);
$row=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    
    if (mysqli_num_rows($result2) > 0)
   {
       $response['message']="Error";
    $response['type']="DeleteError";
  
    }
    else if(mysqli_num_rows($result2) < 1)
    {
    $response['message']="UserDeleted";
    $response['type']= "UserDeleted";
    $returnValue = $row;
    }
}
   
   
echo json_encode($response);

mysqli_close($connection);
