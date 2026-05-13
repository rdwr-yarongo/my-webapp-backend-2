<?php
header('Content-Type: application/json; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');

$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$requestUri = $_SERVER['REQUEST_URI'] ?? '/browser_probe.php';

$requestHeaders = array();
foreach ($_SERVER as $name => $value) {
    if (strpos($name, 'HTTP_') === 0) {
        $headerName = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($name, 5)))));
        $requestHeaders[$headerName] = $value;
    }
}

echo json_encode(array(
    'request_url' => $scheme . '://' . $host . $requestUri,
    'request_method' => $_SERVER['REQUEST_METHOD'] ?? 'GET',
    'remote_addr' => $_SERVER['REMOTE_ADDR'] ?? '',
    'remote_port' => $_SERVER['REMOTE_PORT'] ?? '',
    'request_uri' => $requestUri,
    'server_protocol' => $_SERVER['SERVER_PROTOCOL'] ?? '',
    'request_headers' => $requestHeaders
));
