<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/jfshea_privacy_styles.css" type="text/css">
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<script type="text/javascript" src="../javascript/sdc_tag.js"></script>
<NOSCRIPT>
<IMG ALT="" BORDER="0" NAME="DCSIMG" WIDTH="1" HEIGHT="1" SRC="http://webtrendssdc.jfshea.com/dcsyiukw110000oaktgpqhhz5_8j7k/njs.gif?dcsuri=/nojavascript&amp;WT.js=No&amp;WT.tv=8.0.0">
</NOSCRIPT>

<table cellpadding=2 cellspacing=0 width=100% border=0 id="privacy_header">
	<tr>
		<td width="250" height="50" class="header">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/navigation/jfshea_logo_sm.gif" width="143" height="34" border="0" vspace="2"/></td>
		<td class="header" align="center"><img src="../images/titles/title_privacy.gif" width="231" height="34" border="0" /></td>
	</tr>
</table>
<table cellpadding=0 cellspacing=0 width=100% border=0>
<tr>
<td width="100%" height="8" style="background-image: url('../images/navigation/nav_dropshadow.gif'); background-repeat:repeat-x;"><img src="../images/navigation/nav_dropshadow.gif" /></td>
</tr>
</table>
<table cellpadding=0 cellspacing=0 width=100% border=0 class="bg_white">
	<tr>
		<td valign="top" width="225" class="bg_white">
			<!---left nav--->
			<table cellpadding=1 cellspacing=0 width=225 border=0 id="privacy_leftnav">
				<tr><td colspan="2">&nbsp;</td></tr>
				<tr>
					<td rowspan="12" width="10">&nbsp;</td>
				</tr>
				<!---PRIVACY--->
					
				<?PHP if (($_GET['pg'] == "privacy") || ($_GET['pg'] == "")) { ?>
					<tr>
						<td class="highlighted">Privacy Policy</td>
					</tr>
				<?PHP } else { ?>
					<tr>
						<td><a href="index.php?pg=privacy">Privacy Policy</a></td>
					</tr>
				<?PHP } ?>
				
				<!---INFO WE COLLECT--->
				<?PHP if ($_GET['pg'] == "infowecollect") { ?>
					<tr>
						<td class="highlighted">Information We Collect</td>
					</tr>
				<?PHP } else { ?>
					<tr>
						<td><a href="index.php?pg=info_we_collect">Information We Collect</a></td>
					</tr>
				<?PHP } ?>
				
				<!---USE OF INFORMATION--->
				<?PHP if ($_GET['pg'] == "useofinfo") { ?>
					<tr>
						<td class="highlighted">Use of Information</td>
					</tr>
				<?PHP } else { ?>
					<tr>
						<td><a href="index.php?pg=use_of_info">Use of Information</a></td>
					</tr>
				<?PHP } ?>
				
				<!---COOKIES--->
				<?PHP if ($_GET['pg'] == "cookies") { ?>
					<tr>
						<td class="highlighted">Cookies</td>
					</tr>
				<?PHP } else { ?>
					<tr>
						<td><a href="index.php?pg=cookies">Cookies</a></td>
					</tr>
				<?PHP } ?>
				
				<!---CHILDRENS PRIVACY--->
				<?PHP if ($_GET['pg'] == "childrenprivacy") { ?>
					<tr>
						<td class="highlighted">Children's Privacy</td>
					</tr>
				<?PHP } else { ?>
					<tr>
						<td><a href="index.php?pg=children_privacy">Children's Privacy</a></td>
					</tr>
				<?PHP } ?>
				
				<!---OPT OUT--->
				<?PHP if ($_GET['pg'] == "optout") { ?>
					<tr>
						<td class="highlighted">Choice/Opt-out</td>
					</tr>
				<?PHP } else { ?>
					<tr>
						<td><a href="index.php?pg=opt_out">Choice/Opt-out</a></td>
					</tr>
				<?PHP } ?>
				
				<!---CONTACT US--->
				<?PHP if ($_GET['pg'] == "contactus") { ?>
					<tr>
						<td class="highlighted">How To Contact Us</td>
					</tr>
				<?PHP } else { ?>
					<tr>
						<td><a href="index.php?pg=contact_us">How To Contact Us</a></td>
					</tr>
				<?PHP } ?>
				
				<!---NOTIFICATION--->
				<?PHP if ($_GET['pg'] == "notification") { ?>
					<tr>
						<td class="highlighted">Notification of Changes</td>
					</tr>
				<?PHP } else { ?>
					<tr>
						<td><a href="index.php?pg=notification">Notification of Changes</a></td>
					</tr>
				<?PHP } ?>
				<tr><td>&nbsp;</td></tr>
				
				<!---TERMS OF USE--->
				<?PHP if ($_GET['pg'] == "termsofuse") { ?>
					<tr>
						<td class="highlighted">Legal Terms of Use</td>
					</tr>
				<?PHP } else { ?>
					<tr>
						<td><a href="index.php?pg=terms_of_use">Legal Terms of Use</a></td>
					</tr>
				<?PHP } ?>
				<tr><td>&nbsp;</td></tr>
			</table>
		</td>
		<td width="25">&nbsp;</td>
		<td valign="top">
			<table cellpadding=0 cellspacing=0 width=100% border=0 id="privacy_policy">
				<tr><td colspan="2">&nbsp;</td></tr>
				<tr>
					<td>
						<div id="content">
						<?PHP 
							$pageName=$_GET['pg'];
							if ($pageName) {
							include($pageName.".php");
							} else {
							include("privacy.php");
							}
						?>
						</div>
					</td>
					<td width="5">&nbsp;</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<table cellpadding=2 cellspacing=0 width=100% border=0 id="privacy_footer">
	<tr>
		<td width="250" class="header" align="center" height="25">&nbsp;</td>
		<td class="header" align="right"><a href="javascript:window.close();"><img src="../images/buttons/popup_close_window.gif" border="0" /></a>&nbsp;</td>
	</tr>
</table>
</body>
</html>
