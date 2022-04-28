<html>  

<head>  

<title> Pagination in PHP </title>  

</head>  

<body>   

<?php  

    include 'API/SYSTEM_config.php';

    // variable to store number of rows per page

    $limit = 5;  

    // query to retrieve all rows from the table barangay_post_tbl

    $getQuery = "select *from barangay_post_tbl";    

    // get the result

    $result = mysqli_query($conn, $getQuery);  

    $total_rows = mysqli_num_rows($result);    

    // get the required number of pages

    $total_pages = ceil ($total_rows / $limit);    

    // update the active page number

    if (!isset ($_GET['page']) ) {  

        $page_number = 1;  

    } else {  

        $page_number = $_GET['page'];  

    }    

    // get the initial page number

    $initial_page = ($page_number-1) * $limit;   

    // get data of selected rows per page    

    $getQuery = "SELECT *FROM barangay_post_tbl LIMIT " . $initial_page . ',' . $limit;  

    $result = mysqli_query($conn, $getQuery);       

    //display the retrieved result on the webpage  

    while ($row = mysqli_fetch_array($result)) {  

        echo $row['post_ID'] . ' ' . $row['post_Title'] . '</br>';  

    }    

    // show page number with link   

    for($page_number = 1; $page_number<= $total_pages; $page_number++) {  

        echo '<a href = "index.php?page=' . $page_number . '">' . $page_number . ' </a>';  

    }    

?>  

</body>  

</html> 