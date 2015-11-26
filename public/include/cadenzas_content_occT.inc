<h2 class="white"> Cadenzas Mail Order Form</h2>

<h4 class="white">You may also pay directly by credit card by using PayPal</h4>

<?PHP
#include "cadenzas_horiz_products.php";
products_page($products,1);
?>

<br>
<h6 class="green"> To pay by cheque please complete the form below:</h6>
<h6 class="green"> Cadenzas can only accept cheques in UK currency (GBP - Pounds Sterling)</h6>

<!--<h6 class="green"> If you would like to pay by credit card please click <a 
href="cadenzas_WP.php">here</a>.</h6>-->
<h6 class="green"> Your order will be dispatched as soon as the correct and full payment is received.</h6>
<table border="0"> <tr>
<td colspan="2">
<form method="POST" action="cadenzas_form_response.php">            
</td>
</tr>
<tr>
<td colspan="2">
<h3 class="green">Your details</h3>
<p class="text">Please note items marked with * are required in order for us to respond.</p>
</td></tr>
<tr>
<td valign="top">
<p>Title</p>
</td>
<td>
<select name="title">
<option value="" selected>Please select</option>
<option value="Mr">Mr</option>
<option value="Ms">Ms</option>
<option value="Mrs">Mrs</option>
<option value="Miss">Miss</option>
<option value="Dr">Dr</option>
</select>
<br>
</td>
</tr>
<tr>
<td valign="top">
<p>First Name</p>
</td>
<td>
<input type="text" name="fname" size="24">
<br>
</td>
</tr>
<tr>
<td valign="top">
<p>Last Name *</p>
</td>
<td>
<input type="text" name="lname" size="24">
<br>
</td>
</tr> <tr>
<td valign="top">
<p>Email *</p>
</td><td>
<input type="text" name="email" size="64">
<br>
</td>
</tr> 
<tr>
<td valign="top">
<p>Address line 1 *</p>
</td><td>
<input type="text" name="addr1" class="green">Please enter your address
<br>
</td>
</tr>
<tr>
<td valign="top">
<p>Address line 2</p>
</td><td>
<input type="text" name="addr2" class="green">
<br>
</td>
</tr>
<tr>
<td valign="top">
<p>City *</p>
</td><td>
<input type="text" name="city" class="green">
<br>
</td>
</tr>
<tr>
<td valign="top">
<p>Postcode/Zip *</p>
</td><td>
<input type="text" name="pcode" size="12">
<br>
</td>
</tr>
<tr>
<td valign="top">
<p>Country *</p>
</td><td>
<select name="country">
<?php include "countries_s.php";?>
</select>
<br>
</td>
</tr>
<tr>
<td valign="top">
<p>Telephone</p> 
</td><td valign="top">
<input type="text" name="tel" size="24"/>Please include both <b>Country Code</b> and <b>Area Code</b> if possible
</td>
</tr>
<tr>
<td valign="top">
<p>Remarks</p>
</td><td>
<textarea cols="40" name="remarks" rows="2" wrap="physical" class="green">Please enter any additional information here</textarea>
<br>
</td>
</tr>
<tr>

<?PHP
  #include "cadenzas_select_qty.php";
  select_quantity($products);
?>
<hr/>
</td>
</tr>
<tr>
<td valign="top">
<p><b>Post and packing</b></p>
</td>
<td class="green">
 <select name="PostPack" size="1">
 <?PHP
	printf ("<option value=\"%0.2f\">Please select your postal zone</option>\n", $ppUK);
	printf("<option value=\"%0.2f\">UK add £%0.2f</option>\n", $ppUK, $ppUK);
	printf("<option value=\"%0.2f\">Europe add £%0.2f</option>\n", $ppEurope, $ppEurope);
	printf("<option value=\"%0.2f\">World Zone 1 add £%0.2f</option>\n", $ppNAmerica, $ppNAmerica);
	printf("<option value=\"%0.2f\">World Zone 2 add £%0.2f</option>\n", $ppSAmerica, $ppSAmerica);
?>
     </select>
<nobr class="text">Please select your postal zone</nobr>
<p>Please note 1: Postage prices for overseas addresses are based on Royal Mail Airmail costs. Please refer to the <a href "http://www.royalmail.com/">Royal Mail</a> for details on Europe and World Zones 1 and 2</p>
<br>
<p class="text">Please note 2: This charge is for the first item purchased. An additional charge of &pound;1.00 will be added for each additional item purchased</p>
</td>
</tr>
<tr>
<td colspan="2"><br>
<input type="submit" value="send" >
<input type="reset" value="clear" > 
</form>
</td>
</tr>
</table>
