<?php
require('connectdatabase.php'); 
session_start();
$random = $_POST['SumQ'];
$sql = "SELECT * FROM Idcard WHERE SumQ LIKE '%$random%'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_row($result);
$order=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ค้นหาผู้ใช้</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">
      <img src="https://www.e-service.rangsit.org/e-notify/img/rangsit.png" alt="" width="30" height="30" class="d-inline-block align-text-top"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="searh_user.php">ตรวจสอบสถานะการจองคิว</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    

    <div class="col-sm-7 text-left"> 
      <h1>ข้อมูลการจอง</h1>
      <font color="FF0000"><h3>**โปรดจำรหัสการจองเเละเก็บภาพไว้เป็นหลักฐานในการเข้ารับบริการ**</h3></font>
      <hr>
      <h3><?php echo "ชื่อ : ", $row[1]," ",$row[2]," ",$row[3];?></h3>
      <h3><?php echo "เลขประจำตัวประชาชน : ", $row[9];?></h3>
      <h3><?php echo "เบอร์โทร : ", $row[8];?></h3>
      <h3><?php echo "รหัสการจอง : ", $row[6];?></h3>
      <h3><?php echo "วันที่ : ", $row[4];?></h3>
      <h3><?php if ($row[5] == 'รอบ1') { 
                      echo "เวลา : 11.00-12.00 น. (ต้องมาตามวัน เเละเวลา ที่นัดหมาย)";
                     }elseif ($row[5] == 'รอบ2') { 
                      echo "เวลา : 14.00-15.00 น. (ต้องมาตามวัน เเละเวลา ที่นัดหมาย)";
                     } ?></h3>
      <!--<h3><?php echo "สถานะ : ", $row[7];?></h3>-->
      <h3><?php echo "สถานที่ : ศูนย์บริการภาครัฐแบบเบ็ดเสร็จจังหวัดปทุมธานี ณ ศูนย์การค้าฟิวเจอร์พาร์ค รังสิต (ชั้น 3 โซนเซ็นทรัล)";?></h3> <hr>
      <!--<a href="cancelQ.php?idQ=<?php echo $row[0];?>" class="btn btn-danger" style="width: 100%" role="button" onclick="return confirm('คุณต้องการยกเลิกการจองหรือไม่')">ยกเลิกการจอง</a><hr>-->


    </div>
    <div class="col-sm-5 sidenav">
      <div class="well">
      <img src="img/futrue.jpg" width="400" height="400" >
      </div>

    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>เทศบาลนครรังสิต | Rangsit City Municipality.</p>
</footer>

</body>
</html>
