<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>
<title>資料庫管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {
	background-color: #C0F3DA;
}
</style>
</head><body>

 <?php
  echo '~歡迎來到身高登記系統~'."<p>";
 ?>
 
<form action="" name="form1" method="Post">

 帳號：<Input Type="text" Name="id01"><p>
 密碼：<Input Type="password" Name="password"><p>

 <input  value="登入帳號" type="submit" onclick="form1.action='userdata.php';form1.submit();"/>
 <?php
 //進行帳號密碼檢測，失敗顯示登入失敗
?>

 
 <input  value="註冊" type="submit" onclick="form1.action='newuser.php';form1.submit();"/>
 <input  value="忘記密碼" type="submit" onclick="form1.action='forget';form1.submit();"/>


</form>


</BODY></HTML>

</body></html>