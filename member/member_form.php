<?
  session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="euc-kr">
<link href="../css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/member.css" rel="stylesheet" type="text/css" media="all">
<script>
   function check_id()
   {
     window.open("check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
   }

   function check_nick()
   {
     window.open("check_nick.php?nick=" + document.member_form.nick.value,
         "NICKcheck",
          "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
   }

   function check_input()
   {
      if (!document.member_form.id.value)
      {
          alert("占쏙옙占싱듸옙占쏙옙 占쌉뤄옙占싹쇽옙占쏙옙");
          document.member_form.id.focus();
          return;
      }

      if (!document.member_form.pass.value)
      {
          alert("占쏙옙占싻뱄옙호占쏙옙 占쌉뤄옙占싹쇽옙占쏙옙");
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value)
      {
          alert("占쏙옙占싻뱄옙호확占쏙옙占쏙옙 占쌉뤄옙占싹쇽옙占쏙옙");
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value)
      {
          alert("占싱몌옙占쏙옙 占쌉뤄옙占싹쇽옙占쏙옙");
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.nick.value)
      {
          alert("占싻놂옙占쏙옙占쏙옙 占쌉뤄옙占싹쇽옙占쏙옙");
          document.member_form.nick.focus();
          return;
      }


      if (!document.member_form.hp2.value || !document.member_form.hp3.value )
      {
          alert("占쌨댐옙占쏙옙 占쏙옙호占쏙옙 占쌉뤄옙占싹쇽옙占쏙옙");
          document.member_form.nick.focus();
          return;
      }

      if (document.member_form.pass.value !=
            document.member_form.pass_confirm.value)
      {
          alert("占쏙옙占싻뱄옙호占쏙옙 占쏙옙치占쏙옙占쏙옙 占십쏙옙占싹댐옙.\n占쌕쏙옙 占쌉뤄옙占쏙옙占쌍쇽옙占쏙옙.");
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      document.member_form.submit();
   }

   function reset_form()
   {
      document.member_form.id.value = "";
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.nick.value = "";
      document.member_form.hp1.value = "010";
      document.member_form.hp2.value = "";
      document.member_form.hp3.value = "";
      document.member_form.email1.value = "";
      document.member_form.email2.value = "";

      document.member_form.id.focus();

      return;
   }
</script>
</head>

<body>
<div id="wrap">
  <div id="header">
    <? include "../lib/top_login2.php"; ?>
  </div>  <!-- end of header -->

  <div id="menu">
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

    <div id="title" stlye="margin-left:20px;margin-top:17px;">
      <img src="../img/title_signup.png" style="margin-left:20px;margin-top:20px;">
      </div>
  <div id="col2" style="margin-top:100px;">
        <form  name="member_form" method="post" action="./insert.php">



    <div id="form_join" style="background-color:white;">
      <div id="join1">
      <ul>
      <li>* 아이디</li>
      <li>* 비밀번호</li>
      <li>* 비밀번호 확인</li>
      <li>* 이름</li>
      <li>* 닉네임</li>
      <li>* 전화번호</li>
      <li>* 이메일</li>
      </ul>
      </div>
      <div id="join2">
      <ul>
      <li><div id="id1"><input type="text" name="id"></div><div id="id2"><a href="#"><img src="../img/check_id.gif" onclick="check_id()"></a></div><div id="id3"></div></li>
      <li><input type="password" name="pass"></li>
      <li><input type="password" name="pass_confirm"></li>
      <li><input type="text" name="name"></li>
      <li><div id="nick1"><input type="text" name="nick"></div><div id="nick2" ><a href="#"><img src="../img/check_id.gif" onclick="check_nick()"></a></div></li>
      <li><select class="hp" name="hp1">
              <option value='010'>010</option>
              <option value='011'>011</option>
              <option value='016'>016</option>
              <option value='017'>017</option>
              <option value='018'>018</option>
              <option value='019'>019</option>
              </select>  - <input type="text" class="hp" name="hp2"> - <input type="text" class="hp" name="hp3"></li>
      <li><input type="text" id="email1" name="email1"> @ <input type="text" name="email2"></li>
      </ul>
      </div>
      <div class="clear"></div>
    </div>

    <div id="button"><a href="#"><img src="../img/button_save.gif"  onclick="check_input()"></a>&nbsp;&nbsp;
                     <a href="#"><img src="../img/button_reset.gif" onclick="reset_form()"></a>
    </div>
      </form>
  </div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->
<? include "../lib/footer.php"; ?>
</body>
</html>
