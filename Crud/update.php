
<?php
include 'connection.php';
$id=$_GET['scriptid'];
$sql="select * from scripts where script_code=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$script_code=$row['script_code'];
$Client_name1=$row['Client_name'];
$script_type=$row['script_type'];
$sql_script=$row['sql_script'];
$remarks=$row['remarks'];


if(isset($_POST['sub1']))
    {
    $Client_name=trim(addslashes($_POST['client']));
    $script_type=trim(addslashes($_POST['rtype']));
    $sql_script=trim(addslashes($_POST['script']));
    $remarks=trim(addslashes($_POST['remarks']));


$sql="Update scripts set script_type=' $script_type',sql_script='$sql_script',remarks='$remarks',modified_time=now()
where script_code=$id";
$result=mysqli_query($con,$sql); 
if($result){
    //echo "Data Inserted Successfully";
   header('location:..\index.php');

}
else{
    die(mysqli_error($con));
} 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Important Script Savers</title>

</head>
<body class="body">  
<form action="">
<div>
    <button><a href="..\index.php">HOME</a></button>
    <BUtton><a href="..\Result\result_fetcher.php?clientname='NAFA'">NAFA</BUtton>
    <button><a href="..\Result\result_fetcher.php?clientname='FUSION'">FUSION</a></button>
    <button><a href="..\Result\result_fetcher.php?clientname='SHRAMSARATHI'">SHRAMSARATHI</a></button>
    <button><a href="..\Result\result_fetcher.php?clientname='PAHAL'">PAHAL</a></button>
    <button><a href="..\Result\result_fetcher.php?clientname=OTHERS">OTHERS</a></button>
    <?php
echo
    '<button><a href="update.php?scriptid='.$script_code.'">UPDATE</a></button>
    <button><a href="delete.php?scriptid='.$script_code.'">DELETE</a></button>';
?>
  </div>
</form>


<br>

<div class="split left" >
<div id="forms">
<form action="" method="POST">
<label for="client">Client Name: </label><input type="text" name="client" id="client" size="22" 
placeholder="Client Name" autocomple="on" disabled value="<?php echo  $Client_name1?>">
<label for="rtype">Request Type: </label><input type="rtype" name="rtype" id="rtype" placeholder="" size="21" autocomple="off" required
value="<?php echo  $script_type?>">
<label for="remarks">Remarks: </label><input type="text" name="remarks" id="remarks" placeholder="" size="26" autocomple="off"
value="<?php echo $remarks?>">
<br><br>
<label for="script">Modify your Script:</label> <br>
<textarea name="script"  id="script" cols="120" rows="25" required >
<?php echo $sql_script?>
</textarea>
<br><br>
<button name="sub1"  >Submit</button>
<button><a href="..\index.php">Exit to home page</a></button>
</form>
</div>
</div>


<Br></Br>
<!--
<div class="split right">
<div id="table">
<table class="table" >
  <thead>
    <tr >
      <th scope="col">Script_id</th>
      <th scope="col">Client</th>
      <th scope="col">Script_type</th>
      <th scope="col">Sql_Script</th>
      <th scope="col">Remarks</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <?php include 'inputDataSave.php';?> 
</div>
</div>
-->
</body>
</html>
