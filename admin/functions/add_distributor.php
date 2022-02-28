<?php

include('../config/dbconfig.php');
extract($_POST);
$sql=" INSERT INTO distributor( dist_name,dist_email,dist_phone,dist_address,dist_photo) VALUES ('$dist_name','$dist_email','$dist_phone','$dist_address','$dist_photo')";
if(mysqli_query($conn,$sql))
{
    // echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    header("Location:../../index.php");    ?>
<script>
alert("sucess");
</script>
<?php
}
else {
echo "error";
}

?>