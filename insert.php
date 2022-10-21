<?php

include"dbcon.php";

$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// echo $name,$phone,$message;
$data ="insert into contact(name,phone,message)value('$name','$phone','$message')";

mysqli_query($connect,$data);
header('location:index.html');

?>



