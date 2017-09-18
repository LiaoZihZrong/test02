<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php   
    $dbc= new mysqli("localhost","root","0975775056","test");
    if(!$dbc)  {
        echo"数据库链接错误!";
    }else{
        echo"PHP7搭建:Windows7+PHP7+Apache2.4+MySQL5.5";
    }
    mysqli_close($dbc);
?> 
</body>
</html>