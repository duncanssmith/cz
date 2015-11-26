<?php $script=""; ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<link rel="shortcut icon" href="images/spacer.gif" />
<link rel="stylesheet" href="css/main.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="search" content="yes">

<title>
<?php 
	if(isset($pages['title'])){
		#echo $sitename." - Page ".$pageid;
		echo $pages['title'];
	}else{
		#echo $sitename." - Page ".$pageid;
	}
	if(isset($sid)){
		$sid=strtoupper($sid);
		#echo " - ".$sid;
	}
?>
</title>

<script src="js/main.js"></script>
<script src="js/menu_functions.js"></script>
<script src="js/layer.js"></script>
</head>
