<?php 
include 'SYSTEM_config.php';
session_start();

if(isset($_POST['txt_Confirm'])){
    // $user_ID = $_SESSION['user_ID'];
    // $barangay_ID = $_SESSION['barangay_ID'];
    $user_ID = 'BaRIS_625d52fe5c308';
    $barangay_ID = '54';
    $query_Get_info = "SELECT * FROM barangay_users_tbl WHERE user_ID = '$user_ID'";
    $result_Get_info = mysqli_query($conn, $query_Get_info);

    if(mysqli_num_rows($result_Get_info) > 0){
        $rows_Get_info = mysqli_fetch_assoc($result_Get_info);
        $process_ID = uniqid('Baris-prcs-');
        $requestor_ID = $user_ID;
        $valid_ID1 = $_FILES["file_ValidID_1"]["name"];
        $valid_ID2 = $_FILES["file_ValidID_2"]["name"];
        $address_Proof = $_FILES["file_PoB"]["name"];
        $requestor_Image = $_FILES["file_Req_IMG"]["name"];
        $request_Status = 0;
        $query_Insert_request = "INSERT INTO barangay_verification_tbl SET process_ID = '$process_ID', requestor_ID = '$requestor_ID',
        valid_ID_1 = '$valid_ID1', valid_ID_2 = '$valid_ID2', address_Proof = '$address_Proof', requestor_Image = '$requestor_Image', request_Status = '$request_Status'";
        $result_Insert_request = mysqli_query($conn, $query_Insert_request);

        if(!$result_Insert_request){
            echo "ERROR_FOUND";
        }
    }
}else{
    echo "ISSET_ERROR_FOUND";
}

?>