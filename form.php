<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
	<form action="">
	 <label for="field1">Waarde: </label>
	 <input type="text" id="field1" name="field1"/>
	 <input type="submit" name="submit" value="posten maar!" />
	</form>

<?php
if(!isset($_POST['submit'])) {
	//post naar database
	$waarde = $_POST["field1"];
	mysql_query("INSERT INTO xxx (field1) VALUES ('".$waarde."')") or die(mysql_error());
}

$query = "SELECT field1 ".
         "FROM xxx ";
		 
// execute the query 
$result = mysql_query($query) or die('Error, query failed. ' . mysql_error());
	
while($row = mysql_fetch_array($result))
	{
		list($field1 ) = $row;

		echo $field1;
		echo "<br />";
	}
?>

</body>
</html>