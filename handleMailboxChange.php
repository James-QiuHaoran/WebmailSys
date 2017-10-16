<?php
// connect to database
$conn = mysqli_connect('sophia.cs.hku.hk', 'hrqiu', '0414qhr') or die('Error! '.mysqli_error($conn));

// select database
mysqli_select_db($conn, 'hrqiu') or die('Error! '.mysqli_error($conn));

if ($_GET['mailbox'] == 'trash')
	$query = 'UPDATE emails SET mailbox = \'trash\' WHERE emailID =\''.$_GET['emailID'].'\'';
else if ($_GET['mailbox'] == 'delete')
	$query = 'DELETE FROM emails WHERE emailID=\''.$_GET['emailID'].'\'';
else if ($_GET['mailbox'] == 'inbox')
	$query = 'UPDATE emails SET mailbox = \'inbox\' WHERE emailID =\''.$_GET['emailID'].'\'';
else if ($_GET['mailbox'] == 'important')
	$query = 'UPDATE emails SET mailbox = \'important\' WHERE emailID =\''.$_GET['emailID'].'\'';

$result = mysqli_query($conn, $query) or die('Error! '.mysqli_error($conn));

// the result should be 1 if successful
print $result;
?>
