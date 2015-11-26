<?php
include "debug.php";

$settings=array(
  #'menucolor'=>'666666',
  'menucolor'=>'808000',
  'menucolor1'=>'ffff00',
	'cols'=>4,
	'hidelogo'=>0,
	'hideimages'=>0,
	'hidetext'=>0,
	'border'=>0,
	'csv'=>0,
	'logo'=>1,
	'php5'=>1,
	'pass'=>"797c6024a632665af56e1de0d0b545ef"
);

# ------------------------------------------ 
# in order to generate a NEW menu 
# (necessary when changes are made 
# to the \$pages array) set the 
# generate_menu variable. The 
# "include_menu" variable must 
# also be set. If you want to stop 
# generating a new menu for each 
# request switch off "generate_menu" 
# but leave "include_menu" on.
#
# Generate XML generates an xml file from 
# the pages array
#
# generate tabs builds a tab array
# using the pages array. As with 'menu' 
# above, the tabs file can simply be 
# included to prevent a server overhead
# writing to a file each time a page loads
# ------------------------------------------ 

$control=array(
	'generate_scripts'=>0,
	'generate_menu'=>0,
	'include_menu'=>0,
	'generate_tabs'=>0,
	'include_tabs'=>1,
	'generate_pages_xml'=>0,
	'generate_products_xml'=>0
);

	/* USE CLIENT_001 */
	#$client="client_001";
	#$thisServer="duncansPC";
	#$thisServer="localhost";
	#$pass2="B80FE7F704E2AA3365CEBD70B25980CF9DD02A02";

	#$sessionName="ws-test-dev";

	#$wsdlProduction="http://ws.eurostar.com:8080/LPAWS/eftLpaServices?WSDL";
	#$wsdlStaging="http://ws-staging.eurostar.com:8080/LPAWS/eftLpaServices?WSDL";
	#$wsdlDevelopment="http://ws-dev.eurostar.com:8080/LPAWS/eftLpaServices?WSDL";
?>
