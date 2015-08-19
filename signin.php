
<meta charset="utf-8">
<style type="text/css"> /* Style STARTS HERE */

body {
background-color: #CCC;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
margin:150px 80px 100px 100px;	
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
background-color: #00002E;
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
}

/*#btn_bgd{
margin: 0px 50px ;
width: 75px;
background-color: yellow;
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
}*/


form fieldset input[type="text"], input[type="password"] {
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
width: 300px;
-webkit-appearance:none;
}

form fieldset input[type="submit"] {
background-color: #008dde;	/*color=blue*/
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;				/*color=white*/
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 300px;
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

</style>	<!-- Style STARTS HERE-->



<?php
session_start();

if (isset($_SESSION['user'])){
  header("location:rough.php");
  
}

$nameErr = $emailErr = $genderErr = $websiteErr = $cpasserr= $passerr = '';
$fname = $Email = $lname = $cpassword = $password = $passw = $encrypt_password='';
$er=0;
$a=$b='';

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
   if (empty($_POST["Email"])) {
     $emailErr = "<br>Email is required";
     $er=1;
   } else {
     $Email = test_input($_POST["Email"]);
     // check if e-mail address is well-formed
     if (!preg_match("/@iitrpr.ac.in*$/",$Email)) {
       $emailErr = "<br>Invalid email format";
       $er=1; 

     }
   }
     
    if (empty($_POST["password"])) {
     $passerr = "<br>password is required";
     $er=1;
   } else {
     $password = test_input($_POST["password"]);
     //echo "passw".$password;
     // check if name only contains letters and whitespace
     
   }
   //echo "sf".$password;

     // check if name only contains letters and whitespace
     
   }
   
  

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<!--Body starts here-->
<!--Body starts here-->
<body>
<div id="fixedheader">    <!--HEADER-->
<img id="logo" src="img1.png" align="center">

</div>




<div id="bgd">
<div id="login">


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" align ="center"> 
   <fieldset style="border:0px" >
	<legend>Login Details</legend>
   <br>
   E-mail@iitrpr.ac.in:<br> <input type="text" name="Email" value="<?php echo $Email;?>">
   <span class="error"><?php echo $emailErr;?></span>
   <br><br>
   
   Password:<br><input type="password" name="password" value="<?php echo $password;?>">
   <span class="error"><?php echo $passerr;?></span>
   <br><br>
   
   <input type="submit" name="submit" value="Submit"> 
	<p><a href="form.php">Not a member yet? Sign Up now.</a></p>
    <p style="font-size:12px">In case you forget password, contact the administrator.</p>
</fieldset>
</div> <!-- end login -->
</div>

<div id="fixedfooter" align="center">Indian Institute of Technology Ropar, Nangal Road, Rupnagar, Punjab, INDIA 140001, Phone:+91-1881-227078</div>

<?php
if(isset( $_POST['submit']) AND $er==0) {
$servername = "localhost:3306";
$username = "root";
$passwor = "rahul";
$dbname = "signupform";

$a = $_POST['Email'];
$b = $_POST['password'];
$c=md5($b);
//echo $a;

    // your complete rest php code goes here to insert the record

// Create connection
$conn = new mysqli($servername, $username, $passwor, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


// sql to insert
//echo $email;
//echo "sfgs".$password;

$sql = "SELECT * FROM MyGuests WHERE email = '$a' AND password = '$c'";
     // or die(mysql_error());


$resultquery = $conn->query($sql);
echo $resultquery->num_rows; 
if ($resultquery->num_rows ==1) {

 $_SESSION['sessionuser'] =$_POST['Email'] ; 
 header("location:rough.php");
  exit;
} else {
    $password='';
    echo "<p align = 'center' color = 'red'>* Invalid login Credentials</p>";
}


$conn->close();
}
?>
</form>
</body>