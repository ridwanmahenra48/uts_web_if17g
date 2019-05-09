<?php

$dbcon = new mysqli("localhost", "root", "", "db-login");
if ($dbcon->connect_errno) {
	echo "Failed to connect mysql";
}

?>