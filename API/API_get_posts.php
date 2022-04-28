<?php 
// include 'SYSTEM_sessions.php';
include 'SYSTEM_config.php';

$barangay_ID = '54';
$limit = 2; 
$data = "";
$query_Get_posts1 = "SELECT * FROM barangay_post_tbl WHERE barangay_ID = '$barangay_ID' ";
$result_Get_posts1 = mysqli_query($conn,$query_Get_posts1);


if(mysqli_num_rows($result_Get_posts1) > 0){
    if (isset ($_POST['page_no']) ) {  
        $page = $_POST['page_no']; 
    } else {  
        $page = 0;
    }    
    $query_Get_posts2 = "SELECT * FROM barangay_post_tbl WHERE barangay_ID = '$barangay_ID' LIMIT $page, $limit";
    $result_Get_posts2 = mysqli_query($conn,$query_Get_posts2);
    if($result_Get_posts2){
        while ($row = mysqli_fetch_assoc($result_Get_posts2)) {
            $post_ID = $row['post_ID'];
            $last_Post = $row['post_Count'];
            $indicator = "";
            $items = "";
    
            if(!$row['post_Media_Status']=="0"){
                $query_Get_media = "SELECT * FROM barangay_post_media WHERE post_ID = '$post_ID'";
                $result_Get_media = mysqli_query($conn,$query_Get_media);
                $i = 0;
                while ($row_Get_media = mysqli_fetch_assoc($result_Get_media)){
                    $media = "";
                    if($i == 0){
                        $media_File_path = $row_Get_media['post_Media'];
                        $media_ID = $row_Get_media['media_ID'];
                        $extension = pathinfo($media_File_path, PATHINFO_EXTENSION);
                        $extension = strtolower($extension);
                        if($extension == 'jpeg' || $extension == 'jpg' || $extension == 'png'){
                            $media .= '<img src="'.$media_File_path.'" alt="'.$media_ID.'">';
                        }else if($extension == 'mp4' || $extension == 'mkv'){
                             $media = ' <center>
                             <video controls>
                                 <source src="'.$media_File_path.'" type="video/'.$extension.'">
                                 Our website does not support this type of file.
                                 Try [mp4,mkv].
                             </video>
                         </center>';
                        }
                        $indicator .= '<li data-target="#myCarousel" data-slide-to="' . $i . '" class="active"></li>';
                        $items .=   '<div class="item active">
                                    '.$media.'
                                    </div>';
                    }else{
                        $media_File_path = $row_Get_media['post_Media'];
                        $media_ID = $row_Get_media['media_ID'];
                        $extension = pathinfo($media_File_path, PATHINFO_EXTENSION);
                        $extension = strtolower($extension);
                        if($extension == 'jpeg' || $extension == 'jpg' || $extension == 'png'){
                            $media .= '<img src="'.$media_File_path.'" alt="'.$media_ID.'">';
                        }else if($extension == 'mp4' || $extension == 'mkv'){
                             $media = ' <center>
                             <video controls>
                                 <source src="'.$media_File_path.'" type="video/'.$extension.'">
                                 Our website does not support this type of file.
                                 Try [mp4,mkv].
                             </video>
                         </center>';
                        }
                        $indicator .= '<li data-target="#'.$post_ID.'" data-slide-to="'.$i.'"></li>';
                        $items .=  '<div class="item">
                        '.$media.'
                        </div>';
                    }    
                    $i++;  
                }
            }
            $data .='<div class="card">
                <div id="date">'.$row['post_Date'].'</div>
                <div id="name">'.$row['post_Creator'].' <span style="color: green;">■</span></div>
                <hr>
                <div id="title">'.$row['post_Title'].'</div>
                <hr>
                <div style="border:solid 1px white; padding: 8px; border-radius:5px">
                <p>'.$row['post_Text_content'].'</p>
                </div><br>
                <div id="'.$post_ID.'" class="carousel" data-interval="false">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">'.$indicator.'</ol>
    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" style="border-radius:5px">
                        '.$items.'
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#'.$post_ID.'" data-slide="prev" style=" height:30%; margin:auto">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#'.$post_ID.'" data-slide="next" style=" height:30%; margin:auto">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <!-- <span class="sr-only">Next</span> -->
                        </a>
                    </div>
                </div>
            </div>';
        }
        if(isset($last_Post)){
            $data .= "<div id='pagination'><button class='btn btn-success loadbtn' data-id='{$last_Post}' style='width:100%; background-color: #bd8565 !important; border:solid 1px #659DBD !important'>View More</button></div>";
        }     
        echo $data;
    }
}else{
    echo "div class='btn btn-success info' style='width:100%'>No post yet in this barangay.</div>";
}
?>