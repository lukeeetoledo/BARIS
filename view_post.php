<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/homepage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <title>Homepage</title>
</head>

<body>

  <div class="collection">
    <!-- START -->
    <div id="loadData"></div>
    <!-- END -->
  </div>
</body>
</html>

<script type="text/javascript">
  $(document).ready(function() {
    loadMoreData();

    function loadMoreData(page) {
      $.ajax({
        url: "API/API_get_posts.php",
        type: "POST",
        cache: false,
        data: {
          page_no: page
        },
        success: function(data) {
          if (data) {
            $("#pagination").remove();
            $("#loadData").append(data);
          } else {
            $(".loadbtn").prop("disabled", true);
            $(".loadbtn").html('No more post.');
          }
        }
      });
    }

    $(document).on('click', '.loadbtn', function() {
      $(".loadbtn").html('Loading...');
      var pId = $(this).data("id");
      loadMoreData(pId);
    });
  });
</script>