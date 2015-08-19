<html>

<head>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<meta charset="utf-8">
<title>SignUpPage</title>


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
.s{
  color: red;
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


<?php
//header('Content- Type: text/xml')
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $cpasserr= $passerr = '';
$fname = $email = $lname = $cpassword = $password = $passw = $encrypt_password='';
$er=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   if (empty($_POST["fname"])) {
     $nameErr = "First Name is required";
     $er=1;
   } else {
     $fname = test_input($_POST["fname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
       $nameErr = "Only letters and white space allowed";
       $er=1; 
     }
   }

if (empty($_POST["lname"])) {
     $nameErr = "Last Name is required";
     $er=1;
   } else {
     $lname = test_input($_POST["lname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
       $nameErr = "Only letters and white space allowed";
       $er=1; 
     }
   }

   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
     $er=1;
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!preg_match("/@iitrpr.ac.in*$/",$email)) {
       $emailErr = "Invalid email format";
       $er=1; 
     }
   }
     
    if (empty($_POST["password"])) {
     $passerr = "password is required";
     $er=1;
   } else {
     $password = test_input($_POST["password"]);
     //echo "passw".$password;
     // check if name only contains letters and whitespace
     
   }
   //echo "sf".$password;

    if (empty($_POST["cpassword"])) {
     $cpasserr = "Re enter the password ";
     $er=1;

   } else {
     $cpassword = test_input($_POST["cpassword"]);
     if (($_POST["cpassword"] )!= ($_POST["password"]))
     {
      $cpasserr = "<br>Password Do Not Match";
      $er=1;
     }
     $passw="john856";
$encrypt_password=md5($password);
//echo $encrypt_password; 

     // check if name only contains letters and whitespace
     
   }
   
  }

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
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

<p class="fake-legend"><span>SIGN UP DETAILS</span>
</p>


<div id="bgd">
<div id="login">


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" align="center"> 

   <br>
<fieldset style="border:0px" >
<p>First Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Last name<br> <input type="text" required name="fname" value="<?php echo $fname;?>" ><span class="error"><?php echo $nameErr;?></span>
<input type="text" required name="lname" value="<?php echo $lname;?>"  ><span class="error"><?php echo $nameErr;?></span></p>
<p>E-mail@iitrpr.ac.in<br><input type="email" required name="email" value="<?php echo $email;?>"  ><span class="error"><?php echo $emailErr;?></span></p>
Password
<p><input type="password" required name="password" value="<?php echo $password;?>" ><span class="error"><?php echo $passerr;?></span></p>
Confirm Password
<p><input type="password" required name="cpassword" value="<?php echo $cpassword;?>" ><span class="error"><?php echo $cpasserr;?></span></p>
<p><input type="submit" name="submit" value="Submit"</p><br><br>
</fieldset>

</div>
</div>

<!--   <input type="submit" name="submit" value="Submit">--> 


<div id="fixedfooter" align="center">Indian Institute of Technology Ropar, Nangal Road, Rupnagar, Punjab, INDIA 140001, Phone:+91-1881-227078</div>



<?php
//echo $er;

if(isset( $_POST['submit']) AND $er==0) {
$servername = "localhost:3306";
$username = "root";
$passwor = "rahul";
$dbname = "signupform";



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
$sql1 = "SELECT * FROM MyGuests WHERE email = '$email'";
$sql2 = "SELECT * FROM validemail WHERE email = '$email'";
$resultquery = $conn->query($sql1);

$resultquery1 = $conn->query($sql2);
if ($resultquery1->num_rows !=0)
{
  if ($resultquery->num_rows !=0)
{
    echo "Already a Member<br> ";
    echo "<font color='red'>";
   echo" <a class ='s' href='signin.php'>Click here to login:</a>"; 
   echo "</font>";
}
else{
  $ac= md5($password);
$sql = "INSERT INTO MyGuests (firstname, lastname, email, password)
VALUES ('$fname', '$lname', '$email', '$ac')";

if ($conn->query($sql) === TRUE) {
    echo "You are Sucessfully registered<br>";
    echo" <a class ='s' href='signin.php'>Click here to login:</a>"; 
    exit;
    
}
}
}
else{
  echo "Not member of IIT ROPAR";
}
$conn->close();
}

?>
</form>