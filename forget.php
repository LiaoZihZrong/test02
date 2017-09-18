<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>
<title>忘記密碼</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {
	background-color: #C0F3DA;
}
</style>
</head><body>

 <?php
  echo '<忘記密碼>'."<p>";
  echo '(請在以下輸入正確的資料)';
 ?>
 
<form action="" name="form1" method="Post">

 帳號：<Input Type="text" Name="name01"><p>
 生日：<Input Type="text" Name="birth01"><p>
 身分證後五碼：<Input Type="text" Name="high01"><p>
 
   
   <input  value="查詢密碼" type="submit" onclick="form1.action='newpassw.php';"form1.submit();"/>


  <?php
 //進行帳號密碼檢測，失敗顯示登入失敗
?>  
   
   
   
   
</form>


</BODY></HTML>

</body></html>