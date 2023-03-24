<?php
header('Content-Type: text/html; charset=utf-8'); 
require('connectdatabase.php'); 
session_start();
$sql = "SELECT * FROM Idcard";
    $result = $conn->query($sql);
    $row = mysqli_fetch_row($result);
$order=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ลงทะเบียนขอรับบริการทำบัตรประชาชนล่วงหน้า</title>
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
        <li><a href="Adddata.php">จองคิว</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login_admin.php"><span class="glyphicon glyphicon-log-in"></span> ADMIN</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    

    <div class="col-sm-12 text-left"> 
      <center><h1>ลงทะเบียนขอรับบริการทำบัตรประชาชนล่วงหน้า</h1></center>
      <hr>
      <div class="well">
        <center><font color="#FF0000"> <h4>ข้อกำหนด / เงื่อนไข </br></font> <font color="#6666FF">ในการจองคิวเพื่อขอทำบัตรประจำตัวประชาชนล่วงหน้า </br> (แบบออนไลน์)
      </br>ที่ ศูนย์บริการภาครัฐแบบเบ็ดเสร็จจังหวัดปทุมธานี </br> ณ ศูนย์การค้าฟิวเจอร์พาร์ค รังสิต  </font> <font color="#6666FF">(ชั้น 3 โซนเซ็นทรัล)</h4></font> </br> </center>

        <h4>1. ท่านสามารถเลือกวันและเวลา จองคิวล่วงหน้า ได้เพียงวันและเวลาเดียว เท่านั้น <font color="#FF0000"> (ปิดให้บริการทุกวันจันทร์)</font> </br></br>
            2. การจองคิวล่วงหน้า ทำได้ 1 นัดหมาย ต่อ 1 ราย และชื่อผู้จองกับชื่อผู้ขอรับบริการต้องเป็นคนเดียวกัน เท่านั้น</br></br>
            3. ท่านต้องเดินทางไปยื่นคำร้องตาม วัน และ เวลา ที่ได้จองคิวล่วงหน้าไว้</br> <font color="#6666FF">(รอบที่ 1 เวลา 11.00 – 12.00 น.) </br></font>
            <font color="#33CC00">(รอบที่ 2 เวลา 14.00 – 15.00 น.) </br></font></br>
            4. กรณีท่านทำผิด ข้อกำหนด เงื่อนไข หรือ การลงทะเบียนจองคิวไม่สมบูรณ์ หรือ ไม่ปรากฏข้อมูลการจองคิว      
            ของท่านในฐานข้อมูลของสำนักทะเบียนฯ หรือ เอกสารหลักฐานไม่สมบูรณ์ ท่านจะไม่สามารถขอรับบริการ
            ตามวัน และ เวลา ที่ได้จองคิวล่วงหน้าไว้
          </br></br>
            <font color="#6666FF"><h4>สอบถามข้อมูลเพิ่มเติม โทร 0 2150 9266 <h4></font></br>
        </h4> <hr>
        <div class="form-group">
        <a href="Pang2.php" type="submit" class="btn btn-primary" style="width: 100%;">จองคิวทำบัตร</a><hr>
        </div>
        <a href="searh_user.php" type="submit" class="btn btn-success" style="width: 100%;">ตรวจสอบสถานะการจองคิว</a><hr>
        <!--<a href="cancel_data.php" type="submit" class="btn btn-danger" style="width: 100%;">ยกเลิกการจองคิว</a><hr>-->
    </div>

    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>เทศบาลนครรังสิต | Rangsit City Municipality.</p>
</footer>

</body>
</html>
