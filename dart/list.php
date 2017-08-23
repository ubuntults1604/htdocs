<? session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head  style = "background-color : black;">
<meta charset="euc-kr">
<link href="../css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/member.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
	<div id="wrap">
	<div id="header">
    <? include "../lib/top_login2.php"; ?>
	</div>  <!-- end of header -->

	<div id="menu" style="height:100px;">
		<div id="logo"><a href="../index.php"><img src="../logo.png" border="0"></a></div>
		<? include "../lib/top_menu2.php"; ?>
	</div>  <!-- end of menu -->


	<div id="content">
	<div id="col1">
		<div id="left_menu">
<?
			include "../lib/left_menu.php";
?>
		</div>
	</div> <!-- end of col1 -->

	<div id="col2">
		<div id="title1" style = "margin-left:20px;margin-top:17px;">
			<h1 style="height:50px;font-size: 2.5em;color: #FFFFFF;font-weight: 600;text-shadow: 1px 1px 12px #000000;letter-spacing: 0.3em;background-color:#696969;">
        &nbsp&nbsp&nbsp사업영역
      </h1>
		</div>
    <div id="areaimg" style="margin-left:20px;margin-top:0">
      <img src="../img/img_area.png">
    </div>
	</div>
  </div> <!-- end of content -->
</div> <!-- end of wrap -->
<? include "../lib/footer.php"; ?>
</body>
</html>
