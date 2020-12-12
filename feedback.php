<!DOCTYPE html>
<html lang="en">
<head>
<title>Feedback - FourWheelz</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/feedback.css">
</head>

<body>
<div class="header">
  <h1>"Thanks For Your Valuable Feedback !"</h1>
</div>
<div class="para">
  <h1>We are working hard on improving ourself</h1>
</div>
<br>
<br>
<div class="click">
<button class="clickme" onclick="window.location.href = 'index.html';">Go Back</button>
</div>


<?php

$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$email = filter_input(INPUT_POST, 'email');
$subject = filter_input(INPUT_POST, 'subject');
 if (!empty($email)){
if (!empty($subject)){
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
  $sql = "INSERT INTO feedback (fname, lname, email, subject)
  values ('$fname','$lname','$email','$subject')";
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
  echo "subject should not be empty";
  die();
 }
?>

</div>

</body>

</html>
