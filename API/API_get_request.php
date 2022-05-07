<?php
   require_once('SYSTEM_config.php');
   session_start();
   if(!isset($_SESSION['user_ID']) && !isset($_SESSION['user_Type']) && !isset($_SESSION['barangay_ID'])){
      header("location:../index.php");
  }

   $barangay_ID = $_SESSION['barangay_ID'];
   $limit = 2;
   $num_rows = 0;
   if (isset($_POST['page_no_support'])) {
      $page = $_POST['page_no_support'];
   }else{
      $page = 0;
   }
   $sql = "SELECT * FROM barangay_support_tbl WHERE barangay_ID = '$barangay_ID' LIMIT $page, $limit";
   
   $query = $conn->query($sql);
   if ($query->num_rows > 0) {
   $num_rows = mysqli_num_rows($query);
   $output = "";
   $output .= "<tbody>";
   while ($row = $query->fetch_assoc()) {
         
   $last_id = $row['request_Count'];
   $output.="<tr>
               <td>{$row["request_ID"]}</td>
               <td>{$row["request_Agenda"]}</td>
               <td>{$row["date_Requested"]}</td>
               <td>{$row["agenda_Date"]}</td>
               <td>{$row["agenda_Due"]}</td>
               <td>{$row["request_Message"]}</td>
               <td><a class='btn btn-success' href='#'>Approve</a>
               <a class='btn btn-danger' href='#'>Decline</td>
             </tr>";
   }
   $output .= "<tbody>";
         
   $output .= "<tbody id='pagination_support' style='text-align:left'>
                 <tr>
                <td colspan='9'><button class='btn btn-success loadbtn_support' data-id='{$last_id}'>Load More</button></td>
             </tr>
              </tbody>";
   $output.=$num_rows;
   echo $output;     
   }
?>