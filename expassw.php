<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>
<title>修改密碼</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {
	background-color: #C0F3DA;
}
</style>
</head><body>

 <?php
  echo '<修改密碼>'."<p>";
 ?>
 
<form action="" name="form1" method="Post">

 請輸入原密碼：<Input Type="text" Name="oldpassw01"><p>
 請輸入新密碼：<Input Type="text" Name="expassw01"><p>
 請再輸入一次新密碼：<Input Type="text" Name="expassw02"><p> 
   <input  value="回上一頁" type="submit" onclick="form1.action='userdata.php';"form1.submit();"/>
   <input  value="確認修改" type="submit" onclick="form1.action='******.php';"form1.submit();"/>
   <?php
 //修改密碼後回跳回index
?>
   
   
   
   
   
   
   
</form>


</BODY></HTML>

</body></html>