<h1 class="white"> Cadenzas Mail Order Form</h1>

<h2 class="white">You may also pay directly by credit card by using PayPal</h2>

<?PHP
#include "cadenzas_horiz_products.php";
products_page($products,1);
?>

<br>
<h3 class="green"> To pay by cheque please complete the form below:</h3>
<h3 class="green"> Cadenzas can only accept cheques in UK currency (GBP - Pounds Sterling)</h3>

<!--<h6 class="green"> If you would like to pay by credit card please click <a 
href="cadenzas_WP.php">here</a>.</h6>-->
<h3 class="green"> Your order will be dispatched as soon as the correct and full payment is received.</h3>
<form method="POST" action="cadenzas_form_response.php">            
<h3 class="green">Your details</h3>
<p class="text">Please note items marked with * are required in order for us to respond.</p>

<label for="title">Title</label>
<select name="title">
<option value="" selected>Please select</option>
<option value="Mr">Mr</option>
<option value="Ms">Ms</option>
<option value="Mrs">Mrs</option>
<option value="Miss">Miss</option>
<option value="Dr">Dr</option>
</select>
<br/>

<label for="fname">First Name</label>
<input type="text" name="fname" size="24">
<br/>
<label for="lname">Last Name</label>
<input type="text" name="lname" size="24">
<br/>
<label for="email">Email *</label>
<input type="text" name="email" size="64">
<br/>
<label for="addr1">Address line 1 *</label>
<input type="text" name="addr1" class="green">Please enter your address
<br/>
<label for="addr2">Address line 2 *</label>
<input type="text" name="addr2" class="green">
<br/>
<label for="city">City *</label>
<input type="text" name="city" class="green">
<br/>
<label for="pcode">Postcode/Zip *</label>
<input type="text" name="pcode" size="12">
<br/>
<label for="country">Country *</label>
<select name="country">
<?php include "countries_s.inc";?>
</select>
<br/>
<label for="tel">Telephone</label>
<input type="text" name="tel" size="24"/>Please include both <b>Country Code</b> and <b>Area Code</b> if possible
<label for="remarks">Remarks</label>
<textarea cols="40" name="remarks" rows="2" wrap="physical" class="green">Please enter any additional information here</textarea>
<br/>

<?PHP
  #include "cadenzas_select_qty.php";
  select_quantity($products);
?>
<hr/>
<p><em>Post and packing</em></p>
 <select name="PostPack" size="1">
 <?PHP
	printf ("<option value=\"%0.2f\">Please select your postal zone</option>\n", $postage['uk']);
	printf("<option value=\"%0.2f\">UK add £%0.2f</option>\n", $postage['uk'], $postage['uk']);
	printf("<option value=\"%0.2f\">Europe add £%0.2f</option>\n", $postage['europe'], $postage['europe']);
	printf("<option value=\"%0.2f\">World Zone 1 add £%0.2f</option>\n", $postage['worldzone1'], $postage['worldzone1']);
	printf("<option value=\"%0.2f\">World Zone 2 add £%0.2f</option>\n", $postage['worldzone2'], $postage['worldzone2']);
?>
     </select>
<nobr class="text">Please select your postal zone</nobr>
<p>Please note 1: Postage prices for overseas addresses are based on Royal Mail Airmail costs. Please refer to the <a href "http://www.royalmail.com/">Royal Mail</a> for details on Europe and World Zones 1 and 2</p>
<br/>
<p class="text">Please note 2: This charge is for the first item purchased. An additional charge of &pound;1.00 will be added for each additional item purchased</p>
<br/>
<input type="submit" value="send" >
<input type="reset" value="clear" > 
</form>
