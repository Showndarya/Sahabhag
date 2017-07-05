<?php

//Database Connection
$con = mysqli_connect("localhost","id2116692_mushu","mushu");
if (!$con) {  die('Could not connect: ' . mysqli_error($con)); }
mysqli_select_db($con,"id2116692_sahabhag");

//Database insert
$c1="";$c2="";$c3="";$ct="";
if(isset($_REQUEST['gender']) && is_array($_REQUEST['gender'])){
$checkbox1=$_REQUEST['gender'];  
foreach($checkbox1 as $chk1)   $c1 .= $chk1.",";  
}

if(isset($_REQUEST['da']) && is_array($_REQUEST['da'])){
$checkbox2=$_REQUEST['da'];  
foreach($checkbox2 as $chk2)  $c2 .= $chk2.",";  
}

if(isset($_REQUEST['bs']) && is_array($_REQUEST['bs'])){
$checkbox2=$_REQUEST['bs'];  
foreach($checkbox2 as $chk2)   $c3 .= $chk2.",";
}

$ct = mysqli_real_escape_string($con,$_REQUEST['time']);

$fname = mysqli_real_escape_string($con, $_REQUEST['firstname']);
$lname = mysqli_real_escape_string($con, $_REQUEST['lastname']);
$age = mysqli_real_escape_string($con, $_REQUEST['age']);
$tel = mysqli_real_escape_string($con, $_REQUEST['tel']);
$address = mysqli_real_escape_string($con, $_REQUEST['address']);
$email = mysqli_real_escape_string($con, $_REQUEST['email']);
$startdate = mysqli_real_escape_string($con, $_REQUEST['startdate']);
$enddate = mysqli_real_escape_string($con, $_REQUEST['enddate']);
$loc = mysqli_real_escape_string($con, $_REQUEST['loc']);

 
$sql="INSERT INTO Volunteers (FirstName, LastName, Age ,Gender,Contact,Address,Email,StartDate,EndDate,DayA,TimeA,Location,Skills)
VALUES('$fname','$lname','$age','$c1','$tel','$address','$email','$startdate','$enddate','$c2','$ct','$loc','$c3')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
else header("Location:thankyou.php");
 
 //Password generation
function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
$my_password = random_password();

//Mail

/*if(isset($_REQUEST['Next'])){
    $to = "showndarya.m@somaiya.edu"; 
    $from = $email; 
    $first_name = $fname;
    $last_name = $lname;
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = "Name:".$first_name ."\n\n" . "Number: " . $last_name . " has registered" ;
    $message2 = "You have registered with us."."\n\n"."Username:  ".$first_name."\n\n"."Password:  ".$my_password ;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); 
    echo "Thank you " . $first_name . ", we will contact you shortly.";
    }*/

$data = mysqli_query($con,"SELECT VN FROM Volunteers WHERE FirstName='$_REQUEST[firstname]'") or die(mysqli_error($con)); 
  while($row = mysqli_fetch_assoc($data)){
    $vn=$row['VN'];
    }

$sql="INSERT INTO logincredv (VN,Username,Password) VALUES ('$vn','$_REQUEST[firstname]','$my_password')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
mysqli_close($con);

?>
