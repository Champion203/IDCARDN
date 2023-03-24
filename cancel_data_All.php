<?php
require('connectdatabase.php'); 
$SumQ=$_POST["SumQ"];

$sql = "DELETE FROM Idcard WHERE SumQ = '$SumQ'";

$result = mysqli_query($conn,$sql);

if($result){
    header('location:index.php');
    exit(0);
}else{
    echo "เกิดข้อผิดพลาด";
    echo $SumQ;
}
?>