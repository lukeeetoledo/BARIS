<?php 
include 'SYSTEM_config.php';
    if(isset($_POST['txt_first_pass']) && isset($_POST['txt_second_pass']) &&isset($_POST['txt_user_ID'])){
        $first_Pass = $_POST['txt_first_pass'];
        $second_Pass = $_POST['txt_second_pass'];
        $userID = $_POST['txt_user_ID'];
        if($first_Pass == $second_Pass){
            $new_Password = mysqli_real_escape_string($conn, md5($first_Pass));
            $query_Set_password = "UPDATE system_accounts_tbl SET account_Password = '$new_Password' WHERE user_ID = '$userID'";
            $result_Set_password = mysqli_query($conn,$query_Set_password);
            if($result_Set_password){
                echo "Change password successfuly.";
            }
        }else{
            echo "Password don't match.";
        } 
    }
?>