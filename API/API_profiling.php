<?php 
include 'SYSTEM_config.php';
session_start();


$User_ID = "BaRIS_626155ea96f12";
$complete_name = "Luke Toledo";
$birthdate ="11/26/99";
$address = "704 Tabon 3 Kawit Cavite";
$sex = "Male";

// if (isset($_SESSION["barangay_ID"])&& isset($_SESSION["user_ID"])){
//     header("Location: ./index.php");
// }
date_default_timezone_set("Asia/Manila");

if(isset($_POST['txt_Father_Name']) && isset($_POST['txt_Father_Occupation'])
    && isset($_POST['txt_Mother_Name'])&& isset($_POST['txt_Mother_Occupation'])
    && isset($_POST['txt_Address_status'])){
    
   
    $user_ID =  $User_ID;
    $complete_name = $complete_name;
    $birthdate = $birthdate;
    $address = $address;
    $sex = $sex;
    $prof_Father_Name = mysqli_real_escape_string($conn,$_POST['txt_Father_Name']);
    $prof_Father_Occupation = mysqli_real_escape_string($conn,$_POST['txt_Father_Occupation']);
    $prof_Mother_Name = mysqli_real_escape_string($conn,$_POST['txt_Mother_Name']);
    $prof_Mother_Occupation= mysqli_real_escape_string($conn,$_POST['txt_Mother_Occupation']);
    $prof_Address_status = mysqli_real_escape_string($conn,$_POST['txt_Address_status']);
    
        $query_Insert_post = "INSERT INTO barangay_profiling_tbl (user_ID, complete_Name, birthdate, address, sex, father_Name, father_Occu, mother_name, mother_Occu, address_Stats) 
        VALUES ('$user_ID','$complete_name','$birthdate', '$address', '$sex', '$prof_Father_Name', '$prof_Father_Occupation', '$prof_Mother_Name', '$prof_Mother_Occupation', '$prof_Address_status')";

         if($conn->query($query_Insert_post) == TRUE){
            echo "Post uploaded";
        }else{
            echo "error";
            echo $conn->error;
        }
}
?>
