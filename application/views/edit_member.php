<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/edit.css">
	<title>Edit Family Members Profile</title>
	
</head>
	<body>
		<h1>Edit Family Members Profile <span><?= ' - '. $row->first_name ; ?></span></h1>
		
		<form action="<?= base_url()?>members/update/<?= $row->id ?>" method="post">

			<label for="first_name">First Name</label>
			<input type="text" name="first_name" value="<?= $row->first_name; ?>">	

			<label for="last_name">Last Name</label>
			<input type="text" name="last_name" value="<?= $row->last_name; ?>">

			<label for="email">Email</label>
			<input type="email" name="email" value="<?= $row->email; ?>">

			<label for="birthday">Birthday</label>
			<input type="date" name="birthday" value="<?= $row->birthday; ?>">

			<label for="hobby">Hobbies</label>
			<input type="text" name="hobby" value="<?= $row->hobby; ?>">

			<label for="contact_number">Contact Number</label>
			<input type="text" name="contact_number" value="<?= $row->contact_number; ?>">

			<input type="submit" value="Submit">
			<a href="<?= base_url() ?>members">Back</a>
			
		</form>

			<a href="<?= base_url() ?>members">View Family Members Profiles</a>
	</body>
</html>