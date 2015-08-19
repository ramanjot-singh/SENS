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


#container2{
   background-color: whitesmoke;
   width: 100%;
   margin: 25px auto;
   padding-bottom: 20px;

}

#menu, #menu ul {
   width: 100%;
   height: 35px;
   background-color: #333;
   color: #CCC;
   margin: 0px auto;
   padding: 0px;
   float: left;
   display: table;
   text-align: center;
   box-shadow: 0px 5px 3px grey;
}

#menu li{
  width: 20%;
   display: table-cell;
   vertical-align: middle;
   border: solid 1.5px olive;
   }

#menu a, #menu a:visited {
   color: #CCC;
   text-decoration: none;
   }


#menu a{
  display:inline-block;
  padding: 5px 125px; 
}

#menu li:hover {
   background-color: olive;
   color: white;
}

#mover{
	margin-top: 10%;
	text-align: center;
	font-size: 28px;

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
height: 50px;
text-transform: uppercase;
width: 100%;
-webkit-appearance:none;
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
</div>
<!--
<div id="container2">
         <div id="menu">
            <ul>
               <li><a href="frontpage1.php">Home</a></li>
               <li><a href="forum.php">Suggestion</a></li>
               <li><a href="help.html">Help</a></li>
               <li><a href="signin.php">Login</a></li>
            </ul>
         </div>
         <div id="content"></div>
</div>
-->

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

<p class="fake-legend"><span>DELETED CONTENT</span>
</p>


<div id="mover">
<?php

if(isset($_GET['submit'])){//to run PHP script on submit
if(!empty($_GET['check_list'])){
// Loop to store and display values of individual checked checkbox.

$servername = "localhost";
$username = "root";
$password = "rahul";
$dbname = "calendar";
$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



foreach($_GET['check_list'] as $selected){
$sql = "DELETE FROM `eventcalender` WHERE ID=$selected";
$conn->query($sql);

echo" ID = ".$selected."&nbspDeleted Successfully<br>";
}
$conn->close();
}
}

?>
</div>
<br><br>
<form id="formed" action ="sim_tab.php">
<input type="submit" value ="redirect" >
</form>

<div id="fixedfooter" align="center">Indian Institute of Technology Ropar, Nangal Road, Rupnagar, Punjab, INDIA 140001, Phone: 01881-242191</div>

</body>