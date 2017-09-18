<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>
<title>使用者資料</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {
	background-color: #C0F3DA;
}
</style>
</head><body>

 <?php
  echo '<使用者資料>'."<p>";
 ?>
 
<form action="" name="form1" method="Post">

 姓名：<Input Type="text" Name="name01"><p>
 生日：<Input Type="text" Name="birth01"><p>
 身高：<Input Type="text" Name="high01"><p>
 體重：<Input Type="text" Name="weight01"><p>
   
   <input  value="修改身高" type="submit" onclick="form1.action='exhigh.php';"form1.submit();"/>
   <input  value="修改體重" type="submit" onclick="form1.action='exweight.php';"form1.submit();"/>
   <input  value="修改密碼" type="submit" onclick="form1.action='expassw.php';"form1.submit();"/>
   <input  value="刪除使用者" type="submit" onclick="form1.action='checkdeluser.php';"form1.submit();"/>
  
   <?php
 //使用者資訊
?>
   
   
   
   
   
   
   
</form>


</BODY></HTML>

</body></html>