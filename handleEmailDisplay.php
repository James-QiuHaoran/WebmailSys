<?php
// connect to database
$conn = mysqli_connect('sophia.cs.hku.hk', 'hrqiu', '0414qhr') or die('Error! '.mysqli_error($conn));

// select database
mysqli_select_db($conn, 'hrqiu') or die('Error! '.mysqli_error($conn));

// create sql query
$query = 'SELECT emailID, sender, title, date FROM emails WHERE mailBox='.$_GET['mailBox'].' ORDER BY emailID DESC LIMIT '.$_GET['lastRecord'].', 10;';

// execute the query
$result = mysqli_query($conn, $query) or die('Error! '.mysqli_error($conn));

// fetch the result
print "<table>";
$index = 0;
while ($row = mysqli_fetch_array($result)) {
	// display to client side
	if ($index == 0)
		print "<tr><th></th><th><strong>&nbsp&nbsp&nbsp&nbspSender</strong></th><th>&nbsp&nbsp&nbsp&nbsp<strong>Title<strong></th><th>&nbsp&nbsp&nbsp&nbsp<strong>Date</strong></th></tr>";
	print "<tr><td><input type=\"checkbox\" name=\"emailrow\" id=\"".$row["emailID"]."\"></td><td rowid=\"".$row["emailID"]."\" onclick=\"showContent(this)\">&nbsp&nbsp&nbsp&nbsp".$row["sender"]."&nbsp&nbsp</td><td rowid=\"".$row["emailID"]."\" onclick=\"showContent(this)\">&nbsp&nbsp&nbsp&nbsp".$row["title"]."&nbsp&nbsp</td><td rowid=\"".$row["emailID"]."\" onclick=\"showContent(this)\">&nbsp&nbsp&nbsp&nbsp".$row["date"]."&nbsp&nbsp</td></tr>";
	$index++;
}
print "</table>"
?>
