<?php 
$con = mysqli_connect("localhost","id2116692_mushu","mushu");
if (!$con) {  die('Could not connect: ' . mysqli_error($con)); }
mysqli_select_db($con,"id2116692_sahabhag");

/*if(isset($_REQUEST['submit'])){
    $to = "showndarya.m@somaiya.edu"; 
    $from = $_REQUEST['email']; 
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['number'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = "Name:".$first_name . "/n/nNumber: " . $last_name . " Description:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_REQUEST['message']."Number:" . $last_name;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Thank you " . $first_name . ", we will contact you shortly.";
    }*/

$name=$_REQUEST['first_name'];
$contact=$_REQUEST['number'];
$email=$_REQUEST['email'];
$des=$_REQUEST['message'];
$sql="INSERT INTO NgoStep1 (Name,Contact,Email,Description) VALUES ('$name','$contact','$email','$des')";
if (!mysqli_query($con,$sql))  die('Error: ' . mysqli_error($con));
 
?>
