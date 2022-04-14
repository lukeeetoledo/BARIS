<?php 
include 'SYSTEM_config.php';
session_start();

if (isset($_SESSION["barangay_ID"])&& isset($_SESSION["user_ID"])){
    header("Location: index.php");
}
date_default_timezone_set("Asia/Manila");

if(isset($_POST['txt_Title']) && isset($_POST['txt_Content'])&& isset($_FILES['txt_Media'])
    && isset($_POST['txt_Creator'])&& isset($_POST['txt_type'])){
    
    $post_ID = uniqid('BaRISPost_');
    $barangay_ID =  $_SESSION['barangay_ID'];
    $user_ID =  $_SESSION['user_ID'];
    $post_Title = mysqli_real_escape_string($conn,$_POST['txt_Title']);
    $post_Content = mysqli_real_escape_string($conn,$_POST['txt_Content']);
    $post_Creator = mysqli_real_escape_string($conn,$_POST['txt_Creator']);
    $post_Date = mysqli_real_escape_string($conn, date("Y-m-d  [h:i A]"));
    $post_Type = mysqli_real_escape_string($conn,$_POST['txt_type']);

        $query_Insert_post = "INSERT INTO barangay_post_tbl (post_ID, barangay_ID, user_ID, post_Title, post_Content, post_Creator, post_Date, post_Type) 
        VALUES ('$post_ID','$barangay_ID','$user_ID', '$post_Title', '$post_Content', '$post_Creator', '$post_Date', '$post_Type')";

         if (!$conn->query($query_Insert_post))  {
              //echo $conn->error;
         } else {
            //echo $post_ID;
             echo "Post Uploaded!";
            $result = mysqli_query($conn, $query_Insert_post);
         }

//test
//echo $post_ID . $post_Title . " " . $post_Content . " " . $post_Media . " " .$post_Creator . " " .$post_Date . " " .$post_Type;
}
?>
