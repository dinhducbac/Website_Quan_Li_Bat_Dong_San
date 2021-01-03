<?php
      
      include('../../Connect.php');
      $query = mysqli_query($conn,"SELECT * FROM GroupCatetory");
      $sl = mysqli_num_rows($query);
      while($row = mysqli_fetch_array($query)){?>
        <tr>
            <td><?php echo $row['GroupCateID']?></td>
            <td><?php echo $row['GroupCateName']?></td>
          
        </tr>
<?php } ?>