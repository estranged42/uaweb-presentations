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
	
  $filename = "staff-list.csv";
  
  $file = fopen($filename, 'r');
  
  while ($line = fgets($file)) {
    $values = array();
    $values = explode(',', $line);
    $person['name'] = $values[0];
    $person['phone'] = $values[1];
    $person['email'] = $values[2];
    $people[] = $person;
  }
	
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
