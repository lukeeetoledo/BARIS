<?php 
include 'SYSTEM_config.php';
    if(isset($_GET['token'])){
        $token = $_GET['token'];
        $today = date('Y-m-d');
        $query_Check_token = "SELECT * FROM system_accounts_tbl WHERE account_Token = '$token' AND token_Validity > '$today'";
        $result_Check_token = mysqli_query($conn,$query_Check_token);
        if(mysqli_num_rows($result_Check_token) > 0){
            $row_Get = mysqli_fetch_assoc($result_Check_token);
            $user_ID = $row_Get['user_ID']; 
            echo "$user_ID";
        }else{
            echo "Token Error/Expired.";
        }
    }
?>