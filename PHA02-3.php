<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?PHP 
   //擷取URL參數
  $id=$_GET["id"];
  $select=$_GET["select"];
  $keyword=$_GET["keyword"];
  //連結資料庫,進行查詢
  $link=new mysqli("localhost","root","0975775056","library");
   $sqlcmd="Select * from book where id=".$id;
    mysqli_query("SET NAMES 'utf8'");
   $result=mysqli_query($sqlcmd);
   while($row=mysqli_fetch_row($result)){;
     
   ?>
<title>查詢結果</title><p>
<table width="80%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="21%" height="40" bgcolor="#990000"><span class="style12">書　　名：</span></td>
    <td colspan="3" bgcolor="#FFFF99"><span class="style14"><?PHP echo $row[1]; ?></span></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#990000"><span class="style12">作　　者：</span></td>
    <td width="42%" bgcolor="#FFFF99"><span class="style14"> <?PHP echo $row[3]; ?></span></td>
    <td width="22%" bgcolor="#990000"><span class="style12">出 版 者：</span></td>
    <td width="15%" bgcolor="#FFFF99"><span class="style14"><?PHP echo $row[2]; ?></span></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#990000"><span class="style12">ＩＳＤＮ：</span></td>
    <td bgcolor="#FFFF99"><span class="style14"><font color="#0000CC"><?PHP echo $row[5]; ?></span></td>
    <td bgcolor="#990000"><span class="style12">建議售價：</span></td>
    <td bgcolor="#FFFF99"><span class="style14"><?PHP echo $row[4]; ?></span></td>
  </tr>
</table>
<?PHP 
  }
?>
<p>
<center>
<a href="PHA02-2.php?select=<?PHP echo $select; ?>&keyword=<?PHP echo $keyword; ?>">返回</a>
　　<a href="PHA02-1.php">重新查詢</a>
</center>

<body>
</body>
</html>