<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact: MckePark</title>
	<meta name="description" content="Shoe Store: MckePark">
	<meta name="author" content="Mckenna and Park">

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if lte IE 8]>
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
  
<![endif]-->
<!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="example.css">
    <!--<![endif]-->
<!--[if gt IE 8]><!-->
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  
<!--<![endif]-->
</head>

<body>
<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">MckePark</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="index.html" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item"><a href="oldshop.html" class="pure-menu-link">Shop</a></li>
            <li class="pure-menu-item"><a href="about-us.html" class="pure-menu-link">About Us</a></li>
            <li class="pure-menu-item pure-menu-selected"><a href="contact.html" class="pure-menu-link">Contact</a></li>
        </ul>
    </div>
</div>

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
            <form name="form1" method="post" action="gb.php">
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

$dbi = mysqli_connect($host, $name, $pass) 
        or die("I cannot connect to the database. Error :" . mysqli_error());
mysqli_select_db($dbi, $dbname);

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

    $sql = "INSERT INTO guestbook (name, body) VALUES ('$name','$body')";
}

$result = mysqli_query($dbi, $sql);
if ($result)
{
    echo "<center>Your details have been added to the database<br>";
    echo "<a href='gb.php'>Reload this page</a></center>" ;
} 
else
{
    echo "Your details were not added due to some database problem";
}

$result = mysqli_query($dbi, "select name, body from guestbook ORDER BY id desc");

while ($myrow = mysqli_fetch_array($result))
{
   echo "<hr><b>name:</b> $myrow[0]<br> <b>body: </b>$myrow[1]<br>";
}

?>
</div>
<div class="l-box-lrg is-center pure-u-1 pure-u-md-1-5 pure-u-lg-1-3">
          </div>
    </div>


    <div class="footer l-box is-center">
        Designed by Kyu and Luisa
    </div>
</div>

</body>
</html>
