<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/loading.css">
    <title>Loading...</title>
</head>
<body style="background-color:  #bd8565;">
<label class="switch" for="loader">Barangay</label>
<div id="loader"></div>
<script>
const myTimeout = setTimeout(myFunction, 3000);
function myFunction() {
  location.replace("barangay_CreatePost.php")
}
</script>

</body>
</html>