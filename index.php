<?php

// Create connection
// Localhost is the server name,
// root is the username,
// password is empty
// database name is gfg
$db = new mysqli('localhost', 'root', '', 'employees');

// Checking connection
if ($db->connect_errno) {
echo "Failed " . $db->connect_error;
exit();
}
?>

		<?php

		// Get csv file
		if(($handle = fopen("employees.csv","r")) !== FALSE) {
			while(($row = fgetcsv($handle)) !== FALSE) {

				$db->query('INSERT INTO details VALUES (NULL,"'.$row[0].'","'.$row[1].'", "'.$row[2].'","'.$row[3].'","'.$row[4].'", "'.$row[5].'","'.$row[6].'","'.$row[7].'", "'.$row[8].'","'.$row[9].'","'.$row[10].'")');
			
			}

			echo "Successfully Inserted";
			
		// Closing the file
		fclose($handle);
	}
	?>
