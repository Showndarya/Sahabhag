<?php
 session_start();
$con = mysqli_connect("localhost","id2116692_mushu","mushu");
if (!$con) {  die('Could not connect: ' . mysqli_error($con)); }
mysqli_select_db($con,"id2116692_sahabhag");

   
if(!empty($_REQUEST["Submit"])) {
	$result = mysqli_query($con,"SELECT * FROM logincredadmin WHERE Username='" . $_REQUEST["Username"] . "' and Password = '". $_REQUEST["password"]."'");
	$row  = mysqli_fetch_array($result);


 if (is_array($row)) {
 $_SESSION["Username"] = $row['Username'];
 $username = $row['Username'];
		  
		?>
		<style>
		.logout {
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
    width: 10em;  
    height: 4em;
}
</style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<form action="" method="post" id="frmLogout">

<nav class="navbar ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Sahabhag</a>
    </div>
    <ul class="nav navbar-nav navbar-right ">
       <li><button class="logout" name="logout"><span class="glyphicon glyphicon-log-out">Logout</button></li>
    </ul>
  </div>
</nav>
<br />
<div style="padding: 15px;" class="member-dashboard"><h3>Welcome <b><?php echo ucwords($username); ?></b></h3></div><br>



<?php
}
		else
		{
		echo "Try again";
		}
  }
	echo '<table style="border-collapse: collapse;border: 1px solid black; width=100%;">';
	echo '<caption>NGO DB Display</caption><br>';
	echo '<tr style="border: 1px solid black;">';
	echo '<th style="padding: 15px;border: 1px solid black;width=20%;">NGO ID</th>';
    echo '<th style="padding: 15px;border: 1px solid black;width=20%;">Name</th>';
    echo '<th style="padding: 15px;border: 1px solid black;width=25%;">Contact</th>';
    echo '<th style="padding: 15px;border: 1px solid black;width=25%;">Email</th>';
    echo '<th style="padding: 15px;border: 1px solid black;width=30%;">Description</th>';
  	echo '</tr>';
	$data = mysqli_query($con,"SELECT * FROM NgoStep1 WHERE NN NOT IN (SELECT NN1 FROM NgoStep2)") or die(mysqli_error($con)); 
	  while($row = mysqli_fetch_assoc($data)){
     echo '<tr style="border: 1px solid black;">';
     echo "<td style='padding: 15px;border: 1px solid black;width=20%;'>{$row['NN']}</td>";
     echo "<td style='padding: 15px;border: 1px solid black;width=20%;'>{$row['Name']}</td>";
     echo "<td style='padding: 15px;border: 1px solid black;width=25%;'>{$row['Contact']}</td>";
     echo "<td style='padding: 15px;border: 1px solid black;width=25%;'>{$row['Email']}</td>";
     echo "<td style='padding: 15px;border: 1px solid black;width=30%;'>{$row['Description']}</td>";
     echo '</tr>';
    }
 
 echo '<div style="display:inline-block;position:relative;">';   
 echo'Enter NGO ID to verify:<input type="text" name="vn">';
 echo ' <input type="submit" name="submit" value="Verify">';
 echo '</div>';
 echo '<table align="center" style="border-collapse: collapse;border: 1px solid black; width=100%;">';
 echo '<caption>Volunteer DB Display</caption><br>';
	echo '<tr style="border: 1px solid black;">';
	echo '<th style="padding: 15px;border: 1px solid black;width=20%;">Volunteer ID</th>';
    echo '<th style="padding: 15px;border: 1px solid black;width=20%;">First Name</th>';
    echo '<th style="padding: 15px;border: 1px solid black;width=25%;">Last Name</th>';
    echo '<th style="padding: 15px;border: 1px solid black;width=25%;">Age</th>';
    echo '<th style="padding: 15px;border: 1px solid black;width=30%;">Gender</th>';
    echo '<th style="padding: 15px;border: 1px solid black;width=30%;">Contact</th>';
    echo '<th style="padding: 15px;border: 1px solid black;width=30%;">Address</th>';
    echo '<th style="padding: 15px;border: 1px solid black;width=30%;">Email</th>';
    echo '<th style="padding: 15px;border: 1px solid black;width=30%;">Start Date</th>';
    echo '<th style="padding: 15px;border: 1px solid black;width=30%;">End Date</th>';
    echo '<th style="padding: 15px;border: 1px solid black;width=30%;">Days Available</th>';
    echo '<th style="padding: 15px;border: 1px solid black;width=30%;">Time Availability</th>';
    echo '<th style="padding: 15px;border: 1px solid black;width=30%;">Location</th>';
    echo '<th style="padding: 15px;border: 1px solid black;width=30%;">Skills</th>';
  	echo '</tr>';
	$data = mysqli_query($con,"SELECT * FROM Volunteers") or die(mysqli_error($con)); 
	  while($row = mysqli_fetch_assoc($data)){
     echo '<tr style="border: 1px solid black;">';
     echo "<td style='padding: 15px;border: 1px solid black;width=20%;'>{$row['VN']}</td>";
     echo "<td style='padding: 15px;border: 1px solid black;width=20%;'>{$row['FirstName']}</td>";
     echo "<td style='padding: 15px;border: 1px solid black;width=25%;'>{$row['LastName']}</td>";
     echo "<td style='padding: 15px;border: 1px solid black;width=25%;'>{$row['Age']}</td>";
     echo "<td style='padding: 15px;border: 1px solid black;width=30%;'>{$row['Gender']}</td>";
     echo "<td style='padding: 15px;border: 1px solid black;width=30%;'>{$row['Contact']}</td>";
     echo "<td style='padding: 15px;border: 1px solid black;width=20%;'>{$row['Address']}</td>";
     echo "<td style='padding: 15px;border: 1px solid black;width=20%;'>{$row['Email']}</td>";
     echo "<td style='padding: 15px;border: 1px solid black;width=25%;'>{$row['StartDate']}</td>";
     echo "<td style='padding: 15px;border: 1px solid black;width=25%;'>{$row['EndDate']}</td>";
     echo "<td style='padding: 15px;border: 1px solid black;width=30%;'>{$row['DayA']}</td>";
     echo "<td style='padding: 15px;border: 1px solid black;width=30%;'>{$row['TimeA']}</td>";
     echo "<td style='padding: 15px;border: 1px solid black;width=30%;'>{$row['Location']}</td>";
     echo "<td style='padding: 15px;border: 1px solid black;width=30%;'>{$row['Skills']}</td>";
     echo '</tr>';
    }
     if (isset($_REQUEST['logout']))
	{
		 unset($username);  
         header("Location: volpage.php");
      }
      if (isset($_REQUEST['submit']))
	{
 		
 		$v=$_REQUEST['vn'];
$query = "SELECT * FROM NgoStep1 WHERE NN='$v'";
$result = mysqli_query($con,$query);
if($result === FALSE) { 
    die(mysqli_error($con)); 
}

$row = mysqli_fetch_array($result); 

$ssn=$row['NN'];
$name=$row['Name'];
$contact=$row['Contact'];
$email=$row['Email'];
$des=$row['Description']; 
 
$sql=mysqli_query($con,"INSERT INTO NgoStep2 (NN1,Name,Contact,Email,Description) VALUES ('$ssn','$name','$contact','$email','$des')") or die(mysql_error());

function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
$my_password = random_password();

if(isset($_POST['submit'])){
 /*   $to = $email; // this is your Email address
    $from = "showndarya.m@somaiya.edu"; // this is the sender's Email address
    $subject = "Login Credentials";
    $message = "We would like to inform you that your registeration has been validated.Here goes your login credentials :\n\nUsername:" .$name ."\nPassword: " . $my_password . " \n\nPlease login and complete the registeration." ;
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);*/
    echo "Ngo Verified!";
    }
$query = "SELECT * FROM NgoStep2 WHERE NN1='$ssn'";
$result = mysqli_query($con,$query);
if($result === FALSE) { 
    die(mysqli_error($con)); 
}

$row = mysqli_fetch_array($result); 
$sn=$row['NN'];
$sql="INSERT INTO logincredn (NN,Username,Password) VALUES ('$sn','$name','$my_password')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  }
 ?>
 
 

 
 
