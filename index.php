
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\style.css">
    <title>Important Script Savers</title>
  

  


</head>
<?php

?>

<form action="">
<div>
    <button><a href="index.php">HOME</a></button>
    <BUtton><a href=".\Result\result_fetcher.php?clientname='NAFA'">NAFA</BUtton>
    <button><a href=".\Result\result_fetcher.php?clientname='FUSION'">FUSION</a></button>
    <button><a href=".\Result\result_fetcher.php?clientname='SHRAMSARATHI'">SHRAMSARATHI</a></button>
    <button><a href=".\Result\result_fetcher.php?clientname='PAHAL'">PAHAL</a></button>
    <button><a href=".\Result\result_fetcher.php?clientname='OTHERS'">OTHERS</a></button>
</div>
</form>
<br>

<body class="body">  
<div class="split left">


<div class="forms" id="forms">
<form action=".\Crud\inputDataSave.php" method="POST">
<label for="client">Client Name: </label>
<select name="clientname" id="client" >
    <option value="NAFA">NAFA</option>
    <option value="FUSION">FUSION</option>
    <option value="SHRAMSARATHI">SHRAMSARATHI</option>
    <option value="PAHAL">PAHAL</option>
    <option value="SAIJA">SAIJA</option>
    <option value="SAMASTA">SAMASTA</option>
    <option value="KGFS">KGFS</option>
    <option value="CAPITAL">CAPITAL</option>
    <option value="DER">DER</option>
    <option value="OTHERS">OTHERS</option>
</select>


<label for="rtype">Request Type: </label><input type="rtype" name="rtype" id="rtype" placeholder="" size="21" autocomple="off" required>
<label for="remarks">Remarks: </label><input type="text" name="remarks" id="remarks" placeholder="" size="26" autocomple="off">
<br><br>
<label for="script">Paste your Script:</label> <br>
<textarea name="script" id="script" cols="120" rows="25" required></textarea>
<br><br>
<button name="sub"  >Submit</button>
<button><a href="index.php">Reset</a></button>
</form>
</div>
</div>


<Br></Br>

<!----
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
  <?php include 'inputDataSave.php';?> 
</div>
</body>
</html>
-->



