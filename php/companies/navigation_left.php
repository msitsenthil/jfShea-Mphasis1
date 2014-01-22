<?PHP
$uri =  $_SERVER['REQUEST_URI'];
$file = split("/",$uri);
//$fileName = split("\.",$file[1]);
//echo $file[1];
?>

<table>
	<!---SHEA HOMES--->
	
		<?PHP if ($file[1] == "our-companies-shea-homes") { ?>
			<tr>
				<td><a href="/our-companies-shea-homes"><img name="sheahomes" src="images/navigation/subnav_company_sheahomes_on.gif" border="0" /></a></td>
			</tr>
		<?PHP } else {	?>	    
			<tr>
				<td><a href="/our-companies-shea-homes" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('sheahomes','','images/navigation/subnav_company_sheahomes_on.gif',1);"><img name="sheahomes" src="images/navigation/subnav_company_sheahomes.gif" border="0" /></a></td>
			</tr>
		<?PHP }?>
		
		<!---SHEA PROPERTIES--->
		<?PHP if ($file[1] == "our-companies-shea-properties") { ?>
			<tr>
				<td><a href="/our-companies-shea-properties"><img name="sheaproperties" src="images/navigation/subnav_company_sheaproperties_on.gif" border="0" /></a></td>
			</tr>
		<?PHP } else {	?>
			<tr>
				<td><a href="/our-companies-shea-properties" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('sheaproperties','','images/navigation/subnav_company_sheaproperties_on.gif',1);"><img name="sheaproperties" src="images/navigation/subnav_company_sheaproperties.gif" border="0" /></a></td>
			</tr>
		<?PHP }?>
		
			<!---VENTURE CAPITAL--->
		<?PHP if ($file[1] == "our-companies-venture-captial") { ?>
			<tr>
				<td><a href="/our-companies-venture-captial"><img name="venturecapital" src="images/navigation/subnav_company_venturecapital_on.gif" border="0" /></a></td>
			</tr>
		<?PHP } else {	?>	
			<tr>
				<td><a href="/our-companies-venture-captial" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('venturecapital','','images/navigation/subnav_company_venturecapital_on.gif',1);"><img name="venturecapital" src="images/navigation/subnav_company_venturecapital.gif" border="0" /></a></td>
			</tr>
		<?PHP }?>
		
		<!---JF SHEA CONSTRUCTION--->
		<?PHP if (($file[1] == "our-companies-jf-shea-construction") || ($file[1] == "our-companies-jf-shea-construction-offices") || ($file[1] == "our-companies-jf-shea-construction-capabilities") || ($file[1] == "our-companies-jf-shea-construction-jobs") ||($file[1] == "our-companies-jf-shea-construction-engineering")) { ?>
			<tr>
				<td><a href="/our-companies-jf-shea-construction"><img name="jfsheaconst" src="images/navigation/subnav_company_jfsheaconst_on.gif" border="0" /></a></td>
			</tr>
			
			<?PHP if ($file[1] == "our-companies-jf-shea-construction-offices") { ?>
				<tr>
					<td><a href="/our-companies-jf-shea-construction-offices"><img name="jfsheaconst_offices" src="images/navigation/subsubnav_jfsheaconst_offices_on.gif" border="0" /></a></td>
				</tr>
			<?PHP
			} else {
			?>		
				<tr>
					<td><a href="/our-companies-jf-shea-construction-offices" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('jfsheaconst_offices','','images/navigation/subsubnav_jfsheaconst_offices_on.gif',1);"><img name="jfsheaconst_offices" src="images/navigation/subsubnav_jfsheaconst_offices.gif" border="0" /></a></td>
				</tr>
			<?PHP }?>
			
			<?PHP if ($file[1] == "our-companies-jf-shea-construction-capabilities") { ?>
			<tr>
				<td><a href="/our-companies-jf-shea-construction-capabilities"><img name="jfsheaconst_designbuild" src="images/navigation/subsubnav_jfsheaconst_designbuild_on.gif" border="0" /></a></td>
			</tr>
			<?PHP } else {	?>
			<tr>
				<td><a href="/our-companies-jf-shea-construction-capabilities" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('jfsheaconst_designbuild','','images/navigation/subsubnav_jfsheaconst_designbuild_on.gif',1);"><img name="jfsheaconst_designbuild" src="images/navigation/subsubnav_jfsheaconst_designbuild.gif" border="0" /></a></td>
			</tr>
			<?PHP }?>
			
			
			<?PHP if ($file[1] == "our-companies-jf-shea-construction-jobs") { ?>
				<tr>
					<td><a href="/our-companies-jf-shea-construction-jobs"><img name="jfsheaconst_activejobs" src="images/navigation/subsubnav_jfsheaconst_activejobs_on.gif" border="0" /></a></td>
				</tr>
			<?PHP
			} else {		
			?>		
				<tr>
					<td><a href="/our-companies-jf-shea-construction-jobs" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('jfsheaconst_activejobs','','images/navigation/subsubnav_jfsheaconst_activejobs_on.gif',1);"><img name="jfsheaconst_activejobs" src="images/navigation/subsubnav_jfsheaconst_activejobs.gif" border="0" /></a></td>
				</tr>
			<?PHP }?>
			
			<?PHP if ($file[1] == "our-companies-jf-shea-construction-engineering") { ?>
				<tr>
					<td><a href="/our-companies-jf-shea-construction-engineering"><img name="jfsheaconst_heavycivil" src="images/navigation/subsubnav_jfsheaconst_heavycivil_on.gif" border="0" /></a></td>
				</tr>
			<?PHP } else {?>		
				<tr>
					<td id="sheaengineering"><a href="/our-companies-jf-shea-construction-engineering" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('jfsheaconst_heavycivil','','images/navigation/subsubnav_jfsheaconst_heavycivil_on.gif',1);"><img name="jfsheaconst_heavycivil" src="images/navigation/subsubnav_jfsheaconst_heavycivil.gif" border="0" /></a></td>
				</tr>
			<?PHP } ?>
			
			
		<?PHP } else {  //JF SHEA CONSTRUCTION else part?>		 
			<tr>
				<td><a href="/our-companies-jf-shea-construction" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('jfsheaconst','','images/navigation/subnav_company_jfsheaconst_on.gif',1);"><img name="jfsheaconst" src="images/navigation/subnav_company_jfsheaconst.gif" border="0" /></a></td>
			</tr>	
		<?PHP }?>
	<!---Ending of subnavigation--->
	
	<!---REDDING--->
	<?PHP if ($file[1] == "our-companies-redding") { ?>
		<tr>
			<td><a href="/our-companies-redding"><img name="redding" src="images/navigation/subnav_company_redding_on.gif" border="0" /></a></td>
		</tr>
	<?PHP } else {	?>
	<tr>
		<td><a href="/our-companies-redding" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('redding','','images/navigation/subnav_company_redding_on.gif',1);"><img name="redding" src="images/navigation/subnav_company_redding.gif" border="0" /></a></td>
	</tr>
	<?PHP }?>
	
	<!---REED--->
	<?PHP if ($file[1] == "our-companies-reed-manufacturing") { ?>
		<tr>
			<td><a href="/our-companies-reed-manufacturing"><img name="reed" src="images/navigation/subnav_company_reed_on.gif" border="0" /></a></td>
		</tr>
	<?PHP } else {	?>	
		<tr>
			<td><a href="/our-companies-reed-manufacturing" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('reed','','images/navigation/subnav_company_reed_on.gif',1);"><img name="reed" src="images/navigation/subnav_company_reed.gif" border="0" /></a></td>
		</tr>
	<?PHP }?>
	
	<!---SHEA MORTGAGE--->
		<?PHP if ($file[1] == "our-companies-shea-mortgage") { ?>
			<tr>
				<td><a href="/our-companies-jf-shea-mortage"><img name="sheamortgage" src="images/navigation/subnav_company_sheamortgage_on.gif" border="0" /></a></td>
			</tr>
		<?PHP } else {	?>
		<tr>
			<tr>
			<td><a href="/our-companies-shea-mortgage" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('sheamortgage','','images/navigation/subnav_company_sheamortgage_on.gif',1);"><img name="sheamortgage" src="images/navigation/subnav_company_sheamortgage.gif" border="0" /></a></td>
			</tr>
		</tr>
		<?PHP }?>
	
	<!---BLUE STAR--->
	
	<?PHP if ($file[1] == "our-companies-blue-star") { ?>
			<tr>			
				<td><a href="/our-companies-jf-shea-blue-star"><img name="bluestar" src="images/navigation/subnav_company_bluestar_on.gif" border="0" /></a></td>		
			</tr>
	<?PHP } else {	?>
		<tr>			
			<td><a href="/our-companies-blue-star" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('bluestar','','images/navigation/subnav_company_bluestar_on.gif',1);"><img name="bluestar" src="images/navigation/subnav_company_bluestar.gif" border="0" /></a></td>		
		</tr>
		<?PHP }?>
</table>