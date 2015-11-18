<?php
	if(isset($_FILES["uploadedfile"]) && $_POST["info"] === "")
	{
		echo "hello";
		$errors = array();
		$file_name = $_FILES['uploadedfile']['name'];
		$file_size = $_FILES['uploadedfile']['size'];
		$file_tmp = $_FILES['uploadedfile']['tmp_name'];
		$file_type = $_FILES['uploadedfile']['type'];
		$file_ext = strtolower(end(explode('.',$_FILES['uploadedfile']['name'])));

		$expensions = array("txt");

		if(in_array($file_ext,$expensions)=== false)
		{
			$errors[]="extension not allowed, please choose a txt file.";
		}

		if($file_size > 2097152)
		{
			$errors[]='File size must be excately 2 MB';
		}
		if(empty($errors)==true)
		{
			move_uploaded_file($file_tmp,"uploads/".time().".txt");
			echo "Success";
		}
		else
		{
			print_r($errors);
		}
}
if(isset($_POST["submit"]) && $_POST["info"] != "")
{
	$test =  $_POST["info"] != "";
	echo $test;
	$file = "uploads/" . time() . ".txt";
	$f = fopen($file, "w");
	$data = $_POST["info"];
	fwrite($f, $data);
	fclose($f);
}
header('Location: notice.php'); 
?>