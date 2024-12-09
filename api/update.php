<?php
include_once "db.php";
session_start();

if ($_POST["mode"] === "editbus") {
    $id = intval($_POST["id"]);
    $minute = intval($_POST["minute"]);

    if ($minute > 0) {
        $stmt = $conn->prepare("UPDATE `bus` SET `minute` = :minute WHERE `id` = :id");
        $stmt->bindParam(':minute', $minute, PDO::PARAM_INT);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "success";
        } else {
            echo "fail";
        }
    } else {
        echo "invalid input";
    }
}
?>
