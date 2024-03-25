<?php
$name_error = 0;
$birth_date_error = 0;
$sex_error = 0;
$email_error = 0;
$tin_error = 0;
$nationality_error = 0;
$religion_error = 0;
$birth_place_error = 0;
$room_no_error = 0;
$street_error = 0;
$city_error = 0;
$province_error = 0;
$country_error = 0;
$zip_code_error = 0;
$mobile_no_error = 0;
$telephone_error = 0;
$father_error = 0;
$mother_error = 0;
$member_code_error = 0;
$member_type_error = 0;
$business_error = 0;
$start_date_error = 0;
$foreign_add_error = 0;
$flexi_fund_error = 0;
$spouse_sss_error = 0;
$m_income_error = 0;
$dependent_name_error = 0;
$dependent_birthdate_error = 0;
$relationship_error = 0;
$connection_error = "";
$query_error = "";
try{
	if(isset($_POST['name']) && isset($_POST['birth_date']) && isset($_POST['sex']) && isset($_POST['email']) && 
	isset($_POST['civil_status']) && isset($_POST['nationality']) && isset($_POST['religion']) && isset($_POST['birth_place']) 
	&& isset($_POST['room_no']) && isset($_POST['street']) && isset($_POST['city']) && isset($_POST['province']) &&
	isset($_POST['country']) && isset($_POST['zip_code']) && isset($_POST['mobile_no']) && isset($_POST['member_code'])){
	
		if($_POST['tin'] != "" && strlen($_POST['tin']) < 12 ){
			$tin_error = 5;
		}
		
		if($name_error != 0 || $birth_date_error != 0 || $sex_error != 0 ||  $email_error != 0 || $tin_error != 0 || $nationality_error != 0 || 
		$religion_error != 0 || $birth_place_error != 0 || $room_no_error != 0 || $street_error != 0 || $city_error != 0 || $province_error != 0 || 
		$country_error != 0 || $zip_code_error != 0 || $mobile_no_error != 0 || $telephone_error != 0 || $father_error != 0 || $mother_error != 0 ||
		$member_code_error != 0 || $member_type_error != 0 || $business_error != 0 || $start_date_error != 0 || $foreign_add_error != 0 ||
		$flexi_fund_error != 0 || $spouse_sss_error != 0 || $m_income_error != 0 || $dependent_name_error != 0 || $dependent_birthdate_error != 0 ||
		$relationship_error != 0){
				throw new Exception("Data Error");
		}
		else{
			$conn = mysqli_connect("localhost:3307", "root", "mySQL", "sssdb");
			if (mysqli_connect_errno()){
				echo mysqli_connect_errno();;
				$connection_error = $connection_error.mysqli_connect_errno();
				throw new Exception("Connection Failed");
			}
			
			if(isset($_POST['tin']) && $_POST['tin'] == ""){
			$_POST['tin'] = 'null';
			} else{$_POST['tin'] = "'".$_POST['tin']."'";}
			if(isset($_POST['father']) && $_POST['father'] == ""){
				$_POST['father'] = 'null';
			} else{$_POST['father'] = "'".$_POST['father']."'";}
			if(isset($_POST['mother']) && $_POST['mother'] == ""){
				$_POST['mother'] = 'null';
			} else{$_POST['mother'] = "'".$_POST['mother']."'";}
			if(isset($_POST['telephone']) && $_POST['telephone'] == ""){
				$_POST['telephone'] = 'null';
			}else {$_POST['telephone'] = "'".$_POST['telephone']."'";}
			
			if(!mysqli_query($conn, "INSERT INTO customer (email, name, birth_date, sex, civil_status, tin, nationality, religion, birth_place, room_no, 
			street, city, province, country, zip_code, mobile_no, telephone, father, mother, member_code, member_type) 
			VALUES('".$_POST['email']."', '".$_POST['name']."', '".$_POST['birth_date']."', '".$_POST['sex']."', '".$_POST['civil_status']."', ".$_POST['tin'].", 
			'".$_POST['nationality']."', '".$_POST['religion']."', '".$_POST['birth_place']."', '".$_POST['room_no']."', '".$_POST['street']."', '".$_POST['city']."', 
			'".$_POST['province']."', '".$_POST['country']."', '".$_POST['zip_code']."', '".$_POST['mobile_no']."', ".$_POST['telephone'].", ".$_POST['father'].", 
			".$_POST['mother'].", '".$_POST['member_code']."');")){

				echo mysqli_error($conn);
				$query_error = $query_error.mysqli_error($conn);
				throw new Exception("SQL Query Error");
			}

			if($_POST['member_code'] == "SE"){
				if(!mysqli_query($conn, "INSERT INTO self_employed (email ,business, start_date, monthly_income) 
				VALUES('".$_POST['email']."', '".$_POST['business']."', '".$_POST['start_date']."', ".$_POST['monthly_income'].");")){
					echo mysqli_error($conn);
					$query_error = $query_error.mysqli_error($conn);
					throw new Exception("SQL Query Error");
				}
			}
			else if($_POST['member_code'] == "OFW"){
				if(!mysqli_query($conn, "INSERT INTO ofw (email,  foreign_add, flexi_fund, monthly_income) 
				VALUES('".$_POST['email']."', '".$_POST['foreign_add']."', '".$_POST['flexi_fund']."', ".$_POST['monthly_income'].");")){
					echo mysqli_error($conn);
					$query_error = $query_error.mysqli_error($conn);
					throw new Exception("SQL Query Error");
				}
			}
			else if($_POST['member_code']== "NWS"){
				if(!mysqli_query($conn, "INSERT INTO nonworking_spouse (email, spouse_sss, monthly_income) 
				VALUES('".$_POST['email']."', '".$_POST['spouse_sss']."', ".$_POST['monthly_income'].");")){
					echo mysqli_error($conn);
					$query_error = $query_error.mysqli_error($conn);
					throw new Exception("SQL Query Error");
				}
			}
			
			if(count($_POST['dependent_name']) > 0){
				for($insert = 0; $insert < count($_POST['dependent_name']); $insert++){
					if($_POST['dependent_name'][$insert] != "" && $_POST['dependent_birthdate'][$insert] != "" && $_POST['relationship'][$insert] != ""){
						if(!mysqli_query($conn,"INSERT INTO dependent (email, dependent_name, dependent_birthdate, relationship) 
						VALUES ('".$_POST['email']."', '".$_POST['dependent_name'][$insert]."', '".$_POST['dependent_birthdate'][$insert]."', '".$_POST['relationship'][$insert]."');")){
							echo mysqli_error($conn);
							$query_error = $query_error.mysqli_error($conn);
							throw new Exception("SQL Query Error");
						}
					}
				}
			}
			mysqli_close($conn);
		}
	}
}
catch(Exception $e){
    header('HTTP/1.0 500 Internal Server Error');
	if($tin_error == 5){
		echo json_encode('TIN number should be 12 numbers');
	}
	if($connection_error != ""){
		echo json_encode('Connection Error'.PHP_EOL);
		echo json_encode($connection_error);
	}
	if($query_error != ""){
		echo json_encode('SQL Query Error'.PHP_EOL)
		echo json_encode($query_error);
	}
	else{
		echo json_encode('A general issue occured please try again'.PHP_EOL);
		echo json_encode($e);
	}
}










?>