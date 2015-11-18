<html lang="en">
<head>
  <title>FacAd page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="custom.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$c="uploads/".$_POST["hidden"].".txt";
if(isset($_POST["del"]) && !isset($_POST["edit"]))
{
	
	unlink($c);
	header('Location: notice.php'); 
}
elseif(!isset($_POST["del"]) && isset($_POST["edit"]))
{
  $fp = fopen($c, "r") or die("Could not open file!");

  $data = fread($fp, filesize($c)) or die("Could not read file!");
  fclose($fp);
 echo "<div id='Edit' style='margin-top:60px;' class='mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2'>                    
          <div class='panel panel-info' >
           <div class='panel-heading'>
               <div class='panel-title'>Edit</div>
                </div>     

                <div style='padding-top:30px' class='panel-body' >                            
                 <form id='editform' class='form-horizontal' role='form' >
    <textarea class='form-control' name = 'info' placeholder='Message'> $data</textarea>				 
                                <div style='margin-top:10px' class='form-group'>
							<div class='col-sm-12 controls'>
                                      <a id='btn-login' href='#' class='btn btn-success'>Save </a>
                                </div>
                                </div>    
                            </form>     
                        </div>                     
                    </div>  
        </div>
		</div>";

 
}
else
{
echo "smthing wrong";	
}

?>
</body>
</html>