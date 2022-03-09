<?php 
include 'SYSTEM_config.php';
session_start();

if (isset($_SESSION["user_ID"])) {
    header("Location: home.html");
}
if(isset($_POST['user_Fname']) && isset($_POST['user_Mname'])&& isset($_POST['user_Lname'])
    && isset($_POST['user_Suffix'])&& isset($_POST['user_Gender'])&& isset($_POST['user_Birthdate'])
    && isset($_POST['user_Birthplace'])&& isset($_POST['user_Civilstatus'])&& isset($_POST['user_Religion'])
    && isset($_POST['user_Contactnumber'])&& isset($_POST['user_Username'])&& isset($_POST['user_Password'])
    && isset($_POST['user_Region'])&& isset($_POST['user_Province'])&& isset($_POST['user_Citymunicipality'])
    && isset($_POST['user_Barangay'])){

    $user_Fname = $_POST['user_Fname'];
    $user_Mname = $_POST['user_Mname'];
    $user_Lname = $_POST['user_Lname'];
    $user_Suffix = $_POST['user_Suffix'];
    $user_Gender = $_POST['user_Gender'];
    $user_Birthdate = $_POST['user_Birthdate'];
    $user_Birthplace= $_POST['user_Birthplace'];
    $user_Civilstatus = $_POST['user_Civilstatus'];
    $user_Religion= $_POST['user_Religion'];
    $user_Contactnumber= $_POST['user_Contactnumber'];
    $user_Username = $_POST['user_Username'];
    $user_Password = $_POST['user_Password'];
    $user_Region = $_POST['user_Region'];
    $user_Province = $_POST['user_Province'];
    $user_Citymunicipality = $_POST['user_Citymunicipality'];
    $user_Barangay = $_POST['user_Barangay'];
    }
    else{
        $query_Insertuser = "INSERT INTO barangay_user_tbl (user_Fname, user_Mname, user_Lname, user_Suffix, user_Gender, user_Birthdate, user_Birthplace, user_Civilstatus, user_Religion, user_Contactnumber, 
        user_Username, user_Password, user_Region, user_Province, user_Citymunicipality, user_Barangay) 
        VALUES ('$user_Fname', '$user_Mname', '$user_Lname', '$user_Suffix', '$user_Gender', '$user_Birthdate','$user_Birthplace','$user_Civilstatus','$user_Religion','$user_Contactnumber',
        '$user_Username','$user_Password','$user_Region','$user_Province','$user_Citymunicipality','$user_Barangay')";

    $query_Result = mysqli_query($conn, $query_Insertuser);
    if ($query_Result) {
        $_POST["user_Fname"] = "";
        $_POST["user_Mname"] = "";
        $_POST["user_Lname"] = "";
        $_POST["user_Suffix"] = "";
        $_POST["user_Gender"] = "";
        $_POST["user_Birthdate"] = "";
        $_POST["user_Birthplace"] = "";
        $_POST["user_Civilstatus"] = "";
        $_POST["user_Religion"] = "";
        $_POST["user_Contactnumber"] = "";
        $_POST["user_Username"] = "";
        $_POST["user_Password"] = "";
        $_POST["user_Region"] = "";
        $_POST["user_Province"] = "";
        $_POST["user_Citymunicipality"] = "";
        $_POST["user_Barangay"] = "";
        echo "<script>alert('User registered.');</script>";
    }else{
        echo "<script>alert('User registration failed');</script>";
       
      }
}
?>