<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
// $mycookie = 'datacenter=cwdc; visitorId=cwdc-A30671a44-471f-41bd-8cad-3daef295e31b; APISID=30d9ceca-eadb-4d16-b481-2b97d5cb5aa2; digital-token=98470088-a850-4964-92b1-10ad70e94557-02-cwdc-ho3859; region=useast1; optimizelyEndUserId=oeu1683558557050r0.0976546555374116; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=67~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=0ad224a7ce787f6ba26a479a0460d2e3; _pxhd=9f90cd42a3c513cd008b13c831a1bc025ebb7d1e43d57404e8de308162168353:b5b76ad6-edb2-11ed-9e5c-706a78416f4a; _gcl_au=1.1.1208556564.1683558815; _gid=GA1.2.2019665117.1683558820; _pxvid=b5b76ad6-edb2-11ed-9e5c-706a78416f4a; pxcts=eaf3899e-edb2-11ed-9342-62436d415a4b; QuantumMetricUserID=0465c6e9c976587d441370d6d5dbb31f; __qca=P0-1150698787-1683558833603; _fbp=fb.1.1683558850982.1778528935; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _uetsid=e8a06340edb211edb381436783c91f7a; _uetvid=e8a0af00edb211eda286b555c1a32b02; _ga=GA1.2.802961379.1683558820; _clck=1tc5h6n|1|fbg|0; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; QuantumMetricSessionID=04067eba6b33e6bced529eb1c2dbd10a; _px2=eyJ1IjoiNDY4ODM3ODAtZWU1MC0xMWVkLTgwNTAtOTU2ZjM3YWMwNmFiIiwidiI6ImI1Yjc2YWQ2LWVkYjItMTFlZC05ZTVjLTcwNmE3ODQxNmY0YSIsInQiOjE2ODM2Mjc2NzI0MTYsImgiOiJhYjk1NmMyMTQ1NTUxNzYwZjk2MzU2NzI4YjUxMDJiY2FiZDczMzc4NDkxZWJmYmNhZDNmZWE0N2VjNjFiOTI0In0=; _gat_UA-6997633-3=1; _clsk=1c0qvum|1683627495638|2|1|s.clarity.ms/collect; _ga_8L27T28KZS=GS1.1.1683626405.3.0.1683627497.60.0.0; RT="z=1&dm=avis.com&si=71f1d09b-b765-4c45-b99b-499a3152df1f&ss=lhg3oini&sl=0&tt=0&bcn=%2F%2F02179919.akstat.io%2F&nu=43hl6rgh&cl=nu1l"';
$mycookie0 = 'datacenter=';
$mycookie1 = '; visitorId=cwdc-A30671a44-471f-41bd-8cad-3daef295e31b; APISID=30d9ceca-eadb-4d16-b481-2b97d5cb5aa2; digital-token=';
$mycookie2 = '; region=useast1; optimizelyEndUserId=oeu1683558557050r0.0976546555374116; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=67~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=0ad224a7ce787f6ba26a479a0460d2e3; _pxhd=';
$mycookie3 = '; _gcl_au=1.1.1208556564.1683558815; _gid=GA1.2.2019665117.1683558820; _pxvid=b5b76ad6-edb2-11ed-9e5c-706a78416f4a; pxcts=eaf3899e-edb2-11ed-9342-62436d415a4b; QuantumMetricUserID=0465c6e9c976587d441370d6d5dbb31f; __qca=P0-1150698787-1683558833603; _fbp=fb.1.1683558850982.1778528935; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _uetsid=e8a06340edb211edb381436783c91f7a; _uetvid=e8a0af00edb211eda286b555c1a32b02; _ga=GA1.2.802961379.1683558820; _clck=1tc5h6n|1|fbg|0; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; QuantumMetricSessionID=04067eba6b33e6bced529eb1c2dbd10a; _px2=eyJ1IjoiNDY4ODM3ODAtZWU1MC0xMWVkLTgwNTAtOTU2ZjM3YWMwNmFiIiwidiI6ImI1Yjc2YWQ2LWVkYjItMTFlZC05ZTVjLTcwNmE3ODQxNmY0YSIsInQiOjE2ODM2Mjc2NzI0MTYsImgiOiJhYjk1NmMyMTQ1NTUxNzYwZjk2MzU2NzI4YjUxMDJiY2FiZDczMzc4NDkxZWJmYmNhZDNmZWE0N2VjNjFiOTI0In0=; _gat_UA-6997633-3=1; _clsk=1c0qvum|1683627495638|2|1|s.clarity.ms/collect; _ga_8L27T28KZS=GS1.1.1683626405.3.0.1683627497.60.0.0; RT="z=1&dm=avis.com&si=71f1d09b-b765-4c45-b99b-499a3152df1f&ss=lhg3oini&sl=0&tt=0&bcn=%2F%2F02179919.akstat.io%2F&nu=43hl6rgh&cl=nu1l"';
$mycookie = 'datacenter=cdal; visitorId=cdal-A8acf4745-779e-441e-8473-cee41ce3bb68; APISID=8b12ae10-0d18-4a07-a4e7-51b84a0df094; digital-token=e0b583fa-5447-431f-b693-b52f6f419bd4-02-cdal-ho5454; region=euwest1; akaalb_production_config=~op=avis_euwest1_webapi_private_lbid:avis-webapi-euwest1-aws|avis_com:avis-us-dal|~rv=18~m=avis-webapi-euwest1-aws:0|avis-us-dal:0|~os=7f956ca2417c5e686d715889b6a30f65~id=75e3c35fa6ae1e07722350a8396deffb; optimizelyEndUserId=oeu1683818167679r0.7734777665369013; _gcl_au=1.1.97894457.1683818179; _gid=GA1.2.593439023.1683818180; _pxvid=d1f7bd2f-f00e-11ed-a3e0-774563776844; pxcts=d1f7c8e1-f00e-11ed-a3e0-774563776844; _fbp=fb.1.1683818241958.1250189680; QuantumMetricUserID=b9a58873d941fcbdc7deae5754c26cc7; __idcontext=eyJjb29raWVJRCI6IjJQZVhsVXlkbElDR1JZbWtpSVdSQVRGcW5SZSIsImRldmljZUlEIjoiMlBlWGxRWThjRVRMYVR1QXdRVHRGYnplT3gxIiwiaXYiOiIiLCJ2IjoiIn0%3D; __qca=P0-233882016-1683818686105; _pxhd=f572b4f15a1660c25ee60dd61f65365e4b3f02e12873d13833fc205f8cc2bc48:d1f7bd2f-f00e-11ed-a3e0-774563776844; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _clck=1px7ohj|1|fbi|0; _clsk=1287ojy|1683822175086|3|1|q.clarity.ms/collect; QuantumMetricSessionID=beaa6d06530fb8b4051a2a1b75e2acf0; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; _px2=eyJ1IjoiNWQ0OWUyODAtZjA3MC0xMWVkLTkyZGEtM2ZjNDdhMjY1NjViIiwidiI6ImQxZjdiZDJmLWYwMGUtMTFlZC1hM2UwLTc3NDU2Mzc3Njg0NCIsInQiOjE2ODM4NjE2Njk1MjIsImgiOiJjOGU5NTIxMGJkOWY3YjExMzI1ZWVjMzExYTEyNmZjZWU4OTA1MGIwMGE0YTkzNTQzZWQzMDRiM2JlY2Y2OWFmIn0=; _gat_UA-6997633-3=1; _uetsid=cca74c00f00e11edb52d4d45f0ed6f08; _uetvid=cca76220f00e11ed8c32515403db030d; _ga_8L27T28KZS=GS1.1.1683856457.4.1.1683861597.55.0.0; _ga=GA1.2.1549929761.1683818180; RT="z=1&dm=avis.com&si=5214b43c-deae-4e2a-8f57-76c14bac91b2&ss=lhjwnumk&sl=e&tt=2772&bcn=%2F%2F68794905.akstat.io%2F&obo=2&nu=43hl6rgh&cl=32246"';

$digitoken = 'eyJjdHkiOiJKV1QiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiZGlyIn0..cXzF9-jnyhuVC1yB.HFrhxMHwbeTtfAX4IIhypjF5my-WbNfInk9wxlMqaghLyaaAzLuqpBswbWaGOpUADjPMgC9zEpd27F_CrjbAugW2X5qOeQIFrxrcw6liQJ0-uJMk3ScyJ8YkmcbNGmIFFwgyUM8ksvEkvLnz4SiP13GBGAS9DK8UyGEZqPM1bMVjLZP4Rk8VfX1CZNaueTSAhP5MXUtF04NZBO9z6yyJpvXBkwXsMFOjToid52LyxDSLrN4YTlr6a1_mbxKSh_-5oaDzGtkM8GaoF3SIreOzQwpP4QTeLkzufgjFGtUfJQ96ZSuVnk_hYvzyyH1Z9nKNFTzIh_obovgO0NTPVnmV3bl4ZSaIGy7fmwCFkds2oBlP9qDMumEvJqSDt0xN7FLN24V6UF_2EU5yoYKl1Z7Z3plV5X1KxE4XeRe5OYn-fVhzo_mSTCvz4YM9MVZUBYjdQsXvOh8JLCoP0ApNxLqWMMVS6YFtfvPCwlfIIuPo1YqIUp6vLLT_5eyqldKVNrihmJxFSoh_EihjVaQbMhGfsA7uQQZ27cwCJJsVybAQmayQl-PZ9zw9DT4jSJXDmH67u42zseYhhHxiA33vthlsA8yHWQNDR451e_A1D9VB9vWSS-rK-WEkDWKBMjv_G9mF5JXPawqr1sLH0xdpcgaoMz9jD0nyp-67jM-tukqY7Q8GaC5LrzXNM57U_BKDzBClBsH1sd9_1sBzUcAhUTtDOTi58rQY5xS6PwpinJgl6xsExEkhCpFv2e4Q25-kpUdEoIPopm0cEUpXj6UUbmxsNdqnVJujg792-FSwSZNCsEmHpp1VG4PR26CNZzSctV5ZghscBJeFqIrZDGC4dWYJIW1fXURkPl2gmzWNBZSrsbJ7lrE1uvG3-hWk9qLY4E7MobNvLw3CUU0UMwVwm7BcIh01oRdqLVd4Dggb-qIC33qrxU4-sBwsAKkdl4xfWSvvH4Y7lV3tbXON_MO4iXFDTzjrE5euNSwYTecQ7qhDRpkK86wH0XvghbIzx9615wW1oKY29CUsbpFODSC5NSqUdrDGh7zsX02LS4XLJRgJhLQFosdooSiROZpn8HXAKN-I5Ape7RDVJtgHAeiXPMKGeDBoGz272zscFTNdTtdzqjCgDlcJ-VDz9l4h4CtblnSzgo04o1oEXcND9SJSNOrjRPm4uqCl4Re4tlWVuKKbLnFDqUR7wjna7TLYN4shZKv2RxS4uzl-zkrv6_H9rimScXdGvBQuIi6__k7U677KqFJFkQTU8UKiUntUlWemTfbohc9kdDtYeXeXoqg_QsjQjcPZMAZc7f9NyPtKi9-hc-iGtwniraVuMeeIT6p0nI3ZIbioKKCo9ThV5GeHjlxo3ATw5tQlPP5W2Txv1JlbyK6JjdG64y7wQRkbzy8KEg_P6XrCjb1Lfhhtv9I-PXmSIicn8g.CboPSP62cL1mNaouM51rnw';

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
