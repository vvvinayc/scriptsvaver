

<?php
include 'connection.php';

echo $_GET['scriptid'];

if(isset($_GET['scriptid'])){
    $id=$_GET['scriptid'];

$sql="Update scripts set is_deleted = 1, modified_time = now() where script_code=$id";
$result=mysqli_query($con,$sql);
if($result){
   // echo "delete sucessfully";
   header('location:view_page.php');
}else{
    die(mysqli_error($con));
}
}

?>