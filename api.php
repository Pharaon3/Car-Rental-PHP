<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
// $mycookie = 'datacenter=cwdc; visitorId=cwdc-A30671a44-471f-41bd-8cad-3daef295e31b; APISID=30d9ceca-eadb-4d16-b481-2b97d5cb5aa2; digital-token=98470088-a850-4964-92b1-10ad70e94557-02-cwdc-ho3859; region=useast1; optimizelyEndUserId=oeu1683558557050r0.0976546555374116; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=67~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=0ad224a7ce787f6ba26a479a0460d2e3; _pxhd=9f90cd42a3c513cd008b13c831a1bc025ebb7d1e43d57404e8de308162168353:b5b76ad6-edb2-11ed-9e5c-706a78416f4a; _gcl_au=1.1.1208556564.1683558815; _gid=GA1.2.2019665117.1683558820; _pxvid=b5b76ad6-edb2-11ed-9e5c-706a78416f4a; pxcts=eaf3899e-edb2-11ed-9342-62436d415a4b; QuantumMetricUserID=0465c6e9c976587d441370d6d5dbb31f; __qca=P0-1150698787-1683558833603; _fbp=fb.1.1683558850982.1778528935; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _uetsid=e8a06340edb211edb381436783c91f7a; _uetvid=e8a0af00edb211eda286b555c1a32b02; _ga=GA1.2.802961379.1683558820; _clck=1tc5h6n|1|fbg|0; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; QuantumMetricSessionID=04067eba6b33e6bced529eb1c2dbd10a; _px2=eyJ1IjoiNDY4ODM3ODAtZWU1MC0xMWVkLTgwNTAtOTU2ZjM3YWMwNmFiIiwidiI6ImI1Yjc2YWQ2LWVkYjItMTFlZC05ZTVjLTcwNmE3ODQxNmY0YSIsInQiOjE2ODM2Mjc2NzI0MTYsImgiOiJhYjk1NmMyMTQ1NTUxNzYwZjk2MzU2NzI4YjUxMDJiY2FiZDczMzc4NDkxZWJmYmNhZDNmZWE0N2VjNjFiOTI0In0=; _gat_UA-6997633-3=1; _clsk=1c0qvum|1683627495638|2|1|s.clarity.ms/collect; _ga_8L27T28KZS=GS1.1.1683626405.3.0.1683627497.60.0.0; RT="z=1&dm=avis.com&si=71f1d09b-b765-4c45-b99b-499a3152df1f&ss=lhg3oini&sl=0&tt=0&bcn=%2F%2F02179919.akstat.io%2F&nu=43hl6rgh&cl=nu1l"';
$mycookie0 = 'datacenter=';
$mycookie1 = '; visitorId=cwdc-A30671a44-471f-41bd-8cad-3daef295e31b; APISID=30d9ceca-eadb-4d16-b481-2b97d5cb5aa2; digital-token=';
$mycookie2 = '; region=useast1; optimizelyEndUserId=oeu1683558557050r0.0976546555374116; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=67~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=0ad224a7ce787f6ba26a479a0460d2e3; _pxhd=';
$mycookie3 = '; _gcl_au=1.1.1208556564.1683558815; _gid=GA1.2.2019665117.1683558820; _pxvid=b5b76ad6-edb2-11ed-9e5c-706a78416f4a; pxcts=eaf3899e-edb2-11ed-9342-62436d415a4b; QuantumMetricUserID=0465c6e9c976587d441370d6d5dbb31f; __qca=P0-1150698787-1683558833603; _fbp=fb.1.1683558850982.1778528935; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _uetsid=e8a06340edb211edb381436783c91f7a; _uetvid=e8a0af00edb211eda286b555c1a32b02; _ga=GA1.2.802961379.1683558820; _clck=1tc5h6n|1|fbg|0; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; QuantumMetricSessionID=04067eba6b33e6bced529eb1c2dbd10a; _px2=eyJ1IjoiNDY4ODM3ODAtZWU1MC0xMWVkLTgwNTAtOTU2ZjM3YWMwNmFiIiwidiI6ImI1Yjc2YWQ2LWVkYjItMTFlZC05ZTVjLTcwNmE3ODQxNmY0YSIsInQiOjE2ODM2Mjc2NzI0MTYsImgiOiJhYjk1NmMyMTQ1NTUxNzYwZjk2MzU2NzI4YjUxMDJiY2FiZDczMzc4NDkxZWJmYmNhZDNmZWE0N2VjNjFiOTI0In0=; _gat_UA-6997633-3=1; _clsk=1c0qvum|1683627495638|2|1|s.clarity.ms/collect; _ga_8L27T28KZS=GS1.1.1683626405.3.0.1683627497.60.0.0; RT="z=1&dm=avis.com&si=71f1d09b-b765-4c45-b99b-499a3152df1f&ss=lhg3oini&sl=0&tt=0&bcn=%2F%2F02179919.akstat.io%2F&nu=43hl6rgh&cl=nu1l"';
$mycookie = 'datacenter=cwdc; visitorId=cwdc-A30671a44-471f-41bd-8cad-3daef295e31b; APISID=fcccf85c-0fa0-4fe1-b4b3-0679ecb8e765; digital-token=89071051-c818-40a9-bb51-ec542396822b-01-cwdc-ho5817; region=useast1; optimizelyEndUserId=oeu1683558557050r0.0976546555374116; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=67~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=0ad224a7ce787f6ba26a479a0460d2e3; _pxhd=9f90cd42a3c513cd008b13c831a1bc025ebb7d1e43d57404e8de308162168353:b5b76ad6-edb2-11ed-9e5c-706a78416f4a; _gcl_au=1.1.1208556564.1683558815; _gid=GA1.2.2019665117.1683558820; _pxvid=b5b76ad6-edb2-11ed-9e5c-706a78416f4a; pxcts=eaf3899e-edb2-11ed-9342-62436d415a4b; QuantumMetricUserID=0465c6e9c976587d441370d6d5dbb31f; __qca=P0-1150698787-1683558833603; _fbp=fb.1.1683558850982.1778528935; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _clck=1tc5h6n|1|fbh|0; QuantumMetricSessionID=8aa59ce68f67590aa807588693cad1a3; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; _ga_8L27T28KZS=GS1.1.1683691876.7.1.1683697166.53.0.0; _uetsid=e8a06340edb211edb381436783c91f7a; _uetvid=e8a0af00edb211eda286b555c1a32b02; _ga=GA1.2.802961379.1683558820; _clsk=ps2yb6|1683697177069|16|1|s.clarity.ms/collect; _px2=eyJ1IjoiMGRhMDIyNzAtZWVmNS0xMWVkLTgwYjgtZTM0OTIxMTc2MzhlIiwidiI6ImI1Yjc2YWQ2LWVkYjItMTFlZC05ZTVjLTcwNmE3ODQxNmY0YSIsInQiOjE2ODM2OTgwNjUxODYsImgiOiIwZjVhZTk0OTMzMTYxZGM2MTcxYTQxNzBkMjJlOTQ3MzFmMGI1MWNmMmQ1MjRmN2JhNjQ3OTIzYmQ1YTcxMzFiIn0=; _gat_UA-6997633-3=1; RT="z=1&dm=avis.com&si=71f1d09b-b765-4c45-b99b-499a3152df1f&ss=lhh8oivz&sl=4&tt=1jz2&bcn=%2F%2F0217991c.akstat.io%2F&nu=43hl6rgh&cl=1i3rz"';

$digitoken = 'eyJjdHkiOiJKV1QiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiZGlyIn0..NtZADE7Mjo6SEHQX.al--kE8qRZXFObMYphqyyLO2A5bF5piu1r8HJqJxWPhZlkHrNNaMRwJGVUYsoynZMnur3HlSdwdmbrulEcpu8awRB6_Ge9PnGnx65KFjxMyBV0c06CON1q6SWLhhQBdV6YfpF5s95r02tJfsTL_5fel89PoFfRQxiti_Z5GV8og_0UUz5YemTrWPqjRnN_fLRn0NcEgI1lPYRlWY5JsfoxPudR4iP2rFbynkS3bBRUW_kSmOVoQ6ltLBU-eTAX6_Ii-mITYXWPyXbjYJZrq86RmZCPD-PyO2mK4wytPUocqyOVNAnjfBzepKw5B_LwdqK5dIQ50mvlRGv-ENvF_7q8JB5lHRUf1kmzyviJwVPdLygK-A2ROWES2dj4L1cjlMiL3adVPSYfuvCJRynhU23_McUnm_b5dmVZsWtRPu2aaRSYxZapGB1RaSK8jcA9K6sRsITqmZqTrD4P1DEQVWpzt5hiEil1yJZqdLjVMf7NbRLHTFN2cd-AuhJ3CKOoPe_fyBL9uEq_N0PJb4aFQS-siQ-RRS62lymqudCkz8urOUkK7qy_BAGxc0dm-Kx0M4et-bnTtIQZqnZW86WWE-zu1hCr1NQFh_0MBJW8QM5IuYNlpQhZcaKmNgvWVLZJkwwgYbbquzsNXlY6HELkcGzAxCAMp8XqEuqjfzTev0AxybXW1zAee2No7acUcZKjGuTRNkaP5LBHVw8lO0m3hOvNBxFc9zE7nHiQWIM92uCtH4GT8q0VXwm-9_vcF_PZ67L3pl0w9cgT70pHXTKQ7WZD62Y_yQ8fogqNFWHt0mizFTKxC1c2HZlRLykv3eJTeAjq5un12-5q8Pm-LeljzsiqvetT4DVTXH99BTRBBef_q856Tw4UcSMZ-zLz794ZfYMemyWUtsyXn5nJJgs8zoXvMgyYXwGJCUrEx6OZsWzGGqEkX8T5L6wzZhemKmzaQStqrjlWDaD104uzupEVjGf9Uu6bkvXEvqs2NAF0sqaN6345L6-Bfrlwukfzk_cW02kvs4nJsvdANx32a9v8bW_KYl2yUW0s2AJ-JAt-5W9Z7b8m9kpsRTcpeVLDswVmZTBMxNfk_HcsPUhnnjGGDHtcvLzzTD-nlg-DVaY-aQ4fa5o0AtjiLJceCR5Qu5f1KVQhv4FCAhCC2ueYVyyheuRvw5yvxyNcPpy35unP2c3dTSzl5d5ldjHILzf_YX1zFg_3pXgjbK0lxgRcG28DQZpU2NZnvyKuji7JezyoDxqSwY5Djlihsc1XKPf1mD2IF9lUAW5BWkZ4oVOQ3hr-tcN40ymn9oqbKROe54-dfhTRpBRU8c9YUbLRWnL2gwFfKM4tbF7-JY-NtWs-NRLpuPUY1eYiHxAlFJj0XUC4X4yLi6DBiUWNyD7B6ZZ2Ut-Jw9Msu99gxuRys4z7B2YzXC8uSOhhQ.uxyixB7Ry_S8sIAubjzkUQ';
$sheetLink = 'https://script.google.com/macros/s/AKfycby8744iWHYXR3Mn4qOB_KoyJ2xI4Kw62N0LdIe8GsZu05tPb481_6IS2PaBxXj9Ag/exec';

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
// $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
$datar = json_decode($response, false);
// $header = substr($response, 0, $header_size);
curl_close($curl);
echo $response . "<br>";

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
    CURLOPT_POSTFIELDS => array(
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
        'amount' => $carAmount),
    ));
$response1 = curl_exec($curl1);
echo $response1;
} else {
    http_response_code(405);
    echo json_encode(array('error' => 'Method not allowed'));
}
?>
