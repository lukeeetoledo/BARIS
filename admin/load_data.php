<?php
   
   // Include the database configuration file
   require_once('SYSTEM_config.php');
   $limit = 5;
   $num_rows = 0;
   if (isset($_POST['page_no'])) {
      $page = $_POST['page_no'];
   }else{
      $page = 0;
   }
   $sql = "SELECT * FROM system_brgy_registration_tbl LIMIT $page, $limit";
   
   $query = $conn->query($sql);
   if ($query->num_rows > 0) {
   $num_rows = mysqli_num_rows($query);
   $output = "";
   $output .= "<tbody>";
   while ($row = $query->fetch_assoc()) {
         
   $last_id = $row['transac_Count'];
   $output.="<tr>
               <td>{$row["process_ID"]}</td>
               <td><a href='../view_profile.php?token={$row["requestor_ID"]}' target='blank'>{$row["requestor_ID"]}</a></td>
               <td>{$row["requestor_Position"]}</td>
               <td>{$row["requestor_Res_Stat"]}</td>
               <td><a href='../{$row["valid_ID_1"]}' target = 'blank'>ID#1</a></td>
               <td><a href='../{$row["valid_ID_2"]}' target = 'blank'>ID#2</a></td>
               <td><a href='../{$row["address_Proof"]}' target = 'blank'>Bill</a></td>
               <td><a href='../{$row["requestor_Image"]}' target = 'blank'>Requestor</a></td>
               <td><button class='btn btn-success' type='button 'style='margin:5px'>Accept</button><button class='btn btn-danger' type='button' style='margin:5px'>Reject</button></td>
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