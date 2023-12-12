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
  <div class="col-md-2">

  </div>
  <div class="col-md-8">
<div class="row">



<?php
include "database.php";
$sql="SELECT * FROM gallery";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)> 0)
{
  while($row=mysqli_fetch_array($result))
  {
?>

<img src="images/<?php echo $row['image']?>" alt=""  style="width:250px;margin-top:10px">


<?php
  }
}
else{
  echo "<div class='alert-dengar'>Image Not Found</div>";
}


?>


</div>
  </div>
  <div class="col-md-2">

  </div>
</div>

<?php
include "footer.php";

?>
  </body>
</html>