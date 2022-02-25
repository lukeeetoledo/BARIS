<?php 
include 'SYSTEM_config.php';
session_start();

if (isset($_SESSION["user_ID"])) {
    header("Location: home.html");
}

if(isset($_POST['txt_Username']) && isset($_POST['txt_Password'])){
    $user_Name = $_POST['txt_Username'];
    $user_Password = $_POST['txt_Password'];

    $query_CheckUser = "SELECT * FROM user_tbl WHERE user_Name = '$user_Name' AND user_Password = '$user_Password'";
    $query_Result = mysqli_query($conn, $query_CheckUser);

    if(mysqli_num_rows($query_Result) > 0){
        $row_Select = mysqli_fetch_assoc($query_Result);
        $_SESSION["user_ID"] = $row_Select['user_ID'];
        header("Location: home.html");
    }else{
        echo "1";
    }
}
?>