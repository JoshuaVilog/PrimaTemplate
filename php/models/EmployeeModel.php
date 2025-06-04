<?php
require_once __DIR__ . '/../../config/db.php';


class EmployeeModel {

    public static function CheckAccount($username, $password){
        $db = DB::connectionHRIS();

        //$password = md5($password);

        $sql = "SELECT EMPLOYEE_ID, EMPLOYEE_NAME, RFID, PASSWORD, ACTIVE, ROLE FROM 1_employee_masterlist_tb WHERE RFID = '$username'";
        $result = mysqli_query($db,$sql);

        if(mysqli_num_rows($result) == 0){
            return null;
        } else {
            $row = mysqli_fetch_assoc($result);

            if (password_verify($password, $row['PASSWORD'])) {
                return $row;
            } else {
                echo null;
            }
        }
    }

}