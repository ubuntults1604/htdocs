
<div id="top_login">
<?
    if(!$userid)
	{
?>

<a href="./login/login_form.php" style = 'color : white'>Sign in</a> | <a href="./member/member_form.php" style = 'color : white'>Sign up</a>
<?
	}
	else
	{
?>
		<?=$usernick?> (level:<?=$userlevel?>) |
    <a href="./login/logout.php">Log Out</a> | <a href="./login/member_form_modify.php">Mypage</a>
<?
	}
?>
</div>
