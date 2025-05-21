<?php
require_once __DIR__ . '/../models/UserModel.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $users = UserModel::CheckAccount($username, $password);
        
        if($users == null){

            echo json_encode(['status' => 'incorrect', 'data' => "incorrect"]);
        } else {
            $status = $users['USER_STATUS'];
            $userID = $users['USER_ID'];
            $userFLname = $users['USER_FNAME']. " " .$users['USER_LNAME'];

            if($status == "0"){
                echo json_encode(['status' => 'inactive', 'data' => "inactive"]);
            } else if($status == "1"){

                $_SESSION['USER_CODE'] = $userID;
                $_SESSION['USER_FULLNAME'] = $userFLname;

                echo json_encode(['status' => 'success', 'data' => $users]);
            }
        }
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
    }
}
?>
