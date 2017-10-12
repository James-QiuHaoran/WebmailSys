<?php
// connect to database
$conn = mysqli_connect('sophia.cs.hku.hk', 'hrqiu', '0414qhr') or die('Error! '.mysqli_error($conn));

// select database
mysqli_select_db($conn, 'hrqiu') or die('Error! '.mysqli_error($conn));

$query = 'UPDATE emails SET mailbox =\''.$_GET['mailbox'].'\' WHERE emailID =\''.$_GET['emailID'].'\'';
// print $query.'<br>';
// execute the query
$result = mysqli_query($conn, $query) or die('Error! '.mysqli_error($conn));

// the result should be 1 if successful
print $result;
?>