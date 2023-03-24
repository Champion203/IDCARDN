<?php
session_start();
header('Content-Type: text/html; charset=utf-8'); 
if (!isset($_SESSION['Username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login_admin.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['Username']);
    header("location: login_admin.php");
}

require('connectdatabase.php'); 
$order=1;

$sql = "SELECT * FROM Idcard WHERE Status LIKE 'ปิดจองคิว'";
    $result = $conn->query($sql);

    $result1 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num=mysqli_num_rows($result1);

?>

<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #FFFFFF;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="dasboard_admin.php"><img src="https://www.e-service.rangsit.org/e-notify/img/rangsit.png" alt="" width="40" height="40" ></a></li>
  <li><a href="dasboard_admin.php">หน้าเเรก</a></li>
  <li><a href="OpenQ.php">ปิดจองคิว</a></li> 
  <li><a  href="searh_admin.php">ตรวจสอบสถานะ</a></li>
  <?php  if (isset($_SESSION['Username'])) : ?>
        <div align="right">
        <li> <a  href="dasboard_admin.php?logout='1'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </div>
    <?php endif ?>
    <div align="right"> <input type="button" class="btn btn-info " value="Print" onclick="printWindow();"> 
</ul><hr>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<body>
<ul class="nav navbar-nav navbar-right">

<div class="container-fluid ">
    <div class="col-md-12">
    <form action="Add_Q.php" class="form-group" method="POST">
    <div id="printContent">
    <div class="alert alert-info" role="alert">
    <h1 class="text-center" >ปิดวันลงทะเบียน</h1> </div> <hr> 
    <div class="col-12 col-sm-12 mb-3">
        <label for="">วันที่</label>
        <input type="date" name="mydate"  placeholder="วันที่" required>
        <label for="">เวลา</label>
        <select name="time"  required> 
                  <option value="">-ช่วงเวลาที่เข้ารับบริการ-</option>
                  <option value="รอบ1">11.00-12.00 น.</option>
                  <option value="รอบ2">14.00-15.00 น.</option>
                  <option value="ทั้งสองรอบ">ทั้งสองรอบ</option>
                </select> 
        <input type="submit" value="ปิดจอง" class="btn btn-info "> <hr> </div>
 <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
                <th><center>ลำดับ</center></th>
                <th><center>วันที่ปิด</center></th>
                <th><center>ช่วงเวลา</center></th>
                <th><center>สถานะ</center></th>
                <th><center>ปิดการจอง</center></th>
            </tr>
        </th>
        <tbody>
        <?php while($row = mysqli_fetch_row($result)){ ?>
            <tr>
                <td><center><?php echo $order;?></td>
                <td><center><?php echo $row[4];?></td></center>
                <td><center><?php echo $row[5];?></td></center>
                <td><center><?php echo $row[7];?></td></center>
                <td><center><a href="close_Q.php?idQ=<?php echo $row[0];?>" class="btn btn-info" role="button" onclick="return confirm('คุณต้องการเปิดการจองหรือไม่')">เปิดการจอง</a></td></center>
            </tr>
            <?php $order++; }?> 
        </tbody>
        <tfoot>
            <tr>
            <th><center>ลำดับ</center></th>
                <th><center>วันที่ปิด</center></th>
                <th><center>ช่วงเวลา</center></th>
                <th><center>สถานะ</center></th>
                <th><center>ปิดการจอง</center></th>
            </tr>
        </tfoot>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
</script>
    </table>
    </div>
    </div>
    </div>
    <footer class="active text-center">
  <p>เทศบาลนครรังสิต | Rangsit City Municipality.</p>
</body>
</html>
<script language="javascript" type="text/javascript">
 function printWindow()
{
   var printReadyEle = document.getElementById("printContent");
   var shtml = '<HTML>\n<HEAD>\n';
   if (document.getElementsByTagName != null)
   {
      var sheadTags = document.getElementsByTagName("head");
      if (sheadTags.length > 0)
         shtml += sheadTags[0].innerHTML;
    }
    shtml += '</HEAD>\n<BODY>\n';
    if (printReadyEle != null)
    {
       shtml += '<form name = frmform1>';
       shtml += printReadyEle.innerHTML;
    }
    shtml += '\n</form>\n</BODY>\n</HTML>';
    var printWin1 = window.open();
    printWin1.document.open();
    printWin1.document.write(shtml);
    printWin1.document.close();
    printWin1.print();
}
</script>
