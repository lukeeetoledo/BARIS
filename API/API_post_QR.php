<?php 
include 'SYSTEM_config.php';
session_start();

if(!isset($_SESSION['user_ID']) && !isset($_SESSION['user_Type']) && !isset($_SESSION['barangay_ID'])){
    header("location:../index.php");
  }

$barangayID = $_SESSION['barangay_ID'];
$user_ID = $_SESSION['user_ID'];

if(isset($_POST['submit_qr'])){
    if(is_uploaded_file($_FILES['payment_media']['tmp_name'][0])){
        $imageCount = count($_FILES['payment_media']['name']);
        $post_Media_Stats = 1;
        for($i = 0; $i < $imageCount; $i++){
            $imageName = $_FILES['payment_media']['name'][$i];
            $path = 'saved_files/QR/'.$imageName;
            $sql = "INSERT INTO barangay_payment_settings_tbl (barangay_id, payment_media) VALUES ('$barangayID','$path')";
            if($conn->query($sql) == TRUE){
                
            }else{
                echo "error";
                echo $conn->error;
            }
            move_uploaded_file($_FILES['payment_media']['tmp_name'][$i], '../saved_files/QR/' .$imageName);
            echo '<script>alert("Photo Uploaded"); window.location.href="../barangay_settings.php";</script>';
        }      
    }
}



?>