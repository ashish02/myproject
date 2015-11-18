<!DOCTYPE html>
<html lang="en">
<head>
  <title>FacAd page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="custom.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" type = "text/css" href = "news.css">
<style>

body {
    background-color: #00BFFF;
}
.container
{
	background: #F2F2F2;
	height : auto;
}
.jumbotron
{
	
    width: 85%;
	min-height: 40px;
	background: #0A122A;
}
h2 {
  font-family: 'ConyRegular', Arial, sans-serif, !important;
  color:white;
}
p1
{
font-family: 'ConyRegular', Arial, sans-serif, !important;
  color:white;
}
h3
{
	font-family: 'monospace',monospace;
	color:white;
	align:center;
	
}

h4
{
	font-family: 'ConyRegular', Arial, sans-serif, !important;
	color:white;
}
.voffset2 { margin-top: 10px; }
.container-fluid
{
	width:70%;
	min-height: 60%;
	align: right;
	background: #04B4AE;
	
}
.right
{
align:right;
}


</style>
<script>
function read()
{
document.write("Hello World!");
}
</script>
  </head>

<body>

<div class="container">
  <div class="jumbotron col-md-10 col-md-offset-1">
    <h2 align="center">Mtech-1 CSE Fac-Ad page </h2>
    <h4 class="p1" align="right">Indian Institute of Technology,Bombay</h4> 
  </div>
  <div class="row">
	<div class="col-md-8 col-md-offset-2">
	<a class="btn btn-primary col-sm-3" href="index.php" role="button">Home</a>
	<a class="btn btn-primary col-sm-3" href="about.html" role="button">About</a>
	<a class="btn btn-primary col-sm-3" href="notice.php"  role="button">Notices</a>
	<a class="btn btn-primary col-sm-3" href="" role="button">Contact me </a>
	</div>

	<div class="col-sm-12 center" >
	<br><br><br>
		<div class="container-fluid center" align="center">
			<h3 >Notices</h3>
		</div>
	
		<?php
			$directory  = opendir('./uploads');
			while (false !== ($filename = readdir($directory)))
			{
				if ($filename == "." || $filename == "..")
				{
					continue;
				}
				$files[] = $filename;
			}
			rsort($files);
			echo '<br ><br >';
			foreach ($files as $entry)
			{
				
				$fp = fopen('./uploads/'. $entry, "r");
				if ($fp)
				{
					echo '<div class = "outer">';
					
					if(($line = fgets($fp, 4096)) !== false)
					{
						echo "<font size=\"5px\"><b>Subject: " . $line . "</b></font>";
					}
					echo '<div class="inner"><blockquote><p>';
					while (($line = fgets($fp, 4096)) !== false)
					{
						echo $line;
					}
					
					echo "</p> </blockquote> </div><p></p> </div>";
				}
				fclose($fp);
			}
		?>
	</div>
</div>
</div>
</div>
</body>
</html>