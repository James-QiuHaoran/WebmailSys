<?php
// connect to database
$conn = mysqli_connect('sophia.cs.hku.hk', 'hrqiu', '0414qhr') or die('Error! '.mysqli_error($conn));

// select database
mysqli_select_db($conn, 'hrqiu') or die('Error! '.mysqli_error($conn));

// create sql query
$query = 'SELECT emailID, sender, title, date FROM emails LIMIT '.$_GET['lastRecord'].', 10;';

// execute the query
$result = mysqli_query($conn, $query) or die('Error! '.mysqli_error($conn));

// fetch the result
while ($row = mysqli_fetch_array($result)) {
	// display to client side
	print "<input type=\"checkbox\" id=\"".$row["emailID"]."\">&nbsp&nbsp&nbsp&nbsp".$row["sender"]."&nbsp&nbsp&nbsp&nbsp".$row["title"]."&nbsp&nbsp&nbsp&nbsp".$row["date"]."<br>";
}
?>