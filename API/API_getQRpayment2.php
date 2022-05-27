<?php 
include 'SYSTEM_config.php';

if(!isset($_SESSION['barangay_ID'])){
    header("location:../index.php");
}
$paymentPic = " ";
$barangay_ID = $_SESSION['barangay_ID'];
$query_Get_Paymentpicture = "SELECT * FROM barangay_document_types_tbl WHERE barangay_ID = '$barangay_ID' AND doc_type = 'Barangay_Clearance' ";
$result_Get_PaymentPicture = mysqli_query($conn,$query_Get_Paymentpicture);
$price = "";
if(mysqli_num_rows($result_Get_PaymentPicture) > 0){
   
    while ($row = $result_Get_PaymentPicture->fetch_assoc()){
        $price = $row['doc_price'];
        $paymentPic .= "<div id = 'qrPayment'>
                        <img src='{$row['doc_Price']}'>
                    </div>";
    }
}


?>