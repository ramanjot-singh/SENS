
<?php
$servername = "localhost";
$username = "root";
$password = "rahul";
$dbname = "calendar";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "Connected successfully";
$sql = "SELECT `ID`, `Email`,  `Title`, `Detail` FROM `eventcalender` WHERE ID BETWEEN 1 AND 2540000 order by ID desc limit 20";
//echo "ramana";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Name: " . $row["Email"];
		echo "    Title is :" . $row["Title"]. "    event details are : " .$row["Detail"]."<br>";
		echo "<form method =get action=ad_delogs.php>"."<input type=checkbox name=check_list[] value=$row[ID]>";
		
    }
	echo "<br>"."<input type=submit value =DeleteSelectedEntries name=submit>";
	echo "</form>";
	
	
} else {
    echo "															No Activity";
}
$conn->close();
?>






