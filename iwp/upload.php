<?php
include('config.php');

if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$location="photos/" . $_FILES["image"]["name"];
			$caption=$_POST['imagetitle'];
			$imgdesc=$_POST['imagedesc'];
			$service=$_POST['servicetitle'];
			
			$save=mysql_query("INSERT INTO services (imgpath, imgtitle, imgdesc, servicetitle) VALUES ('$location','$caption', '$imgdesc', '$service')");
			header("location: index.php");
			exit();					
	}

?>