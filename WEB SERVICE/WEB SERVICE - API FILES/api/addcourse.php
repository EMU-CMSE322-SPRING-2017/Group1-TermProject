<?php

header('Content-Type: text/html; charset=UTF-8');
//Veritabanı bağlantı dosyası
include_once "connect.php";

//giriş formu verileri
$courseid = $_POST['course_id'];
$coursename = $_POST['course_name'];
$department = $_POST['dept_name'];
$instructorid = $_POST['instructor_id'];


//sorgu
$sorgu = "insert into courses (course_id,course_name,dept_name,instructor_id) values ('" . $courseid . "','" . $coursename . "','" . $department . "','" . $instructorid . "')";

$sorgu3 = "insert into instructor_courses (user_id,course_id) values ('" . $instructorid . "','" . $courseid . "')";

$sorgu2 = "select * from courses where course_id='" . $courseid . "' and course_name='" .$coursename . "' and instructor_id='" . $instructorid . "' ";
$result2 = mysqli_query($connection,$sorgu2);
$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);

if (mysqli_num_rows($result2) > 0)
{
    $response['message']='CourseAlreadyExist';
  $response['type']="CourseAlreadyExist";
}
else
{
$result3 = mysqli_query($connection,$sorgu3);
    
$result = mysqli_query($connection,$sorgu);

$result2 = mysqli_query($connection,$sorgu2);
$row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);

if (mysqli_num_rows($result2) > 0)
{
 
    $response['message']='CourseAddedSuccess';
    $response['type']= "$courseid";
    $returnValue = $row2;
}    
else
{
  $response['message']='Error';
  $response['type']="NotAdded";
}
}

echo json_encode($response);

mysqli_close($connection);
