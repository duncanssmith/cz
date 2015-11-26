<?php

function radio_selector($name,$options,$values){
	# 
	# Creates a group of radio buttons
	# given an array of options
	#
	global $debug;
	if($debug['functions']){
		$thisFunction="radio_selector(name,options,values)";
		echo_functionname($thisFunction);
	}
	
	#echo "<fieldset>\n";
	#echo "<legend>".$name."</legend>\n";;
	
	echo "&nbsp;";
	for ($i=0;$i<sizeof($options);$i++){
		#echo "<label for=\"".$options[$i]."\" class=\"smalllabel\">".$options[$i]."</label><br/>";
		echo "<label class=\"radiolabel\">".$options[$i]."</label>";
		echo "<input type=\"radio\" name=\"".$name."\" value=\"".$values[$i]."\" class=\"smallinput\"/>";
		echo "<br/>\n";
	}
	#echo "</fieldset>\n";
}

function generate_form($table,$param){

	global $mysql;
	global $debug;
	global $settings;
	global $pageid;

	$visiblefieldcount=0;
	$itemname="";

	if($debug['functions']){
		$thisFunction ="generate_form(table,".$param.",".$pageid.")";
		echo_functionname($thisFunction);
	}

	$len=sizeof($table['attributes']);

	echo "<h1>".$pageid." ".$table['name']."</h1>";
	echo "<form name=\"insert-".$table['name']."-record\" action=\"index.php?pageid=".$pageid."&param=".$param."\" method=\"post\">\n";
	echo "<fieldset>\n<legend>".$table['name']."</legend>\n";

	for($i=0;$i<sizeof($table['attributes']);$i++){
		$xsplit=array('');
		$optionslist=array('');

		if($table['attributes'][$i]['required']==1){
			$visiblefieldcount++;
			echo "<p>\n";
			echo "<label for=\"".$table['attributes'][$i]['name']."\">".$table['attributes'][$i]['label']."</label>\n";
			if(strstr($table['attributes'][$i]['inputtype'],"select")){
				echo "<select name=\"".$table['attributes'][$i]['name']."\">\n";	
					$xsplit=explode("/",$table['attributes'][$i]['inputtype']);
					$optionslist=explode(":", $xsplit[1]);
					$optionsvalues=explode(":",$table['attributes'][$i]['options']);

					#print_r($optionslist);
					for($j=0;$j<sizeof($optionslist);$j++){
						echo "\t<option value=\"".$optionsvalues[$j]."\">".$optionslist[$j]."</option>\n";
					}	
				echo "</select>\n";
			}else if(strstr($table['attributes'][$i]['inputtype'],"textarea")){
				$itemname=$table['attributes'][$i]['name'];
				echo "<textarea name=\"".$table['attributes'][$i]['name']."\">\n";	
				echo "</textarea>\n";
				$itemname="";
			}else if(strstr($table['attributes'][$i]['inputtype'],"date")){
				$itemname=$table['attributes'][$i]['name'];
				#date_selector($itemname,"text",1,1,1,0,0,0);

				select_date_blank($itemname,"YYYY-Mmm-DD","1-1-1");

				$itemname="";
			}else if(strstr($table['attributes'][$i]['inputtype'],"radio")){
				$xsplit=explode("/",$table['attributes'][$i]['inputtype']);
				$optionslist=explode(":", $xsplit[1]);
				$optionsvalues=explode(":",$table['attributes'][$i]['options']);
				$itemname=$table['attributes'][$i]['name'];
				radio_selector($itemname,$optionslist,$optionsvalues);
				$itemname="";
			}else{
				echo "<input type=\"".$table['attributes'][$i]['inputtype']."\" name=\"".$table['attributes'][$i]['name']."\">\n";
			}
			echo "<br/></p>\n";
		}
	}
	#echo "<br/>";

	echo "<p>";

	echo "<input name=\"param\" type=\"hidden\" value=\"".$param."\"/>\n";
	echo "<input name=\"tablename\" type=\"hidden\" value=\"".$table['name']."\"/>\n";
	echo "<input name=\"pageid\" type=\"hidden\" value=\"".$pageid."\"/>\n";
	echo "<input name=\"cmd\" type=\"submit\" value=\"insert\" onClick=\"verify_customer_details(); return false;\"/>\n";
	echo "<input name=\"clear\" type=\"reset\" value=\"reset\"/>\n";

	echo "</p>\n";
	echo "</fieldset>\n";
	echo "</form>\n";

	echo "<br/>";
	echo "<br/>";

	if($debug['data']){
		if($visiblefieldcount < $i){
			echo "<p>[NB: ";
			echo $table['name'];
			echo " has ";
			echo $i-$visiblefieldcount;
			echo " hidden field(s)";
			echo "]</p>";
		}
	}

	return true;
}
?>
