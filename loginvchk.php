<?php
 session_start();
$con = mysqli_connect("localhost","id2116692_mushu","mushu");
if (!$con) {  die('Could not connect: ' . mysqli_error($con)); }
mysqli_select_db($con,"id2116692_sahabhag");
	
$message="";$vn="";
if(!empty($_REQUEST["Submit"])) {
	$result = mysqli_query($con,"SELECT * FROM logincredv WHERE Username='" . $_REQUEST["Username"] . "' and Password = '". $_REQUEST["password"]."'");
	$row  = mysqli_fetch_array($result);


 if (is_array($row)) {
 $_SESSION["Username"] = $row['Username'];
 $username = $row['Username'];
		  $data = mysqli_query($con,"SELECT * FROM Volunteers WHERE FirstName='$username'") or die(mysqli_error($con)); 
		  $row = mysqli_fetch_assoc($data);
		  $vn = $row['VN'];
		  $fname = $row['FirstName'];
		  $lname = $row['LastName'];
		  $age = $row['Age'];
		  $gender = $row['Gender'];
		  $tel = $row['Contact'];
		  $address = $row['Address'];
		  $email = $row['Email'];
		  $startdate = $row['StartDate'];
		  $enddate = $row['EndDate'];
		  $daya = $row['DayA'];
		  $timea = trim(mysqli_real_escape_string($con,$row['TimeA']));
		  $loc = $row['Location'];
		  $skills = $row['Skills'];
		?>
 
<form action="" method="post" id="frmLogout">
Click to <input type="submit" name="logout" value="Logout" class="logout-button">
<div class="member-dashboard">Welcome <?php echo ucwords($username); ?>, You have successfully logged in!<br>


<h2> The details you entered: </h2>

<form>
<input name="vid" type="text" value="<?php echo ucwords($vn); ?>" hidden/> <br /><br />
First Name: <input name="firstname" type="text" value="<?php echo ucwords($fname); ?>" /><br /><br />
Last Name: <input name="lastname" type="text" value="<?php echo ucwords($lname); ?>" /><br /><br />
Age: <input name="age" type="text" value="<?php echo ucwords($age); ?>" /><br /><br />
Gender: 
<select name="gender" id="gender" required>
	<option value="<?php echo ucwords($gender); ?>" ><?php echo ucwords($gender); ?></option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	<option value="Other">Other</option>
</select><br /><br />
Contact: <input name="tel" type="text" value="<?php echo ucwords($tel); ?>" /><br /><br />
Address: <input name="address" type="text" value="<?php echo ucwords($address); ?>" /><br /><br />
Email: <input name="email" type="text" value="<?php echo ucwords($email); ?>" /><br /><br />
Start Date: <input name="startdate" type="text" value="<?php echo ucwords($startdate); ?>" /><br /><br />
End Date: <input name="enddate" type="text" value="<?php echo ucwords($enddate); ?>" /><br /><br />
Days Available: <input name="daya" type="text" value="<?php echo ucwords($daya); ?>" />
<!--<button name="data" id="dadisp">Edit</button><br /> 
<div id="daa" style="display: none;">
        <label ><input type="checkbox" name="da[]" value="monday">Monday </label><br>
		<label ><input type="checkbox" name="da[]" value="tuesday">Tuesday </label><br>
		<label><input type="checkbox" name="da[]" value="wednesday">Wednesday </label><br>
		<label><input type="checkbox" name="da[]" value="thrusday">Thursday </label><br>
		<label><input type="checkbox" name="da[]" value="friday">Friday </label><br>
		<label><input type="checkbox" name="da[]" value="saturday">Saturday </label><br>
		<label><input type="checkbox" name="da[]" value="sunday">Sunday </label><br />
		<button name="data" id="daupdate">Update</button><br /> 
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$('#dadisp').click(function(e){
    e.preventDefault();
    var x = document.getElementById('daa');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
});
$('#daupdate').click(function(e){
    e.preventDefault();
    
    
    
</script>-->
<br /><br />

Time Availability: 
    <select name="timea" id="time" required>
			<option value="<?php echo ucwords($timea); ?>"><?php echo ucwords($timea); ?></option>
			<option value="3-4 hrs">3-4</option>
			<option value="5-6 hrs">5-6</option>
			<option value="7-8 hrs">7-8</option>
	</select>	<br /><br />
Location: <input name="loc" type="text" value="<?php echo ucwords($loc); ?>" /><br /><br />
Skills: <input name="skills" type="text" value="<?php echo ucwords($skills); ?>" /><br /><br />
<input type="submit" name="update" value="Update" class="logout-button">
</form>
</form>

</div>
<?php
}
		else
		{
		echo "Try again";
		}
  }
   if (isset($_REQUEST['update']))
	{
		$vn = mysqli_real_escape_string($con, $_REQUEST['vid']);
		$fname = mysqli_real_escape_string($con, $_REQUEST['firstname']);
		$lname = mysqli_real_escape_string($con, $_REQUEST['lastname']);
		$age = mysqli_real_escape_string($con, $_REQUEST['age']);
		$gender = mysqli_real_escape_string($con, $_REQUEST['gender']);
		$tel = mysqli_real_escape_string($con, $_REQUEST['tel']);
		$address = mysqli_real_escape_string($con, $_REQUEST['address']);
		$email = mysqli_real_escape_string($con, $_REQUEST['email']);
		$startdate = mysqli_real_escape_string($con, $_REQUEST['startdate']);
		$enddate = mysqli_real_escape_string($con, $_REQUEST['enddate']);
		$daya = mysqli_real_escape_string($con, $_REQUEST['daya']);
		$timea = mysqli_real_escape_string($con, $_REQUEST['timea']);
		$loc = mysqli_real_escape_string($con, $_REQUEST['loc']);
		$skills = mysqli_real_escape_string($con, $_REQUEST['skills']);
		$sql="UPDATE Volunteers SET FirstName='$fname', LastName='$lname', Age='$age', Gender='$gender', Contact='$tel', Address='$address', Email='$email', StartDate='$startdate', EndDate='$enddate', DayA='$daya', TimeA='$timea', Location='$loc', Skills='$skills' WHERE VN LIKE '$vn';";

		if (!mysqli_query($con,$sql))
		  {
		  die('Error: ' . mysqli_error($con));
		  }
		else echo "Successfully Submitted.";
		}
  
  if (isset($_REQUEST['logout']))
	{
		 unset($username);  
         header("Location: volpage.php");
      }
     
 ?>
 
