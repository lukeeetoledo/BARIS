<?php 
include 'SYSTEM_config.php';

if(!isset($_SESSION['barangay_ID'])){
    header("location:../index.php");
}
$paymentPic = " ";
$barangay_ID = $_SESSION['barangay_ID'];
$query_Get_Paymentpicture = "SELECT * FROM barangay_payment_settings_tbl WHERE barangay_ID = '$barangay_ID' ";
$result_Get_PaymentPicture = mysqli_query($conn,$query_Get_Paymentpicture);

if(mysqli_num_rows($result_Get_PaymentPicture) > 0){
   
    while ($row = $result_Get_PaymentPicture->fetch_assoc()){
        $paymentPic .= "<div id = 'qrPayment'>
                        <img src='{$row['payment_media']}'>
                    </div>";
    }
}


?>