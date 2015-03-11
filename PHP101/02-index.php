<!DOCTYPE html>

<html>
<head>
	<title>Staff Page</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<div id="main_page">

	<h1>Staff</h1> 
	<hr>
	
	<?php 
	
	$person1 = array('name' => 'Mark',
					'phone' => '626-1541',
					'email' => 'fischerm@email.arizona.edu'
					);

	$person2 = array('name' => 'Tracey',
					'phone' => '626-1541',
					'email' => 'thummel@email.arizona.edu'
					);

	$person3 = array('name' => 'Margrit',
					'phone' => '626-1541',
					'email' => 'memcinto@email.arizona.edu'
					);
					
	?>
	
	<table>
	<tr>
		<th>Name</th>
		<th>Phone</th>
		<th>Email</th>
	</tr>
	<tr>
		<td><?php echo $person1['name']; ?></td>
		<td><?php echo $person1['phone']; ?></td>
		<td><?php echo $person1['email']; ?></td>
	</tr>
	<tr>
		<td><?php echo $person2['name']; ?></td>
		<td><?php echo $person2['phone']; ?></td>
		<td><?php echo $person2['email']; ?></td>
	</tr>
	<tr>
		<td><?php echo $person3['name']; ?></td>
		<td><?php echo $person3['phone']; ?></td>
		<td><?php echo $person3['email']; ?></td>
	</tr>
</table>

</div>

</body>
</html>
