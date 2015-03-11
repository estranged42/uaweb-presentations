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
	
	$people = array();
	
	$person1 = array('name' => 'Mark',
					'phone' => '626-1541',
					'email' => 'fischerm@email.arizona.edu'
					);
	$people[] = $person1;

	$person2 = array('name' => 'Tracey',
					'phone' => '626-1541',
					'email' => 'thummel@email.arizona.edu'
					);
  $people[] = $person2;

	$person3 = array('name' => 'Margrit',
					'phone' => '626-1541',
					'email' => 'memcinto@email.arizona.edu'
					);
	$people[] = $person3;

	$person4 = array('name' => 'Jan',
					'phone' => '626-1541',
					'email' => 'jknight@email.arizona.edu'
					);
	$people[] = $person4;
	
	?>
	
	<table>
	<tr>
		<th>Name</th>
		<th>Phone</th>
		<th>Email</th>
	</tr>
	
	<?php foreach ($people as $person): ?>
	<tr>
		<td><?php echo $person['name']; ?></td>
		<td><?php echo $person['phone']; ?></td>
		<td><?php echo $person['email']; ?></td>
	</tr>
	<?php endforeach; ?>

  </table>

</div>

</body>
</html>
