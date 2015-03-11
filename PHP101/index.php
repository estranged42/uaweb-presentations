<!DOCTYPE html>


<head>
	<title>Staff Page</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<div id="main_page">

	<h1>Staff</h1> 
	<hr>
	
	<?php 

	$files = array('staff' => 'staff-list.csv',
					'admin' => 'admin-list.csv');
	
	$type = $_REQUEST['type'];

	if (array_key_exists($type, $files)) {

		$filename = $files[$type];
		$file = fopen($filename, 'r');
		
		$people = array();
		
		fgets($file);
		
		while ($line = fgets($file)) {
			$values = array();
			$values = explode(',', $line);
			$person['name'] = $values[0];
			$person['phone'] = $values[1];
			$person['email'] = $values[2];
			$people[] = $person;
		}
			
	}

	?>
	
	<table>
	<tr>
		<th>Name</th>
		<th>Phone</th>
		<th>Email</th>
	</tr>
	<?php foreach($people as $person): ?>
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
