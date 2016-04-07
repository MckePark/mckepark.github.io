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
  <nav class="navbar navbar-default navbar-static-top navbar-inverse">
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
          <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-5 pure-u-lg-1-3">
          </div>
  <div class="pure-u-1 pure-u-md-3-5 pure-u-lg-1-3 about-us">

            <h2 class="content-head content-head-ribbon">Contact Us</h2>

            <p>
            Email: donotemail@mckepark.github.io
<br>
            Phone: +1-800-000-0000
            </p>
            <form name="form1" method="post" action="contact.php">
<table width="40%" border="1" align="center" cellpadding="0" cellspacing="0">
<tr align="left" valign="top">
<td width="22%">name
</td>
<td width="78%">
<input name="name" type="text" width="100%" >
</td>
</tr>
<tr align="left" valign="top">
<td>Comments &nbsp;</td>
<td><textarea name="body" rows="3" width="100%" ></textarea></td>
</tr>
<tr align="left" valign="top">
<td colspan="2"><div align="center">
<input type="submit" name="Submit" value="Submit">
</div></td>
</tr>
</table>
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
    echo "<center>Your details have been added to the database<br>";
    echo "<a href='contact.php'>Reload this page</a></center>" ;
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
