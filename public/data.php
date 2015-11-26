<?php

# This file contains most of the
# data structures needed for the
# cadenzas application
# it was revised in June and July 2008
# by Duncan Smith
# The original website cadenzas.com
# was written in 2001 by Duncan Smith

#$date=date('d m Y');
#$time=date('B');
#$month=date("F");
#$nowDate=$now;

#$date_format=array(
#	'd'=>true,
#	'm'=>true,
#	'y'=>true
#);
#


//Global Variables
//
#date_default_timezone_set(date.timezone);

date_default_timezone_set('GMT');
$now=date("l d F Y");
$year=date("Y");
$timestamp=date('Y-m-d H:i:s');
$found=FALSE;
$depth=0;
$flm=0;
$final_menu="";
$menu_array=array();
$pagekeys=array();
$menulevels=array();
$pagetitles=array();
$tabs=array();
$xmlfile="";

include "formdata.php";

$paths=array(
	'include'=>'include',
	'inc'=>'include',
	'xml'=>'xml',
	'images'=>'images'
);

$filesIn=array(
  'cadenzas'=>"cadenzas.xml",
  'scales'=>"scales.xml"
  );

$files=array(
	'pagesxml'=>'pages.xml',
	'productsxml'=>'products.xml',
	'menuintermed'=>'menuintmed.tmp',
	'menu'=>'menu.tmp',
	'tabs'=>'tabs.tmp',
	'menutmp'=>'menutmp.tmp'
);


$pages=array(
	'title'=>'Mark Knight Cadenzas',
	'0'=>array(
		'title'=>'Cadenzas',
    'content'=>'page0.inc',
    'xmlfile'=>'cadenzas.xml',
		'0.0'=>array(
			'title'=>'Stamitz Viola',
			'content'=>'page00.inc',
		),
		'0.1'=>array(
			'title'=>'Hoffmeister',
			'content'=>'page01.inc'
		),
		'0.2'=>array(
			'title'=>'Mozart',
			'content'=>'page02.inc'
		),
		'0.3'=>array(
			'title'=>'Haydn Cello',
			'content'=>'page03.inc'
		),
		'0.4'=>array(
			'title'=>'Haydn Viola',
			'content'=>'page04.inc'
		)
	),
	'1'=>array(
		'title'=>'Scales',
		'content'=>'page1.inc',
    'xmlfile'=>'scales.xml',
		'1.0'=>array(
			'title'=>'Viola Scales I',
			'content'=>'page10.inc'
		),
		'1.1'=>array(
			'title'=>'Viola Scales II',
			'content'=>'page12.inc'
		),
		'1.2'=>array(
			'title'=>'Viola Scales III',
			'content'=>'page14.inc'
		),
		'1.3'=>array(
			'title'=>'Violin Scales I',
			'content'=>'page11.inc'
		),
		'1.4'=>array(
			'title'=>'Violin Scales II',
			'content'=>'page13.inc'
		),
		'1.5'=>array(
			'title'=>'Violin Scales III',
			'content'=>'page15.inc'
		)
	),
	'2'=>array(
		'title'=>'Purchase',
		'content'=>'page2.inc',
	),
	'3'=>array(
		'title'=>'About',
		'content'=>'page3.inc'
	),
	'4'=>array(
		'title'=>'Contact',
		'content'=>'page4.inc'
	)
);

$paypal_info=array(
	'url'=>"https://www.paypal.co.uk/cgi-bin/webscr",
	'cadenzas_business_email'=>"stringsattachedltd@googlemail.com",
	'payment_button'=>"http://www.paypal.com/en_GB/i/btn/sc-but-01.gif",
  'payment_button_2'=>"http://www.paypal.com/en_GB/i/btn/sc-but-01.gif",
  'pprange'=>array(
    0 =>array('low'=>0.01, 'high'=>15.99, 'pp'=>3.90),
    1 =>array('low'=>16.00, 'high'=>31.99, 'pp'=>6.10),
    2 =>array('low'=>32.00, 'high'=>47.99, 'pp'=>8.30),
    3 =>array('low'=>48.00, 'high'=>63.99, 'pp'=>10.50),
    4 =>array('low'=>64.00, 'high'=>10000.00, 'pp'=>15.00)
  )
);

$customerdetails=array(
  'name'=>array(
    'title'=>'',
    'first'=>'',
    'last'=>''
  ),
  'address'=>array(
    'addr1'=>'',
    'addr2'=>'',
    'city'=>'',
    'country'=>'',
    'zip'=>''
  ),
  'remarks'=>'',
  'postzone'=>'',
  'email'=>'',
  'telephone'=>''
);

$postage=array(
	'UK'=>'3.80',
	'Europe'=>'4.40',
	'WorldZone'=>'6.00',
);

$currency=array(
	'GBP'=>1,
	'USD'=>0.68,
	'EUR'=>0.80
);

#$productID=41;
#$currency="GBP";

#$companyId="42368";
#$instId="50349";

#$Home=array('','','','','');
#$Work=array('','','','','');
#$Contact=array('','','','','');
#$EmptySet=array();

/* links */
$Url00="http://www.iting.co.uk/";
$Url01="http://www.iting.co.uk";

/* alt text */
$Alt00="Mark Knight Cadenzas";

$logos=array(
	'tail'=>"images/violins8080_180.gif",
	'logo'=>"images/logo_20090330.png",
	'logoBlank'=>"images/blank_logo.gif"
);

#$bottom_of_page_line="\n<a href=\"mailto:itingdesign@googlemail.com\" class=\"capt\">page design &copy; iting ".$year."</a>\n";

$bottom_of_page_line="<span class=\"smallWhiteText\">&copy; Mark Knight Strings Attached Ltd <img src=\"".$logos['tail']."\" /> ".$now."</span>";
$nologo_bottom_of_page_line="<span class=\"smallWhiteText\">&copy; Mark Knight Strings Attached Ltd ".$now."</span>";

#echo "<h1><a href=\"index.php\" class=\"imagehref\"><img src=\"".$img."\" border=\"".$settings['border']."\" alt=\"".$Alt00."\"/></a></h1>\n";
$logoline="<a href=\"index.php\" class=\"imagehref\"><img src=\"".$logos['logo']."\" border=\"".$settings['border']."\" alt=\"".$Alt00."\"/></a>\n";
$nologoline="<a href=\"index.php\" class=\"imagehref\"><img src=\"".$logos['logoBlank']."\" border=\"".$settings['border']."\" alt=\"".$Alt00."\"/></a>\n";
?>
