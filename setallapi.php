<?php
$sheetLink = 'https://script.google.com/macros/s/AKfycbyiwyseLDYzYF9Whh6LTpBKWjn7isiVsFDx0fio0GlnLRsYyS6d-uJyNYtV8fLd6FIb/exec';

header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
$responses = $_GET['response'];
$datas = json_decode($responses);
$num = count($datas);
echo $num;
for ($c=0; $c < $num; $c++) {
    echo $datas[$c];
    // $datar = json_decode($response, false);
    $data = json_decode($datas[$c]);
    $curl1 = curl_init();
    curl_setopt_array($curl1, array(
        CURLOPT_URL => $sheetLink,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data,
        ));
    $response1 = curl_exec($curl1);
    echo $response1;
}
} else {
    http_response_code(405);
    echo json_encode(array('error' => 'Method not allowed'));
}
