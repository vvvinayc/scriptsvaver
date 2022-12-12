<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ShramSarathi SCRIPT</title>
</head>
<body class="body">
<div>
    <button><a href="index.php">HOME</a></button>
    <button><a href="Result_nafa.php">NAFA</a></button>
    <button><a href="Result_fusion.php">FUSION</a></button>
    <button><a href="Result_shramsarati.php">SHRAMSARATHI</a></button>
    <button><a href="Result_pahal.php">PAHAL</a></button>
    <button><a href="Result_others.php">OTHERS</a></button>
</div>
<br>
<div class="table_div">
<table class="table_child">
  <thead>
    <tr>
      <th scope="col">Script_id</th>
      <th scope="col">Client</th>
      <th scope="col">Script_type</th>
      <th class = "script" scope="col">Sql_Script</th>
      <th scope="col">Remarks</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <?php 
  include 'connection.php';
  $Client_name = 'NAFA';
  $sqlfetch= "Select * from scripts  where Client_name = 'SHRAMSARATHI' and is_deleted = 0 order by script_code desc";
  $resultfetch=mysqli_query($con,$sqlfetch);
  if($resultfetch){
     /*  $row=mysqli_fetch_assoc($result);
      echo $row['name'];
      echo $row['email'];
      while($row=mysqli_fetch_assoc($result)){}*/
  
     while($row=mysqli_fetch_assoc($resultfetch)){
          $script_code=$row['script_code'];
          $Client_name=$row['Client_name'];
          $script_type=$row['script_type'];
          $sql_script=$row['sql_script'];
          $remarks=$row['remarks'];
          echo '<tr>
          <th scope="row">'.$script_code.'</th>
          <td>'.$Client_name.'</td>
          <td>'.$script_type.'</td>
          <td>'.$sql_script.'</td>
          <td>'.$remarks.'</td>
          <td>
          <button><a href="update.php?updateid='.$script_code.'">update</a></button>
          <button><a href="delete.php?deleteid='.$script_code.'">Delete</a></button>
          </td>
         
          </tr>';
  }
  }


  
  
  ?> 
</div>
        



</body>
</html>