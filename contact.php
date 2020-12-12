<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Dealer - FourWheelz</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/feedback.css">
</head>

<body>
<div class="header">
  <h1>"Your requirements has been sent to the dealer !"</h1>
</div>
<div class="para">
  <h1>*Please Note - Dealer may take 2 to 3 working days to provide feedback* </h1>
</div>
<br>
<br>
<div class="click">
<button class="clickme" onclick="window.location.href = 'contactdealer.html';">Go Back</button>
</div>


<?php

$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$city = filter_input(INPUT_POST, 'city');
$requirements = filter_input(INPUT_POST, 'requirements');
 if (!empty($email)){
if (!empty($phone)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "fourwheelz";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO contact (fname, lname, email, phone, city, requirements)
  values ('$fname','$lname','$email','$phone','$city','$requirements')";
  if ($conn->query($sql)){
    echo "";
  }
  else{
    echo "Error:". $sql ."<br>". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "email should not be empty";
  die();
}
 }
 else{
  echo "phone should not be empty";
  die();
 }
?>

</div>

</body>

</html>