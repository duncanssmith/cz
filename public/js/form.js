	generator.document.write('<form method="post" action="<?php echo $thisPage?>">');
	generator.document.write('<label for="fname">First Name</label>');
	generator.document.write('<br/>');
	generator.document.write('<input name="fname" type="text">');
	generator.document.write('<br/>');
	generator.document.write('<label for="lname">Last Name</label>');
	generator.document.write('<br/>');
	generator.document.write('<input name="lname" type="text">');
	generator.document.write('<br/>');
	generator.document.write('<label for="visitorsno">Number of visitors in your party</label>');
	generator.document.write('<br/>');
	generator.document.write('<select name="visitorsno">');
	generator.document.write('<option value="1">1</option>');
	generator.document.write('<option value="2">2</option>');
	generator.document.write('<option value="3">3</option>');
	generator.document.write('<option value="4">4</option>');
	generator.document.write('<option value="5">5</option>');
	generator.document.write('<option value="6">6</option>');
	generator.document.write('<option value="More than 6">6+</option>');
	generator.document.write('<option value="More than 9">9+</option>');
	generator.document.write('<option value="More than 12">12+</option>');
	generator.document.write('</select>');
	generator.document.write('<br/>');
	generator.document.write('<label for="addr1">Address line 1</label>');
	generator.document.write('<br/>');
	generator.document.write('<input name="addr1" type="text">');
	generator.document.write('<br/>');
	generator.document.write('<label for="addr2">Address line 2</label>');
	generator.document.write('<br/>');
	generator.document.write('<input name="addr2" type="text">');
	generator.document.write('<br/>');
	generator.document.write('<label for="addr3">Address line 3</label>');
	generator.document.write('<br/>');
	generator.document.write('<input name="addr3" type="text">');
	generator.document.write('<br/>');
	generator.document.write('<label for="pcode">Postcode</label>');
	generator.document.write('<br/>');
	generator.document.write('<input name="pcode" type="text">');
	generator.document.write('<br/>');
	generator.document.write('<label for="email">Email address</label>');
	generator.document.write('<br/>');
	generator.document.write('<input name="email" type="text">');
	generator.document.write('<br/>');

	generator.document.write('<label for="boattime">Preferred ferry departure time</label>');
	generator.document.write('<br/>');
	generator.document.write('<input type="radio" name="boattime" value="10:30"/>10:30');
	generator.document.write('<br/>');
	generator.document.write('<input type="radio" name="boattime" value="10:50"/>10:50');
	generator.document.write('<br/>');
	generator.document.write('<input type="radio" name="boattime" value="11:10"/>11:10');
	generator.document.write('<br/>');
	generator.document.write('<input type="radio" name="boattime" value="11:30"/>11:30');
	generator.document.write('<br/>');
	generator.document.write('<input type="radio" name="boattime" value="11:50"/>11:50');
	generator.document.write('<br/>');
	generator.document.write('<input type="radio" name="boattime" value="12:10"/>12:10');
	generator.document.write('<br/>');
	generator.document.write('<input type="radio" name="boattime" value="12:30"/>12:30');
	generator.document.write('<br/>');
	generator.document.write('<input type="radio" name="boattime" value="12:50"/>12:50');
	generator.document.write('<br/>');
	generator.document.write('<input type="submit" name="submit" value="submit"/>');
	generator.document.write('<input type="reset" name="reset" value="reset"/>');
	generator.document.write('</form>');
