<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User CRUD</title>
</head>
<body>
	<?php
	require 'iCrud.php';
	require 'User.php';
	$user = array(
		'username' => 'Joe'
	);
	echo "<h2>Creating a New User</h2>";
	$me = new User($user);

	// Get User ID
	$info = $me->read();
	echo "<p>The user ID is {$info['userId']}.</p>";

	// Update username
	$update_me = array(
		'username' => 'Jack'
	);
	$me->update($update_me);
	// Read new info
	$info = $me->read();
	echo "<p>The user name is now {$info['username']}.</p>";

	// Delete the record
	$me->delete();

	unset($me);
	?>
</body>
</html>

