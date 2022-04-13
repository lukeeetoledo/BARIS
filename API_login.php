<?php 
include 'SYSTEM_config.php';
session_start();


if(isset($_POST['txt_Username']) && isset($_POST['txt_Password'])){
    $user_Name = mysqli_real_escape_string($conn,$_POST['txt_Username']);
    $user_Email = mysqli_real_escape_string($conn,$_POST['txt_Username']);
    $user_Password = mysqli_real_escape_string($conn,md5($_POST['txt_Password']));

    if(filter_var(mysqli_real_escape_string($conn,$_POST['txt_Username']), FILTER_VALIDATE_EMAIL)) {
        $query_Check_user = "SELECT * FROM system_accounts_tbl WHERE account_Email = '$user_Email' AND account_Password = '$user_Password'";
        $result_Check_user = mysqli_query($conn, $query_Check_user);

    if(mysqli_num_rows($result_Check_user) > 0){
        $row_Select_userID = mysqli_fetch_assoc($result_Check_user);
        $_SESSION["user_ID"] = $row_Select_userID['user_ID'];
        $user_ID = $_SESSION['user_ID'];
        $query_Get_barangay = "SELECT * FROM barangay_users_tbl WHERE user_ID = '$user_ID'";
        $result_Get_barangay = mysqli_query($conn,$query_Get_barangay);
        $row_Select_barangay = mysqli_fetch_assoc($result_Get_barangay);
        $_SESSION['barangay_ID'] = $row_Select_barangay['user_Barangay'];
        header("Location: homepage.php");
    }else{
        echo "ERROR_LOGIN";
    }
    }
    else {
        $query_Check_user = "SELECT * FROM system_accounts_tbl WHERE account_Username = '$user_Name' AND account_Password = '$user_Password'";
        $result_Check_user = mysqli_query($conn, $query_Check_user);

        if (mysqli_num_rows($result_Check_user) > 0) {
            $row_Select_userID = mysqli_fetch_assoc($result_Check_user);
            $_SESSION["user_ID"] = $row_Select_userID['user_ID'];
            $user_ID = $_SESSION['user_ID'];
            $query_Get_barangay = "SELECT * FROM barangay_users_tbl WHERE user_ID = '$user_ID'";
            $result_Get_barangay = mysqli_query($conn,$query_Get_barangay);
            $row_Select_barangay = mysqli_fetch_assoc($result_Get_barangay);
            $_SESSION['barangay_ID'] = $row_Select_barangay['user_Barangay'];
            header("Location: homepage.php");
            header("Location: homepage.php");
        } else {
            echo "ERROR_LOGIN";
    }
    }

   
}
?>