<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
// $mycookie = 'datacenter=cwdc; visitorId=cwdc-A30671a44-471f-41bd-8cad-3daef295e31b; APISID=30d9ceca-eadb-4d16-b481-2b97d5cb5aa2; digital-token=98470088-a850-4964-92b1-10ad70e94557-02-cwdc-ho3859; region=useast1; optimizelyEndUserId=oeu1683558557050r0.0976546555374116; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=67~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=0ad224a7ce787f6ba26a479a0460d2e3; _pxhd=9f90cd42a3c513cd008b13c831a1bc025ebb7d1e43d57404e8de308162168353:b5b76ad6-edb2-11ed-9e5c-706a78416f4a; _gcl_au=1.1.1208556564.1683558815; _gid=GA1.2.2019665117.1683558820; _pxvid=b5b76ad6-edb2-11ed-9e5c-706a78416f4a; pxcts=eaf3899e-edb2-11ed-9342-62436d415a4b; QuantumMetricUserID=0465c6e9c976587d441370d6d5dbb31f; __qca=P0-1150698787-1683558833603; _fbp=fb.1.1683558850982.1778528935; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _uetsid=e8a06340edb211edb381436783c91f7a; _uetvid=e8a0af00edb211eda286b555c1a32b02; _ga=GA1.2.802961379.1683558820; _clck=1tc5h6n|1|fbg|0; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; QuantumMetricSessionID=04067eba6b33e6bced529eb1c2dbd10a; _px2=eyJ1IjoiNDY4ODM3ODAtZWU1MC0xMWVkLTgwNTAtOTU2ZjM3YWMwNmFiIiwidiI6ImI1Yjc2YWQ2LWVkYjItMTFlZC05ZTVjLTcwNmE3ODQxNmY0YSIsInQiOjE2ODM2Mjc2NzI0MTYsImgiOiJhYjk1NmMyMTQ1NTUxNzYwZjk2MzU2NzI4YjUxMDJiY2FiZDczMzc4NDkxZWJmYmNhZDNmZWE0N2VjNjFiOTI0In0=; _gat_UA-6997633-3=1; _clsk=1c0qvum|1683627495638|2|1|s.clarity.ms/collect; _ga_8L27T28KZS=GS1.1.1683626405.3.0.1683627497.60.0.0; RT="z=1&dm=avis.com&si=71f1d09b-b765-4c45-b99b-499a3152df1f&ss=lhg3oini&sl=0&tt=0&bcn=%2F%2F02179919.akstat.io%2F&nu=43hl6rgh&cl=nu1l"';
$mycookie0 = 'datacenter=';
$mycookie1 = '; visitorId=cwdc-A30671a44-471f-41bd-8cad-3daef295e31b; APISID=30d9ceca-eadb-4d16-b481-2b97d5cb5aa2; digital-token=';
$mycookie2 = '; region=useast1; optimizelyEndUserId=oeu1683558557050r0.0976546555374116; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=67~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=0ad224a7ce787f6ba26a479a0460d2e3; _pxhd=';
$mycookie3 = '; _gcl_au=1.1.1208556564.1683558815; _gid=GA1.2.2019665117.1683558820; _pxvid=b5b76ad6-edb2-11ed-9e5c-706a78416f4a; pxcts=eaf3899e-edb2-11ed-9342-62436d415a4b; QuantumMetricUserID=0465c6e9c976587d441370d6d5dbb31f; __qca=P0-1150698787-1683558833603; _fbp=fb.1.1683558850982.1778528935; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _uetsid=e8a06340edb211edb381436783c91f7a; _uetvid=e8a0af00edb211eda286b555c1a32b02; _ga=GA1.2.802961379.1683558820; _clck=1tc5h6n|1|fbg|0; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; QuantumMetricSessionID=04067eba6b33e6bced529eb1c2dbd10a; _px2=eyJ1IjoiNDY4ODM3ODAtZWU1MC0xMWVkLTgwNTAtOTU2ZjM3YWMwNmFiIiwidiI6ImI1Yjc2YWQ2LWVkYjItMTFlZC05ZTVjLTcwNmE3ODQxNmY0YSIsInQiOjE2ODM2Mjc2NzI0MTYsImgiOiJhYjk1NmMyMTQ1NTUxNzYwZjk2MzU2NzI4YjUxMDJiY2FiZDczMzc4NDkxZWJmYmNhZDNmZWE0N2VjNjFiOTI0In0=; _gat_UA-6997633-3=1; _clsk=1c0qvum|1683627495638|2|1|s.clarity.ms/collect; _ga_8L27T28KZS=GS1.1.1683626405.3.0.1683627497.60.0.0; RT="z=1&dm=avis.com&si=71f1d09b-b765-4c45-b99b-499a3152df1f&ss=lhg3oini&sl=0&tt=0&bcn=%2F%2F02179919.akstat.io%2F&nu=43hl6rgh&cl=nu1l"';
$mycookie = 'datacenter=cwdc; visitorId=cwdc-Ac94db29c-abc7-4bf3-9f60-74a979eafc61; APISID=b4931c42-4389-4339-ae1c-89a6afc0376b; digital-token=70c3055b-10ed-484b-99d9-f31b000e710e-02-cwdc-mr3505; JSESSIONID=B6yqHPjb6Msiw9GrX0xMUtp0pA0JH-g55a1P_WYO.w04vprecmapp02; region=useast1; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-wdc|~rv=78~m=avis-webapi-useast1-aws:0|avis-us-wdc:0|~os=7f956ca2417c5e686d715889b6a30f65~id=1e312df8cfef56fa1f1504285848e248; optimizelyEndUserId=oeu1683773164685r0.19588168776604498; _gcl_au=1.1.788350598.1683773173; _pxvid=feb0ace4-efa5-11ed-bacf-747041475867; pxcts=feb0b82c-efa5-11ed-bacf-747041475867; _pxhd=1730f95ba665a218584a8e74bdb9cc48954f65dbe3a47b57ac1d46d109dbe9d1:feb0ace4-efa5-11ed-bacf-747041475867; __qca=P0-1692254646-1683773225048; _gid=GA1.2.1936472578.1683773230; QuantumMetricUserID=97c32b89f1bf1f937dd5899a786ea3b0; _fbp=fb.1.1683773253597.1595548033; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _clck=1z0jjkv|1|fbi|0; __idcontext=eyJjb29raWVJRCI6IjJQZDlJUjZ4c0tzRnpGREVLcGtUanZoSWMwNyIsImRldmljZUlEIjoiMlBkOUlWQVFZS0NVQ1o2bHZiTHc1WlNpQmxWIiwiaXYiOiIiLCJ2IjoiIn0%3D; _clsk=hfdgs7|1683777731461|6|0|p.clarity.ms/collect; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbgRYUA1uwC0fAUJFjOIADQgeMEKWKVa9Ziw0g6AfQDmTcwJQpVMAGYUwAzRcsRb-B+OeuAgC+QA; QuantumMetricSessionID=4ed7986a0d8533677fc5586c4c92d070; _gat_UA-6997633-3=1; _px2=eyJ1IjoiMWRkMDYwNTAtZWZjMy0xMWVkLTk0M2YtZWIyNDhmNTIwOTMxIiwidiI6ImZlYjBhY2U0LWVmYTUtMTFlZC1iYWNmLTc0NzA0MTQ3NTg2NyIsInQiOjE2ODM3ODU5OTMyOTksImgiOiIwNjk0YjY0NzU5MzU2NTI2NzAxZDBhNzRhNjY1NTg2YzUzNWU5M2JkZDY3YmFhZTI3M2RjZGUyNjRmMDk5YzE4In0=; _uetsid=00c08b00efa611ed86029bda4d41b342; _uetvid=00c0b290efa611edaf8437b73980020d; _ga_8L27T28KZS=GS1.1.1683785139.3.1.1683785723.51.0.0; _ga=GA1.2.821710123.1683773181; RT="z=1&dm=avis.com&si=c69add3b-87a3-41a4-8769-134b17b623fa&ss=lhiozrf0&sl=7&tt=2zst&bcn=%2F%2F68794907.akstat.io%2F&obo=1&nu=43hl6rgh&cl=1jww3"';

$digitoken = 'eyJjdHkiOiJKV1QiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiZGlyIn0..kNV_O4GgcaqtN-JK.MHtltSgxYu-vqRjvUHPd4Y9Ni10WuMpXXfbOQB-sEnv6iX_up7fWrVlRP6-OQDpmMnzBxhBhxCgwW_Y9Z4x11_uL7F2lodLU672G8_TKzJWQKLM3n_qR-mtJ2PO03PNB4QwzExug67lZfSEER8FyC5cNoo2iSWbYLPVwbW3kXB7EgTD1LZb2W44ZpU4eSzgvoCDuPYsOGdcEPszegbptYe_53AeztVr9Qgx3OHyEeFVaqH5aaPuNeyzfTPfPjGCm7Tr8BB1X7e9pDl3Al0Y_UFcXH8UYRe2k3CrJwtuLA-Oyc5Z0MmXmNRWZ-PqCDy8YFs-UfQP5BikT38Vwb-tzq3NPFx6ctckTekn9cfU_4szfTHR8YB2ciZxgkySQBr_kywMJRnmCfVvWsGhO3Ii0K8bJus0Aa6dp_iTQdQovZiwUOU-J52SST-3C-EpDC7aIw9Hpels_1H3OQXvVegZSHnm88kqIaE1UHVX8BdjDY9Zio6e1NXzM0AFr6BcifOTgo8HHJKEAj7srVOF7xsWdNUqMV9ZRGpGNU4uBr3dAw6RbdNWXvN-Lv6GMKJnn0XFa4SAZbckvpKg9wag_a8ZDRt2Xf4kfQKBNMcZmuLP-BQE_NNVfrvb2BluMInFko_qrbl5OyhoalXb-us3PnS93bCsFxZHrhjbokwN81Pr74Yf6Y-VioGBr9aSPYL4QZevffZ7N-1kZKe4WdEyBv1nXC_rqIS-DUYnhmjL1pJeqYW5rEvtjlek0tRDL9PcmeXVknvhyZUKqDPzi-xRJnXVAHVBqAkBQfPgKN2vhyyfX98W_ou5DC8GSwdGMLgt1dji_GfAkgofoS0oIJD522BCtRbUI2Ih3H4nFhrKmpnV-Mwed3gaodZEAkRgLL8yKErDe0rygzPGzzMsvZu5X0R8LRaiZT5tZyngPS5VOGkV6AUxjTZp7LIgmKrhbgpIARbekpy8_EbJSqlaUpNnKMSjyQ1zl1X7Xmii46gVmwcjfo4UcU3iGrDpY2jxHPaaapDUaIZVx6lSYnNFu8gbRzDQm2ZqAXJzy2F-y3dgsZKs7vsAMRqZOTaMZKyoNEaa7EDPIgP6fhzBefF2NArcGxdwJgjVmxEKLXY0Prl8qFZj29RmVI3n5-cKuMNNC30qTQl320QpFkPwgk38vh4TAzGAsnIy2I3f9qsEmpnGC00Q3M9lut6uP2RrYkHeaEUv02XqTkWub0wBOHuvbGcRk61uHt01eAUY3xX4ytwbfGQGlVVmKblRqSN1teu9d23mXTWR3IRcU4sL4Q_lNsqbF_GUDNtTef4Cew3QM2j2KiUq1_YpSPwK9o4jUb0fcbOHRvaeqZGkPW4J-wK55n0OLOai1mEx4zmjo3Rh3_UzHQidtsHabP1PAD1HXm9Rz5jtlCVd2FkJiDaNqbf8BPSPThOGYrtGq2w.1d1jTy9kRRVGmtbNhvmg-Q';

// session_start(); 
$day = $_GET['day'];
$days = $_GET['days'];

$orgDate = $day;
$newDate1 = date("m-d-Y", strtotime($orgDate));
$date = str_replace('-', '/', $newDate1);
$newDate = date("m/d/Y", strtotime($date));

$dateVal = $day;
$dropDate = date('m/d/Y', strtotime($dateVal. ' + ' . $days . ' days'));

$add = $_GET['add'];
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://www.avis.com/webapi/reservation/vehicles',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    // CURLOPT_HEADER => 1,
    // CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
        "rqHeader":{"brand":"","locale":"en_US"},
        "nonUSShop":true,
        "pickInfo":"' . $add . '",
        "pickDate":"' . $date .'",
        "pickTime":"12:00 PM",
        "dropInfo":"' . $add . '",
        "dropDate":"' . $dropDate . '",
        "dropTime":"12:00 PM",
        "couponNumber":"",
        "couponInstances":"",
        "couponRateCode":"",
        "discountNumber":"",
        "rateType":"",
        "residency":"US",
        "age":25,
        "wizardNumber":"","lastName":"","userSelectedCurrency":"","selDiscountNum":"","promotionalCoupon":"","preferredCarClass":"","membershipId":"","noMembershipAvailable":false,"corporateBookingType":"","enableStrikethrough":"true","amazonGCPayLaterPercentageVal":"","amazonGCPayNowPercentageVal":"","corporateEmailID":""}',
    CURLOPT_HTTPHEADER => array(
        'bookingType: car',
        'channel: Digital',
        'Content-Type: application/json',
        'deviceType: bigbrowser',
        'password: AVISCOM',
        'userName: AVISCOM',
        'Referer: https://www.avis.com/en/locations/us/fl/clearwater',
        'digital-token: ' . $digitoken,
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36',
        'cookie: ' . $mycookie
    ),
));

$response = curl_exec($curl);
// echo $response;
// $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
// $header = substr($response, 0, $header_size);
curl_close($curl);


// $response = $_GET['response'];
$datar = json_decode($response, false);
$carAmount = count($datar->vehicleSummaryList);
$state = $datar->reservationSummary->pickLoc->address->state;
$city = $datar->reservationSummary->pickLoc->address->city;
$Address = $datar->reservationSummary->pickLoc->address->address1;
$fullAddr = $datar->reservationSummary->pickLoc->address->address1 . " "
            . $datar->reservationSummary->pickLoc->address->city  . " "
            . $datar->reservationSummary->pickLoc->address->state  . " "
            . $datar->reservationSummary->pickLoc->address->zipCode  . " "
            . $datar->reservationSummary->pickLoc->address->country;
$Class = $datar->vehicleSummaryList[0]->carGroup;
$Model = $datar->vehicleSummaryList[0]->makeModel;
$paynow = $datar->vehicleSummaryList[0]->payNowRate->amount . $datar->vehicleSummaryList[0]->payNowRate->currency;
$paylater = $datar->vehicleSummaryList[0]->payLaterRate->amount . $datar->vehicleSummaryList[0]->payLaterRate->currency;
for ($ca=1; $ca < $carAmount; $ca++) {
    if ($datar->vehicleSummaryList[$ca]->carGroup) $Class = $Class . "," . $datar->vehicleSummaryList[$ca]->carGroup;
    else $Class = $Class . "," . " ";
    if ($datar->vehicleSummaryList[$ca]->makeModel) $Model = $Class . "," . $datar->vehicleSummaryList[$ca]->makeModel;
    else $Model = $Class . ", ";
    if ($datar->vehicleSummaryList[$ca]->payNowRate->amount) $paynow = $paynow . "," . $datar->vehicleSummaryList[$ca]->payNowRate->amount . $datar->vehicleSummaryList[$ca]->payNowRate->currency;
    else $paynow = $paynow . ", ";
    if ($datar->vehicleSummaryList[$ca]->payLaterRate->amount) $paylater = $paylater . "," . $datar->vehicleSummaryList[$ca]->payLaterRate->amount . $datar->vehicleSummaryList[$ca]->payLaterRate->currency;
    else $paylater = $paylater . ", ";
}
// echo $response1;
$output = array(
    'PickDate' => $date,
    'DropDate' => $dropDate,
    'LocationCode' => $add,
    'State' => $datar->reservationSummary->pickLoc->address->state,
    'City' => $datar->reservationSummary->pickLoc->address->city,
    'Fulladdress' => $fullAddr,
    'Class' => $Class,
    'Type' => $Model,
    'payNowPrice' => $paynow,
    'payLaterPrice' => $paylater,
    'Link' => $_GET['link'],
    'formDataNameOrder' => '["PickDate","DropDate","LocationCode","State","City","Fulladdress","Class","Type","payNowPrice","payLaterPrice","Link"]',
    'formGoogleSheetName' => 'responses',
    'formGoogleSendEmail' => 'edmonddantes000313@gmail.com',
    'amount' => $carAmount);
echo json_encode($output);

// echo $output;
} else {
    http_response_code(405);
    echo json_encode(array('error' => 'Method not allowed'));
}

?>
