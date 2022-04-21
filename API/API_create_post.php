<?php 
include 'SYSTEM_config.php';
session_start();

$barangayID = "15";
$User_ID = "BaRIS_626155ea96f12";

// if (isset($_SESSION["barangay_ID"])&& isset($_SESSION["user_ID"])){
//     header("Location: ./index.php");
// }
date_default_timezone_set("Asia/Manila");

if(isset($_POST['txt_Title']) && isset($_POST['txt_Text_Content'])
    && isset($_POST['txt_Creator'])&& isset($_POST['txt_Type'])){
    
    $post_ID = uniqid('BaRISPost_');
    $post_Media_Stats = 0;
    $barangay_ID =  $barangayID;
    $user_ID =  $User_ID;
    $post_Title = mysqli_real_escape_string($conn,$_POST['txt_Title']);
    $post_Text_Content = mysqli_real_escape_string($conn,$_POST['txt_Text_Content']);
    $post_Creator = mysqli_real_escape_string($conn,$_POST['txt_Creator']);
    $post_Date = mysqli_real_escape_string($conn, date("Y-m-d  [h:i A]"));
    $post_Type = mysqli_real_escape_string($conn,$_POST['txt_Type']);
    
    if(isset($_FILES['txt_Image']['tmp_name']))
        {
            $post_Media_Stats = 1;
            $imageCount = count($_FILES['txt_Image']['name']);
            for($i = 0; $i < $imageCount; $i++){
                $media_ID = uniqid('BaRISMedia_');
                $imageName = $_FILES['txt_Image']['name'][$i];
                $sql = "INSERT INTO barangay_post_media (post_ID, media_ID, post_Media) VALUES ('$post_ID','$media_ID','$imageName')";
                if($conn->query($sql) == TRUE){
                    //echo "Image uploaded";
                }else{
                    echo "error";
                    echo $conn->error;
                }
                move_uploaded_file($_FILES['txt_Image']['tmp_name'][$i], './images' .$imageName);
            }      
        }
        $query_Insert_post = "INSERT INTO barangay_post_tbl (post_ID, barangay_ID, user_ID, post_Title, post_Text_Content, post_Creator, post_Date, post_Type, post_Media_Status) 
        VALUES ('$post_ID','$barangay_ID','$user_ID', '$post_Title', '$post_Text_Content', '$post_Creator', '$post_Date', '$post_Type', '$post_Media_Stats')";

         if($conn->query($query_Insert_post) == TRUE){
            echo "Post uploaded";
        }else{
            echo "error";
            echo $conn->error;
        }
}
?>
