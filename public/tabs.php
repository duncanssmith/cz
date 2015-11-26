<div id="tabs">
    <ul>
<?php
for($i=0;$i<sizeof($pages);$i++){
	  if($thisPage==$pages[$i]){ 
      		echo "<li id=\"current\"><a href=\"".$pages[$i]."\">".$pagesnames[$pages[$i]]."</a></li>\n";
	  }else{
      		echo "<li><a href=\"".$pages[$i]."\">".$pagesnames[$pages[$i]]."</a></li>\n";
	  }
}
?>
    </ul>
</div>
