<?php
include_once "db.php";
session_start();


        switch ($_POST["mode"]) {
            case 'deletebus':
                    $id = intval($_POST["id"]); 
                    $stmt = $conn->exec("DELETE FROM `bus` WHERE id = $id");
                break;
        }
        
?>
