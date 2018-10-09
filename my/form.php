<?php

	$username = "";
	$password ="";
	$email    ="";
	$gender   ="";
	$hobbies  ="";
	$bloodgroup="";

	if( isset($_GET['submit'])){

		if($_GET['username'] == ""){
			echo "Null found!";
		}else{
		 	$username = $_GET['username'];
		}
	}

	if( isset($_GET['submit'])){

		if($_GET['password'] == ""){
			echo "Null found!";
		}else{
		 	$password = $_GET['password'];
		}
	}

	if( isset($_GET['submit'])){

		if($_GET['email'] == ""){
			echo "Email not found!";
		}else{
		 	$email = $_GET['email'];
		}
	}


	if( isset($_GET['submit'])){

		if($_GET['gender'] == ""){
			echo "Gender not found";
		}else{
		 	$gender = $_GET['gender'];
		}
	}



?>



<html>
<head>
	<title></title>
</head>
<body style="background: green">



		<form style="background: red" method='get' >
			<fieldset>
				<legend>STUDENT INFO</legend>

				<table border="0">
					<tr>
						<td>Username: </td>
						<td><input type="text" name="username"  value="<?=$username ?>" placeholder="username" /></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" value="<?=$password ?>" placeholder="password" /></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email" value="<?=$email ?>"  /></td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td>
							<input type="radio" name="gender" value="<?=$gender?>" checked /> Male
					  	<input type="radio" name="gender" value="<?=$gender?>" /> female
					  	<input type="radio" name="gender" value="<?=$gender?>" /> Other
					  	</td>
					</tr>
					<tr>
						<td>Hobbies:</td>
						<td>
							<input type="checkbox" name="">Playing <br/>
					  		<input type="checkbox" name="">Listening <br/>
					  		<input type="checkbox" name="">Sleeping <br/>

						</td>
					</tr>
					<tr>
						<td>Blood Group:</td>
						<td>
							<select name=>
								<option>A+</option>
								<option>B+</option>
								<option>B</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>DOB:</td>
						<td><input type="date" name=""></td>
					</tr>
					<tr>
						<td> Image:</td>
						<td>
							<input type="file" name=""/>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Submit">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>
