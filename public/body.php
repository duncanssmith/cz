<body>
<?php  
  include "menu.php"; 
#	 echo "<script>";
#	 echo $script;
#  echo "</script>";
?>

<div id="header">

<?php 

 	if($settings['logo']){
    echo $logoline;
	}else{
    echo $nologoline;
	}
?>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
</div>

<div id="content">
<?php
  # the file state contains code that determines 
  # the current state of the application 
  # and acts on it accordingly
	include "state.php";

?>
<div id="login">
<?php 
  #include "login.php";
?>
</div> 
<br/>
<br/>
</div>
<div id="sidebar">
<?php
  if($debug['page']){
		echo "<p>PAGEID</p>\n<pre>";
		print_r($pageid);
    echo "</pre>";
  }

  if($debug['control']){
    echo "<p>CONTROL</p>\n<pre>";
    print_r($control);
   echo "</pre>";
  }

	if(($debug['session'])){
		echo "<p>SESSION</p><pre> ";
		print_r($_SESSION);
		echo "</pre>\n";
	}

  if($debug['get']){
    echo "<p>GET</p>\n<pre>";
    print_r($_GET);
   echo "</pre>";
  }

  if($debug['post']){
    echo "<p>POST</p>\n<pre>";
    print_r($_POST);
   echo "</pre>";
  }

?>

</div>
<div id="footer">
<div>
<?php 
  #echo $itingline; 
  if($settings['logo']){
    echo $bottom_of_page_line;
  }else{
    echo $nologo_bottom_of_page_line;
  }

?>
<?php #echo $now?>
</div>
<?php
	if(($debug['global'])){
		echo "<pre>Global: ";
		print_r($GLOBALS);
		echo "</pre>\n";
	}
?>
</div>
</div>
</body>
</html>
