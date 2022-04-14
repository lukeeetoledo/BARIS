<?php
include 'SYSTEM_config.php';
session_start();

    if(isset($_POST['submit']))
    {
        $imageCount = count($_FILES['image']['name']);
        for($i = 0; $i < $imageCount; $i++){
            $imageName = $_FILES['image']['name'][$i];
            $sql = "INSERT INTO barangay_post_img (post_Image) VALUES ('$imageName')";
            if($conn->query($sql) == TRUE){
                echo "Image uploaded";
            }else{
                echo "error";
                echo $conn->error;
            }
            move_uploaded_file($_FILES['image']['tmp_name'][$i], 'images/' .$imageName);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>

<body>
  <form action ="" method="post" enctype="multipart/form-data">
      <div>
          <input type="file" name ="image[]" class = "form-control" multiple/>
      </div>
      <input type="submit" name ="submit" value="submit">
  </form>
</body>

</html>