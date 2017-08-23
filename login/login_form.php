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
        <form  name="member_form" method="post" action="login.php">
		<div id="title1" style = "margin-left:20px;margin-top:17px;">
			<img src="../img/title_login.png">
		</div>

		<div id="login_form" style="width:700px;background-color:white;margin-left:50px;margin-top:100px;">
		     <img id="login_msg" src="../img/login_img.png" style="margin:auto;margin-left:318px;">
			 <div class="clear"></div>

			 <div id="login2" style="margin-left:159px;">
				<div id="id_input_button">
					<div id="id_pw_title">
						<ul>
						<li><img src="../img/id_title.gif"></li>
						<li><img src="../img/pw_title.gif"></li>
						</ul>
					</div>
					<div id="id_pw_input">
						<ul>
						<li><input type="text" name="id" class="login_input"></li>
						<li><input type="password" name="pass" class="login_input"></li>
						</ul>
					</div>
					<div id="login_button">
						<input type="image" src="../img/login_button.gif">
					</div>
				</div>
				<div class="clear"></div>

				<div id="login_line"></div>
				<div id="join_button"><img src="../img/no_join.gif">&nbsp;&nbsp;&nbsp;&nbsp;<a href="../member/member_form.php"><img src="../img/join_button.gif"></a></div>
			 </div>
		</div> <!-- end of form_login -->

	    </form>
	</div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->
<? include "../lib/footer.php"; ?>
</body>
</html>
