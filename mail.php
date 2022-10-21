<?php

session_start();

 include"dbcon.php";


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];





$data = "insert into contact(name,email,phone,message)value('$name','$email','$phone','$message')";
$kawach =mysqli_query($connect,$data);



header('location:index.html')

// $url = "https://test.payu.in/merchant/postservice?form=2-H";

// $req = req_init($url);
// req_setopt($req, CURLOPT_URL, $url);
// req_setopt($req, CURLOPT_POST, true); req_setopt($req, CURLOPT_RETURNTRANSFER, true);

// $headers = array( "Content-Type: application/x-www-form-urlencoded", ); req_setopt($curl, CURLOPT_HTTPHEADER, $headers);
// $data = "key=&command=&var1=&var2=&var3=&var4=&var5=&var6=&var7=&var8=&var9=&hash="

// req_setopt($curl, CURLOPT_POSTFIELDS, $data);
// $resp = req_exec($req);
// req_close($req);
// var_dump($resp);


?>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
