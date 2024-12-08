<?php
include_once "db.php";
session_start();


        switch ($_GET["mode"]) {
            case 'deletebus':
                $stmt = $conn->query("DELETE FROM `bus` WHERE $_GET['mode']");
                break;
        }
        switch ($_GET["mode"]) {
            case 'deletebus':
                    $id = intval($_GET["id"]); 
                    $stmt = $conn->prepare("DELETE FROM `bus` WHERE id = :id");
                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    echo json_encode(["status" => "success", "message" => "車輛已刪除"]);
                break;
        }
        
?>
