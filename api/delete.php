<?php
include_once "db.php";
session_start();

if ($_POST["mode"] === "deletebus") {
    $id = intval($_POST["id"]);

    $stmt = $conn->prepare("DELETE FROM `bus` WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "fail";
    }
}
?>
