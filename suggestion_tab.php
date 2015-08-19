<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>


  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Simple Little Table in HTML/CSS3</title>

<style type="text/css">

body {
background-color: #CCC;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
margin:150px 80px 100px 100px;  
z-index: 2;
}

a { text-decoration: none; } 

h1 { font-size: 1em; }

h1, p {
margin-bottom: 10px;
}

strong {
font-weight: bold;
}

input[type="submit"] {
background-color: #008dde;	/*color=blue*/
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;				/*color=white*/
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 20px;
text-transform: uppercase;
width: 120px;
margin: 0px 240px; 
-webkit-appearance:none;
}

div#fixedheader {
  position:absolute;
  top:0px;
  left:0px;
  width:100%;
  color:#CCC;
  background:#00002E;
  padding:20px;
  z-index: 1;
  box-shadow: 0px 5px 3px grey;
}
#fixedfooter {
  position:fixed;
  bottom:0px;
  left:0px;
  width:100%;
  color:#CCC;
  background:#00002E;
  padding:8px;
}
div#mychoice {
  align:left;
}

#logo{
margin-left: 22.5%;
height: 100px;
width: 700px;
position:relative;
}


body { line-height: 1; }
ol, ul { list-style: none; }
blockquote, q { quotes: none; }
blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; }
:focus { outline: 0; }
del { text-decoration: line-through; }
table {border-spacing: 0; }


a:link {
	color: #666;
	font-weight: bold;
	text-decoration:none;
}
a:visited {
	color: #666;
	font-weight:bold;
	text-decoration:none;
}
a:active,
a:hover {
	color: #bd5a35;
	text-decoration:underline;
}

table {
	font-family:Arial, Helvetica, sans-serif;
	color:#666;
	font-size:12px;

	text-align: center;

	width: 100%;

	/*text-shadow: 1px 1px 0px #fff;*/
	background:#eaebec;
	border:#ccc 1px solid;

	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;

	-moz-box-shadow: 0 1px 2px #d1d1d1;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
}
table th {
	text-align: center;
	width: 16.6%;
	padding:21px 25px 22px 25px;
	border-top:1px solid #fafafa;
	border-bottom:1px solid #e0e0e0;
	color: #CCC;
	background: #00002E;
}
table th:first-child{
	text-align: left;
}
table tr:first-child th:first-child{
	-moz-border-radius-topleft:3px;
	-webkit-border-top-left-radius:3px;
	border-top-left-radius:3px;
}
table tr:first-child th:last-child{
	-moz-border-radius-topright:3px;
	-webkit-border-top-right-radius:3px;
	border-top-right-radius:3px;
}
table tr{
	text-align: center;
}
table tr td:first-child{
	text-align: left;
	border-left: 0;
}
table tr td {
	padding:18px;
	/*border: 1px solid #333;
	/*border-top: 1px solid #ffffff;
	border-bottom:1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;
	*/
	background: solidgray;
	background: -webkit-gradient(linear, left top, left bottom, from(solidgray), to(solidgray));
	background: -moz-linear-gradient(top,  solidgray,  solidgray);
}
table tr.even td{
	background: #f6f6f6;
	background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
	background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
}
table tr:last-child td{
	border-bottom:0;
}
table tr:last-child td:first-child{
	-moz-border-radius-bottomleft:3px;
	-webkit-border-bottom-left-radius:3px;
	border-bottom-left-radius:3px;
}
table tr:last-child td:last-child{
	-moz-border-radius-bottomright:3px;
	-webkit-border-bottom-right-radius:3px;
	border-bottom-right-radius:3px;
}
table tr:hover td{
	background: #f2f2f2;
	background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
	background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);	
}


#colorising{
  background-color: #00002E;
}

#colorising2{
  background-color: #FFFFFF;
  margin-bottom: 0px;
}

.widthing{
  color: #FFFFFF;
  width: 266px;
  text-align: center;
  /*background-color: #000000;
  */
  margin: 0px 5px;
  background-color: #00002E;
}

.fake-legend {
  margin: 25px 0px;
  height: 15px;
  width:100%;
  border-bottom: solid 2px #000;
  text-align: center;
}
.fake-legend span {
  background: #CCC;
  position: relative;
  top: 0;
  padding: 0 20px;
  line-height:30px;
}



</style>

</head>

<body>

<div id="fixedheader">    <!--HEADER-->
<img id="logo" src="img1.png" align="center">
</div>

<nav class="navbar navbar-inverse" id="colorising2">
  <div class="container-fluid" class="colorising">
    <div class="navbar-header" class="colorising">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="colorising" id="myNavbar">
      <ul class="nav navbar-nav" >
        <li class="widthing"><a href="frontpage1.php">Home</a></li>
        <li class="widthing"><a href="forum.php">Suggestion</a></li>
        <li class="widthing"><a href="help.html">Help</a></li>
        <li class="widthing"><a href="signin.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<p class="fake-legend"><span>SUGGESTIONS</span>
</p>

<?php
$servername = "localhost:3306";
$username = "root";
$password = "rahul";
$dbname = "calendar";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
$sql = "SELECT * FROM `suggestion` WHERE id BETWEEN 1 AND 2540000 ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<body>";
	echo "<form method =get action=sub_delogs.php>";
	

	echo "<table cellspacing='0'>";
	echo "<tr><th>S.NO.</th><th>Suggestion</th></tr><!-- Table Header -->";
    $incre=1;
    
    while($row = $result->fetch_assoc()) {
		echo "<tr><td><input type=checkbox name=check_list[] value=$row[id]>$incre</td><td><td>$row[suggestion]</td></tr>";
		$incre++;
    }
	echo "</table>";
	

	echo "<br>"."<input type=submit value =Delete name=submit>";
	//echo "<br>"."<input type=submit value =DeleteSelectedEntries name=submit>";
	echo "</form>";
	echo "</body>";
	
} else {
	echo '<pre>';
    echo "	<p align='center'>Table is empty</p>";
    echo '</pre>';
}


$conn->close();
?>


<div id="fixedfooter" align="center">Indian Institute of Technology Ropar, Nangal Road, Rupnagar, Punjab, INDIA 140001, Phone: 91-1881-227078</div>


</body>