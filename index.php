<?php

// Create connection
// Localhost is the server name,
// root is the username,
// password is empty
// database name is gfg
$db = new mysqli('localhost', 'root', '', 'gfg');

// Checking connection
if ($db->connect_errno) {
echo "Failed " . $db->connect_error;
exit();
}
?>

		<?php

		// Get csv file
		if(($handle = fopen("detail.csv","r")) !== FALSE) {
			while(($row = fgetcsv($handle)) !== FALSE) {

				$db->query('INSERT INTO table2 VALUES ("'.$row[0].'","'.$row[1].'", "'.$row[2].'")') ;
			
			}
			
		// Closing the file
		fclose($handle);
	}
	?>
