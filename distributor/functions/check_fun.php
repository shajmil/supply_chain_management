 <?php
 extract($_POST);

 include('../config/dbconfig.php');
            $sql = "SELECT * FROM distributor where dist_phone = '$num' ";
            $query = mysqli_query($conn,$sql);
echo $sql;
            $results = mysqli_fetch_assoc($query);
if(!empty($results)) {
    print_r($results);
  
if($results['status'] == 0)
{
    header("Location:../index.php?status=pending");
}else if($results['status'] == 1) {
    header("Location:../index.php?status=success");
}

}else{
    header("Location:../index.php?status=notauser");
}

            ?>