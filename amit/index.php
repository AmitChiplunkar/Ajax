<?php 
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
<h1>Student Management System</h1>
<div style="width:300px;float:left">
	<form method="post" id="form_add_student">
		<table>	
			<tr>
				<td>Name</td>
				<td><input id="student_name" type="text" name="name"></td>
			</tr>
			<tr>
				<td>Roll No</td>
				<td><input type="text" name="roll_no"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><select name="gender"><br/>
					<option></option>
					<option value="M">Male</option>
					<option value="F">Female</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Class</td>
				<td><select id="class_id" name="class_id"></td>
			</tr>
			<tr>
				<td>Interests</td>
				<td><div id="interests"></div></td>
			</tr>
			<tr>
				<td>Photo</td>
				<td><input type="file" name="photo"><br/></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea name="address"></textarea></td>
			</tr>
			</tr>
				<td><button id="add_student">Add</button></td>
			</tr>
			</tr>
				<td><button id="display_student">Display</button></td>
			</tr>	
		</table>		
	</form>	
</div>

<div style="float:left;width:300px">
	<table border="1">
		<thead>
			<tr>
				<th>Name</th>
				<th>Gender</th>
				<th>Roll No</th>
				<th>Class</th>
				<th>Address</th>
				<th>Options</th>
			</tr>		
		</thead>
		<tbody id="main_table">
		</tbody>
	</table>	
</div>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>