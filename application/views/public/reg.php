<!DOCTYPE html>
<html class="no-js">
<head>
	
	<title>QITC | Registration</title>
	
	<link rel="stylesheet" href="<?php echo base_url('css/blueprint/screen.css'); ?>" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="<?php echo base_url('css/blueprint/print.css'); ?>" type="text/css" media="print"> 
	<!--[if lt IE 8]>
	  <link rel="stylesheet" href="<?php echo base_url('css/blueprint/ie.css'); ?>" type="text/css" media="screen, projection">
	<![endif]-->
	
	<script src="<?php echo base_url('js/modernizr.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('js/jquery-1.8.3.min.js'); ?>" type="text/javascript"></script>
	
	<style type="text/css">
		
		#registration .spacer{
			height: 50px;
		}
		#registration input, #registration select{
			padding: 10px;
			border: solid thin #e2e2e2;
			box-shadow: 0px 0px 10px #ebe9e9 inset;
			font-size: 12pt;
			color: #333;
		}
		#registration select{
			width: 200px;
		}
		#registration input:focus{
			border: solid thin #ccc;
		}
		#registration #full_name input{
			width: 200px;
		}
		#registration #personal_info input{
			width: 400px;
		}
		#registration .titler{
			color: #666;
		}
		#registration h1{
			padding: 10px 0px;
		}
		
	</style>

</head>

<body id="registration">
<div class="container">
	
	<div class="span-18">
	<form name="qitcreg" action="" method="post">
		
		<h1>Personal Information</h1>
		
		<!-- Full Name -->
		<div id="full_name">
			<div class="span-6">
				<div class="titler">First Name</div>
				<input type="text" name="firstname" />
			</div>
			<div class="span-6">
				<div class="titler">Middle Name (Optional)</div>
				<input type="text" name="middlename" />
			</div>
			<div class="span-6 last">
				<div class="titler">Last Name</div>
				<input type="text" name="lastname" />
			</div>
		</div>
		
		<!-- Personal Information -->
		<div id="personal_info">
		
			<!-- Gender -->
			<div>
				<div class="titler">Gender</div>
				<select name="gender">
					<option value="none">Select Gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
			</div>
			
			<!-- Occupation -->
			<div>
				<div class="titler">Occupation</div>
				<input type="text" name="occupation" />
			</div>
			
			<!-- School or Company -->
			<div>
				<div class="titler">School or Company</div>
				<input type="text" name="school_company" />
			</div>
			
			<!-- Contact Number -->
			<div>
				<div class="titler">Contact Number</div>
				<input type="text" name="contact" />
			</div>
			
			<!-- Email -->
			<div>
				<div class="titler">Email Address</div>
				<input type="text" name="email" />
			</div>
	
		</div>
		
		<h1>Options and Freebies</h1>
		
	</form>
	</div>
	<div class="span-6 last">
		Right
	</div>
	
</div>
</body>
</html>