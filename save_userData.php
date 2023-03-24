
<?php
header('Content-Type: text/html; charset=utf-8');
require('connectdatabase.php');
$errors = array(); 
session_start(); 
$fname = $_SESSION['$Fname'];
$lname = $_SESSION['$Lname'];
$kname = $_SESSION['$Kname'];
$mydate = $_SESSION['$mydate'];
$time = $_SESSION['$time'];
$phone = $_SESSION['$phone'];
$idcard = $_SESSION['$idcard'];
$random = Random(5);

$dateime = $mydate;
$date = explode('-', $dateime);
$dateime = implode('-', array($date[2], $date[1], $date[0]+543));

isset( $_POST['mydate'] ) ? $mydate = $_POST['mydate'] : $mydate = "";
#mysqli_query('set names utf8');
$sql = "INSERT INTO Idcard (Prefix, Fname, Lname, Datelist, timelist, SumQ, Phone, Idcard)
 VALUES ('$kname','$fname', '$lname', '$dateime', '$time', '$random', '$phone' ,'$idcard')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>";
        echo "alert(\" จองคิวสำเร็จ รหัสการจองของคุณคือ $random\",);"; 
        echo "window.location = 'profile_user.php';";
        $_SESSION['$random'] = $random;
        echo "</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
exit();
$conn->close();



function Random($length){//Randon srting use in Upload picture
    $possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"; //ตัวอักษรที่ต้องการสุ่ม
          $str = "";
          while(strlen($str)<$length){
              $str.=substr($possible,(rand()%strlen($possible)),1);
          }
          return $str;
   }
//เวลาช้งาน
echo Random(5);
?>


