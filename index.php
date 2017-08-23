<?
	session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<link rel="stylesheet" type="text/css" href="css/common.css">
<style>
</style>

</head>

<body>
	<div id="wrap">
	<div id="header">
    <? include "./lib/top_login1.php"; ?>
	</div>  <!-- end of header -->

	<div id="menu" style="height:100px;">
		<div id="logo"><a href="./index.php"><img src="./logo.png" border="0"></a></div>
		<? include "./lib/top_menu1.php"; ?>
	</div>  <!-- end of menu -->


	<div id="content">
	<div id="col1">
		<div id="left_menu">
<?
			include "./lib/left_menu.php";
?>
		</div>
	</div> <!-- end of col1 -->
	<div id="main_index1" style="left:16%;float:left;width:835px;height:180px;margin-top:20px;background-image:url('./img/introduce_main_img.png');">
		<a href=""><img src="./img/introduce_main_letter.png" style="opacity: 0.5;margin-top:68px;margin-left:60px;"></a>
	</div>
	<div id="main_index2" style="left:16%;float:left;width:835px;height:200px;background-image:url('./img/area_main_img.png');">
		<a href=""><img src="./img/area_main_letter.png"style="opacity: 0.5;margin-top:68px;margin-left:60px;"></a>
	</div>
	<div id="main_index3" style="left:16%;float:left;width:835px;height:200px;background-image:url('./img/contact_main_img.png');">
		<a href=""><img src="./img/contact_main_letter.png" style="opacity: 0.5;margin-top:68px;margin-left:60px;"></a>
	</div>
  </div><!-- end of content -->
</div> <!-- end of wrap -->

<? include "footer.php"; ?>
</body>
</html>
