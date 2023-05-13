<?php
$sheetLink = 'https://script.google.com/macros/s/AKfycbyfytZ8d_3FIE_-TMrJBiZUY6qaHLshfyLE2YwaPYnbvFKirzaoObHpxtW4OaP7RV0/exec';

header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
$response = $_GET['response'];
$datar = json_decode($response, false);
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
    CURLOPT_POSTFIELDS => $datar,
    ));
$response1 = curl_exec($curl1);
echo $response1;
} else {
    http_response_code(405);
    echo json_encode(array('error' => 'Method not allowed'));
}
