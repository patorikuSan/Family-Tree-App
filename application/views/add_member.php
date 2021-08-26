<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/create.css">
	<title>Add Family Members</title>

</head>
	<body>
		<h1>Add New Family Members</h1>
		
		<form action="<?php echo base_url()?>members/create" method="post">
			<label for="first_name">First Name</label>
			<input type="text" name="first_name" id="">	

			<label for="last_name">Last Name</label>
			<input type="text" name="last_name" id="">

			<label for="email">Email</label>
			<input type="email" name="email" id="">
		
			<label for="birthday">Birthday</label>
			<input type="date" name="birthday" id="">

			<label for="hobby">Hobbies</label>
			<input type="text" name="hobby" id="">

			<label for="contact_number">Contact Number</label>
			<input type="text" name="contact_number" id="">

			<input type="submit" value="Submit">
			<a href="<?= base_url() ?>members">Cancel</a>
			
		</form>

			<a href="<?= base_url() ?>members">Family Profiles</a>
	</body>
</html>