<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body><?php   
 $dbhost = 'localhost';   
 $dbuser = 'root';   
 $dbpass = '0975775056';   
 $dbname = 'test';

 $number =$_REQUEST['number'];
 $name = $_REQUEST['name'];
 $junior = $_REQUEST['junior'];
 $wish = $_REQUEST['wish'];
 
 $conn = mysqli_connect("localhost","root","0975775056","test") or die("Could not connect: " . mysqli_error());
  $sql_insert = "INSERT INTO book(number, name, junior, wish) VALUES ('$number','$name','$junior','$wish')";
  $result = mysqli_query($conn,$sql_insert);
  
  
  $sql_query = "select * from book";
  $result = mysqli_query($conn,$sql_query)  ;
  if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
  while($row = mysqli_fetch_array($result))
  {
   echo $row['number']."<br>";
   echo $row['name']."<br>";
   echo $row['junior']."<br>";
   echo $row['wish']."<br><br>"; 
  }
?>
</body>
</html>