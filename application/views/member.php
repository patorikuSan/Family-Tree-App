<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/style.css">
	<script src="<?= base_url() ?>js/confirm_action.js"></script>
	<title>Family Tree App</title>
</head>
<body>
	<h1>Family Members Page</h1>

	<table>
		<tr>
			<thead>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Email</td>
				<td>Birthday</td>
				<td>Hobbies</td>
				<td>Contact Number</td>
				<td>Actions</td>
			</thead>
		</tr>
		<tbody>
			<?php foreach($result as $row){ ?>
			<tr><?php $row->id; ?>
				<td><?php echo $row->first_name; ?></td>
				<td><?php echo $row->last_name; ?></td>
				<td><?php echo $row->email; ?></td>
				<td><?php echo $row->birthday; ?></td>
				<td><?php echo $row->hobby; ?></td>
				<td><?php echo $row->contact_number; ?></td>
				
				<td class="action">
					<a href="<?= base_url() ?>members/edit/<?= $row->id; ?>">Edit</a> 
					<a href="<?= base_url(); ?>members/destroy/<?= $row->id; ?>" 
					onclick="return confirm('You will delete a family member record, are you sure?',
					alert('Record cannot be retrieved after delete'))" >Delete</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
		
	</table>
	<a href="<?= base_url() ?>members/new">Add New Family Member</a>
</body>
</html>