<?php
$conn=mysqli_connect("localhost","root","root","husain");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if($_FILES['file']['name'] != ''){
    $test = explode('.', $_FILES['file']['name']);
    $extension = end($test);    
    $name = rand(100,999).'.'.$extension;

    $location = 'uploads/'.$name;
    $tar_file=move_uploaded_file($_FILES['file']['tmp_name'], $location);
    echo '<img src="'.$location.'" height="100" width="100" />';
} 

$sql="insert into persons set image='".$location."' ";
    $conn->query($sql);
    if($conn){
    	//echo "uploaded success"."<br>";
    } else { 
    	 echo ''.mysql_error();
    }
?>

</body>
</html>