<?php
   require_once('SYSTEM_config.php');
   session_start();
   

   $barangay_ID = $_SESSION['barangay_ID'];
   $limit = 5;
   $num_rows = 0;
   if (isset($_POST['page_no'])) {
      $page = $_POST['page_no'];
   }else{
      $page = 0;
   }
   $sql = "SELECT * FROM barangay_profiling_tbl WHERE barangay_ID = '$barangay_ID' LIMIT $page, $limit";
   
   $query = $conn->query($sql);
   if ($query->num_rows > 0) {
   $num_rows = mysqli_num_rows($query);
   $output = "";
   $output .= "<tbody>";
   while ($row = $query->fetch_assoc()) {
         
  
   $output.="<tr>
               <td>{$row["prof_ID"]}</td>
               <td>{$row["prof_Fname"]}</td>
               <td>{$row["prof_Lname"]}</td>
               <td>{$row["prof_Mname"]}</td>
               <td>{$row["prof_Birthdate"]}</td>
               <td>{$row["prof_Sex"]}</td>
               <td>{$row["prof_Address"]}</td>
               <td>{$row["prof_Addressstatus"]}</td>
               <td>{$row["prof_Fathername"]}</td>
               <td>{$row["prof_Fatheroccu"]}</td>
               <td>{$row["prof_Mothername"]}</td>
               <td>{$row["prof_Motheroccu"]}</td>
               <td><button class='btn btn-danger' type='button' style='margin:5px'>Delete</button></td>
             </tr>";
   }
   $output .= "<tbody>";
         
   echo $output;     
   }
?>