<div class="formdiv">

<label for="title">Title</label><br/>
<select name="title">
<option value="" selected>Please select</option>
<option value="Mr">Mr</option>
<option value="Ms">Ms</option>
<option value="Mrs">Mrs</option>
<option value="Miss">Miss</option>
<option value="Dr">Dr</option>
</select>

<label for="fname">First Name</label><br/>
<input name="fname" type="text" size="24"><br/>

<label for="lname">Last Name</label><br/>
<input name="lname" type="text" size="24"><br/>

<label for="email">Email</label><br/>
<input name="email" type="text" size="64"><br/>

<label for="addr1">Address 1</label><br/>
<input name="addr1" type="text"><br/>

<label for="addr2">Address 2</label><br/>
<input name="addr2" type="text"><br/>

<label for="city">City</label><br/>
<input name="city" type="text"><br/>

<label for="pcode">Postcode/Zipcode</label><br/>
<input name="pcode" type="text"><br/>

<?php 
  include "countries_s.inc";
  include "postal_zone.inc";
?>

<label for="phone">Telephone</label><br/>
<input name="phone" type="text"><br/>



</div>
<br/>

