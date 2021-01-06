<?php
    ob_start();
    include('../../Session.php');
    include('../../Connect.php');
    if(isset($_POST['addcatetory'])){
        $catename = addslashes($_POST['CateName']);
        $cateaddress = addslashes($_POST['CateAddress']);
        $catecontent = addslashes($_POST['CateContent']);
        $caterent = addslashes($_POST['CateRent']);
        $catestatus = addslashes($_POST['CateStatus']);
        $groupcateid = addslashes($_POST['GroupCateID']);
        if(!$catename || !$cateaddress || !$catecontent || !$caterent){
            echo "Vui lòng nhập đầy đủ thông tin";  
            exit;
         }
         $query = "SELECT CateID FROM Catetory ORDER BY CateID DESC LIMIT 1";
         $result = mysqli_query($conn,$query);
         $row = mysqli_fetch_array($result);
         include('../../Model/CatetoryModel.php');
         $catetory = new CatetoryModel($row['CateID']+1, $catename,$cateaddress,$catecontent,$caterent,$catestatus,$groupcateid);
         $query = "INSERT INTO Catetory (CateName,CateAddress,CateContent,CateRent,CateStatus,GroupCateID)
            VALUES('".$catetory->CateName."','".$catetory->CateAddress."','".$catetory->CateContent."','".$catetory->CateRent."','".$catetory->CateStatus."','".$catetory->GroupCateID."')";
         echo $query;
         $result = mysqli_query($conn,$query); 
         
        //  if (headers_sent()) {
        //     die("Redirect failed!");
        // }
        // else{
        //     header('Location:pages/admin/Account.php',true);
        //     exit();
        // }        
         //header("Refresh:0");
    }
    if(isset($_POST['editaccount'])){
        $username = addslashes($_POST['editusername']);
        $password = addslashes($_POST['editpassword']);
        $name = addslashes($_POST['editname']);
        $birthday = addslashes($_POST['editbirthday']);
        $gender = addslashes($_POST['editgender']);
        $address = addslashes($_POST['editaddress']);
        $phonenumber = addslashes($_POST['editphonenumber']);
        $email = addslashes($_POST['editemail']);
        $idgroup = addslashes($_POST['editidgroup']);
        if(!$username || !$password || !$name || !$address || !$email ){
            echo "Vui lòng nhập đầy đủ thông tin";  
            exit;
         }
         include('../../Model/AccountModel.php');
         $account = new AccountModel($username,$password,$name,$birthday,$gender,$address,$phonenumber,$email,$idgroup);
         $query = "UPDATE Account SET  Password = '".$account->Password."', Name = '"
         .$account->Name."', BirthDay = '".$account->Birthday."',Gender='".$account->Gender."',Address='".$account->Address.
         "',PhoneNumber = '".$account->PhoneNumber."', Email = '".$account->Email."',IDGroup = '".$account->IDGroup."' WHERE  Username = '".$account->Username."'";

         $result = mysqli_query($conn,$query); 
         if($result){
             echo "Sửa thành công";
         }
         else{
             echo "Sửa không thành công";
         }
        //  if (headers_sent()) {
        //     die("Redirect failed!");
        // }
        // else{
        //     header('Location:pages/admin/Account.php',true);
        //     exit();
        // }        
         //header("Refresh:0");
    }
    if(isset($_POST['deleteaccount'])){
        $username = addslashes($_POST['deleteusername']);
        $query = "DELETE FROM Account WHERE Username = '".$username."'";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "Xóa thành công";
        }
        else{
            echo "Xóa không thành công";
        }
    }
?>