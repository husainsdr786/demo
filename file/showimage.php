<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="utf-8">
  <title>Ajax Image Upload</title>
  <link rel="stylesheet" href="dist/css/lightbox.css">
  <link rel="stylesheet" href="dist/css/screen.css">
  <link rel="stylesheet" href="dist/css/lightbox.min.css">
 
</head>
<body>

<?php
$conn=mysqli_connect("localhost","root","root","husain");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$q = "select * from persons";
$qq = mysqli_query($conn,$q);
while($qqr=mysqli_fetch_array($qq)){ ?>

<a class="example-image-link" href="<?php echo $qqr['image']; ?>" data-lightbox="example-2" data-title="Optional caption.">
<img class="example-image" src="hide.png" alt="image-1"/></a>

<?php } ?>


<script src="dist/js/lightbox-plus-jquery.min.js"></script>
</body>
</html>
