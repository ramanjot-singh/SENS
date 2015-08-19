<head>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


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

#txtarea{
  width:80%;
  margin: 0px 5%;
  height: 250px;
}

#tab{
	margin: auto 5%;
  width: 100%;
}

input[type="submit"] {
background-color: #008dde;  /*color=blue*/
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;       /*color=white*/
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 40px;
text-transform: uppercase;
width: 200px;
margin: auto 20%;
-webkit-appearance:none;
}

#formal{
  width: 100%;
  text-align: center;
  max-width: 100%;
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

#mybutton{
  width: 80%; 
  max-width: 100%;
  margin: auto 5%;
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
<?php
	$forum='';
	$abc='';
	$er=0;

		if (empty($_POST["forum"]))
		{
				$abc = "Suggestion is required";
				
				$er = 1;
		}
		else{
				$forum = $_POST["forum"];
		}


	?>

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

<form id="formal" name = 'forum' method ='POST' action="<?php $_SERVER['PHP_SELF']; ?>">
	<table id='tab'>
		<tr>
			<!--<td align ='center'>Suggestion</td>-->
		</tr>
		<tr>
			<td><textarea id="txtarea" name ='forum' value="<?php echo $forum;?>" align='center'></textarea></td>
      
		</tr>	
    <tr></tr>
		<tr>
			<td colspan ='2' ><br><input id="mybutton" type='submit' name ='submit' value ='Submit'></td>
			
		</tr>
	</table>

	<?php

	

		if(isset( $_POST['submit']) AND $er==0) {
			
			if (empty($_POST["forum"]))
		{
				$abc = "Suggestion is required";
				echo $abc;
		
		}
		else{

			$servername = "localhost:3306";
			$username = "root";
			$passwor = "rahul";
			$dbname = "calendar";

			$conn = new mysqli($servername, $username, $passwor, $dbname);
			// Check connection
			if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
			} 
      
			$sql  =  "INSERT INTO Suggestion(suggestion) VALUES ('$forum')";

			if ($conn->query($sql) === TRUE) {
    			echo "<br><strong> Your Suggestion is Sucessfully added</strong>";
    		}

		}
	}
		
		?>

<footer id="fixedfooter" align="center">Indian Institute of Technology Ropar, Nangal Road, Rupnagar, Punjab, INDIA 140001, Phone:+91-1881-227078</footer>

</body>