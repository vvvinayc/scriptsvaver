<?php
include  'connection.php';

if(isset($_POST['sub']))
    {
        $client=trim(addslashes($_POST['clientname']));
        $rtype=trim(addslashes($_POST['rtype']));
        $script=trim(addslashes($_POST['script']));
        $remarks=trim(addslashes($_POST['remarks']));

        $sql="Insert Into scripts(Client_name,script_type,sql_script,remarks,created_time,is_deleted)
              Values('$client','$rtype','$script','$remarks',now(),0)";
          
        $result = mysqli_query($con,$sql);
        
        if($result){
            //echo "data Inserted";
            header('location:..\index.php');
        }

    else
    {
        die(mysqli_error($con));
    }

    }
    
    $sqlfetch='Select * from scripts  where is_deleted = 0 order by script_code desc';
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