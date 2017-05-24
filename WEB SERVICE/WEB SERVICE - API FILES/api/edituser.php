<?php

header('Content-Type: text/html; charset=UTF-8');
//Veritabanı bağlantı dosyası
include_once "connect.php";

//giriş formu verileri
$userid = $_POST['userid'];
$department = $_POST['department'];
$username = $_POST['username'];
$usertype = $_POST['usertype'];

//sorgu
$sorgu = "update users set name='" . $username . "', deptname='" . $department . "' where utype='" . $usertype . "' and userid='" . $userid . "' ";

$sorgu2 = "select * from users where userid='" . $userid . "' and utype='" . $usertype . "' and name='" . $username . "' and deptname='" . $department . "' ";

$result = mysqli_query($connection,$sorgu);
$result2 = mysqli_query($connection,$sorgu2);
$row=mysqli_fetch_array($result2,MYSQLI_ASSOC);



if (1)
{
    $result2 = mysqli_query($connection,$sorgu2);
$row=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    
    if (mysqli_num_rows($result2) > 0)
   {
        $response['message']="UserEdited";
    $response['type']= "UserEdited";
    $returnValue = $row;
  
    }
    else if(mysqli_num_rows($result2) < 1)
    {
   
        
        
        $response['message']="Error";
    $response['type']="EditError";
    }
}
   
   
echo json_encode($response);

mysqli_close($connection);
