<?php 

if (isset($_POST['btn'])) {

	$otp = rand(1111,9999);
	
	$mob= $_POST['num'];
	if(preg_match("/^\d+\.?\d*$/",$mob) && strlen($mob)==10){

$fields = array(
    "variables_values" => "$otp",
    "route" => "otp",
    "numbers" => "$mob",
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: I0PyKDo5LdOMwFkm9Bp76NlYEjxtqSsb283zVAhWUQCHXgGnfrqk2A1RmrsfjobFyY8HvEKNzcMtuG9I",
    "accept: /",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
  $data = 
}

}else{

 echo 0;

}
}

?>


<!DOCTYPE html>
<html>
<head>
<title>How to Implement OTP SMS Mobile Verification in PHP with TextLocal</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>


	<div class="container">
		<div class="error"></div>
		<form id="frm-mobile-verification" method="post">
			<div class="form-heading">Mobile Number Verification</div>

			<div class="form-row">
				<input type="text" id="mobile" name="num" required class="form-input"
					placeholder="Enter the 10 digit mobile">
			</div>
			<br><br>

			<input type="submit" class="btnSubmit" value="Send OTP" name="btn">
		</form>
	</div>

	
</body>
</html>