<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESSAGEBOARD</title>
    <style>
      

        body {
            right: 0;
            bottom: 0;
            margin: 0;
            background: rgba(0, 0, 0, 0.2);
            width: 100%;
        }


        .content {
            position: fixed;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #ffffff;
            width: 100%;
            
        }

        .external{
            top: 0;
            
            
        }


       
    </style>
</head>
<body>
    <div class="external">
        <form name="form" action="http://127.0.0.1/insert.php" method="POST" accept-charset="UTF-8"
        align="center" >
        <?php
            include "db_connect.php";
            $sql="SELECT * FROM dbo.users";
		    $qury=sqlsrv_query($conn,$sql) or die("sql error".sqlsrv_errors());
		    while($row=sqlsrv_fetch_array($qury))
		    {
			    echo "->:".$row['text']."<br/>";
		    }
        ?>
            <div class="content">                
                <table>
                    <label >留言:</label><br>
                    <textarea id="text" name="text" rows="5" cols="30"></textarea>
                </table>
                <input type="submit" value="送出" />
            </div>
        </form>
    </div>
    
</body>
</html>