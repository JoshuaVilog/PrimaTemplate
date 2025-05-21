<?php
require_once __DIR__ . '/../../config/db.php';

class RecordModel {
    public static function DisplayRecords() {
        $db = DB::connection1();
        $sql = "SELECT * FROM record";
        $result = $db->query($sql);

        $users = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }

        return $users;
    }

    public static function GetRecord($id){
        $db = DB::connection1();

        $sql = "SELECT * FROM record WHERE RID = $id";
        $result = mysqli_query($db,$sql);

        if(mysqli_num_rows($result) == 0){
            return null;
        } else {
            $row = mysqli_fetch_assoc($result);

            return $row;
        }
    }

    public static function InsertRecord($records){
        $db = DB::connection1();
        $userCode = $_SESSION['USER_CODE'];

        $desc = $records['desc'];

        $sql = "INSERT INTO `record`(
            `RID`,
            `DESCRIPTION`,
            `CREATED_BY`,
        )
        VALUES(
            DEFAULT,
            '$desc',
            '$userCode'
        )";
        return $db->query($sql);
    }


}

?>