<?php
    include("../dbFunction/dbConnection.php");

    $signupName = $_POST['name'];
    $signupWalletAddress = $_POST['wallet'];
    $sigiupEmail = $_POST['email'];
    $signupPassword = $_POST['passwd'];
   
    // Select Duplicate Data
    $select_user = "SELECT * FROM novau_login WHERE wallet_address='$signupWalletAddress'";
    $query_select = mysqli_query($dbConn, $select_user);
    $num_row = mysqli_num_rows($query_select);
    if($num_row == 1){
        $message =  ["message" => "Record already Exist", "status" => false];
    }
    else{
        
        $insert_data = "INSERT INTO novau_login(user_name, wallet_address, email_address, user_pass) VALUES('$signupName', '$signupWalletAddress' ,'$sigiupEmail', '$signupPassword')";
        $query_insert = mysqli_query($dbConn, $insert_data);
        if($query_insert){
            $message =  ["message" => "Record Saved", "status" => true];
        }
        else{
            $message =  ["message" => "Record Not Saved", "status" => false];
        }
    }

    echo json_encode($message);
    
?>