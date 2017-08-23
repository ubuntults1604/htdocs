<?
	session_start();
	$table = "bowling";
	$ripple = "bowling_ripple";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="euc-kr">
<link href="../css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/board4.css" rel="stylesheet" type="text/css" media="all">

</head>
<?
	include "../lib/dbconn.php";
	$scale=10;

    if ($mode=="search")
	{
		if(!$search)
		{
			echo("
				<script>
				 window.alert('검색할 단어를 입력해 주세요!');
			     history.go(-1);
				</script>
			");
			exit;
		}
		$sql = "select * from $table where $find like '%$search%' order by num desc";
	}
	else
	{
		$sql = "select * from $table order by num desc";
	}

	$result = mysql_query($sql, $connect);
	$total_record = mysql_num_rows($result);


	if ($total_record % $scale == 0)
		$total_page = floor($total_record/$scale);
	else
		$total_page = floor($total_record/$scale) + 1;

	if (!$page)
		$page = 1;


	$start = ($page - 1) * $scale;
	$number = $total_record - $start;
?>
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
		<h2 style="height:50px;font-size: 2.5em;color: #FFFFFF;font-weight: 600;text-shadow: 1px 1px 12px #000000;letter-spacing: 0.3em;background-color:#696969;"> 사업문의 </h2>
		<form  name="board_form" method="post" action="list.php?table=<?=$table?>&mode=search">
		<div id="list_search1"><h3 style="height:30px;font-family:dotum;font-size: 24px;color: #FFFFFF;font-weight: 500;">총 <?= $total_record ?> 개의 문의가 있습니다.</div>
		<div id="list_search" style="background-color:white;">
			<div id="list_search3">
				<select name="find">
                    <option value='subject'>제목</option>
                    <option value='content'>내용</option>
                    <option value='nick'>별명</option>
                    <option value='name'>이름</option>
				</select></div>
			<div id="list_search4"><input type="text" name="search"></div>
			<div id="list_search5"><input type="image" src="../img/list_search_button.gif"></div>
		</div>
		</form>
		<div class="clear"></div>

		<div id="list_top_title" style="background-color:white;">
			<ul>
				<li id="list_title1"><img src="../img/list_title1.gif"></li>
				<li id="list_title2"><img src="../img/list_title2.gif"></li>
				<li id="list_title3"><img src="../img/list_title3.gif"></li>
				<li id="list_title4"><img src="../img/list_title4.gif"></li>
				<li id="list_title5"><img src="../img/list_title5.gif"></li>
			</ul>
		</div>

		<div id="list_content" style="background-color:white; margin-top:0px;">
<?
   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
   {
      mysql_data_seek($result, $i);     // 占쏙옙占쏙옙占쏙옙 占싱듸옙
      $row = mysql_fetch_array($result); // 占싹놂옙占쏙옙 占쏙옙占쌘듸옙 占쏙옙占쏙옙占쏙옙占쏙옙

	  $item_num     = $row[num];
	  $item_id      = $row[id];
	  $item_name    = $row[name];
  	  $item_nick    = $row[nick];
	  $item_hit     = $row[hit];
      $item_date    = $row[regist_day];
	  $item_date = substr($item_date, 0, 10);
	  $item_subject = str_replace(" ", "&nbsp;", $row[subject]);

	  $sql = "select * from $ripple where parent=$item_num";
	  $result2 = mysql_query($sql, $connect);
	  $num_ripple = mysql_num_rows($result2);

?>
			<div id="list_item">
				<div id="list_item1"><?= $number ?></div>
				<div id="list_item2"><a href="view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>"><?= $item_subject ?></a>
<?
		if ($num_ripple)
				echo " [$num_ripple]";
?>
				</div>
				<div id="list_item3"><?= $item_nick ?></div>
				<div id="list_item4"><?= $item_date ?></div>
				<div id="list_item5"><?= $item_hit ?></div>
			</div>
<?
   	   $number--;
   }
?>
			<div id="page_button">
				<div id="page_num"> ◀이전 &nbsp;&nbsp;&nbsp;
<?

   for ($i=1; $i<=$total_page; $i++)
   {
		if ($page == $i)
		{
			echo "<b> $i </b>";
		}
		else
		{
			echo "<a href='list.php?table=$table&page=$i'> $i </a>";
		}
   }
?>
			&nbsp;&nbsp;&nbsp;&nbsp; 다음▶
				</div>
				<div id="button">
					<a href="list.php?table=<?=$table?>&page=<?=$page?>"><img src="../img/list.png"></a>&nbsp;
<?
	if($userid)
	{
?>
		<a href="write_form.php?table=<?=$table?>"><img src="../img/write.png"></a>
<?
	}
?>
				</div>
			</div> <!-- end of page_button -->
        </div> <!-- end of list content -->
		<div class="clear"></div>

	</div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->
<? include "../lib/footer.php"; ?>
</body>
</html>
