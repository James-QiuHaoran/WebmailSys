<?php
// connect to database
$conn = mysqli_connect('sophia.cs.hku.hk', 'hrqiu', '0414qhr') or die('Error! '.mysqli_error($conn));

// select database
mysqli_select_db($conn, 'hrqiu') or die('Error! '.mysqli_error($conn));

$query = 'SELECT sender, title, date, content FROM emails WHERE emailID ='.$_GET['emailID'];
// print $query.'<br>';
// execute the query
$result = mysqli_query($conn, $query) or die('Error! '.mysqli_error($conn));

// fetch the result
$row = mysqli_fetch_array($result);
print $row['sender'].'<br>';
print $row['title'].'<br>';
print $row['date'].'<br>';
print $row['content'].'<br>';
?>