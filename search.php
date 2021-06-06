<?php
header("Content-Type:text/html; charset=utf-8");
?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>OUTPUT</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body id="wrapper-02">
  <div id="header">
    <h1>訂單查詢結果</h1>
  </div>
    
<div id="contents">
<?php   		
		include "db_connect.php";
		if($_POST['text']!=''){
        $text=$_POST['text'];
		$sql="SELECT * FROM dbo.Orders join dbo.Employees on dbo.Orders.EmployeeID = dbo.Employees.EmployeeID WHERE dbo.Orders.OrderID='$orderid'";
		}
		else{
			$sql="SELECT * FROM dbo.Orders join dbo.Employees on dbo.Orders.EmployeeID = dbo.Employees.EmployeeID";
		}

		$qury=sqlsrv_query($conn,$sql) or die("sql error".sqlsrv_errors());

		while($row=sqlsrv_fetch_array($qury))
		{
			echo "->:".$row['text']."<br/>";
		}
?>
</div>

</body></html>

