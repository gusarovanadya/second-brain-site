<?php
// Файл принимает POST-уведомление от Т-Банка и возвращает OK

$raw = file_get_contents("php://input");

$logDir = __DIR__ . "/logs";
if (!is_dir($logDir)) {
    mkdir($logDir, 0777, true);
}

file_put_contents(
    $logDir . "/tbank_notify.log",
    date("Y-m-d H:i:s") . " | " . $raw . PHP_EOL,
    FILE_APPEND
);

http_response_code(200);
header("Content-Type: text/plain; charset=utf-8");
echo "OK";
