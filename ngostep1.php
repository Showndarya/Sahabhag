<html>
<head>
<title>NGO Registration </title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="container-fluid" style="color:orange;font-size:20px;text-align:center;">
  <h2 >Step 1 : Verification form</h2>
  </div>
  <form class="form-horizontal" action="ngostep1db.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name Of NGO :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="first_name" placeholder="Enter name" name="first_name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="number">Contact Number of CEO:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="number" placeholder="Contact number" name="number" required>
      </div>
		</div>
		<div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="message">Description :</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="message" placeholder="Give Small Description about ..." name="message" required></textarea>
      </div>
    </div>
	
    
    <div class="form-group" >        
      <div  style="text-align:center;">
        <input type="submit" class="btn btn-default" style="background-color:orange;color:white;" name="submit" value="submit" />
      </div>
    </div>
  </form>
</div>
</body>
</html>
