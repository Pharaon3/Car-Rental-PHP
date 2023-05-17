<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
// $mycookie = 'datacenter=cwdc; visitorId=cwdc-A30671a44-471f-41bd-8cad-3daef295e31b; APISID=30d9ceca-eadb-4d16-b481-2b97d5cb5aa2; digital-token=98470088-a850-4964-92b1-10ad70e94557-02-cwdc-ho3859; region=useast1; optimizelyEndUserId=oeu1683558557050r0.0976546555374116; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=67~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=0ad224a7ce787f6ba26a479a0460d2e3; _pxhd=9f90cd42a3c513cd008b13c831a1bc025ebb7d1e43d57404e8de308162168353:b5b76ad6-edb2-11ed-9e5c-706a78416f4a; _gcl_au=1.1.1208556564.1683558815; _gid=GA1.2.2019665117.1683558820; _pxvid=b5b76ad6-edb2-11ed-9e5c-706a78416f4a; pxcts=eaf3899e-edb2-11ed-9342-62436d415a4b; QuantumMetricUserID=0465c6e9c976587d441370d6d5dbb31f; __qca=P0-1150698787-1683558833603; _fbp=fb.1.1683558850982.1778528935; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _uetsid=e8a06340edb211edb381436783c91f7a; _uetvid=e8a0af00edb211eda286b555c1a32b02; _ga=GA1.2.802961379.1683558820; _clck=1tc5h6n|1|fbg|0; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; QuantumMetricSessionID=04067eba6b33e6bced529eb1c2dbd10a; _px2=eyJ1IjoiNDY4ODM3ODAtZWU1MC0xMWVkLTgwNTAtOTU2ZjM3YWMwNmFiIiwidiI6ImI1Yjc2YWQ2LWVkYjItMTFlZC05ZTVjLTcwNmE3ODQxNmY0YSIsInQiOjE2ODM2Mjc2NzI0MTYsImgiOiJhYjk1NmMyMTQ1NTUxNzYwZjk2MzU2NzI4YjUxMDJiY2FiZDczMzc4NDkxZWJmYmNhZDNmZWE0N2VjNjFiOTI0In0=; _gat_UA-6997633-3=1; _clsk=1c0qvum|1683627495638|2|1|s.clarity.ms/collect; _ga_8L27T28KZS=GS1.1.1683626405.3.0.1683627497.60.0.0; RT="z=1&dm=avis.com&si=71f1d09b-b765-4c45-b99b-499a3152df1f&ss=lhg3oini&sl=0&tt=0&bcn=%2F%2F02179919.akstat.io%2F&nu=43hl6rgh&cl=nu1l"';
$mycookie0 = 'datacenter=';
$mycookie1 = '; visitorId=cwdc-A30671a44-471f-41bd-8cad-3daef295e31b; APISID=30d9ceca-eadb-4d16-b481-2b97d5cb5aa2; digital-token=';
$mycookie2 = '; region=useast1; optimizelyEndUserId=oeu1683558557050r0.0976546555374116; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=67~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=0ad224a7ce787f6ba26a479a0460d2e3; _pxhd=';
$mycookie3 = '; _gcl_au=1.1.1208556564.1683558815; _gid=GA1.2.2019665117.1683558820; _pxvid=b5b76ad6-edb2-11ed-9e5c-706a78416f4a; pxcts=eaf3899e-edb2-11ed-9342-62436d415a4b; QuantumMetricUserID=0465c6e9c976587d441370d6d5dbb31f; __qca=P0-1150698787-1683558833603; _fbp=fb.1.1683558850982.1778528935; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _uetsid=e8a06340edb211edb381436783c91f7a; _uetvid=e8a0af00edb211eda286b555c1a32b02; _ga=GA1.2.802961379.1683558820; _clck=1tc5h6n|1|fbg|0; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; QuantumMetricSessionID=04067eba6b33e6bced529eb1c2dbd10a; _px2=eyJ1IjoiNDY4ODM3ODAtZWU1MC0xMWVkLTgwNTAtOTU2ZjM3YWMwNmFiIiwidiI6ImI1Yjc2YWQ2LWVkYjItMTFlZC05ZTVjLTcwNmE3ODQxNmY0YSIsInQiOjE2ODM2Mjc2NzI0MTYsImgiOiJhYjk1NmMyMTQ1NTUxNzYwZjk2MzU2NzI4YjUxMDJiY2FiZDczMzc4NDkxZWJmYmNhZDNmZWE0N2VjNjFiOTI0In0=; _gat_UA-6997633-3=1; _clsk=1c0qvum|1683627495638|2|1|s.clarity.ms/collect; _ga_8L27T28KZS=GS1.1.1683626405.3.0.1683627497.60.0.0; RT="z=1&dm=avis.com&si=71f1d09b-b765-4c45-b99b-499a3152df1f&ss=lhg3oini&sl=0&tt=0&bcn=%2F%2F02179919.akstat.io%2F&nu=43hl6rgh&cl=nu1l"';
$mycookie = 'datacenter=cdal; visitorId=cdal-A9a469f58-d16b-4f7d-8d62-00785fb7214a; APISID=ed2d03fa-7d2b-4c28-b48b-6cbac05c1cd6; digital-token=5ffc245c-47b6-4f53-8c5e-294179f0332a-11-cdal-ho4028; region=euwest1; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; akaalb_production_config=~op=avis_euwest1_webapi_private_lbid:avis-webapi-euwest1-aws|avis_com:avis-us-dal|~rv=82~m=avis-webapi-euwest1-aws:0|avis-us-dal:0|~os=7f956ca2417c5e686d715889b6a30f65~id=1a6a1565e54fa1139054b19956f33672; optimizelyEndUserId=oeu1684029980054r0.0640200876603052; _gcl_au=1.1.766055992.1684029984; _gid=GA1.2.1399017667.1684029986; pxcts=eb958dd9-f1fb-11ed-8e44-78467a787353; _pxvid=eb9581b2-f1fb-11ed-8e44-78467a787353; _pxhd=6d0d74f748fdcbb1afcf18295472be69a8701ca6c52168b46455f9a193a76a9b:eb9581b2-f1fb-11ed-8e44-78467a787353; __qca=P0-575998114-1684029989446; __idcontext=eyJjb29raWVJRCI6IjJQbFM2ZlVrNEY2NDZCVjdoZkc3bk5PQWc1VCIsImRldmljZUlEIjoiMlBsUzZZeTluWTNrRno3eDUzbk1TMzROUVdHIiwiaXYiOiIiLCJ2IjoiIn0%3D; _fbp=fb.1.1684030006637.199116794; _clck=124o858|2|fbl|0|1229; QuantumMetricUserID=1780fd6513e828045acca889649218c3; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZFyvsgAaEACcYIUsUq16zFoJB0A+gHMmilOxQoaTTjABmFMBqFLlEdZu26DRjQF8gA; QuantumMetricSessionID=506ccc79741bbc71fa8b223f9ee3f8bb; _px2=eyJ1IjoiZjM2ODkxYjAtZjI1Mi0xMWVkLWE4MzQtN2I3NzVkN2ViNmU1IiwidiI6ImViOTU4MWIyLWYxZmItMTFlZC04ZTQ0LTc4NDY3YTc4NzM1MyIsInQiOjE2ODQwNjc2NjEzOTUsImgiOiIyODdhNGFhOTEwZDJkZDIyYzE5Mzc2NDNlMTU3ZjY1ZDEzM2Q0YjZkOWEwYTkxZTkyYjQzNTQ4MzdmNmEyYThhIn0=; _clsk=38ocd1|1684067363990|7|1|p.clarity.ms/collect; _gat_UA-6997633-3=1; _ga_8L27T28KZS=GS1.1.1684063706.4.1.1684067422.60.0.0; _uetsid=ee327660f1fb11edbeda6910b82720c4; _uetvid=ee327020f1fb11edadf7a3ce4c421955; _ga=GA1.2.458135.1684029984; RT="z=1&dm=avis.com&si=5d548c96-2f57-4487-bdd2-61b69c9bddd7&ss=lhnc1mtp&sl=h&tt=2rox&bcn=%2F%2F173bf109.akstat.io%2F&obo=1&nu=43hl6rgh&cl=27wrg&ld=27xk5"';

$digitoken = 'eyJjdHkiOiJKV1QiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiZGlyIn0..8wG3MxqwdvRC31sC.NBAgPvbbzCvjyVVF4JI45rjlwaacoCDQssl6bfFc_oQtfm_bbK0VO1mh02aekCEs-SHCr4UmhJTwbmhD-bGRcET34JPJJm3B2_Fc1KIcT9uNgGimRtRnMngbWemrKO2dv5pYl2MPb-BTmJp8-4ZTe7NsYmHK2bNroFUvjBLFUKa8CuUgBF1lMF2e5Lx99tc8r9jUeZteNj2HiIIv6PVsH3Pl2vJQY6JCip5gJ7RAAiUhscsn4erLZqmQZBmiBoAONRo4WzQBWCWvifNiYHR6t2_qRmHYeFVh28X8lgda7ACgslqflUVduDJZppRM4HpaITCrHz_dszjeC0Z53WRFunf6kEiNjbYkOMdxlYvdN3wlddGaZEoMMJ8NmeiqPodoNX1xJ6mjWDyZW1qU28PiigMMRhU4Oi-0Kl0OUFRTrFk8NgT0WJcOe2FOTmaFoPDeJtxfoGVTh-mm_E3tuIDZfW_4TfxcN7xSxh9znMnmnGRyWRuCUXFN-Tu_AQ2m1M0goR8cEa942GAjCYoVIG7aYpAE07G0TlY8ZTTsg1DkrCOgpciWTyOri35j3dYcRlbngt6EwqPcOvnyxuN4iLptfFnwR4IcsGv-luEvMMc1vLC8hMNhZV4zjiVNelflT6rD37v_Yeek6R9WNLLdpvV5rRMjyhlhvga7i-P3s7hT0g0pMX5Nw3qlOeVllanS_EssK6LSjfAizc0zeYJ-n5GZ_kdsNEqw95IM_dmJmIFN95CDPe-FsuKKYewRSCr-8VSAyUAzCTbsa0Mn3V6ZPY7Ycx4vTLpkJTbNeyzbXiVZnTs6oR-8OdOhwI1jqbQcm3qKxvYJS2TOriPRKwrvv-7OZ53DcM5c7ctp-NVQvKuXVyIAkDqQC_l9bCXq_xzd3FwDEoaVUDinfiEuty-vkhuqccOCOsHFWW2ro5YSs3tTXAyrhxEO9d_ojqLFIJLLb4XIxJWVVUExnDmYVsEHX3Oo_OtElqPvh1ptvhfo0_Fb7kc0B_VmpzjAIvPVu1g6fTBfM5QpGYcFCsToBxfeme0UTON8LwmUph9IWnDOCJb8QDgIGzkswvXGNhf6TecXQBSoxcWpl9mcblwWw-aaY2QYmqZ2PeeaDfBMYUazG8H2OSD1F5BQ3U74FCsdevNVFECA5J7w_vbqAZcBwpQFr3sXkb3ZPQWwh_2hi80vPt5e14PVYJ5ce_G8Gf47HzwlOmhqVS7ISpCeGdNg4TyptUf2lHBtk21V9v-sFqnsGVhZeSF21_Y9RlpLTM-6e-ia9LTv9KfNBfSQ76s4tVIvg_A60IPg4lnSLZX9O6o3g_FInUKXNZP7HRfHQbVDO5OCTTRhcxQSAD_g2mGreH5RCV7HdySFSGE61BgC1BfJzjFP6-a_sEgy2iw0HkVtOUaECh-F5_erfKd17Uk0JR6tsq-1azG__w.mH0UDWRKQv1YU3FVGMKgmg';

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
echo $response;
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
