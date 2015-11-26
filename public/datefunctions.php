<?php
//0 comment added to test SVN commit hooks
//1 comment added to test SVN commit hooks
//2 comment added to test SVN commit hooks
//3 comment added to test SVN commit hooks
function select_day_blank($name,$format){

	global $debug;
	global $months;
	global $days;
	global $monthlengths;
	global $date_format;

	$thisDay=date('d');

	$d=0;

	if($debug['date_functions']){
		$thisFunction="select_day_blank()";
		echo_functionname($thisFunction);
	}

	echo "<select name=\"".$name."_dd\" id=\"".$name."_day_id\" class=\"textNormal\">\n";

		for($d=0;$d<sizeof($days); $d++){
			$string=sprintf("\t<option value=\"%s\">%s</option>\n", $days[$d], $days[$d]);
			echo $string;
		}
	echo "</select>\n";

	return true;
}

function select_month_blank($name,$format){

	global $months;
	global $months_num;
	global $monthlengths;
	global $debug;
	global $date_format;
	global $nowDate;

	if($debug['date_functions']){
		$thisFunction="select_month_blank()";
		echo_functionname($thisFunction);
	}

	$thisMonth=$nowDate['thisMonthMM'];
	$thisMonthMmm=$nowDate['thisMonthMmm'];

	echo "<select name=\"".$name."_mm\" id=\"".$name."_month_id\" class=\"textNormal\">\n";

	if($format=="YYYY-Mmm-DD"){

		for($m=0;$m<13;$m++){ # number of months
			$string="";
			$string=sprintf("\t<option value=\"%s\">%s</option>\n",$months_num[$m],$months[$m]);
			echo $string;
		}
	
	}else if($format=="YYYY-MM-DD"){

		for($m=0;$m<13; $m++){
			$string="";
			$string=sprintf("\t<option value=\"%s\">%s</option>\n", $months_num[$m], $months_num[$m]);
			echo $string;
		}
	}

	echo "</select>\n";

	return true;
}

function select_year_blank($name,$format){

	global $debug;
	global $date_format;
	global $nowDate;
	global $years;

	if($debug['date_functions']){
		$thisFunction="select_year_blank()";
		echo_functionname($thisFunction);
	}

	$thisYear=$nowDate['thisYearYYYY'];


	echo "<select name=\"".$name."_yyyy\" id=\"".$name."_year_id\" class=\"textNormal\">\n";

	for($y=0;$y<sizeof($years); $y++){
		$string=sprintf("\t<option value=\"%s\">%s</option>\n", $years[$y], $years[$y]);
		echo $string;
	}

	echo "</select>\n";

	return true;
}

function select_date_blank($name,$format){

	global $debug;
	global $date_format;
	global $nowDate;

	if($debug['date_functions']){
		$thisFunction="select_date_blank()";
		echo_functionname($thisFunction);
	}

	if($debug['date_functions']){	
		showdebug($name,'vars');
		showdebug($format,'vars');
	}

	if($date_format['y']){
		select_year_blank($name,$format);
	}
	if($date_format['m']){
		select_month_blank($name,$format);
	}
	if($date_format['d']){
		select_day_blank($name,$format);
	}

	return true;
}
/*-----------------------------------------*/
/* ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/

function select_day_or_blank($name,$format,$inDD){

	global $debug;
	global $months;
	global $monthlengths;
	global $date_format;

	$thisDay=date('d');

	$d=0;

	if($debug['date_functions']){
		$thisFunction="select_day_or_blank(name,format,inDD)";
		echo_functionname($thisFunction);
	}

	if($debug['date_functions']){
		echo "<p>Day: ".$inDD."</p>\n";
		#echo "<p>Format:".$format."</p>\n";
		#echo "<p>Name:".$name."</p>\n";
	}

	echo "<select name=\"".$name."_dd\" id=\"".$name."_day_id\" class=\"textNormal\">\n";

	if((int)$inDD > 0){

		echo "\t<option value=\"00\"></option>";

		for($d=1;$d<=31; $d++){
			if((int)$inDD==$d){
				$string=sprintf("\t<option value=\"%02d\" selected>%02d</option>\n", $d, $d);
			}else{
				$string=sprintf("\t<option value=\"%02d\">%02d</option>\n", $d, $d);
			}
			echo $string;
		}
	} else if((int)$inDD==0){

		echo "\t<option value=\"".$inDD."\" selected></option>";

		for($d=1;$d<=31; $d++){
			#if($thisDay==$d){
			#	$string=sprintf("\t<option value=\"%02d\" selected>%02d</option>\n", $d, $d);
			#}else{
				$string=sprintf("\t<option value=\"%02d\">%02d</option>\n", $d, $d);
			#}
			echo $string;
		}
	}
	echo "</select>\n";

	return true;
}

function select_month_or_blank($name,$format,$inMM){

	global $months;
	global $monthlengths;
	global $debug;
	global $date_format;
	global $nowDate;

	if($debug['date_functions']){
		$thisFunction="select_month_or_blank(name,format,inMM)";
		echo_functionname($thisFunction);
	}

	if($debug['date_functions']){
		echo "<p>Month: ".$inMM."</p>\n";
		#echo "<p>Format:".$format."</p>\n";
		#echo "<p>Name:".$name."</p>\n";
	}

	#$thisMonth=date("m");
	#$thisMonthMmm=date("M");
	$thisMonth=$nowDate['thisMonthMM'];
	$thisMonthMmm=$nowDate['thisMonthMmm'];

	$m=0;

	echo "<select name=\"".$name."_mm\" id=\"".$name."_month_id\" class=\"textNormal\">\n";

	if((int)$inMM>0){ # Month is selected already - so use it

		if($format=="YYYY-Mmm-DD"){

			$flag="001";

			echo "\t<option value=\"00\"></option>";

			for($m=1;$m<13;$m++){ # number of months
				$string="";
				if($m==(int)$inMM){
					$string=sprintf("\t<option value=\"%02d\" selected>%s</option>\n",$m,$months[$m]);
				}else{
					$string=sprintf("\t<option value=\"%02d\">%s</option>\n",$m,$months[$m]);
				}
				echo $string;
			}
		
		}else if($format=="YYYY-MM-DD"){

			$flag="002";

			echo "\t<option value=\"00\"></option>";

			for($m=1;$m<13; $m++){
				$string="";
				if((int)$inMM==$m){
					$string=sprintf("\t<option value=\"%02d\" selected>%02d</option>\n", $m, $m);
				}else{
					$string=sprintf("\t<option value=\"%02d\">%02d</option>\n", $m, $m);
				}
				echo $string;
			}
		}
	} else if ((int)$inMM==0){ # Month is NOT selected, so show Blank Month

		$flag="003";
		$string="";


		if($format=="YYYY-Mmm-DD"){

			$string=sprintf("\t<option value=\"%02d\" selected></option>\n", $inMM);
			echo $string; 
			for($m=1;$m<13;$m++){
				$string="";
				$string=sprintf("\t<option value=\"%02d\">%s</option>\n", $m, $months[$m]);
				echo $string; 
			}
		}else if($format=="YYYY-MM-DD"){
			$string=sprintf("\t<option value=\"%02d\" selected></option>\n", $inMM);
			echo $string; 
			for($m=1;$m<13;$m++){
				$string="";
				$string=sprintf("\t<option value=\"%02d\">%02d</option>\n", $m, $m);
				echo $string; 
			}
		}
	}

	echo "</select>\n";
	#echo $flag;

	return true;
}

function select_year_or_blank($name,$format,$inYYYY){

	global $debug;
	global $date_format;
	global $nowDate;

	if($debug['date_functions']){
		$thisFunction="select_year_or_blank(name,format,inYYYY)";
		echo_functionname($thisFunction);
	}

	$thisYear=$nowDate['thisYearYYYY'];
 
	if($debug['date_functions']){
		echo "<p>Year: ".$inYYYY."</p>\n";
		#echo "<p>Format:".$format."</p>\n";
		#echo "<p>Name:".$name."</p>\n";
	}

	echo "<select name=\"".$name."_yyyy\" id=\"".$name."_year_id\" class=\"textNormal\">\n";

	if((int)$inYYYY > 0){
		echo "\t<option value=\"0000\"></option>";
		for($y=2001;$y<2013; $y++){
			if((int)$inYYYY==$y){
				$string=sprintf("\t<option value=\"%04d\" selected>%04d</option>\n", $y, $y);
			}else{
				$string=sprintf("\t<option value=\"%04d\">%04d</option>\n", $y, $y);
			}
			echo $string;
		}
	} else {
		if((int)$inYYYY==0){echo "\t<option value=\"".$inYYYY."\" selected></option>";}

		for($y=2001;$y<2013; $y++){
			#if($thisYear==$y){
			#	$string=sprintf("\t<option value=\"%04d\" selected>%04d</option>\n", $y, $y);
			#}else{
				$string=sprintf("\t<option value=\"%04d\">%04d</option>\n", $y, $y);
			#}
			echo $string;
		}
	}
	echo "</select>\n";

	return true;
}



function select_date_or_blank($name,$format,$inDate){

	global $debug;
	global $date_format;
	global $nowDate;

	if($debug['date_functions']){
		$thisFunction="select_date_or_blank(name,format,inDate)";
		echo_functionname($thisFunction);
	}

	#$year++;
	#$startYear=date("Y");
	#$thisDay=date("d");
	#$endDay=31;

	list($inYYYY,$inMM,$inDD)=split('[/.-]', $inDate);
	#list($yyyy,$mm,$dd)=split('[/-.]',$data[0][$table['attributes'][$i]['name']]);
	#echo "<p>HELLO</p>\n";
	
	if($debug['date_functions']){
		echo "<p>YEAR: ".$inYYYY.", Month: ".$inMM.", Day: ".$inDD."</p>\n";
		echo "<p>Format:".$format."</p>\n";
		echo "<p>Name:".$name."</p>\n";
	}

	if($date_format['d']){
		select_day_or_blank($name,$format,$inDD);
	}
	if($date_format['m']){
		select_month_or_blank($name,$format,$inMM);
	}
	if($date_format['y']){
		select_year_or_blank($name,$format,$inYYYY);
	}

	return true;
}

/*--------------------------------------------------------------------*/



function select_day($name,$format,$inDD){

	global $debug;
	global $months;
	global $monthlengths;
	global $date_format;

	$thisDay=date('d');

	$d=0;

	if($debug['date_functions']){
		$thisFunction="select_day(name,format,inDD)";
		echo_functionname($thisFunction);
	}

	#echo "<p>Day: ".$inDD."</p>\n";
	#echo "<p>Format:".$format."</p>\n";
	#echo "<p>Name:".$name."</p>\n";

	echo "<select name=\"".$name."_dd\" id=\"".$name."_day_id\" class=\"textNormal\">\n";

	if((int)$inDD > 0){
		for($d=1;$d<=31; $d++){
			if((int)$inDD==$d){
				$string=sprintf("\t<option value=\"%02d\" selected>%02d</option>\n", $d, $d);
			}else{
				$string=sprintf("\t<option value=\"%02d\">%02d</option>\n", $d, $d);
			}
			echo $string;
		}
	} else {
		if($inDD){echo "\t<option value=\"".$inDD."\">".$inDD."</option>";}

		for($d=1;$d<=31; $d++){
			if($thisDay==$d){
				$string=sprintf("\t<option value=\"%02d\" selected>%02d</option>\n", $d, $d);
			}else{
				$string=sprintf("\t<option value=\"%02d\">%02d</option>\n", $d, $d);
			}
			echo $string;
		}
	}
	echo "</select>\n";

	return true;
}

function select_month($name,$format,$inMM){

	global $months;
	global $monthlengths;
	global $debug;
	global $date_format;
	global $nowDate;

	if($debug['date_functions']){
		$thisFunction="select_month(name,format,inMM)";
		echo_functionname($thisFunction);
	}

	#echo "<p>Month: ".$inMM."</p>\n";
	#echo "<p>Format:".$format."</p>\n";
	#echo "<p>Name:".$name."</p>\n";

	#$thisMonth=date("m");
	#$thisMonthMmm=date("M");
	$thisMonth=$nowDate['thisMonthMM'];
	$thisMonthMmm=$nowDate['thisMonthMmm'];

	$m=0;

	echo "<select name=\"".$name."_mm\" id=\"".$name."_month_id\" class=\"textNormal\">\n";

	if((int)$inMM>0){ # Month is selected already - so use it

		if($format=="YYYY-Mmm-DD"){

			$flag="001";

			for($m=1;$m<13;$m++){ # number of months
				$string="";
				if($m==(int)$inMM){
					$string=sprintf("\t<option value=\"%02d\" selected>%s</option>\n",$m,$months[$m]);
				}else{
					$string=sprintf("\t<option value=\"%02d\">%s</option>\n",$m,$months[$m]);
				}
				echo $string;
			}
		
		}else if($format=="YYYY-MM-DD"){

			$flag="002";

			for($m=1;$m<13; $m++){
				if((int)$inMM==$m){
					$string=sprintf("\t<option value=\"%02d\" selected>%02d</option>\n", $m, $m);
				}else{
					$string=sprintf("\t<option value=\"%02d\">%02d</option>\n", $m, $m);
				}
				echo $string;
			}
		}
	} else if ((int)$inMM==0){ # Month is NOT selected, so show Current Month

		if($format=="YYYY-Mmm-DD"){

			$flag="003";


			for($m=1;$m<13;$m++){ # number of months
				$string="";
				if($thisMonthMmm==$months[$m]){
					$string=sprintf("\t<option value=\"%02d\" selected>%s</option>\n",$m,$months[$m]);
				}else{
					$string=sprintf("\t<option value=\"%02d\">%s</option>\n",$m,$months[$m]);
				}
				echo $string;
			}

		}else if ($format=="YYYY-MM-DD"){

			$flag="004";

			for($m=1;$m<13;$m++){
				$string=sprintf("%02d", $m);
				if((int)$thisMonth==$m){
					echo "\t<option value=".$string." selected>".$string."</option>\n";
				}else{
					echo "\t<option value=\"".$string."\">".$string."</option>\n";
				}
				$string="";
			}
		}
	}

	echo "</select>\n";
	#echo "<p>HELLO DUNCAN ".$flag." </p>";

	return true;
}

function select_year($name,$format,$inYYYY){

	global $debug;
	global $date_format;
	global $nowDate;

	if($debug['date_functions']){
		$thisFunction="select_year(name,format,inYYYY)";
		echo_functionname($thisFunction);
	}

	$thisYear=$nowDate['thisYearYYYY'];
 
	#echo "<p>Year: ".$inYYYY."</p>\n";
	#echo "<p>Format:".$format."</p>\n";
	#echo "<p>Name:".$name."</p>\n";

	echo "<select name=\"".$name."_yyyy\" id=\"".$name."_year_id\" class=\"textNormal\">\n";

	if((int)$inYYYY > 0){
		for($y=2001;$y<2013; $y++){
			if((int)$inYYYY==$y){
				$string=sprintf("\t<option value=\"%04d\" selected>%04d</option>\n", $y, $y);
			}else{
				$string=sprintf("\t<option value=\"%04d\">%04d</option>\n", $y, $y);
			}
			echo $string;
		}
	} else {
		if($inYYYY){echo "\t<option value=\"".$inYYYY."\">".$inYYYY."</option>";}

		for($y=2001;$y<2013; $y++){
			if($thisYear==$y){
				$string=sprintf("\t<option value=\"%04d\" selected>%04d</option>\n", $y, $y);
			}else{
				$string=sprintf("\t<option value=\"%04d\">%04d</option>\n", $y, $y);
			}
			echo $string;
		}
	}
	echo "</select>\n";

	return true;
}



function select_date($name,$format,$inDate){

	global $debug;
	global $date_format;
	global $nowDate;

	if($debug['date_functions']){
		$thisFunction="select_date(name,format,inDate)";
		echo_functionname($thisFunction);
	}

	#$year++;
	#$startYear=date("Y");
	#$thisDay=date("d");
	#$endDay=31;

	list($inYYYY,$inMM,$inDD)=split('[/.-]', $inDate);
	#list($yyyy,$mm,$dd)=split('[/-.]',$data[0][$table['attributes'][$i]['name']]);
	#echo "<p>HELLO</p>\n";
	
	if($debug['date_functions']){
		echo "<p>YEAR: ".$inYYYY.", Month: ".$inMM.", Day: ".$inDD."</p>\n";
		echo "<p>Format:".$format."</p>\n";
		echo "<p>Name:".$name."</p>\n";
	}

	if($date_format['d']){
		select_day($name,$format,$inDD);
	}
	if($date_format['m']){
		select_month($name,$format,$inMM);
	}
	if($date_format['y']){
		select_year($name,$format,$inYYYY);
	}

	return true;
}


?>
