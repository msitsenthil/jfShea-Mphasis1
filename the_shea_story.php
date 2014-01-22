<!Doctype html>
<html>
<head>
<link rel="stylesheet" href="css/jfshea_page_styles.css" type="text/css">
<script type="text/javascript" src="javascript/image_utils.js"></script>
<script type="text/javascript" src="javascript/utils.js"></script>
<script type="text/javascript" src="javascript/AC_RunActiveContent.js"></script>
</head>

<body leftmargin="0" topmargin="20" marginwidth="0" marginheight="20">
<table width="770" align="center" cellpadding=0 cellspacing=0 width=100% class="bg_white" border=0>	
	<tr>
		<td align=center>
			<!---BANNER--->
			<?PHP	
			include("php/interface/banner.php");

			//<!---NAVIGATION TOP--->
			include("php/interface/navigation_top.php");

			//<!---CONTENT--->
			include("php/interface/shea_story.php");			
			?>
		</td>
	</tr>
	
</table>
<?php
//<!---FOOTER--->
include("php/interface/footer.php");
?>
</body>
</html>