<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
// $mycookie = 'datacenter=cwdc; visitorId=cwdc-A30671a44-471f-41bd-8cad-3daef295e31b; APISID=30d9ceca-eadb-4d16-b481-2b97d5cb5aa2; digital-token=98470088-a850-4964-92b1-10ad70e94557-02-cwdc-ho3859; region=useast1; optimizelyEndUserId=oeu1683558557050r0.0976546555374116; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=67~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=0ad224a7ce787f6ba26a479a0460d2e3; _pxhd=9f90cd42a3c513cd008b13c831a1bc025ebb7d1e43d57404e8de308162168353:b5b76ad6-edb2-11ed-9e5c-706a78416f4a; _gcl_au=1.1.1208556564.1683558815; _gid=GA1.2.2019665117.1683558820; _pxvid=b5b76ad6-edb2-11ed-9e5c-706a78416f4a; pxcts=eaf3899e-edb2-11ed-9342-62436d415a4b; QuantumMetricUserID=0465c6e9c976587d441370d6d5dbb31f; __qca=P0-1150698787-1683558833603; _fbp=fb.1.1683558850982.1778528935; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _uetsid=e8a06340edb211edb381436783c91f7a; _uetvid=e8a0af00edb211eda286b555c1a32b02; _ga=GA1.2.802961379.1683558820; _clck=1tc5h6n|1|fbg|0; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; QuantumMetricSessionID=04067eba6b33e6bced529eb1c2dbd10a; _px2=eyJ1IjoiNDY4ODM3ODAtZWU1MC0xMWVkLTgwNTAtOTU2ZjM3YWMwNmFiIiwidiI6ImI1Yjc2YWQ2LWVkYjItMTFlZC05ZTVjLTcwNmE3ODQxNmY0YSIsInQiOjE2ODM2Mjc2NzI0MTYsImgiOiJhYjk1NmMyMTQ1NTUxNzYwZjk2MzU2NzI4YjUxMDJiY2FiZDczMzc4NDkxZWJmYmNhZDNmZWE0N2VjNjFiOTI0In0=; _gat_UA-6997633-3=1; _clsk=1c0qvum|1683627495638|2|1|s.clarity.ms/collect; _ga_8L27T28KZS=GS1.1.1683626405.3.0.1683627497.60.0.0; RT="z=1&dm=avis.com&si=71f1d09b-b765-4c45-b99b-499a3152df1f&ss=lhg3oini&sl=0&tt=0&bcn=%2F%2F02179919.akstat.io%2F&nu=43hl6rgh&cl=nu1l"';
$mycookie0 = 'datacenter=';
$mycookie1 = '; visitorId=cwdc-A30671a44-471f-41bd-8cad-3daef295e31b; APISID=30d9ceca-eadb-4d16-b481-2b97d5cb5aa2; digital-token=';
$mycookie2 = '; region=useast1; optimizelyEndUserId=oeu1683558557050r0.0976546555374116; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=67~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=0ad224a7ce787f6ba26a479a0460d2e3; _pxhd=';
$mycookie3 = '; _gcl_au=1.1.1208556564.1683558815; _gid=GA1.2.2019665117.1683558820; _pxvid=b5b76ad6-edb2-11ed-9e5c-706a78416f4a; pxcts=eaf3899e-edb2-11ed-9342-62436d415a4b; QuantumMetricUserID=0465c6e9c976587d441370d6d5dbb31f; __qca=P0-1150698787-1683558833603; _fbp=fb.1.1683558850982.1778528935; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _uetsid=e8a06340edb211edb381436783c91f7a; _uetvid=e8a0af00edb211eda286b555c1a32b02; _ga=GA1.2.802961379.1683558820; _clck=1tc5h6n|1|fbg|0; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; QuantumMetricSessionID=04067eba6b33e6bced529eb1c2dbd10a; _px2=eyJ1IjoiNDY4ODM3ODAtZWU1MC0xMWVkLTgwNTAtOTU2ZjM3YWMwNmFiIiwidiI6ImI1Yjc2YWQ2LWVkYjItMTFlZC05ZTVjLTcwNmE3ODQxNmY0YSIsInQiOjE2ODM2Mjc2NzI0MTYsImgiOiJhYjk1NmMyMTQ1NTUxNzYwZjk2MzU2NzI4YjUxMDJiY2FiZDczMzc4NDkxZWJmYmNhZDNmZWE0N2VjNjFiOTI0In0=; _gat_UA-6997633-3=1; _clsk=1c0qvum|1683627495638|2|1|s.clarity.ms/collect; _ga_8L27T28KZS=GS1.1.1683626405.3.0.1683627497.60.0.0; RT="z=1&dm=avis.com&si=71f1d09b-b765-4c45-b99b-499a3152df1f&ss=lhg3oini&sl=0&tt=0&bcn=%2F%2F02179919.akstat.io%2F&nu=43hl6rgh&cl=nu1l"';
$mycookie = 'datacenter=cdal; visitorId=cdal-A8acf4745-779e-441e-8473-cee41ce3bb68; APISID=2cbf2f99-80c9-4d22-8142-251d989fb03d; digital-token=e429d391-d7d2-432f-ae50-6c74ee65445a-02-cdal-ho4539; region=euwest1; akaalb_production_config=~op=avis_euwest1_webapi_private_lbid:avis-webapi-euwest1-aws|avis_com:avis-us-dal|~rv=18~m=avis-webapi-euwest1-aws:0|avis-us-dal:0|~os=7f956ca2417c5e686d715889b6a30f65~id=75e3c35fa6ae1e07722350a8396deffb; optimizelyEndUserId=oeu1683818167679r0.7734777665369013; _gcl_au=1.1.97894457.1683818179; _gid=GA1.2.593439023.1683818180; _pxvid=d1f7bd2f-f00e-11ed-a3e0-774563776844; pxcts=d1f7c8e1-f00e-11ed-a3e0-774563776844; _fbp=fb.1.1683818241958.1250189680; QuantumMetricSessionID=4ccb24f924cb2d71c34c732816a4ddd9; QuantumMetricUserID=b9a58873d941fcbdc7deae5754c26cc7; __idcontext=eyJjb29raWVJRCI6IjJQZVhsVXlkbElDR1JZbWtpSVdSQVRGcW5SZSIsImRldmljZUlEIjoiMlBlWGxRWThjRVRMYVR1QXdRVHRGYnplT3gxIiwiaXYiOiIiLCJ2IjoiIn0%3D; __qca=P0-233882016-1683818686105; _pxhd=f572b4f15a1660c25ee60dd61f65365e4b3f02e12873d13833fc205f8cc2bc48:d1f7bd2f-f00e-11ed-a3e0-774563776844; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _clck=1px7ohj|1|fbi|0; _clsk=1287ojy|1683822175086|3|1|q.clarity.ms/collect; _px2=eyJ1IjoiZGNmMzNlODAtZjAxZC0xMWVkLWFlODMtYjUxZWI1ODRiYTMxIiwidiI6ImQxZjdiZDJmLWYwMGUtMTFlZC1hM2UwLTc3NDU2Mzc3Njg0NCIsInQiOjE2ODM4MjQ5NTc1MzcsImgiOiIzMmJiMmVjZDZmMWExZDFmOTI1ODJlYjVjMjA1NjE1NGJlNzBjZGFmOTIyZmY2ODBlNTg4MTQ2OGRmMTEwODBkIn0=; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZFyvsgAaEACcYIQSDoB9AOZMpKdihQ0mnGADMKYRUOkyICpSrWbtigL5A; _gat_UA-6997633-3=1; _ga_8L27T28KZS=GS1.1.1683818189.1.1.1683824732.35.0.0; _uetsid=cca74c00f00e11edb52d4d45f0ed6f08; _uetvid=cca76220f00e11ed8c32515403db030d; _ga=GA1.2.1549929761.1683818180; RT="z=1&dm=avis.com&si=5214b43c-deae-4e2a-8f57-76c14bac91b2&ss=lhj9u6pm&sl=n&tt=9nw8&bcn=%2F%2F68794907.akstat.io%2F&obo=2&nu=43hl6rgh&cl=3xlfv"';

$digitoken = 'eyJjdHkiOiJKV1QiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiZGlyIn0..6TGocLw8tgmoWOzd.ZlX0XoYMMGxwW2jovvac2e3tU-fFeSoW2kcm_U7Jav8E6WYpR15RQtDiihHYJWlqY1s7f8VwneolQ4yiQdcai89T6-a50iyQ1RU2L7WoST_3d3Kr1azzZgoH3Gejop6uwZrYYQ8ggBE7-6QJIEMXwcq75iSDGjqHLfTbIwSRDyxfEyT6gKpxXwoEW7ABNArthHBynNk8vrhP6P_B3AwOtcUCfcy7qjP4gcd-vf3nmFE_tnUoj-4mmxuRQMwvyR78iR2oy4e6hb0RD7X2hfaT1CsevLhp_3dODNP-MofdNPsF3l3w97ppHgdEWkmwaDSSfsDrpipwXXlJeOtP5FgmdwkqC-mUjfWQCIigP1yFkd_6kUyyE26P0Y-VrDrimoHb9Q4nBS5_9TFbtj0PrOQhA9HE5v2nSScVRbrCd5fiFNgRzRJjmP3WnfyXJ-cTRVHT1Xk8-4SeaWmG9p3cxPL1N6oIbxa3RHYbQ1Oo0lUh9Z-sV0ydCddqguyfH1PERiKvynrRfPwWEHcrhq6vc2l0j-JAwGLTgv-Kaa1XNpdJiPaFPrrAhwytMEmJN1G6bzfxuh836JTDvnuomeNTp-WbImGYRY_PL3y8evK6o3H2AM5g_f9hbkYaH55LVMJhW1lIB86OhW_hebTIb1gXGtoscJzvb_mc46gkjrU8aXGqsJw83NEwNUUetAtNs0cMIZwOGBbgaTp02OaMZtU3wyAeKveDyXHGaXA-6kudTbwr6IzzDMzFP8xsc6TJ_cj3Qa64t85gOGVV5wxgh69JZQ6iis4YhpKBN36UhOe-qx5msMaxBDv-yn9ov-t5J5bQiirONv4YVUPsSm5uDCC23byDDbP5v3JIFctf-nfa0uV_NWxCEEVMpFMq33F6dfuyl0796lsXuGh4OcLdcnwDzPXVF_lB-N8dW2p_HUZ7uX1uTW9DcITFf-UiSknBVqFbDh5celDMLdXBd95rcvcZeb0sTK8FBSXoUQRJhQzelyu4APZny34PKGgJwqq2Iw5bXN08v_S9sktw6IQDLlK1vwMtD667blj-xNsKJGwtls6AQ7JZCCSoWBLdX16DRUA1LhpFP7Wz80ZYypsFKME20iKY11UNjVe6TpEKutgxuloJmEcCT2G57da3Xc8cMmWDm3NLTn7P5kmVcwBxS1v9F0DV5qgljicZtbi-XkWf4PmnBTh6cuxEAr25x2yLSZi9mx0kni-kd4bPuqvfmjdyQ7JJboeMgQrKSYLGKuy5wvhd2NFVatK7i4Vsl6wEKFKDYkGisFwVuRiH2eVRlIw-UFU222G-IAJp_h-_Q-7X7tUcH_0yDE9g30DbhSyNe9zM79t7sdFP1X89Uc2UeL-8kDb2MSMYfXZjgUbhr8gPrcMI14qkm9Nedf3MJO4WLXLouIxj4xOgtZESom3u0uhrZO9JYnoSVQ.NwHztv9v2knMvPRgrnCVzw';

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
    if ($datar->vehicleSummaryList[$ca]->makeModel) $Model = $Model . "," . $datar->vehicleSummaryList[$ca]->makeModel;
    else $Model = $Model . ", ";
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
