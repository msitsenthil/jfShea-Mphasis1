<?PHP
$xml = simplexml_load_file("php/contact/addresses.xml") or die("Error: Cannot create object");
?>

<script language="javascript" type="text/javascript">
function swap(id){
	for( var i = 0; i < document.getElementsByTagName('div').length; i++ ) {
	  document.getElementsByTagName('div')[i].style.display = 'none';
	}
	document.getElementById("company_info_" + id).style.display = 'block';
}
</script>
<table cellpadding=5 cellspacing=0 width=100% style="margin-left:2%;">
<tr>
		<td colspan="" style="float:left;">Your comments are important to us. Please select the appropriate Shea 
		<br />company to send us your comments and/or question.</td>
	</tr>
</table>

<form action="process_contact.php" method="POST" name="contact" style="width:60%;float:left">
<table cellpadding=2 cellspacing=0 style="float:right" border=0 id="contact_form">
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr>
		<td valign="top" rowspan=6 width=200>
				<?PHP
				foreach ($xml as $detail):
					$id = $detail->id;
					$name = $detail->compayname;
					$add1 = $detail->add1;
					$add2 = $detail->add2;
					$add3 = $detail->add3;
					$add4 = $detail->add4;
					$add5 = $detail->add5;
					$add6 = $detail->add6;
					$email = $detail->email;	
				?>				
				 <div id="company_info_<?PHP echo $id?>" style="display:none;width:150px; border-style: solid; border-color: #CBC5AB; border-width: 7px; padding:3px;">				 
				 <?PHP					
					 echo "<b>".$name."</b><br />";
					 echo $add1."<br />";
					 echo $add2."<br />";
					 if($add3 != "" ) {
					 echo $add3."<br />";
					 } 
					 if($add4 != "") {
					 echo $add4."<br />";
					 } 
					 if($add5 != "") {
					 echo $add5."<br />";
					 } 
					 if ($add6 != "") {
					 echo $add6."<br />";
					 }
					 echo "</div>";
					?> 
					
				<?PHP
				 endforeach;
				 ?>	
          </td>
		<td>Select a Company*<br />
			<select name="companies" onChange="swap(this.value);" required>		
					<option value=""></option>
					<?PHP
				foreach ($xml as $companies):
					$id = $companies->id;
					$companyName = $companies->compayname;					
					echo "<option value=".$id.">".$companyName."</option>";
				endforeach;
					?>					
			</select>			
		</td>		
	</tr>
	<tr>
		<td>
			Name*<br />
			<input type="text" name="name" value="" class="form_field" required validate="noblanks" validateat="onsubmit" message="Please enter your name.">
		</td>
	</tr>
	<tr>
		<td>
			E-mail Address*<br />
			<input type="text" name="email" value="" class="form_field" required validate="email" validateat="onsubmit" message="Please enter a valid email address.">
		</td>
	</tr>
	<tr>
		<td>
			Phone<br />
			<input type="text" name="phone" value="" class="form_field" validate="telephone" validateat="onsubmit" message="Please enter a valid phone number.">
		</td>
	</tr>
	<tr>
		<td>
			Comments/Question*<br />
			<textarea name="comments" cols="35" rows="5" class="form_field" required message="Please enter your comments and/or question."></textarea>
		</td>
	</tr>
	<tr>
		<td>
			<input type="image" src="images/buttons/btn_submit.gif" name="submit" value="submit" alt="Submit">
		</td>
	</tr>
</table>
</form>
<table width=40% cellpadding=5 cellspacing=5>
	<tr>
		<td><img src="images/other/contact_montage.jpg" border=0></td>
	</tr>
</table>