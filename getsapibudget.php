<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$mycookie = $_POST['cookie'];
$digitoken = $_POST['token'];

// $mycookie =  'APISID=96e42169-3a9d-41c4-bae5-216759985432; datacenter=cwdc; digital-token=f6556f94-b83b-49b3-9895-77603f1d74e0-11-cwdc-ho5542; visitorId=cwdc-A9a12e568-4a5a-4ce5-bcf6-f0bac5f70cf1; region=useast1; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-wdc|~rv=72~m=avis-webapi-useast1-aws:0|avis-us-wdc:0|~os=7f956ca2417c5e686d715889b6a30f65~id=c40ee5e810374dd3e5c20017da805f9a; optimizelyEndUserId=oeu1684809749264r0.7454559215532404; _gcl_au=1.1.450528813.1684809752; _pxhd=07bec3e2d571e6d03dc6b1421e2291ce562645e5a15b830bcccdb988c9cbf3a7:7744d6d6-f913-11ed-87cd-eaaabd01f4a7; _gid=GA1.2.205373223.1684809754; pxcts=7b937105-f913-11ed-84d5-456d6d624363; _pxvid=7744d6d6-f913-11ed-87cd-eaaabd01f4a7; __qca=P0-1691157528-1684809758827; QuantumMetricSessionID=061190f3e8ade0b432dfe4a6bceac584; QuantumMetricUserID=64cf66e066b4809c8f8f0d178218d2e4; _fbp=fb.1.1684809769156.66659581; __idcontext=eyJjb29raWVJRCI6IjJRQXdjTkxBMjVURWZhamNoZllXNWNYWXFsWiIsImRldmljZUlEIjoiMlFBd2NNTkRPdDllT2VGYjg4QmF5eGpBb2tnIiwiaXYiOiIiLCJ2IjoiIn0%3D; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxFRLdgFoKnACZyIYCg3YgANCB4wQpYpVr1mLHSDoB9AOZNrAlCjGcYAMwpgBum7YiO-C7iHl4CAL5AA; _gat_UA-6997633-3=1; _ga_8L27T28KZS=GS1.1.1684809753.1.1.1684810004.60.0.0; _uetsid=78bd8830f91311ed82a47b749ea439cb; _uetvid=78bdc000f91311edafdf550719738e56; _ga=GA1.2.1527732996.1684809754; RT="z=1&dm=avis.com&si=b7b19e25-71f1-4fb2-8e2f-a1a7059dc0b3&ss=lhzo7zes&sl=2&tt=bt6&bcn=%2F%2F173bf108.akstat.io%2F&nu=43hl6rgh&cl=5kod"';
// $digitoken =  'eyJjdHkiOiJKV1QiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiZGlyIn0..k7IeDkonm29tA1sI.yhAUtyDdloybMt8ts-Y8-rjJCV3_O5_GzL9Ya95PdHLnWT2MdhTdHf5EYoUbIzYHR2qR_Ycz-VBH_YFecNytc3aPf4p96DVpA6DBfawx3QACZnhL-qRlzJizZekXO_TAFwkkV4IAD1jv-Db-_dqFu0BffnQZ6DOecojJy1whlngy8fkREKRAJDEN3BxtblNoEQJs2PH-sUwCAyZ_P272gXFEadQCx4pIaffu7Oxy1LjNLHNF8QT-mW6pigLT0XCbwirQZMJumvdJhJy2vrDpFiXKlbaF6gCyi00dgRDhT__e4jY-VKMOrzEtYP_YrLveTGcqakTXtHItnmJkPP1-UAfkgF7d2vz0bXQN3cnYX5PVgRq_EQB_WeJIHlYEa2n1adIiLbFyC4fvoFJXuvY8duIoPav-NmIkwFeJK8hCA8t9yLzIvzYF8e_QgT6UHtugZeynt2IAMFVIR-E-QxWGcjxO2CVG-GiiuX7OPuxCenmtZZ14jynbI_SUbjUu3I2GPtvVfVYdsvzyAAvIzusxnpeh0-2T6gmcBm5uJpNpYh-jYcs4zVJcSzUvQdhpFrG-hfQWT9MQfZmPZhTn78xVfJU18dmq1oary1-cVBb9Ag5f_jBlFheKb8wfnNdxQ-lSPwkHaP34GwtJ-V3DzYD_zrB7VuCUNwqx_ZqW_0LaCEy4dRpO-_i-W6fRa4Z0eiKJnUz-AtHIQWGXZHkjP0rw1WULKduWlv3thOya7u0pvXv2XzmkXxpBse3LFTeJq2MTLXVOas-z84GXVfVWkZqtHGdzsGWSkEDFFD1qjGuzesM0R-5KWuxTR-V-PCSD4pSuAcZjSAQpk1eg4C41G0K95R0PAE8Y83BblN75zm1EAUG6ADfcrkdWvDd5At0QpqXZl-2btNuXkYtUzlIkTEkN6XPeW0-d-8HhssZYty2OjtoHhta9ep_y-BrEW748r_HCBOZW7-kdb3rz9INlpscjqq4_ibHbZvqY99BFMgOZ-mYqWhKgn-UrminnFA5fhGvqfaiq8qE9YSNgQpgKhdWCUgwO5FT9sVq2WFAnyTVBtPJv-1PUIdyR1aJfTfSDoN99mM4Ce_VrHDvKYKYkyNmOGQQNRSyhwJ4403OcTeRsw7SRBExAiz5r5rnu5VS5XNw2-Vo_XmVtzuwih4O1fk8r3IdshCS4uh9Bjd4zJQpEiKWeHo9yT9iUpg2u4Vz9vlA7yH5pcURZt3HGWRPcARFS-zsV211xOXspS-wQKKw8ct5HZ20gx-Sbnfy8tbAWrakbIe5t7aFHCvDNUlh1bjNJRmNJvNfUVx9JOdxxL_IS6-_8kcm0jCFdD2-mA47SCw_6_lYk_dThO4yq0kVGsA1rEfHX7Fy0_oKEpUlc3uhLN1b9hQB0itdZ4-Nm6F1j7qzWnpMFjMq2GOQdH4vwntnbYUY4Tw.Re9pxLaDSta0IDtTQNrDkQ';

// session_start(); 
$day = $_POST['day'];
$days = $_POST['days'];
$currentDate = date("Y/m/d") . date("h:i:sa");
$orgDate = $day;
$newDate1 = date("m-d-Y", strtotime($orgDate));
$date = str_replace('-', '/', $newDate1);
$newDate = date("m/d/Y", strtotime($date));

$dateVal = $day;
$dropDate = date('m/d/Y', strtotime($dateVal. ' + ' . $days . ' days'));

$adds = explode('/', $_POST['add']);
$links = explode(',', $_POST['link']);
// $request = json_decode($_POST['request'], true);;
$outputs = [];
for ($c = 0; $c < count($adds); $c ++){
    // $add = strtoupper($request[$c]["code"]);
    // $link = $request[$c]["link"];
    $add = strtoupper($adds[$c]);
    $link = $links[$c];
    
    // echo "day: " . $day . "<br>";
    // echo "add: " . $add . "<br>";
    // echo "link: " . $link . "<br>";
    // echo "digitoken: " . $digitoken . "<br>";
    // echo "mycookie: " . $mycookie . "<br>";
    // echo $days;
    // echo $add;
    // echo $link;
    // echo $digitoken;
    // echo $mycookie;

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.budget.com/webapi/reservation/vehicles',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"rqHeader":{"brand":"","locale":"en_US"},"nonUSShop":true,
                        "pickInfo":"' . $add . '","pickDate":"' . $date . '","pickTime":"12:00 PM",
                        "dropInfo":"' . $add . '","dropDate":"' . $dropDate . '","dropTime":"12:00 PM","couponNumber":"","couponInstances":"","couponRateCode":"","discountNumber":"","rateType":"","residency":"US","age":25,"wizardNumber":"","lastName":"","userSelectedCurrency":"","selDiscountNum":"","promotionalCoupon":"","preferredCarClass":"","membershipId":"","noMembershipAvailable":false,"corporateBookingType":"","enableStrikethrough":"true","amazonGCPayLaterPercentageVal":"","amazonGCPayNowPercentageVal":"","corporateEmailID":""}',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json, text/plain, */*',
    'bookingType: car',
    'channel: Digital',
    'Content-Type: application/json',
    'deviceType: bigbrowser',
    'DIGITAL-TOKEN: ' . $digitoken,
    'domain: us',
    'initReservation: true',
    'locale: en',
    'password: BUDCOM',
    'Referer: https://www.budget.com/en/home',
    'sec-ch-ua: "Google Chrome";v="113", "Chromium";v="113", "Not-A.Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36',
    'userName: BUDCOM',
    'Cookie: ' . $mycookie
  ),
));

$response = curl_exec($curl);

curl_close($curl);
// echo $response;


    $datar = json_decode($response, false);
    $state = '-';
    $city = '-';
    $Address = '-';
    $fullAddr = '-';
    if (property_exists($datar, 'reservationSummary')){
        $state = $datar->reservationSummary->pickLoc->address->state;
        $city = $datar->reservationSummary->pickLoc->address->city;
        $Address = $datar->reservationSummary->pickLoc->address->address1;
        $fullAddr = $datar->reservationSummary->pickLoc->address->address1 . " "
                    . $datar->reservationSummary->pickLoc->address->city  . " "
                    . $datar->reservationSummary->pickLoc->address->state  . " "
                    . $datar->reservationSummary->pickLoc->address->zipCode  . " "
                    . $datar->reservationSummary->pickLoc->address->country;
    }
    if (property_exists($datar, 'vehicleSummaryList')){
        $carAmount = count($datar->vehicleSummaryList);
        for ($ca=0; $ca < $carAmount; $ca++) {
            $eachCar = $datar->vehicleSummaryList[$ca];
            $Class = $eachCar->carGroup;
            $Model = $eachCar->makeModel;
            $paynow = '-';
            $paylater = '-';
            $paynowtotal = '-';
            $paylatertotal = '-';
            if (property_exists($eachCar, 'payNowRate')) {
                $paynow = $eachCar->payNowRate->amount;
                $paynowtotal = $eachCar->payNowRate->totalRateAmount;
            }
            if (property_exists($eachCar, 'payLaterRate')) {
                $paylater = $eachCar->payLaterRate->amount;
                $paylatertotal = $eachCar->payLaterRate->totalRateAmount;
            }
            $output = array(
                'PickDate' => $date,
                'DropDate' => $dropDate,
                'LocationCode' => $add,
                'State' => $state,
                'City' => $city,
                'Fulladdress' => $fullAddr,
                'Class' => $Class,
                'Type' => $Model,
                'payNowPrice' => $paynow,
                'payLaterPrice' => $paylater,
                'payNowTotal' => $paynowtotal,
                'payLaterTotal' => $paylatertotal,
                'Link' => $link
            );
            array_push($outputs, $output);
        }
    }
    // echo $response1;
    
}
echo json_encode($outputs);
// echo $output;
} else {
    http_response_code(405);
    echo json_encode(array('error' => 'Method not allowed'));
}

?>
