<!DOCTYPE html>
<html>
<head>
  <title>MckePark</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Shoe Store: MckePark">
<meta name="author" content="Mckenna and Park">

<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/stylesheets/main.css" />
<link rel="stylesheet" href="example.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
</head>

<body>
  <nav class="navington navbar-default navbar-static-top navbar-inverse">
  <div class="container">
    <ul class="nav navbar-nav">
      <li>
        <a href="/index.html"><span class="glyphicon glyphicon-home"></span> Home</a>
      </li>
      <li>
        <a href="/shop.php"><span class="glyphicon glyphicon-user"></span> Shop</a>
      </li>
      <li>
        <a href="/about-us.html"><span class="glyphicon glyphicon-user"></span> About Us</a>
      </li>
      <li class="active">
        <a href="/contact.php"><span class="glyphicon glyphicon-user"></span> Contact</a>
      </li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="navbar-right">
        <a href="/index.html"><span class="glyphicon glyphicon-book"></span> MckePark</a>
      </li>
    </ul>
  </div>
</nav>


<div class="content-wrapper-about-us">
     <div class="ribbon l-box-lrg pure-g">
  <div>

            <h1 style="color:#00802b">Contact Us</h1>
            <p style="width:50%; color:#000000">
            Contact Us! We'd love to here from you. Drop us a message and we are sure to respond as soon as we can. Our customers mean the most to us.<br>
            <br>
            <img style="height:200px; width:500px"src="contactus.jpg"><br>
            <br>
            Feel free to email us or call our toll free number with any concerns regarding your purchase.
            <br>
            <br>
            <h4 style="color:#990033"> 
            Email: donotemail@mckepark.github.io<br>
            Phone: +1-800-000-0000</h4>
            </p>
<form name="form1" method="post" action="contact.php">
  <div style="color:#000000">
    <br>
        Name:<input style="position:relative; left:50px"name="name" type="text" width="100%" ><br>
        Comments:<p><textarea id="textarea1" name="body" rows="4" cols="50" ></textarea></p>
        <input id="submitb" type="submit" name="Submit" value="Submit" >
 </div>

</form>

<?

$host = "ec2-54-235-93-178.compute-1.amazonaws.com";
$dbname="d466i9u3q6eeak";
$user = "vkbkjawbiiomxk";
$pass = "Gwao6Z_ODfvYnOcrCbvE_jsCfp";

$dbconn = pg_connect("host=$host dbname=$dbname user=$user password=$pass")
    or die('Could not connect: ' . pg_last_error());

$name = $_POST["name"];
$body = $_POST["body"];

if (!$_POST) {
}
else {
    if ($name=="")
    { 
      die("You haven't entered your name");
    }

    if ($body=="")
    { 
      die("You haven't entered any comment");
    } 

    $sql = "INSERT INTO guestbook (name, body) VALUES ('$name', '$body')";
}

$result = pg_query($sql);

if ($result)
{
    echo "Your details have been added to the database<br>";
    echo "<a href='contact.php'>Reload this page</a>" ;
} 
else
{
	echo "";  
}

$result = pg_query("select name, body from guestbook ORDER BY id desc");

while ($row = pg_fetch_array($result))
{
   echo "<hr><b>name:</b> $row[0]<br> <b>body: </b>$row[1]<br>";
}

?>
</div>
<div class="l-box-lrg is-center pure-u-1 pure-u-md-1-5 pure-u-lg-1-3">
          </div>
    </div>

  <div class="footer l-box is-center pure-u-1 pure-u-md-1 pure-u-lg-1">
    Designed by Kyu and Luisa
</div>
</div>
</body>
</html>
