<!Doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>J.F. Shea - Experience Our History</title>
</head>

<body marginheight="0" marginwidth="0" topmargin="0" leftmargin="0">
<script type="text/javascript" src="../../javascript/sdc_tag.js"></script>

<?PHP
$player = "../swfs/FLVPlayer_Progressive.swf";
$skin = "../swfs/Clear_Skin_3";
$stream = "../flvs/125th";
?>

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
		codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" 
		width="480" 
		height="360" 
		id="FLVPlayer">
  <param name="movie" 		value="<?PHP echo $player;?>" />  
  <param name="salign" 		value="lt" />
  <param name="quality" 	value="high" />
  <param name="scale" 		value="noscale" />
  <param name="FlashVars" 	value="&MM_ComponentVersion=1&skinName=<?PHP echo $skin;?>&streamName=<?PHP echo $stream;?>&autoPlay=true&autoRewind=false" />

  <embed 	src=" <?PHP echo $player?>" flashvars="&MM_ComponentVersion=1&skinName=<?PHP echo $skin;?>& streamName=<?PHP echo $stream;?> &autoPlay=true&autoRewind=false" quality="high" scale="noscale" 
			width="480" 
			height="360" 
			name="FLVPlayer" 
			salign="LT" 
			type="application/x-shockwave-flash" 
			pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
</body>
</html>
