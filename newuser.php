<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>
<title>註冊資料</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {
	background-color: #C0F3DA;
}
</style>
</head><body>

 <?php
  echo '請輸入以下註冊資訊:'."<p>";
 ?>
 
<form action="" name="form1" method="Post">

 帳號：<Input Type="text" Name="newid01"><p>
 密碼：<Input Type="text" Name="newpassw01"><p>
 姓名：<Input Type="text" Name="newname01"><p>
 身分證字號後五碼：<Input Type="text" Name="newidcard05"><p>
 生日：<Input Type="text" Name="newbirth01"><p>
 身高：<Input Type="text" Name="newhigh01"><p>
 體重：<Input Type="text" Name="newweight01"><p>

 <input  value="檢查帳號是否重複" type="submit" onclick="form1.action='********.php';"form1.submit();"/>
  <?php
  echo '(檢查帳號是否重複，才能送出資料)';
 ?>
 
 <?php
 //if 成功 顯示註冊成功並跳進成功頁面；反之則要求更改帳號
?>







</form>


</BODY></HTML>

</body></html>