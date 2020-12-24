<?php
    ob_start();
    include('../../Session.php');
    if(isset($_POST['addaccount'])){
        include('../../Connect.php');
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);
        $name = addslashes($_POST['name']);
        $birthday = addslashes($_POST['birthday']);
        $gender = addslashes($_POST['gender']);
        $address = addslashes($_POST['address']);
        $phonenumber = addslashes($_POST['phonenumber']);
        $email = addslashes($_POST['email']);
        $idgroup = addslashes($_POST['idgroup']);
        if(!$username || !$password || !$name || !$address || !$email ){
            echo "Vui lòng nhập đầy đủ thông tin";  
            exit;
         }
         $query = mysqli_query($conn,"SELECT Username FROM Account WHERE Username = '".$username."'");
         if(mysqli_num_rows($query)!=0){
             echo "Tên đăng nhập đã tồn tại!";
             exit;
         }
         include('../../Model/AccountModel.php');
         $account = new AccountModel($username,$password,$name,$birthday,$gender,$address,$phonenumber,$email,$idgroup);
         $query = "INSERT INTO Account  VALUES('" .$account->Username. "','".$account->Password."','"
         .$account->Name."','".$account->Birthday."','".$account->Gender."','".$account->Address."','"
         .$account->PhoneNumber."','".$account->Email."',".$account->IDGroup.")";
        //  echo $query;
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
    ob_end_flush();
?>