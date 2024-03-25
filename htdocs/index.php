<!DOCTYPE html>
<html>
<head>
<title>SSS Registration</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="@sweetalert2/theme-bulma/bulma.css">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Social_Security_System_%28SSS%29.svg/1280px-Social_Security_System_%28SSS%29.svg.png" alt="SSS Logo">
<style>
	
	body{
		background-color:#1434A4;
	}
	h1{
		margin-top: 0px;
		font-family:Verdana; 
		color: white; 
		font-size: 100px; 
		text-align: center;
	}

	h2{
		margin-top: 0px;
		margin-bottom: 50px;
		margin-left: 500px;
		font-family: Verdana;
		font-size: 30px;
		color: white;
	}
	img{
		width: 300px;
		height: 150px;
		margin-left: 550px;
	}
	form{
		max-width: 50%;
		margin: auto;
		padding: 5%;
	}
	label{
		color: white;
		font-size: 20px;
		margin-left: 20px;
		margin-right: 20px;
	}
	hr{
		background: white;
	}
</style>
</head>
<body>
	<h1>SSS REGISTRATION</h1>
	<h2>E1 MEMBERSHIP FORM</h2>
</body>

	<form id="main_form">
		<div class="form-row">
		<label for="name_input">Name:</label>
		<input type="text" name="name" id="name_input" required class="form-control">
		</div>
		
		<div class="form-row">
		<label for="input_birth_date">Date of Birth:</label>
		<input type="date" name="birth_date" id="input_birth_date" required class="form-control">
		</div>

		<fieldset class="form-group">
		<label>Sex: <label>
		<div class="custom-control custom-radio custom-control-inline">
		<input type="radio" name="sex" value="Male" id="input_male" class="custom-control-input" required>
		<label class="custom-control-label" for="input_male">Male</label>
		</div>
		<div class="custom-control custom-radio custom-control-inline">
		<input type="radio" name="sex" value="Female" id="input_female" class="custom-control-input">
		<label class="custom-control-label" for="input_female">Female</label>
		</div>
		</fieldset>

		<div class="form-row">
		<label for="input_birth_date">Email:</label>
		<div class="input-group mb-2">
			<div class="input-group-prepend">
				<div class="input-group-text">@</div>
			</div>
				<input type="email" name="email" id="input_email" required class="form-control">
			</div>
		</div>
		
		<fieldset class="form-group">
		<label>Civil Status:<label>
		<div class="custom-control custom-radio custom-control-inline">
		<input type="radio" name="civil_status" value="Single" id="input_single" class="custom-control-input" required>
		<label class="custom-control-label" for="input_single">Single</label>
		</div>
		<div class="custom-control custom-radio custom-control-inline">
		<input type="radio" name="civil_status" value="Married" id="input_married" class="custom-control-input">
		<label class="custom-control-label" for="input_married">Married</label>
		</div>
		<div class="custom-control custom-radio custom-control-inline">
		<input type="radio" name="civil_status" value="Widowed" id="input_widowed" class="custom-control-input">
		<label class="custom-control-label" for="input_widowed">Widowed</label>
		</div>
		</fieldset>
		
		
		<div class="form-row">
		<label>Tin:</label>
		<input type="text" name="tin" class="form-control">
		</div>
		
		<div class="form-row align-items-center">
		<div class="col-md-6 mb-3">
		<label>Nationality:</label>
		<input type="text" name="nationality" required class="form-control">
		</div>
		
		<div class="col-md-6 mb-3">
		<label>Religion:</label>
		<input type="text" name="religion" required class="form-control">
		</div>
		</div>
		
		
		<div class="form-row align-items-center">
		<div class="col-md-6 mb-3">
		<label>Place of Birth:</label>
		<input type="text" name="birth_place" required class="form-control">
		</div>
		
		<div class="col-md-6 mb-3">
		<label>Room Number:</label>
		<input type="text" name="room_no" required class="form-control">
		</div>
		</div>
		
		<div class="form-row">
		<label>Street:</label>
		<input type="text" name="street" required class="form-control"> 
		</div>
		
		<div class="form-row align-items-center">
		<div class="col-md-6 mb-3">
		<label>City:</label>
		<input type="text" name="city" required class="form-control">
		</div>
		
		<div class="col-md-6 mb-3">
		<label>Province:</label>
		<input type="text" name="province" required class="form-control">
		</div>
		</div>
		
		<div class="form-row align-items-center">
		<div class="col-md-6 mb-3">
		<label>Country:</label>
		<input type="text" name="country" required class="form-control">
		</div>
		
		<div class="col-md-6 mb-3">
		<label>Zip Code:</label>
		<input type="text" name="zip_code" required class="form-control">
		</div>
		</div>
		
		<div class="form-row">
		<label>Mobile Number:</label>
		<input type="text" name="mobile_no" required class="form-control">
		</div>
		
		<div class="form-row">
		<label>Telephone Number:</label>
		<input type="text" name="telephone" class="form-control">
		</div>
		
		<div class="form-row">
		<label>Father's Name:</label>
		<input type="text" name="father" class="form-control">
		</div>
		
		<div class="form-row">
		<label>Mother's Name:</label>
		<input type="text" name="mother" class="form-control">
		</div><br/>
		
		<fieldset class="form-group">
		<label>Member Type:</label>
		<div class="custom-control custom-radio">
		  <input type="radio" id="M_type" name="member_code" value="M" onclick="javascript:MemberType();" checked class="custom-control-input">
		  <label class="custom-control-label" for="M_type">Member</label>
		</div>
		<div class="custom-control custom-radio">
		  <input type="radio" id="SE_type" name="member_code" value="SE" onclick="javascript:MemberType();" class="custom-control-input">
		  <label class="custom-control-label" for="SE_type">Self-Employed</label>
		</div>
		<div class="custom-control custom-radio">
		  <input type="radio" id="OFW_type" name="member_code" value="OFW" onclick="javascript:MemberType();" class="custom-control-input">
		  <label class="custom-control-label" for="OFW_type">Overseas Filipino Worker</label>
		</div>
		<div class="custom-control custom-radio">
		  <input type="radio" id="NWS_type" name="member_code" value="NWS" onclick="javascript:MemberType();" class="custom-control-input">
		  <label class="custom-control-label" for="NWS_type">Non-Working Spouse</label>
		</div>
		</fieldset>
		
		<div id="SE_input" class="form-row">
			<label>Profession / Business:</label>
			<input type="text" name="business" id="business_input" class="form-control">
			<br>
			
			<label>Profession / Business Start Date:</label>
			<input type="date" name="start_date" id="start_date_input" class="form-control">
		</div>
		
		<div id="OFW_input" class="form-row">
			<label>Foreign Address:</label>
			<input type="text" name="foreign_add" id="foreign_add_input" class="form-control">
			<br>
			
			<label>Flexi Fund Program:<label>
			<label>Yes</label>
			<input type="radio" name="flexi_fund" value="Yes" id="flexi_fund_input" checked>
			<label>No</label>
			<input type="radio" name="flexi_fund" value="No">
		</div>
		
		<div id="NWS_input"class="form-row">
		<label>Spouse's SSS Number: </label>
		<input type="text" name="spouse_sss" id="spouse_sss_input" class="form-control">
		</div>
		
		<label id="m_income_label">Monthly Income: </label>
		<input type="number" name="monthly_income" id="m_income_input" class="form-control">
		
		<div id="dependent_field">
			<hr>
			<label id="d_name_label">Dependent Name:</label>
			<input type="text" name="dependent_name[]" id="d_name_input" oninput="Require_Dependent()" class="form-control">
			
			<div class="form-row align-items-center">
			<div class="col-md-6 mb-3">
			<label>Dependent Birthday: </label>
			<input type="date" name="dependent_birthdate[]" id="d_birthdate_input" oninput="Require_Dependent()" class="form-control">
			</div>
		
			<div class="col-md-6 mb-3">
			<label>Relationship:</label>
			<input type="text" name="relationship[]" id="d_relationship_input" oninput="Require_Dependent()" class="form-control">
			</div>
			</div>
			<hr>
		</div>
		
		<div style="float: right;">
		<button type="button" onclick="javascript:AddAnotherDependent();" class="btn btn-dark">Add Another Dependent</button>
		<input type="submit" class="btn btn-success" value="Register" id="btn_submit">
		</div>
	</form>


	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script type="text/javascript">
		function MemberType(){
			if(document.getElementById('M_type').checked){
				document.getElementById('SE_input').style.display = 'none';
				document.getElementById('OFW_input').style.display = 'none';
				document.getElementById('NWS_input').style.display = 'none';
				document.getElementById('m_income_label').style.display = 'none';
				document.getElementById('m_income_input').style.display = 'none';
				
				document.getElementById('business_input').required = false;
				document.getElementById('start_date_input').required = false;
				document.getElementById('foreign_add_input').required = false;
				document.getElementById('flexi_fund_input').required = false;
				document.getElementById('spouse_sss_input').required = false;
				document.getElementById('m_income_input').required = false;
			}
			if(document.getElementById('SE_type').checked){
				document.getElementById('SE_input').style.display = 'block';
				document.getElementById('OFW_input').style.display = 'none';
				document.getElementById('NWS_input').style.display = 'none';
				document.getElementById('m_income_label').style.display = 'block';
				document.getElementById('m_income_input').style.display = 'block';
				
				document.getElementById('business_input').required = true;
				document.getElementById('start_date_input').required = true;
				document.getElementById('foreign_add_input').required = false;
				document.getElementById('flexi_fund_input').required = false;
				document.getElementById('spouse_sss_input').required = false;
				document.getElementById('m_income_input').required = true;
			}
			if(document.getElementById('OFW_type').checked){
				document.getElementById('SE_input').style.display = 'none';
				document.getElementById('OFW_input').style.display = 'block';
				document.getElementById('NWS_input').style.display = 'none';
				document.getElementById('m_income_label').style.display = 'block';
				document.getElementById('m_income_input').style.display = 'block';
				
				document.getElementById('business_input').required = false;
				document.getElementById('start_date_input').required = false;
				document.getElementById('foreign_add_input').required = true;
				document.getElementById('flexi_fund_input').required = true;
				document.getElementById('spouse_sss_input').required = false;
				document.getElementById('m_income_input').required = true;
			}
			if(document.getElementById('NWS_type').checked){
				document.getElementById('SE_input').style.display = 'none';
				document.getElementById('OFW_input').style.display = 'none';
				document.getElementById('NWS_input').style.display = 'block';
				document.getElementById('m_income_label').style.display = 'block';
				document.getElementById('m_income_input').style.display = 'block';
				
				document.getElementById('business_input').required = false;
				document.getElementById('start_date_input').required = false;
				document.getElementById('foreign_add_input').required = false;
				document.getElementById('flexi_fund_input').required = false;
				document.getElementById('spouse_sss_input').required = true;
				document.getElementById('m_income_input').required = true;
			}
		}
	</script>
	<script>
		$( document ).ready(function() {
			MemberType();
		});
	</script>
	<script>
		function RemoveDepedent(e){
			e.parentNode.remove();
		}
	</script>
	<script>
		var counter = 1;
		function AddAnotherDependent() {
			//$('#dependent_field').clone().insertAfter('#dependent_field');
			$("<div id='dependent_field"+counter+"'></div>").insertAfter('#dependent_field');
			$("#dependent_field"+counter).append('<label id="d_name_label">Dependent Name:</label>'
			+'<input type="text" name="dependent_name[]" id="d_name_input" onkeyup="javascript:Require_Dependent()" class="form-control">'
			+'<div class="form-row align-items-center">'
			+'<div class="col-md-6 mb-3">'
			+'<label>Dependent Birthday: </label>'
			+'<input type="date" name="dependent_birthdate[]" id="d_birthdate_input" onkeyup="javascript:Require_Dependent()" class="form-control">'
			+'</div>'
			+'<div class="col-md-6 mb-3">'
			+'<label>Relationship:</label>'
			+'<input type="text" name="relationship[]" id="relationship_input" onkeyup="javascript:Require_Dependent()" class="form-control">'
			+'</div>'
			+'</div>'
			+'<button type="button" class="btn btn-danger" onclick="RemoveDepedent(this)">Remove</button>'
			+'<hr>');
			counter++;
		}
	</script>
	<script>
		function Require_Dependent(){
			var d_name = document.getElementById('d_name_input').value;
			var d_birthdate = document.getElementById('d_birthdate_input').value;
			var d_relationship = document.getElementById('d_relationship_input').value;
			if(d_name != "" || d_birthdate != "" || d_relationship != ""){
				document.getElementById('d_name_input').required = true;
				document.getElementById('d_birthdate_input').required = true;
				document.getElementById('d_relationship_input').required = true;
			}
			else{
				document.getElementById('d_name_input').required = false;
				document.getElementById('d_birthdate_input').required = false;
				document.getElementById('d_relationship_input').required = false;
			}
		}
	</script>
	<script>
	$('#main_form').submit(function(e){
		$.ajax({
			type: 'POST',
			url: 'process.php',
			data: $('#main_form').serialize()
		}).done(function(data){
			Swal.fire({
			  icon: 'success',
			  title: 'The record has been added',
			  text: data.responseText,
			  timer: 2500
			});
			document.getElementById('main_form').reset();
		}).fail(function(data){
			Swal.fire({
			  icon: 'error',
			  title: 'Error',
			  text: data.responseText
			});
		});
		e.preventDefault();
	});
	</script>
</html>