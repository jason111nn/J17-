<?php
include_once "db.php";
session_start();


        switch ($_GET["mode"]) {
            case 'getBus':
                $stmt = $conn->query("SELECT * FROM `bus`");
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($results);
                break;
        }

?>
