<?php
// 設定 CORS 標頭以允許跨來源請求（開發用途）
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

header("Access-Control-Allow-Headers: Content-Type");

// 獲取前端傳來的 JSON 資料
$data = json_decode(file_get_contents("php://input"), true);

// 固定帳號與密碼
$correctUsername = "admin";
$correctPassword = "1234";

// 驗證帳號和密碼
if ($data['username'] === $correctUsername && $data['password'] === $correctPassword) {
    echo json_encode([
        "success" => true,
        "message" => "登入成功！"
    ]);
} else {
    echo json_encode([
        "success" => false,
        "message" => "帳號或密碼錯誤！"
    ]);
}