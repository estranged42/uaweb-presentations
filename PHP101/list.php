<?php 

$people = array();

$files = array('staff' => 'staff-list.csv', 
			   'admin' => 'admin-list.csv');

$type = $_REQUEST['type'];
if (array_key_exists($type, $files)) {
	$filename = $files[$type];
}

if (isset($filename)) {
	$file = fopen($filename, 'r');
	
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
