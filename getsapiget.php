<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
$mycookie =  'datacenter=cwdc; visitorId=cwdc-Aa52a290a-6515-4ed6-8512-a7d0521ccee6; APISID=74922dee-b1a0-4a89-afa1-c3d2da08b950; digital-token=371d0d68-e828-496e-ba86-381461f4acfb-01-cwdc-ho4550; region=useast1; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-wdc|~rv=15~m=avis-webapi-useast1-aws:0|avis-us-wdc:0|~os=7f956ca2417c5e686d715889b6a30f65~id=3d374a9047b14688e617d3c2802c5d50; _gcl_au=1.1.1487217981.1684332171; _gid=GA1.2.632668888.1684332174; pxcts=863206b7-f4bb-11ed-9aed-675073684972; _pxvid=8631f939-f4bb-11ed-9aed-675073684972; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; optimizelyEndUserId=oeu1684342230187r0.05111952207309911; _pxhd=33744008a959805be71bd329e111105cb28e34efcb02b622e64ce437dc989725:8631f939-f4bb-11ed-9aed-675073684972; QuantumMetricSessionID=1983394f47ac57748fd2c69a9ed3dce7; QuantumMetricUserID=21942422de4b23332591623bd89f450a; __qca=P0-697024246-1684342242252; _fbp=fb.1.1684342251081.1152686613; __idcontext=eyJjb29raWVJRCI6IjJQdmYwZFJkbmN2RmlrZjAyZXJGQ1FuSXRoUiIsImRldmljZUlEIjoiMlB2ZjBlZEsyNFJWZktKNTNmY3g0WkhxT2FYIiwiaXYiOiIiLCJ2IjoiIn0%3D; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; _clck=1dvy4xe|2|fbo|0|1232; _clsk=lyvv2p|1684342425027|1|1|p.clarity.ms/collect; _ga_8L27T28KZS=GS1.1.1684342187.2.1.1684343995.60.0.0; _ga=GA1.2.489667513.1684332174; _gat_UA-6997633-3=1; _uetsid=f5d1d620f4d211ed8595e1e8a772d9f5; _uetvid=f5d1de20f4d211eda5ed75abcc5b7fa1; RT="z=1&dm=avis.com&si=b3a09a51-f1bd-4638-bfdc-aa17ea12108e&ss=lhrxvkiq&sl=3&tt=u09&bcn=%2F%2F173bf104.akstat.io%2F&ld=11yks&nu=43hl6rgh&cl=128p7"';
$digitoken =  'eyJjdHkiOiJKV1QiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiZGlyIn0..MoZJkbtVKuXJyiHb.5lHJ3ChrlU419jX1HWf3fGdM3v1UBdBbTPat9Jyite0tAaGgiL5golwAosuMMOPvnrlBh9NPw-Te7IHY4uMWbrGysXX5qFSbayfaJfHH1XF9-XW29gg77AuK2k9KVeJDX4rYzizxgvdUcb6yi0-ZK1fvUCz0EMycM4mNcGWq9UAh6gLV359Dl9gPisbXytMm6vveSVj2tk-J7ypxqfInO0WMeRiIyOnq0rlcJ7IMjn80XgYD323OIMgTpvb931xOZCtILMbcwPt7a0VJQNqWgWJKMZdpUVK2x1bnvyS53o7AY9AT_VG7VhLlUBUtBw5Z17iIkM6H27mR_TfsAXAYWdDv_-vVgXwKsiGDhk5HOijmxAR8KUtx4uPEV1NCTGClsC6LOqSd_CFlAtXE11F4_YDSx4x2kkAgB5Zxh4g50UxRyvqmS3fd3Kn2w3CUm7LhGZn3f2iYM54T0IwQccwtzym-eEB4t8IMiKRlXeCx1oXeTaRWZKQaBuB5xYSWAaLDJgKXhu2r8FB7EfRE_lqRojgnY4c1NSnnMCEG72TYDsfkMVe2pMUVkE5_L_02lnGzLL0FEIDa0pRJZ-16L-cWSXCVbLekjCAl-aVd9qWwOHs5vj-YQJvCpHMB9N4wcdYfdZ1Ic6P0r1YVA0hFOVSUmjqc8mFHC0jsTMh5cPMg1uWQ8FUsDAriDD1jYP5lWRegcb85XTJKGcNhFU830tEFk7W009yqoAV-4qoIy-oRg_sikjofEjIOSh3y44f1qQFvxeZhFwz0sOsjhLRbtU2d_pJd54fk01xaFNkHI3b-Zo4YALsB9xW9ivsm972nihR75AOFJ8ucB1hdpEIzGVKZ8gSccnFcOcWox4f02ietPH9lLpyJS_aa714Z71ErvbLWTMtGrtOa78B9qTZb8l9utFo6M4E0z6RC6VG4o2WqrkJEn3hSrwvvLleuvJbj5VQuvcnKnViLQ1D1GYbZvdJfxUQAyj7A7Tl0x5DLFO7Kg6lyjmTVTTv1SCvm8G8gpn93uAifxOVfdu6Ry7pS0J7NYqdvcoCVPf0S-hmsdWb42mRHKe4mgg6zmKJW-WFxYvMWkYBLiEGrMO8rIVN9A0dKzlwM2DEeYIZQaS5sWQnH7Uc_d-Aaz6q1fZCRWIQ3_uUO_deRZ46ZcXKxDwMFi5w_g7XPnHKiPI1Yr2xNm0duEBy0zqbk_aXfoOc3mZK57Cl0TJ9r10oyuRxTz0yJ2GZurN1haQFy241e57vbEHcW4bxqdOuyp4JuFqeX5kwK5FrauyvHL7fghmQYMSqdMJ8qlZ2GuuF23ST867AexYaIEpEPb2SKGjowy7JvuWxL8kyq6jQv35nc5G9lHjBn9Lgtx1j9sQdRbJlPOAJzXRBfjW_Q-vgK0ZthveeaRVDL5OLc5FwuMojbsk5o0mQBc4clndxQBA.Q6FdwS6Cm0a_sPz36IekXg';

// session_start(); 
$day = $_GET['day'];
$days = $_GET['days'];
$currentDate = date("Y/m/d") . date("h:i:sa");
$orgDate = $day;
$newDate1 = date("m-d-Y", strtotime($orgDate));
$date = str_replace('-', '/', $newDate1);
$newDate = date("m/d/Y", strtotime($date));

$dateVal = $day;
$dropDate = date('m/d/Y', strtotime($dateVal. ' + ' . $days . ' days'));

$adds = explode('/', $_GET['add']);
$links = explode(',', $_GET['link']);
$outputs = [];
for ($c = 0; $c < count($adds); $c ++){
    $add = strtoupper($adds[$c]);
    $link = $links[$c];
    // echo $day;
    // echo $days;
    // echo $add;
    // echo $link;
    // echo $digitoken;
    // echo $mycookie;

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://www.avis.com/webapi/reservation/vehicles',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{"rqHeader":{"brand":"","locale":"en_US"},"nonUSShop":true,
    "pickInfo":"' . $add . '","pickDate":"' . $date . '",
    "pickTime":"12:00 PM","dropInfo":"' . $add . '","dropDate":"' . $dropDate . '",
    "dropTime":"12:00 PM","couponNumber":"","couponInstances":"","couponRateCode":"","discountNumber":"","rateType":"","residency":"US","age":25,"wizardNumber":"","lastName":"","userSelectedCurrency":"","selDiscountNum":"","promotionalCoupon":"","preferredCarClass":"","membershipId":"","noMembershipAvailable":false,"corporateBookingType":"","enableStrikethrough":"true","amazonGCPayLaterPercentageVal":"","amazonGCPayNowPercentageVal":"","corporateEmailID":""}',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'userName: AVISCOM',
        'digital-token: ' . $digitoken,
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36',
        'cookie: ' . $mycookie
    ),
    ));

    $response = curl_exec($curl);
    // echo $response;

    curl_close($curl);

    $datar = json_decode($response, false);
    $state = '';
    $city = '';
    $Address = '';
    $fullAddr = '';
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
            if (property_exists($eachCar, 'payNowRate')) 
                $paynow = $eachCar->payNowRate->amount . $eachCar->payNowRate->currency;
            else $paynow = '';
            if (property_exists($eachCar, 'payLaterRate')) 
                $paylater = $eachCar->payLaterRate->amount . $eachCar->payLaterRate->currency;
            else $paylater = '';
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
