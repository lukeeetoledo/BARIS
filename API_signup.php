<?php 
include 'SYSTEM_config.php';
session_start();


if(isset($_POST['txt_Fname']) && isset($_POST['txt_Mname'])&& isset($_POST['txt_Lname'])
    && isset($_POST['txt_Suffix'])&& isset($_POST['txt_Gender'])&& isset($_POST['txt_Birthdate'])
    && isset($_POST['txt_Civilstatus'])&& isset($_POST['txt_Religion'])
    && isset($_POST['txt_Contactnumber'])&& isset($_POST['txt_Email'])&& isset($_POST['txt_Username'])&& isset($_POST['txt_Password'])
    && isset($_POST['txt_Region'])&& isset($_POST['txt_Province'])&& isset($_POST['txt_Citymunicipality'])
    && isset($_POST['txt_Barangay'])){
    
        // USER
    $user_ID = mysqli_real_escape_string($conn,uniqid('BaRIS_'));
    $user_Fname = mysqli_real_escape_string($conn,$_POST['txt_Fname']);
    $user_Mname = mysqli_real_escape_string($conn,$_POST['txt_Mname']);
    $user_Lname = mysqli_real_escape_string($conn,$_POST['txt_Lname']);
    $user_Suffix = mysqli_real_escape_string($conn,$_POST['txt_Suffix']);
    $user_Gender = mysqli_real_escape_string($conn,$_POST['txt_Gender']);
    $user_Birthdate = mysqli_real_escape_string($conn,$_POST['txt_Birthdate']);
    $user_Civilstatus = mysqli_real_escape_string($conn,$_POST['txt_Civilstatus']);
    $user_Religion= mysqli_real_escape_string($conn,$_POST['txt_Religion']);
    $user_Region = mysqli_real_escape_string($conn,$_POST['txt_Region']);
    $user_Province = mysqli_real_escape_string($conn,$_POST['txt_Province']);
    $user_Citymunicipality = mysqli_real_escape_string($conn,$_POST['txt_Citymunicipality']);
    $user_Barangay = mysqli_real_escape_string($conn,$_POST['txt_Barangay']);
        // ACCOUNT
    $account_Username = mysqli_real_escape_string($conn,$_POST['txt_Username']);
    $account_Password = mysqli_real_escape_string($conn,md5($_POST['txt_Password']));
    $account_Contactnumber= mysqli_real_escape_string($conn,$_POST['txt_Contactnumber']);
    $account_Email= mysqli_real_escape_string($conn,$_POST['txt_Email']);

        $query_Insert_user = "INSERT INTO barangay_users_tbl (user_ID, user_Fname, user_Mname, user_Lname, user_Suffix, user_Gender, user_Birthdate, user_Civilstatus, user_Religion,  
        user_Region, user_Province, user_Citymunicipality, user_Barangay) 
        VALUES ('$user_ID', '$user_Fname', '$user_Mname', '$user_Lname', '$user_Suffix', '$user_Gender', '$user_Birthdate','$user_Civilstatus','$user_Religion',
        '$user_Region','$user_Province','$user_Citymunicipality','$user_Barangay')";
        $query_Check_user_email = "SELECT * FROM system_accounts_tbl WHERE account_Username = '$account_Username' OR account_Email = '$account_Email'";
        $query_Create_account = "INSERT INTO system_accounts_tbl SET user_ID = '$user_ID', account_Username = '$account_Username', account_Email = '$account_Email',  account_Contactnumber = '$account_Contactnumber', account_Password = '$account_Password', account_Type = '0'";

    $result_Check_username = mysqli_query($conn, $query_Check_user_email);
  
    
    if(mysqli_num_rows($result_Check_username) > 0){
        echo "ERROR_USERNAME_EXISTS";
    }else{
        $result_Insert_user = mysqli_query($conn, $query_Insert_user);
        if ($result_Insert_user) {
            $result_Create_account = mysqli_query($conn, $query_Create_account);
            $_POST["txt_Fname"] = "";
            $_POST["txt_Mname"] = "";
            $_POST["txt_Lname"] = "";
            $_POST["txt_Suffix"] = "";
            $_POST["txt_Gender"] = "";
            $_POST["txt_Birthdate"] = "";
            $_POST["txt_Birthplace"] = "";
            $_POST["txt_Civilstatus"] = "";
            $_POST["txt_Religion"] = "";
            $_POST["txt_Contactnumber"] = "";
            $_POST["txt_Username"] = "";
            $_POST["txt_Password"] = "";
            $_POST["txt_Region"] = "";
            $_POST["txt_Province"] = "";
            $_POST["txt_Citymunicipality"] = "";
            $_POST["txt_Barangay"] = "";
            echo "SUCCESS_USER_REGISTRATION";
        }else{
            echo "ERROR_USER_REGISTRATION"; 
          }
    } 
}else{
    echo "ERROR_FORM_FIELD"; 
}
?>