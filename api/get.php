<?php
include_once "db.php";
session_start();

switch ($_GET["mode"]) {
    case 'getBus':
        $stmt = $conn->query("SELECT * FROM `bus`");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($results);
        break;

    case 'geteditbus':
        $id = intval($_GET["id"]);
        $stmt = $conn->prepare("SELECT * FROM `bus` WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo json_encode($result);
        break;
}
?>
