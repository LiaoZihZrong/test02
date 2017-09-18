<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>關鍵字查詢</title><center>
<?PHP 
    


   	
 echo "輸入的姓名為：";
 echo $_GET["keyword"];
	ini_set("error_reporting","E_ALL & ~E_NOTICE");
	//擷取表單資料
    $select=$_GET["select"];
    $keyword=$_GET["keyword"];
	
	//判斷查詢項目名稱
	switch($select){
	  case 'book_name':
	    $select_name='書名';
		break;
	  case 'author':
	    $select_name='作者';
		break;
	  case 'publisher':
	    $select_name='出版者';
		break;		
	} 
   	//連結資料庫, 進行關鍵字查詢	
   	$link= new mysqli("localhost","root","0975775056","library");
   	if (mysqli_connect_errno())
    {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
	$sqlcmd="Select * from book where $select like '%$keyword%' order by publisher";
   	mysqli_query("SET NAMES 'utf8'");
   	$result=mysqli_query($sqlcmd,$link);
   	$count=mysqli_num_rows($result);
   	//每5筆記錄分頁，計算總頁數

	$show=ceil($count/5);
   	//輸出顯示

   	if($count==0)
   		echo "<H2><font color=red>Sorry！</font>系統資料中並無您所查詢圖書資料</h2>";
   	else
	{
	 	$page=$_GET["page"];
	 	if($page=="")
	  		$page=1;
	 	$start=5*($page-1);
	 	$sql="Select * from book where $select like '%$keyword%' order by publisher limit $start,5";
	 	$result=mysqli_query($sql);
	 	echo "<h4>".$select_name."包含\"<font color=red>".$keyword."</font>\"，共有 <font color=blue>".
					$count."</font> 筆記錄　  　目前顯示第 <font color=blue>".$page."</font> 頁</h4>";
//	 	mysql_data_seek($result1,$start);
?>
     <table border=1 align=center> 
	 <tr>	 <th width=300 bgcolor="#000033">書名
	 
	 <th width=60 bgcolor="#000033">出版者
	 
	 <th width=80 bgcolor="#000033">作者
	 
	 <th width=60 bgcolor="#000033">詳細	 
      <?PHP

   		while($row=mysqli_fetch_row($result))
		{
?>   
      
	 <tr bgcolor="#CCFF99">
	  <?php
	      	for($i=1;$i<=3;$i++) 
	        	echo "<td>".$row[$i]; 
	  ?>
	       <td><?php echo "<a href=PHA02-3.PHP?id=".$row[0]."&select=".$select."&keyword=".$keyword.">詳細資訊</a>"; ?> 
<?php	  
	}
   
   ?>
</table>
<H4>
<?php 
 	echo "共<font color=red>".$show."</font>頁　　選擇第";
   	for($i=1;$i<=$show;$i++)
     	echo " <a href=pha02-2.php?page=".$i."&select=".$select."&keyword=".$keyword.">".$i."</a>  ";
  	echo "頁";	 
}
mysqli_close($link);
?>
</H4>
<p align=center><a href="PHA02-1.PHP">重新查詢</a>


<body>
</body>
</html>