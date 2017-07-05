<head>
	   <title>Registration form</title>
	   <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <style>
	  @media screen and (max-width: 768px) {
		h1{
		  font-size:14px;
		  word-wrap: break-word;
		 -webkit-hyphens: auto;
		 -moz-hyphens: auto;
		 -ms-hyphens: auto;
		 -o-hyphens: auto;
		 hyphens: auto;
		}
	}
	 
	body{background-color:white;
	}
	.button {
	  display: inline-block;
	  padding: 15px 25px;
	  font-size: 15px;
	  cursor: pointer;
	  
	  position:relative;
	  
	  
	  text-decoration: none;
	  outline: none;
	  color: grey;
	  background-color:#cc777;
	  border: none;
	  border-radius: 15px;
	  box-shadow: 0 9px #999;
	}

	.button:hover {background-color: orange}
	.button span:after {
	  content: '\00bb';
	  position: absolute;
	  opacity: 0;
	  top: 0;
	  right: -20px;
	  transition: 0.5s;
	}
	.button:hover span {
	  padding-right: 25px;
	}

	.button:hover span:after {
	  opacity: 1;
	  right: 0;
	}
	.button span {
	  cursor: pointer;
	  display: inline-block;
	  position: relative;
	  transition: 0.5s;
	}

	.button:active {
	  background-color: #3e8e41;
	  box-shadow: 0 5px #666;
	  transform: translateY(4px);
	}
	</style>
	<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
</head>
<body>
		<br />
		<!-- Header -->
		 <div class="container ">
			 <h2 style="text-align:center;text-color:grey;font-style:italic;width=100%"> Welcome to the Sahabhag Family</h2>
			 <h3 style="text-align:center;text-color:grey;font-style:italic;width=100%"> Volunteer Registration</h3>
		 </div>
		 <div class="container-fluid">
	          <div class="well " style="color:grey;font-size:20px">Registration form</div>
		 </div>
	  
	  <!-- Form -->
	  
	  <form class="form-horizontal" action="vol2.php">
	  
			<div class="form-group">
			  <div class="container-fluid">
			     <div  style="color:orange;font-size:18px" class="alert alert-success lg">Personal details:</div>
			  </div>   
			  <label class="control-label col-sm-2" for="firstname">First name:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="firstname" placeholder="First name" name="firstname" required>
				  </div>
			 
			  <label class="control-label col-sm-2" for="lastname">Last Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lastname" placeholder="Last name" name="lastname" required>
				  </div>
				
			  <label class="control-label col-sm-2" for="age">Age:</label>
				  <div class="col-sm-10">
					<input type="number" class="form-control" id="age" placeholder="Age" name="age" style="min:1;max:3" maxlength:"3" required>
				  </div>
				  <div class="form-group">
			 <label class="control-label col-sm-2" for="gender[]">Gender:</label>	
				  <div class=" col-sm-10">
					<div class="radio">
					  <label><input type="radio" name="gender[]" value="male"> Male</label><br>
					  <label><input type="radio" name="gender[]" value="female"> Female</label><br>
					  <label><input type="radio" name="gender[]" value="other"> Other</label>
					</div>
				  </div>
				  </div>
			 <label class="control-label col-sm-2" for="tel">Contact No:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="tel" placeholder="Contact Number" name="tel" required>
				  </div>	
			 <label class="control-label col-sm-2" for="">Address:</label>
				  <div class="col-sm-10">
				   <input type="textarea" class="form-control" rows="35"  name="address" id="address" placeholder="address" required>
				  </div>
			 <label class="control-label col-sm-2" for="email">Email:</label>
				<div class="col-sm-10">
				  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
				</div>
			  </div>

			<div class="container-fluid">
			  <div  style="color:orange;font-size:18px" class="alert alert-success lg">Time Allotment:</div>
			</div>    
				 
				 <div class="form-group"> <!-- Date input -->
					<label class="control-label col-sm-2" for="date"> Starting Date:</label>
					<div class="col-sm-2">
						<input class="form-control" id="date" name="startdate" placeholder="MM/DD/YYY" type="text"/>
				  	</div>
				  <label class="control-label col-sm-2" for="date"> Ending Date:</label>
					<div class="col-sm-2">
						<input class="form-control" id="date" name="enddate" placeholder="MM/DD/YYY" type="text"/>
				  	</div>
				  </div>	
				  <div class="form-group"> 
					  <label class="control-label col-sm-2" for="da[]">Days Avalibility:</label>
					  <div class="checkbox">
						  <div class="col-offset-sm-4 col-sm-8" >
							<label ><input type="checkbox" name="da[]" value="monday">Monday </label><br>
							<label ><input type="checkbox" name="da[]" value="tuesday">Tuesday </label><br>
							<label><input type="checkbox" name="da[]" value="wednesday">Wednesday </label><br>
							<label><input type="checkbox" name="da[]" value="thrusday">Thursday </label><br>
							<label><input type="checkbox" name="da[]" value="friday">Friday </label><br>
							<label><input type="checkbox" name="da[]" value="saturday">Saturday </label><br>
							<label><input type="checkbox" name="da[]" value="sunday">Sunday </label>
						  </div>
						</div>
			 	 </div>
			  
			  <div class="form-group">
				  <label class="control-label col-sm-2" for="time">Time Availability:</label>
				  <div class="col-sm-10"> 
						<select name="time" id="time" required>
							<option value="1-2 hrs" >1-2</option>
							<option value="3-4 hrs">3-4</option>
							<option value="5-6 hrs">5-6</option>
							<option value="7-8 hrs">7-8</option>
						</select>	  
				  </div>
				</div>

			 <div class="form-group">
				  <label class="control-label col-sm-2" for="loc">Preferred Geographical Location:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="loc" placeholder="location name" name="loc" required>
				  </div>
			</div>
			
			<div class="container-fluid">
			  <div  style="color:orange;font-size:18px" class="alert alert-success lg">Skills:</div>
			</div>   
			  <div class="form-group"> 
				  <div class="checkbox">
					  <label class="control-label col-sm-2" for="bs[]"></label>
					  <div class="col-offset-sm-4 col-sm-8" >
							<label><input type="checkbox" name="bs[]" value="Education" >Education</label><br>
							<label><input type="checkbox" name="bs[]" value="Health" >Health</label><br>
							<label><input type="checkbox" name="bs[]" value="Agricultural Guidance" >Agricultural Guidance</label><br>
							<label><input type="checkbox" name="bs[]" value="Water Purification" >Water Purification</label><br>
							<label><input type="checkbox" name="bs[]" value="Report Writing" >Report Writing</label><br>
							<label><input type="checkbox" name="bs[]" value="Recent technology" >Recent technology</label><br>
							<label><input type="checkbox" name="bs[]" value="Employment Generation">Employment Generation</label><br>
							<label><input type="checkbox" name="bs[]" value="Environment and Sustainable Development" >Environment and Sustainable Development</label><br>
							<label><input type="checkbox" name="bs[]" value="Law" >Law</label><br>
							<label><input type="checkbox" name="bs[]" value="Government Scheme" >Government Scheme</label><br>
							<label><input type="checkbox" name="bs[]" value="Renewable Energy" >Renewable Energys</label><br>
							<label><input type="checkbox" name="bs[]" value="Renewable Energy" >Renewable Energy</label><br>
				    </div>
				</div>
			  </div>	  
				  <div style="text-align:center;">
					 <input type="submit" name="Next" id="Next" value="Next"/>
		         </div><!-- Form ends here -->
				<br>
	  </form>
	  <br>
	  <br>
	  <br><br>
	</div>
</body>
</html>
