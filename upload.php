<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <title></title>
  </head>
  <body>

  <?php
include "header.php";

?>

<div class="row">
    <div class="col"></div>
  <div class="col py-5 border mx-3 my-5">
  <form method="post" enctype="multipart/form-data">
    <h2>Post your images here</h2>
    <div class="col border py-4 px-3">
    <input type="file" name="image">
    <input type="submit" name="btn">
    </div>
    
</form>
  </div>
  <div class="col"></div>
</div>

<?php
if (isset($_POST["btn"])) {
$img= $_FILES["image"];  
// print_r($img);
$n= $img["name"];
$temp= $img["tmp_name"];
$folder="images/".$n;
move_uploaded_file($temp,$folder);
include "database.php";
$sql="insert into gallery(image)values('{$n}')";
$result=mysqli_query($conn,$sql);
}
?>

<?php
include "footer.php";

?>

  </body>
</html>