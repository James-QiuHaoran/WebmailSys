<?php
// connect to database
$conn = mysqli_connect('sophia.cs.hku.hk', 'hrqiu', '0414qhr') or die('Error! '.mysqli_error($conn));

// select database
mysqli_select_db($conn, 'hrqiu') or die('Error! '.mysqli_error($conn));

// create sql query
$query = 'SELECT emailID, sender, title, date, mailBox FROM emails WHERE mailBox='.$_GET['mailBox'].' LIMIT '.$_GET['lastRecord'].', 10;';

// execute the query
$result = mysqli_query($conn, $query) or die('Error! '.mysqli_error($conn));

// fetch the result
print "<table>";
$index = 0;
while ($row = mysqli_fetch_array($result)) {
	// display to client side
	if ($index == 0)
		print "<tr><td></td><td>&nbsp&nbsp&nbsp&nbsp<strong>Sender</strong></td><td>&nbsp&nbsp&nbsp&nbsp<strong>Title<strong></td><td>&nbsp&nbsp&nbsp&nbsp<strong>Date</strong></td><td>&nbsp&nbsp&nbsp&nbsp<strong>Mail Box</strong></td></tr>";
	print "<tr><td><input type=\"checkbox\" name=\"emailrow\" id=\"".$row["emailID"]."\"></td><td rowid=\"".$row["emailID"]."\" onclick=\"showContent(this)\">&nbsp&nbsp&nbsp&nbsp".$row["sender"]."</td><td rowid=\"".$row["emailID"]."\" onclick=\"showContent(this)\">&nbsp&nbsp&nbsp&nbsp".$row["title"]."</td><td rowid=\"".$row["emailID"]."\" onclick=\"showContent(this)\">&nbsp&nbsp&nbsp&nbsp".$row["date"]."</td><td>&nbsp&nbsp&nbsp&nbsp".$row["mailBox"]."</td></tr>";
	$index++;
}
print "</table>"
?>
