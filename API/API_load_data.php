<?php
   require_once('SYSTEM_config.php');
   session_start();
   if(!isset($_SESSION['user_ID']) && !isset($_SESSION['user_Type']) && !isset($_SESSION['barangay_ID'])){
      header("location:../index.php");
  }

   $barangay_ID = $_SESSION['barangay_ID'];
   $limit = 5;
   $num_rows = 0;
   if (isset($_POST['page_no'])) {
      $page = $_POST['page_no'];
   }else{
      $page = 0;
   }
   $sql = "SELECT * FROM barangay_post_tbl WHERE barangay_ID = '$barangay_ID' LIMIT $page, $limit";
   
   $query = $conn->query($sql);
   if ($query->num_rows > 0) {
   $num_rows = mysqli_num_rows($query);
   $output = "";
   $output .= "<tbody>";
   while ($row = $query->fetch_assoc()) {
         
   $last_id = $row['post_Count'] - 1;
   $output.="<tr>
               <td>{$row["post_ID"]}</td>
               <td>{$row["barangay_ID"]}</td>
               <td>{$row["post_Title"]}</td>
               <td>{$row["post_Text_Content"]}</td>
               <td>{$row["creator_ID"]}</td>
               <td>{$row["post_Creator"]}</td>
               <td>{$row["post_Date"]}</td>
               <td><a class='btn btn-info' href='view_post.php?token={$row["post_ID"]}' target='blank'>View</a>
               <a class='btn btn-danger' href='API/API_deletepost.php?token={$row["post_ID"]}' target='blank'>Delete</td>
             </tr>";
   }
   $output .= "<tbody>";
         
   $output .= "<tbody id='pagination' style='text-align:left'>
                 <tr>
                <td colspan='9'><button class='btn btn-success loadbtn' data-id='{$last_id}'>Load More</button></td>
             </tr>
              </tbody>";
   $output.=$num_rows;
   echo $output;     
   }
?>