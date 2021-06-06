<?php
header("location:index.php");
?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>訂單新增結果</title>

</head>

<body>
<?php
        include "db_connect.php";

       

        $text=$_POST['text'];
        $sql="INSERT INTO dbo.users VALUES ('$text')";
        $qury=sqlsrv_query($conn,$sql) or die("sql error".print_r(sqlsrv_errors()));
        
		
		
    

?>
</div>

</body></html>