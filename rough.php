
<?php
	session_start();
	//echo "loged in as:";
	//echo $_SESSION["sessionuser"];


	$hostname = "localhost:3306";
	$username = "root";
	$password="rahul";
	$dbname = "calendar";
	$error= "Cannot connect to database, Please try again later... ";

	$conn = new mysqli($hostname, $username, $password, $dbname);
	if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
	//mysql_connect($hostname,$username,$password) or die($error);
	//mysql_select_db($dbname) or die($error);
?>
<html>
	
	<head>

		 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


		<script>
			function goLastMonth(month,year){
					if (month == 1){
							--year;
							month = 13;
					}
					--month;
					var monthstring =""+month+"";
					var monthlength = monthstring.length;
					if (monthlength<=1)
					{
						monthstring = "0"+monthstring;
					}
					document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;

			}

			function goNextMonth(month,year){
				if (month == 12)
				{
					++year;
					month = 0;
				}
					++month;
					var monthstring =""+month+"";
					var monthlength = monthstring.length;
					if (monthlength<=1)
					{
						monthstring = "0"+monthstring;
					}
			
				document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;				
			}
		</script>
		<style>
			   .today{
			   		background-color: #008dde;

			   }
			   .event{ /* EVENT BACKGROUND*/
			   		background-color: #008dde;
			   		border-radius: 8px;
					-moz-border-radius: 8px;
					-webkit-border-radius: 8px;

			   }	

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

.uppercase { text-transform: uppercase; }

/* ---------- LOGIN ---------- */
#login {
margin: 50px auto;
width: 500px;
color: #CCC;
}

#bgd{
margin: 50px auto;
width: 500px;
background-color: #333;
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
}

#tbbgd{
margin: 25px auto 10px auto;
width: 100%;
background-color: #00002E;
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
}
#stylise{
padding-top: 15px;
margin: 25px auto 10px auto;
min-width: 350px;
background-color: #00002E;
color: #FFFFFF;
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
}

#eve {
background-color: #008dde;	/*color=blue*/
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;				/*color=white*/
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 300px;
-webkit-appearance:none;
padding: 5px;
margin-left: 45%;
}

/*#btn_bgd{
margin: 0px 50px ;
width: 75px;
background-color: yellow;
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
}*/


form fieldset input[type="text"], input[type="password"], input[type="email"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 200px;
-webkit-appearance:none;
}

input[type="password"],input[type="email"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 400px;
-webkit-appearance:none;
}

form fieldset input[type="submit"] {
background-color: #008dde;  /*color=blue*/
border: none;
border-radius: 3px; 	
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;       /*color=white*/
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 400px;
-webkit-appearance:none;
}

form fieldset a {
color: #CCC;
font-size: 15px;
}

form fieldset a:hover { text-decoration: underline; }

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

#linker{
color: #008dde;
text-align: right;
}	

#prev, #next {
background-color: #CCC;  /*color=blue*/
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;       /*color=white*/
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height:30px;
text-transform: uppercase;
width: 50px;
-webkit-appearance:none;
}

.moname{
	color: #CCC;
}



a:link    {color:#CCC; background-color:transparent; text-decoration:none;}
a:visited {color:#CCC; background-color:transparent; text-decoration:none;}
a:hover   {color:#ff0000; background-color:transparent; text-decoration:none;}
a:active  {color:#ff0000; background-color:transparent; text-decoration:none;}

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


#mover{margin-right: 0px;}

#menu{
	margin-top: 30px;
}

.central{
	margin-left:25px; 
	text-align: justify;
}

#tbl{
	width: 100%;
	font-size: 25px; 
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

</style>


	</head>


	<body>

<div id="fixedheader">    <!--HEADER-->
<img id="logo" src="img1.png" align="center"><!--
<span class="spannn">SENS: Student Events and Notification System</span>-->
<!--<div id="btn_bgd" >-->
<!--<a id="linker" href="mainpage.html">LOGIN</a>
<span class="spannn2">/</span>
<a id="linker2" href="mainpage.html">LOGIN AS ADMIN</a>
<!--</div>-->
<br>
<div id="mycontainer">

<div >
<?php
	echo "<span margin-right='0px'  color = 'red'>loged in as: 	</span>".$_SESSION["sessionuser"];
?>
</div>

<div>
<?php
if($_SESSION["sessionuser"] == 'rahul.agrawal@iitrpr.ac.in' OR $_SESSION["sessionuser"]=='ramanjot.singh@iitrpr.ac.in' OR $_SESSION["sessionuser"]=='prateek.raina@iitrpr.ac.in'){
		
		echo "<a href='sim_tab.php'>View Log Table</a>";
}?>
</div>

<div>
<?php
if($_SESSION["sessionuser"] == 'rahul.agrawal@iitrpr.ac.in' OR $_SESSION["sessionuser"]=='ramanjot.singh@iitrpr.ac.in' OR $_SESSION["sessionuser"]=='prateek.raina@iitrpr.ac.in'){
		
		echo "<a href='suggestion_tab2.php'>View Suggestion Table</a>";
}?>
</div>


</div>

</div>
<br><br><br>
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
        <li class="widthing"><a href="signin.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<br>
		<?php

		if (isset($_GET['day'])){
			$day = $_GET['day'];
			//echo $day;
		}
		else{
			$day = date("j");

		}
		if (isset($_GET['month']))
		{
			$month = $_GET['month'];
		}
		else{
			$month = date("n");
		}
		if (isset($_GET['year'])){
			$year = $_GET['year'];

		}
		else {
			$year = date("Y");
		}



		
		//calendar variable
		$currentTimeStamp = strtotime("$year-$month-$day");
		$monthName = date("F",$currentTimeStamp);
		$numDays = date("t",$currentTimeStamp);
		$counter = 0;

		?>
		<?php

		if (isset($_GET['add'])){
			$title = $_POST["txttitle"];
			//echo $title;
			$detail = $_POST["txtdetail"];

			$eventdate = $year."-".$month."-".$day;
			//echo $title.$detail.$eventdate;
			$a1 = '';
			$a1=$_SESSION['sessionuser'];
			$sqlinsert = "INSERT INTO eventcalender (Email,Title,Detail,eventDate,dateAdded) VALUES('$a1','$title','$detail','$eventdate',now())";
			//$resultinsert = mysql_query($sqlinsert);
			if ($conn->query($sqlinsert) === TRUE){

				echo "Event was succesfully added";

			}
			else{
				echo  "Error: " . $sqlinsert . "<br>" . $conn->error;
			}
		}

		?>
		
		<p class="fake-legend"><span>EVENTS AND NOTIFICATION CALENDAR</span>
		</p>	

		<div id="tbbgd">
			<br>
		<table id="tbl" align="center">
				<tr id="mytr">
					<td ><input id="prev" style ='width:50px; color:#333;' type ='button' value='<' name='previousbutton' onclick="goLastMonth(<?php echo $month.",".$year ?>)"></td>
					<td class="moname" colspan='5' align="center"><?php echo $monthName.", ".$year; ?></td>
					
					<td><input id="next" style ='width:50px; color:#333' type ='button' value='>' name='nextbutton' onclick="goNextMonth(<?php echo $month.",".$year ?>)"></td>
				</tr>
				<tr>

					<td width='50px' class="moname" align="center">Sun</td>
					<td width='50px' class="moname" align="center">Mon</td>
					<td width='50px' class="moname" align="center">Tue</td>
					<td width='50px' class="moname" align="center">Wed</td>
					<td width='50px' class="moname" align="center">Thu</td>
					<td width='50px' class="moname" align="center">Fri</td>
					<td width='50px' class="moname" align="center">Sat</td>
				
				</tr>
				<?php
					echo "<tr>";
					for ($i=1; $i<$numDays+1;$i++, $counter++){

						$timeStamp = strtotime("$year-$month-$i");
						if ($i==1)
						{
							$firstDay = date("w",$timeStamp);
							for ($j=0;$j<$firstDay; $j++,$counter++){
								//blank space
								echo "<td>&nbsp;</td>";
							}
						}	
						if ($counter % 7 ==0){
								echo "</tr><tr>";
						}
						$monthstring = $month;
						$monthlength = strlen($monthstring);
						// 
						$daystring = $i;
						$daylength = strlen($daystring);
						if($monthlength <=1){
							$monthstring = "0".$monthstring;
						}
						if ($daylength <=1)
						{
							$daystring = "0".$daystring;
						}
						$todaysDate = date("m/d/y");
						$dateToCompare = $year.'-'. $monthstring .'-'.$daystring;
						echo "<td align='center'";

						if ($todaysDate == $dateToCompare){
							echo "class='today'";
						}else{

							$sqlcount = "SELECT * FROM eventcalender WHERE eventDate ='".$dateToCompare."'";
							$result = $conn->query($sqlcount);

							//$noOfEvent = mysql_num_rows(mysql_query($sqlcount));
							if ($result->num_rows>=1){

									echo "class ='event'";
							}
						}

						echo "<td><a   href = '".$_SERVER['PHP_SELF']."?month=".$monthstring."&day=".$daystring."&year=".$year."&v=true'>".$i."</a></td>";
					}
					echo "</tr>";

				?>
		</table>
		<br>
	</div>

		<?php

			if (isset($_GET['v'])){

				echo "<a id='eve' href = '".$_SERVER['PHP_SELF']."?month=".$month."&day=".$day."&year=".$year."&v=true&f=true'>Add Event</a>";

			
			if (isset($_GET['f'])){
				include("eventform.php");	
				
			}
			$sqlEvent = "SELECT * FROM eventcalender WHERE eventDate='".$year."-".$month."-".$day."'" ;
			$resultEvents = $conn->query($sqlEvent);
			if ($resultEvents->num_rows > 0){
				
			}			
			echo "<hr>";
			//echo $_SESSION['sessionuser'];

			while ($events  = $resultEvents->fetch_assoc()) {
				echo "<div id='stylise'>";
				echo " <p class='central'> <strong>Event Date</strong><br>".$events['eventDate']."<br></p>";
				echo " <p class='central'> <strong>Title</strong><br>".$events['Title']."<br></p>";
				echo " <p class='central'> <strong>Detail</strong><br>".$events['Detail']."<br></p>";
				echo "<p class='central'> <br></p>";
				echo "</div>";
			}

		}
			?>

		<div id="fixedfooter" align="center">Indian Institute of Technology Ropar, Nangal Road, Rupnagar, Punjab, INDIA 140001, Phone: +91-1881-227078</div>

		
	</body>
	
	</html>