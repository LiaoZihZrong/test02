<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>
    <title>資料庫管理</title>
</head><body>

<?php
echo '請輸入資料'."<p>";
?>

<form action="" name="form1" method="Post">

    學號：<Input Type="text" Name="number"><p>
        姓名：<Input Type="text" Name="name"><p>
        國中：<Input Type="text" Name="junior"><p>
        志願：<Input Type="text" Name="wish"><p>

        <input  value="新增" type="submit" onclick="form1.action='insert.php';"form1.submit();"/>
        <input  value="修改" type="submit" onclick="form1.action='update.php';form1.submit();"/>
        <input  value="刪除" type="submit" onclick="form1.action='delete.php';form1.submit();"/>







</form>


</BODY></HTML>

</body></html>