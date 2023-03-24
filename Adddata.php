<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>ลงทะเบียนขอรับบริการทำบัตรประชาชนล่วงหน้า</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap 4 -->
    <link href="indexpage/css/bootstrap.css" rel="stylesheet">
    <link href="indexpage/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="indexpage/dist/css/animatebg.css" rel="stylesheet"> -->

    <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-light bg-light shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="https://www.e-service.rangsit.org/e-notify/img/rangsit.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      เทศบาลนครรังสิต
    </a>
  </div>
</nav>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12">
          <div class="alert alert-info" role="alert">
            <h3>ระบบลงทะเบียนขอรับบริการทำบัตรประชาชนล่วงหน้า</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12">
          <form action="check_Q.php" method="post" onsubmit="return checkAgree()" enctype="multipart/form-data">
          <h3><font color="#3333CC">*กรุณากรอกข้อมูลให้ครบทุกช่อง</h3></font>

            <div class="row">
              <div class="col-12 col-sm-2 mb-4">
                <select name="Kname" class="form-control" required>
                  <option value="">-คำนำหน้าชื่อ-</option>
                  <option value="เด็กชาย">-เด็กชาย</option>
                  <option value="เด็กหญิง">-เด็กหญิง</option>
                  <option value="นาย">-นาย</option>
                  <option value="นาง">-นาง</option>
                  <option value="นางสาว">-นางสาว</option>
                </select>
              </div>
              <div class="col-12 col-sm-5 mb-4">
                <input type="text"  name="Fname" class="form-control" placeholder="ชื่อ" required> 
              </div>
              <div class="col-12 col-sm-5 mb-4">
                <input type="text" name="Lname" class="form-control" placeholder="นามสกุล" required>
            </div>
            <div class="col-12 col-sm-6 mb-4">
            <h7><font color="#3333CC">เลขประจำตัวประชาชน (13 หลัก) </h7></font> 
            <input type="text" tabindex="1"  placeholder="x-xxxxx-xxxxx-xx-x"   name="idcard" id="idcard" size="25" value="" class="form-control"  onkeyup="autoTab2(this)"  minlength="13" maxlength="20" required/></div> 
           
            <div class="col-12 col-sm-6 mb-4">
            <h7><font color="#3333CC">เบอร์โทรศัพท์มือถือ (10 หลัก) </h7></font> 
            <input type="text" tabindex="1"  placeholder="xxx-xxx-xxxx"   name="phone" id="phone" size="25" value="" class="form-control"  onkeyup="autoTab(this)"  minlength="10" maxlength="12" required/></div> 
              <h7><font color="#3333CC">เลือกวันที่จะเข้ารับบริการ</h7></font>
              <div class="col-12 col-sm-6 mb-4">
              <?php
                $timestamp = (time()+ 86400 * 7);?>
                <input type="date" name="mydate" class="form-control" placeholder="วันที่" min="<?php echo date('Y-m-d');?>" max="<?php echo date("Y-m-d", $timestamp);?>"required> 
            </div>
              <div class="col-12 col-sm-6 mb-3">
                <select name="time" class="form-control" required>
                  <option value="">-เลือกช่วงเวลาที่เข้ารับบริการ-</option>
                  <option value="รอบ1">รอบ1 เวลา 11.00-12.00 น.</option>
                  <option value="รอบ2">รอบ2 เวลา 14.00-15.00 น.</option>
                </select>
              </div>    
            </div>
            </div>

    </div>
            <div class="row">
            <div class="col-12 col-sm-12">
              <input type="checkbox"  id="agree" > ข้าพเจ้ายอมรับ<a data-toggle="modal" href="#myModal2">ข้อกำหนด เงื่อนไข</a> ในการขอรับบริการและยินยอมให้จัดเก็บข้อมูลส่วนบุคคลไว้เป็นหลักฐาน รวมถึงใช้ในการขอทำบัตรประจำตัวประชาชน <br/> <hr>
               <button type="submit" class="btn btn-primary" style="width: 100%;">บันทึกข้อมูล</button> <hr>
               <a class="btn btn-info " data-toggle="modal" href="#myModal1" role="button" style="width: 100%;" >ตรวจสอบคิวคงเหลือ</a></a> <hr> 
               <input type='button' value='ย้อนกลับ' onclick='javascript:window.history.back()' class="btn btn-danger" style="width: 100%;">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <footer>

    </p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php
    require('connectdatabase.php'); 
    $timestampnow = time();
    $dateimenow = date("Y-m-d", $timestampnow);
    $datenow = explode('-', $dateimenow);
    $dateimenow = implode('-', array($datenow[2], $datenow[1], $datenow[0]+543));
    
    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateimenow%') AND (timelist LIKE 'รอบ1')";
    $result = $conn->query($sql);

    $resultnow1 = mysqli_query($conn, $sql) or die(mysqli_error());
    $numnow1=mysqli_num_rows($resultnow1);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateimenow%') AND (timelist LIKE 'รอบ2')";
    $result = $conn->query($sql);

    $resultnow2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $numnow2=mysqli_num_rows($resultnow2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateimenow%') AND (timelist LIKE 'รอบ1') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $resultnow3 = mysqli_query($conn, $sql) or die(mysqli_error());
    $closenow1=mysqli_num_rows($resultnow3);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateimenow%') AND (timelist LIKE 'รอบ2') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $resultnow3 = mysqli_query($conn, $sql) or die(mysqli_error());
    $closenow2=mysqli_num_rows($resultnow3);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateimenow%') AND (timelist LIKE 'ทั้งสองรอบ') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $resultnow4 = mysqli_query($conn, $sql) or die(mysqli_error());
    $closenow3=mysqli_num_rows($resultnow4);
  //////////////////////////////////////////////////////////////////////////////////////////////////////
    $timestamp1 = (time()+ 86400 *1 );
    $dateime = date("Y-m-d", $timestamp1);
    $date = explode('-', $dateime);
    $dateime = implode('-', array($date[2], $date[1], $date[0]+543));
    
    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime%') AND (timelist LIKE 'รอบ1')";
    $result = $conn->query($sql);

    $result1 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num=mysqli_num_rows($result1);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime%') AND (timelist LIKE 'รอบ2')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num2=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime%') AND (timelist LIKE 'รอบ1') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close1=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime%') AND (timelist LIKE 'รอบ2') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close2=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime%') AND (timelist LIKE 'ทั้งสองรอบ') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close3=mysqli_num_rows($result2);
 //--------------------------------------------------------------------------------------------------------------------//
    $timestamp2 = (time()+ 86400 * 2);
    $dateime2 = date("Y-m-d", $timestamp2);
    $date2 = explode('-', $dateime2);
    $dateime2 = implode('-', array($date2[2], $date2[1], $date2[0]+543));

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime2%') AND (timelist LIKE 'รอบ1')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num3=mysqli_num_rows($result2);
    
    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime2%') AND (timelist LIKE 'รอบ2')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num4=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime2%') AND (timelist LIKE 'รอบ1') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close4=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime2%') AND (timelist LIKE 'รอบ2') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close5=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime2%') AND (timelist LIKE 'ทั้งสองรอบ') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close6=mysqli_num_rows($result2);
//--------------------------------------------------------------------------------------------------------------------//
    $timestamp3 = (time()+ 86400 * 3);
    $dateime3 = date("Y-m-d", $timestamp3);
    $date3 = explode('-', $dateime3);
    $dateime3 = implode('-', array($date3[2], $date3[1], $date3[0]+543));

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime3%') AND (timelist LIKE 'รอบ1')";
    $result = $conn->query($sql);

    $result3 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num5=mysqli_num_rows($result3);
    
    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime3%') AND (timelist LIKE 'รอบ2')";
    $result = $conn->query($sql);

    $result3 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num6=mysqli_num_rows($result3);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime3%') AND (timelist LIKE 'รอบ1') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close7=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime3%') AND (timelist LIKE 'รอบ2') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close8=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime3%') AND (timelist LIKE 'ทั้งสองรอบ') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close9=mysqli_num_rows($result2);
//--------------------------------------------------------------------------------------------------------------------//
    $timestamp4 = (time()+ 86400 * 4);
    $dateime4 = date("Y-m-d", $timestamp4);
    $date4 = explode('-', $dateime4);
    $dateime4 = implode('-', array($date4[2], $date4[1], $date4[0]+543));

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime4%') AND (timelist LIKE 'รอบ1')";
    $result = $conn->query($sql);

    $result4 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num7=mysqli_num_rows($result4);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime4%') AND (timelist LIKE 'รอบ2')";
    $result = $conn->query($sql);

    $result4 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num8=mysqli_num_rows($result4);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime4%') AND (timelist LIKE 'รอบ1') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close10=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime4%') AND (timelist LIKE 'รอบ2') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close11=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime4%') AND (timelist LIKE 'ทั้งสองรอบ') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close12=mysqli_num_rows($result2);
//--------------------------------------------------------------------------------------------------------------------//
    $timestamp5 = (time()+ 86400 * 5);
    $dateime5 = date("Y-m-d", $timestamp5);
    $date5 = explode('-', $dateime5);
    $dateime5 = implode('-', array($date5[2], $date5[1], $date5[0]+543));
    
    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime5%') AND (timelist LIKE 'รอบ1')";
    $result = $conn->query($sql);
    
    $result5 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num9=mysqli_num_rows($result5);
    
    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime5%') AND (timelist LIKE 'รอบ2')";
    $result = $conn->query($sql);
    
    $result5 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num10=mysqli_num_rows($result5);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime5%') AND (timelist LIKE 'รอบ1') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close13=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime5%') AND (timelist LIKE 'รอบ2') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close14=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime5%') AND (timelist LIKE 'ทั้งสองรอบ') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close15=mysqli_num_rows($result2);
    //--------------------------------------------------------------------------------------------------------------------//
    $timestamp6 = (time()+ 86400 * 6);
    $dateime6 = date("Y-m-d", $timestamp6);
    $date6 = explode('-', $dateime6);
    $dateime6 = implode('-', array($date6[2], $date6[1], $date6[0]+543));
    
    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime6%') AND (timelist LIKE 'รอบ1')";
    $result = $conn->query($sql);
    
    $result6 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num11=mysqli_num_rows($result6);
    
    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime6%') AND (timelist LIKE 'รอบ2')";
    $result = $conn->query($sql);
    
    $result6 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num12=mysqli_num_rows($result6);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime6%') AND (timelist LIKE 'รอบ1') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close16=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime6%') AND (timelist LIKE 'รอบ2') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close17=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime6%') AND (timelist LIKE 'ทั้งสองรอบ') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close18=mysqli_num_rows($result2);
    //--------------------------------------------------------------------------------------------------------------------//
    $timestamp7 = (time()+ 86400 * 7);
    $dateime7 = date("Y-m-d", $timestamp7);
    $date7 = explode('-', $dateime7);
    $dateime7 = implode('-', array($date7[2], $date7[1], $date7[0]+543));
    
    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime7%') AND (timelist LIKE 'รอบ1')";
    $result = $conn->query($sql);
    
    $result7 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num13=mysqli_num_rows($result7);
    
    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime7%') AND (timelist LIKE 'รอบ2')";
    $result = $conn->query($sql);
    
    $result7 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num14=mysqli_num_rows($result7);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime7%') AND (timelist LIKE 'รอบ1') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close19=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime7%') AND (timelist LIKE 'รอบ2') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close20=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime7%') AND (timelist LIKE 'ทั้งสองรอบ') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close21=mysqli_num_rows($result2);
    //--------------------------------------------------------------------------------------------------------------------//
    $timestamp8 = (time()+ 86400 * 8);
    $dateime8 = date("Y-m-d", $timestamp8);
    $date8 = explode('-', $dateime8);
    $dateime8 = implode('-', array($date8[2], $date8[1], $date8[0]+543));
    
    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime8%') AND (timelist LIKE 'รอบ1')";
    $result = $conn->query($sql);
    
    $result8 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num15=mysqli_num_rows($result8);
    
    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime8%') AND (timelist LIKE 'รอบ2')";
    $result = $conn->query($sql);
    
    $result8 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num16=mysqli_num_rows($result8);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime8%') AND (timelist LIKE 'รอบ1') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close22=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime8%') AND (timelist LIKE 'รอบ2') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close23=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime8%') AND (timelist LIKE 'ทั้งสองรอบ') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close24=mysqli_num_rows($result2);
    //--------------------------------------------------------------------------------------------------------------------//
    $timestamp9 = (time()+ 86400 * 9);
    $dateime9 = date("Y-m-d", $timestamp9);
    $date9 = explode('-', $dateime9);
    $dateime9 = implode('-', array($date9[2], $date9[1], $date9[0]+543));
    
    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime9%') AND (timelist LIKE 'รอบ1')";
    $result = $conn->query($sql);
    
    $result9 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num17=mysqli_num_rows($result9);
    
    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime9%') AND (timelist LIKE 'รอบ2')";
    $result = $conn->query($sql);
    
    $result9 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num18=mysqli_num_rows($result9);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime9%') AND (timelist LIKE 'รอบ1') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close25=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime9%') AND (timelist LIKE 'รอบ2') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close26=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime9%') AND (timelist LIKE 'ทั้งสองรอบ') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close27=mysqli_num_rows($result2);
    //--------------------------------------------------------------------------------------------------------------------//
    $timestamp10 = (time()+ 86400 * 10);
    $dateime10 = date("Y-m-d", $timestamp10);
    $date10 = explode('-', $dateime10);
    $dateime10 = implode('-', array($date10[2], $date10[1], $date10[0]+543));
    
    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime10%') AND (timelist LIKE 'รอบ1')";
    $result = $conn->query($sql);
    
    $result10 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num19=mysqli_num_rows($result10);
    
    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime10%') AND (timelist LIKE 'รอบ2')";
    $result = $conn->query($sql);
    
    $result10 = mysqli_query($conn, $sql) or die(mysqli_error());
    $num20=mysqli_num_rows($result10);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime10%') AND (timelist LIKE 'รอบ1') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close28=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime10%') AND (timelist LIKE 'รอบ2') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close29=mysqli_num_rows($result2);

    $sql = "SELECT * FROM Idcard WHERE (Datelist LIKE '%$dateime10%') AND (timelist LIKE 'ทั้งสองรอบ') AND (Status LIKE 'ปิดจองคิว')";
    $result = $conn->query($sql);

    $result2 = mysqli_query($conn, $sql) or die(mysqli_error());
    $close30=mysqli_num_rows($result2);
    //--------------------------------------------------------------------------------------------------------------------//

$order=1;
?>

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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</head>
<body>
<ul class="nav navbar-nav navbar-right">

    <div class="container-fluid ">
    <div class="col-md-12">
        <hr> </div>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
</script>
    </table>
    </div>
    </div>
    </div>
    <footer class="background-color: #4CAF50; text-center">
  <p>เทศบาลนครรังสิต | Rangsit City Municipality.</p>
</footer>
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
<!-- sample modal content -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
        <img src="indexpage/img/03062565.jpg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--POPUP-->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <center><h3><font color="#FF0000">*หมายเหตุ</font> <font color="#6666FF">ปิดให้บริการทุกวันจันทร์</h3></font></center>
      <div class="modal-header">
      <div class="container-fluid ">
    <div class="col-md-12">
        <hr> </div>
 <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
                <th><center>วันที่</center></th>
                <th><center>เวลา 11.00-12.00 น. (ว่าง)</center></th>
                <th><center>เวลา 14.00-15.00 น. (ว่าง)</center></th>

            </tr>
        </th>
        <tbody>
        <tr>
                <td><center><?php echo $dateimenow;?></td></center>
                <td><center>
                  <?php if ($closenow3 >=1){
                   echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($closenow1 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($numnow1 == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }
                  else {echo (35-$numnow1),'คิว';}?>
                </td></center>

                <td><center>
                <?php if ($closenow3 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($closenow2 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($numnow2 == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$numnow2),'คิว';}?>
                </td></center>
            </tr>
            <tr>
                <td><center><?php echo $dateime;?></td></center>
                <td><center>
                  <?php if ($close3 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close1 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($num == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num),'คิว';}?>
                </td></center>

                <td><center>
                <?php if ($close3 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close2 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($num2 == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num2),'คิว';}?>
                </td></center>
            </tr>
            <tr>
                <td><center><?php echo $dateime2;?></td></center>
                <td><center>
                  <?php if ($close6 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close4 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($num3 == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num3),'คิว';}?>
                </td></center>

                <td><center>
                <?php if ($close6 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close5 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($num4 == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num4),'คิว';}?>
                </td></center>
            </tr>
            <tr>
                <td><center><?php echo $dateime3;?></td></center>
                <td><center>
                  <?php if ($close9 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close7 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($num5 == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num5),'คิว';}?>
                </td></center>

                <td><center>
                <?php if ($close9 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close8 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($num6 == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num6),'คิว';}?>
                </td></center>
            </tr>
            <tr>
                <td><center><?php echo $dateime4;?></td></center>
                <td><center>
                <?php if ($close12 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close10 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($num7 == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num7),'คิว';}?>
                </td></center>

                <td><center>
                <?php if ($close12 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close11 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                }elseif ($num8 == 35){
                  echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num8),'คิว';}?>
                </td></center>
            </tr>
            <tr>
                <td><center><?php echo $dateime5;?></td></center>
                <td><center>
                <?php if ($close15 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close13 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                }elseif ($num9 == 35){
                  echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num9),'คิว';}?>
                </td></center>

                <td><center>
                <?php if ($close15 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close14 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                }elseif ($num10 == 35){
                  echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num10),'คิว';}?>
                </td></center>
            </tr>
            <tr>
                <td><center><?php echo $dateime6;?></td></center>
                <td><center>
                <?php if ($close18 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close16 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($num11 == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num11),'คิว';}?>
                </td></center>

                <td><center>
                <?php if ($close18 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close17 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($num12 == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num12),'คิว';}?>
                </td></center>
            </tr>
            <tr>
                <td><center><?php echo $dateime7;?></td></center>
                <td><center>
                <?php if ($close21 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close19 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($num13 == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num13),'คิว';}?>
                </td></center>

                <td><center>
                <?php if ($close21 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close20 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($num14 == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num14),'คิว';}?>
                </td></center>
            </tr>
           <!--  <tr>
                <td><center><?php echo $dateime8;?></td></center>
                <td><center>
                <?php if ($close24 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close22 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($num15 == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num15),'คิว';}?>
                </td></center>

                <td><center>
                <?php if ($close24 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close23 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($num16 == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num16),'คิว';}?>
                </td></center>
            </tr>
            <tr>
                <td><center><?php echo $dateime9;?></td></center>
                <td><center>
                <?php if ($close27 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close25 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($num17 == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num17),'คิว';}?>
                </td></center>

                <td><center>
                <?php if ($close27 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close26 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($num18 == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num18),'คิว';}?>
                </td></center>
            </tr>
           <tr>
                <td><center><?php echo $dateime10;?></td></center>
                <td><center>
                <?php if ($close30 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close28 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }elseif ($num19 == 35){
                    echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num19),'คิว';}?>
                </td></center>

                <td><center>
                <?php if ($close30 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                  }
                  elseif ($close29 >=1){
                    echo "<font color='red'>ปิดให้บริการ</font>";
                }elseif ($num20 == 35){
                  echo "<font color='red'>เต็ม</font>";
                  }else {echo (35-$num20),'คิว';}?>
                </td></center>-->
            </tr>

        </tbody>
        <tfoot>
            <tr>
            <th><center>วันที่</center></th>
            <th><center>เวลา 11.00-12.00 น. (ว่าง)</center></th>
            <th><center>เวลา 14.00-15.00 น. (ว่าง)</center></th>
        </tfoot></div>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
</script>

    </table>
    </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
function checkAgree(){
	if(!document.getElementById('agree').checked ){
		alert("กรุณากดยอมรับเงื่อนไขก่อน");
		return false;
	}
return true;
}
</script>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!--h5 class="modal-title" style="font-family: Mitr;">ระบบร้องเรียน ร้องทุกข์ </h5-->
        <a >เงื่อนไขเเละข้อกำหนด</a><p></p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12"> 
          <h4>1. ท่านสามารถเลือกวันและเวลา จองคิวล่วงหน้า ได้เพียงวันและเวลาเดียว เท่านั้น <font color="#FF0000"> (ปิดให้บริการทุกวันจันทร์)</font> </br></br>
            2. การจองคิวล่วงหน้า ทำได้ 1 นัดหมาย ต่อ 1 ราย และชื่อผู้จองกับชื่อผู้ขอรับบริการต้องเป็นคนเดียวกัน เท่านั้น</br></br>
            3. ท่านต้องเดินทางไปยื่นคำร้องตาม วัน และ เวลา ที่ได้จองคิวล่วงหน้าไว้</br> <font color="#6666FF">(รอบที่ 1 เวลา 11.00 – 12.00 น.) </br></font>
            <font color="#33CC00">(รอบที่ 2 เวลา 14.00 – 15.00 น.) </br></font></br>
            4. กรณีท่านทำผิด ข้อกำหนด เงื่อนไข หรือ การลงทะเบียนจองคิวไม่สมบูรณ์ หรือ ไม่ปรากฏข้อมูลการจองคิว      
            ของท่านในฐานข้อมูลของสำนักทะเบียนฯ หรือ เอกสารหลักฐานไม่สมบูรณ์ ท่านจะไม่สามารถขอรับบริการ
            ตามวัน และ เวลา ที่ได้จองคิวล่วงหน้าไว้ </br></br>
            <font color="#FF0000"><h4>หมายเหตุ สอบถามข้อมูลเพิ่มเติม </br> โทร 0 2150 9266 <h4></font></br>
        </h7>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"></span>ตกลง</button>
      </div>
    </div>
  </div>
</div>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
function autoTab(obj) {
    var pattern = new String("___-___-____"); // กำหนดรูปแบบในนี้
    var pattern_ex = new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
    var returnText = new String("");
    var obj_l = obj.value.length;
    var obj_l2 = obj_l - 1;
    for (i = 0; i < pattern.length; i++) {
        if (obj_l2 == i && pattern.charAt(i + 1) == pattern_ex) {
            returnText += obj.value + pattern_ex;
            obj.value = returnText;
        }
    }
    if (obj_l >= pattern.length) {
        obj.value = obj.value.substr(0, pattern.length);
    }
}
function autoTab2(obj) {
    var pattern = new String("_-____-_____-__-_"); // กำหนดรูปแบบในนี้
    var pattern_ex = new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
    var returnText = new String("");
    var obj_l = obj.value.length;
    var obj_l2 = obj_l - 1;
    for (i = 0; i < pattern.length; i++) {
        if (obj_l2 == i && pattern.charAt(i + 1) == pattern_ex) {
            returnText += obj.value + pattern_ex;
            obj.value = returnText;
        }
    }
    if (obj_l >= pattern.length) {
        obj.value = obj.value.substr(0, pattern.length);
    }
}

</script>
</head>
<body>

</body>
</html>



