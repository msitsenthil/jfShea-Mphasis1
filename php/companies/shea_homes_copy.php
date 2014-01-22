<table cellpadding=1 cellspacing=0 width=150 border=0>
	<!---SHEA HOMES--->
	<cfif nav_section eq "sheahomes">
		<tr>
			<td><a href="main.cfm?dir=companies&sec=sheahomes&temp=master&companyid=1"><img name="sheahomes" src="images/navigation/subnav_company_sheahomes_on.gif" border="0" /></a></td>
		</tr>
	<cfelse>
		<tr>
			<td><a href="main.cfm?dir=companies&sec=sheahomes&temp=master&companyid=1" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('sheahomes','','images/navigation/subnav_company_sheahomes_on.gif',1);"><img name="sheahomes" src="images/navigation/subnav_company_sheahomes.gif" border="0" /></a></td>
		</tr>
	</cfif>
	<!---SHEA PROPERTIES--->
	<cfif nav_section eq "sheaproperties">
		<tr>
			<td><a href="main.cfm?dir=companies&sec=sheaproperties&temp=master&companyid=2"><img name="sheaproperties" src="images/navigation/subnav_company_sheaproperties_on.gif" border="0" /></a></td>
		</tr>
	<cfelse>
		<tr>
			<td><a href="main.cfm?dir=companies&sec=sheaproperties&temp=master&companyid=2" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('sheaproperties','','images/navigation/subnav_company_sheaproperties_on.gif',1);"><img name="sheaproperties" src="images/navigation/subnav_company_sheaproperties.gif" border="0" /></a></td>
		</tr>
	</cfif>
	<!---VENTURE CAPITAL--->
	<cfif nav_section eq "venturecapital">
	<tr>
		<td><a href="main.cfm?dir=companies&sec=venturecapital&temp=master&companyid=4"><img name="venturecapital" src="images/navigation/subnav_company_venturecapital_on.gif" border="0" /></a></td>
	</tr>
	<cfelse>
	<tr>
		<td><a href="main.cfm?dir=companies&sec=venturecapital&temp=master&companyid=4" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('venturecapital','','images/navigation/subnav_company_venturecapital_on.gif',1);"><img name="venturecapital" src="images/navigation/subnav_company_venturecapital.gif" border="0" /></a></td>
	</tr>
	</cfif>
	<!---JF SHEA CONSTRUCTION--->
	<cfif nav_section eq "jfsheaconstruction">
	<tr>
		<td><a href="main.cfm?dir=companies&sec=jfsheaconstruction&temp=master&companyid=5"><img name="jfsheaconst" src="images/navigation/subnav_company_jfsheaconst_on.gif" border="0" /></a></td>
	</tr>
	<!---subnav--->
		<cfif nav_subsection eq "offices">
		<tr>
			<td><a href="main.cfm?dir=companies&sec=jfsheaconstruction&subsec=offices&temp=master&companyid=5"><img name="jfsheaconst_offices" src="images/navigation/subsubnav_jfsheaconst_offices_on.gif" border="0" /></a></td>
		</tr>
		<cfelse>
		<tr>
			<td><a href="main.cfm?dir=companies&sec=jfsheaconstruction&subsec=offices&temp=master&companyid=5" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('jfsheaconst_offices','','images/navigation/subsubnav_jfsheaconst_offices_on.gif',1);"><img name="jfsheaconst_offices" src="images/navigation/subsubnav_jfsheaconst_offices.gif" border="0" /></a></td>
		</tr>
		</cfif>
		
		<cfif nav_subsection eq "designbuild">
		<tr>
			<td><a href="main.cfm?dir=companies&sec=jfsheaconstruction&subsec=designbuild&temp=master&companyid=5"><img name="jfsheaconst_designbuild" src="images/navigation/subsubnav_jfsheaconst_designbuild_on.gif" border="0" /></a></td>
		</tr>
		<cfelse>
		<tr>
			<td><a href="main.cfm?dir=companies&sec=jfsheaconstruction&subsec=designbuild&temp=master&companyid=5" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('jfsheaconst_designbuild','','images/navigation/subsubnav_jfsheaconst_designbuild_on.gif',1);"><img name="jfsheaconst_designbuild" src="images/navigation/subsubnav_jfsheaconst_designbuild.gif" border="0" /></a></td>
		</tr>
		</cfif>
		
		<cfif nav_subsection eq "activejobs">
		<tr>
			<td><a href="main.cfm?dir=companies&sec=jfsheaconstruction&subsec=activejobs&temp=master&companyid=5"><img name="jfsheaconst_activejobs" src="images/navigation/subsubnav_jfsheaconst_activejobs_on.gif" border="0" /></a></td>
		</tr>
		<cfelse>
		<tr>
			<td><a href="main.cfm?dir=companies&sec=jfsheaconstruction&subsec=activejobs&temp=master&companyid=5" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('jfsheaconst_activejobs','','images/navigation/subsubnav_jfsheaconst_activejobs_on.gif',1);"><img name="jfsheaconst_activejobs" src="images/navigation/subsubnav_jfsheaconst_activejobs.gif" border="0" /></a></td>
		</tr>
		</cfif>
		
		<cfif nav_subsection eq "heavycivil">
		<tr>
			<td><a href="main.cfm?dir=companies&sec=jfsheaconstruction&subsec=heavycivil&temp=master&companyid=5"><img name="jfsheaconst_heavycivil" src="images/navigation/subsubnav_jfsheaconst_heavycivil_on.gif" border="0" /></a></td>
		</tr>
		<cfelse>
		<tr>
			<td><a href="main.cfm?dir=companies&sec=jfsheaconstruction&subsec=heavycivil&temp=master&companyid=5" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('jfsheaconst_heavycivil','','images/navigation/subsubnav_jfsheaconst_heavycivil_on.gif',1);"><img name="jfsheaconst_heavycivil" src="images/navigation/subsubnav_jfsheaconst_heavycivil.gif" border="0" /></a></td>
		</tr>
		</cfif>
	<cfelse>
	<tr>
		<td><a href="main.cfm?dir=companies&sec=jfsheaconstruction&temp=master&companyid=5" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('jfsheaconst','','images/navigation/subnav_company_jfsheaconst_on.gif',1);"><img name="jfsheaconst" src="images/navigation/subnav_company_jfsheaconst.gif" border="0" /></a></td>
	</tr>
	</cfif>
	<!---REDDING--->
	<cfif nav_section eq "redding">
	<tr>
		<td><a href="main.cfm?dir=companies&sec=redding&temp=master&companyid=6"><img name="redding" src="images/navigation/subnav_company_redding_on.gif" border="0" /></a></td>
	</tr>
	<cfelse>
	<tr>
		<td><a href="main.cfm?dir=companies&sec=redding&temp=master&companyid=6" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('redding','','images/navigation/subnav_company_redding_on.gif',1);"><img name="redding" src="images/navigation/subnav_company_redding.gif" border="0" /></a></td>
	</tr>
	</cfif>
	<!---REED--->
	<cfif nav_section eq "reed">
	<tr>
		<td><a href="main.cfm?dir=companies&sec=reed&temp=master&companyid=6"><img name="reed" src="images/navigation/subnav_company_reed_on.gif" border="0" /></a></td>
	</tr>
	<cfelse>
	<tr>
		<td><a href="main.cfm?dir=companies&sec=reed&temp=master&companyid=7" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('reed','','images/navigation/subnav_company_reed_on.gif',1);"><img name="reed" src="images/navigation/subnav_company_reed.gif" border="0" /></a></td>
	</tr>
	</cfif>
	<!---SHEA MORTGAGE--->
	<cfif nav_section eq "sheamortgage">
		<tr>
			<td><a href="main.cfm?dir=companies&sec=sheamortgage&temp=master&companyid=3"><img name="sheamortgage" src="images/navigation/subnav_company_sheamortgage_on.gif" border="0" /></a></td>
		</tr>
	<cfelse>
		<tr>
			<td><a href="main.cfm?dir=companies&sec=sheamortgage&temp=master&companyid=3" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('sheamortgage','','images/navigation/subnav_company_sheamortgage_on.gif',1);"><img name="sheamortgage" src="images/navigation/subnav_company_sheamortgage.gif" border="0" /></a></td>
		</tr>
	</cfif>
	<!---BLUE STAR--->
	<cfif nav_section eq "bluestar">
		<tr>
			<td><a href="main.cfm?dir=companies&sec=bluestar&temp=master&companyid=8"><img name="bluestar" src="images/navigation/subnav_company_bluestar_on.gif" border="0" /></a></td>
		</tr>
	<cfelse>
		<tr>
			<td><a href="main.cfm?dir=companies&sec=bluestar&temp=master&companyid=8" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('bluestar','','images/navigation/subnav_company_bluestar_on.gif',1);"><img name="bluestar" src="images/navigation/subnav_company_bluestar.gif" border="0" /></a></td>
		</tr>
	</cfif>
</table>