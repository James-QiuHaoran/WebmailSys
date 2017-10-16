<?php
// connect to database
$conn = mysqli_connect('sophia.cs.hku.hk', 'hrqiu', '0414qhr') or die('Error! '.mysqli_error($conn));

// select database
mysqli_select_db($conn, 'hrqiu') or die('Error! '.mysqli_error($conn));

$query = 'SELECT sender, title, date, content FROM emails WHERE emailID ='.$_GET['emailID'];

// execute the query
$result = mysqli_query($conn, $query) or die('Error! '.mysqli_error($conn));

// fetch the result
$row = mysqli_fetch_array($result);
print "<h3>Title: <strong>".$row['title'].'</strong></h3>';
print "<h4>Sender: <strong>".$row['sender'].'</strong></h4>';
print "<h4>Date: <strong>".$row['date'].'</strong></h4>';
print "<p>".$row['content'].'</p>';
print "<button onclick=\"back()\"><strong>Go Back</strong></button>";
?>
