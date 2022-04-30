<!DOCTYPE html>
<html lang="en">
<head>
  <title>load dynamic data load more pagination with PHP and AJAX jQuery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron text-center">
  <h2>Load dynamic data using <span class="text-primary">Load More</span> pagination with PHP and jQuery AJAX</h2>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <table class="table table-striped" id="loadData">
        <thead>
          <tr>
            <th scope="col" width="50">Process ID</th>
            <th scope="col">Requestor ID</th>
            <th scope="col">Residential Status</th>
            <th scope="col">Valid ID#1</th>
            <th scope="col">Valid ID#2</th>
            <th scope="col">Proof of Billing</th>
            <th scope="col">Selfie</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
      loadMoreData();
      function loadMoreData(page){
        $.ajax({
          url : "load_data.php",
          type: "POST",
          cache:false,
          data:{page_no:page},
          success:function(data){
            if (data) {
              $("#pagination").remove();
              $("#loadData").append(data);
            }else{
              $(".loadbtn").prop("disabled", true);
              $(".loadbtn").html('That is All');
            }
          }
        });
      }
      
      $(document).on('click', '.loadbtn', function(){
        $(".loadbtn").html('Loading...');
        var pId = $(this).data("id");
        loadMoreData(pId);
      });
  });
</script>