<?php
      
      include('../../Connect.php');
      $query = mysqli_query($conn,"SELECT * FROM Account");
      $sl = mysqli_num_rows($query);
      while($row = mysqli_fetch_array($query)){?>
        <tr>
            <td><?php echo $row['Username']?></td>
            <td><?php echo $row['Password']?></td>
            <td><?php echo $row['Name']?></td>
            <td><?php echo $row['BirthDay']?></td>
            <td><?php echo $row['Gender']?></td>
            <td><?php echo $row['Address']?></td>
            <td><?php echo $row['PhoneNumber']?></td>
            <td><?php echo $row['Email']?></td>
            <td><?php echo $row['IDGroup']?></td>
        </tr>
<?php } ?>
