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
        $row_Select = mysqli_fetch_assoc($result_Check_user);
        $_SESSION["user_ID"] = $row_Select['user_ID'];
        header("Location: homepage.php");
    }else{
        echo "ERROR_LOGIN";
    }
    }
    else {
        $query_Check_user = "SELECT * FROM system_accounts_tbl WHERE account_Username = '$user_Name' AND account_Password = '$user_Password'";
        $result_Check_user = mysqli_query($conn, $query_Check_user);

        if (mysqli_num_rows($result_Check_user) > 0) {
            $row_Select = mysqli_fetch_assoc($result_Check_user);
            $_SESSION["user_ID"] = $row_Select['user_ID'];
            header("Location: homepage.php");
        } else {
            echo "ERROR_LOGIN";
    }
    }

   
}
?>