<!DOCTYPE html>
<html><head><title><?php echo $page_title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, post-check=0, pre-check=0" />
<meta http-equiv="Expires" content="Sat, 26 Jul 1997 05:00:00 GMT" />
<link rel="icon" href="<?php echo SWB; ?>webicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo SWB; ?>webicon.ico" type="image/x-icon" />
<link href="<?php echo SWB; ?>template/core.style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sysconf['admin_template']['css']; ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo JWB; ?>chosen/chosen.css" rel="stylesheet" type="text/css" />
<link href="<?php echo JWB; ?>colorbox/colorbox.css" rel="stylesheet" type="text/css" />
<link href="<?php echo JWB; ?>jquery.imgareaselect/css/imgareaselect-default.css" rel="stylesheet" type="text/css" />
<link href="<?php echo AWB; ?>admin_template/default/jquery.sidr.light.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JWB; ?>jquery.js"></script>
<script type="text/javascript" src="<?php echo JWB; ?>updater.js"></script>
<script type="text/javascript" src="<?php echo JWB; ?>gui.js"></script>
<script type="text/javascript" src="<?php echo JWB; ?>form.js"></script>
<script type="text/javascript" src="<?php echo JWB; ?>calendar.js"></script>
<script type="text/javascript" src="<?php echo JWB; ?>tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="<?php echo JWB; ?>chosen/chosen.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JWB; ?>chosen/ajax-chosen.min.js"></script>
<script type="text/javascript" src="<?php echo JWB; ?>tooltipsy.js"></script>
<script type="text/javascript" src="<?php echo JWB; ?>colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="<?php echo JWB; ?>jquery.imgareaselect/scripts/jquery.imgareaselect.pack.js"></script>
<script type="text/javascript" src="<?php echo JWB; ?>webcam.js"></script>
<script type="text/javascript" src="<?php echo JWB; ?>scanner.js"></script>
<script type="text/javascript" src="<?php echo AWB; ?>admin_template/default/jquery.sidr.min.js"></script>
<!-- This template is created by: Arie Nugraha (dicarve@gmail.com)
     based on template by Eddy Subratha -->
</head>
<body>
<div id="sidepan">
<?php echo $sub_menu; ?>
</div>

<!-- main menu -->
<div id="mainMenu"><?php echo $main_menu; ?></div>
<!-- main menu end -->

<!-- header-->
<div id="header">
	<div id="headerImage">&nbsp;</div>
	<div id="libraryName">
		<a href="./index.php"><?php echo $sysconf['library_name']; ?></a>
	</div>
	<div id="librarySubName">
		<?php echo $sysconf['library_subname']; ?>
	</div>
</div>
<!-- header end-->

<table id="main" cellpadding="0" cellspacing="0">
<tr>
    <td>
    	<a name="top"></a>
	    <div class="loader"><?php echo $info; ?></div>
	    <div id="mainContent">
	    <?php echo $main_content; ?>
	    </div>
    </td>
</tr>
</table>

<!-- license info -->
<div id="footer"><?php echo $sysconf['page_footer']; ?></div>
<!-- license info end -->

<script type="text/javascript">
jQuery(document).ready( function() {

 $('a.menuCurrent').sidr({
   name: 'sidepan',
   side: 'left',
   speed: 300
	});
 $.sidr('open', 'sidepan');

})

</script>

<!-- fake submit iframe for search form, DONT REMOVE THIS! -->
<iframe name="blindSubmit" style="visibility: hidden; width: 0; height: 0;"></iframe>
<!-- <iframe name="blindSubmit" style="visibility: visible; width: 100%; height: 300px;"></iframe> -->
<!-- fake submit iframe -->

</body>
</html>
