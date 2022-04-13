<?php 
include 'SYSTEM_config.php';
session_start();
$user_ID = $_SESSION['user_ID'];

// USER_INFO
$full_Name = "";
$f_Name = "";
$m_Name = "";
$l_Name = "";
$suffix = "";
$c_number = "";
$email = "";
$region = "";
$province = "";
$city_Mun = "";
$barangay = "";
$birthdate = "";
$sex = "";
$user_Name = "";

$query_Get_info = "SELECT * FROM barangay_users_tbl WHERE user_ID = '$user_ID'";
$query_Get_contact = "SELECT * FROM system_accounts_tbl WHERE user_ID = '$user_ID'";
$result_Get_info = mysqli_query($conn, $query_Get_info);
$result_Get_contact = mysqli_query($conn, $query_Get_contact);

if(mysqli_num_rows($result_Get_info) > 0 && mysqli_num_rows($result_Get_contact) > 0){
    $rows_Get_info = mysqli_fetch_assoc($result_Get_info);
    $rows_Get_contact = mysqli_fetch_assoc($result_Get_contact);
    $f_Name = $rows_Get_info['user_Fname'];
    $m_Name = $rows_Get_info['user_Mname'];
    $l_Name = $rows_Get_info['user_Lname'];
    $suffix = $rows_Get_info['user_Suffix'];
    $full_Name = $f_Name.' '.$m_Name.' '.$l_Name.' '.$suffix.'';
    $c_number = $rows_Get_contact['account_Contactnumber'];
    $email = $rows_Get_contact['account_Email'];
    $region = $rows_Get_info['user_Region'];
    $province = $rows_Get_info['user_Province'];
    $city_Mun = $rows_Get_info['user_Citymunicipality'];
    $barangay = $rows_Get_info['user_Barangay'];
    $birthdate = $rows_Get_info['user_Birthdate'];
    $sex = $rows_Get_info['user_Gender'];
    $user_Name = $rows_Get_contact['account_Username'];
}else{
    echo 'ERROR_INFO_NOT_FOUND';
}

?>