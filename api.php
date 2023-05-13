<?php

header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
// $mycookie = 'datacenter=cwdc; visitorId=cwdc-A30671a44-471f-41bd-8cad-3daef295e31b; APISID=30d9ceca-eadb-4d16-b481-2b97d5cb5aa2; digital-token=98470088-a850-4964-92b1-10ad70e94557-02-cwdc-ho3859; region=useast1; optimizelyEndUserId=oeu1683558557050r0.0976546555374116; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=67~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=0ad224a7ce787f6ba26a479a0460d2e3; _pxhd=9f90cd42a3c513cd008b13c831a1bc025ebb7d1e43d57404e8de308162168353:b5b76ad6-edb2-11ed-9e5c-706a78416f4a; _gcl_au=1.1.1208556564.1683558815; _gid=GA1.2.2019665117.1683558820; _pxvid=b5b76ad6-edb2-11ed-9e5c-706a78416f4a; pxcts=eaf3899e-edb2-11ed-9342-62436d415a4b; QuantumMetricUserID=0465c6e9c976587d441370d6d5dbb31f; __qca=P0-1150698787-1683558833603; _fbp=fb.1.1683558850982.1778528935; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _uetsid=e8a06340edb211edb381436783c91f7a; _uetvid=e8a0af00edb211eda286b555c1a32b02; _ga=GA1.2.802961379.1683558820; _clck=1tc5h6n|1|fbg|0; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; QuantumMetricSessionID=04067eba6b33e6bced529eb1c2dbd10a; _px2=eyJ1IjoiNDY4ODM3ODAtZWU1MC0xMWVkLTgwNTAtOTU2ZjM3YWMwNmFiIiwidiI6ImI1Yjc2YWQ2LWVkYjItMTFlZC05ZTVjLTcwNmE3ODQxNmY0YSIsInQiOjE2ODM2Mjc2NzI0MTYsImgiOiJhYjk1NmMyMTQ1NTUxNzYwZjk2MzU2NzI4YjUxMDJiY2FiZDczMzc4NDkxZWJmYmNhZDNmZWE0N2VjNjFiOTI0In0=; _gat_UA-6997633-3=1; _clsk=1c0qvum|1683627495638|2|1|s.clarity.ms/collect; _ga_8L27T28KZS=GS1.1.1683626405.3.0.1683627497.60.0.0; RT="z=1&dm=avis.com&si=71f1d09b-b765-4c45-b99b-499a3152df1f&ss=lhg3oini&sl=0&tt=0&bcn=%2F%2F02179919.akstat.io%2F&nu=43hl6rgh&cl=nu1l"';
$mycookie0 = 'datacenter=';
$mycookie1 = '; visitorId=cwdc-A30671a44-471f-41bd-8cad-3daef295e31b; APISID=30d9ceca-eadb-4d16-b481-2b97d5cb5aa2; digital-token=';
$mycookie2 = '; region=useast1; optimizelyEndUserId=oeu1683558557050r0.0976546555374116; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=67~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=0ad224a7ce787f6ba26a479a0460d2e3; _pxhd=';
$mycookie3 = '; _gcl_au=1.1.1208556564.1683558815; _gid=GA1.2.2019665117.1683558820; _pxvid=b5b76ad6-edb2-11ed-9e5c-706a78416f4a; pxcts=eaf3899e-edb2-11ed-9342-62436d415a4b; QuantumMetricUserID=0465c6e9c976587d441370d6d5dbb31f; __qca=P0-1150698787-1683558833603; _fbp=fb.1.1683558850982.1778528935; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _uetsid=e8a06340edb211edb381436783c91f7a; _uetvid=e8a0af00edb211eda286b555c1a32b02; _ga=GA1.2.802961379.1683558820; _clck=1tc5h6n|1|fbg|0; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; QuantumMetricSessionID=04067eba6b33e6bced529eb1c2dbd10a; _px2=eyJ1IjoiNDY4ODM3ODAtZWU1MC0xMWVkLTgwNTAtOTU2ZjM3YWMwNmFiIiwidiI6ImI1Yjc2YWQ2LWVkYjItMTFlZC05ZTVjLTcwNmE3ODQxNmY0YSIsInQiOjE2ODM2Mjc2NzI0MTYsImgiOiJhYjk1NmMyMTQ1NTUxNzYwZjk2MzU2NzI4YjUxMDJiY2FiZDczMzc4NDkxZWJmYmNhZDNmZWE0N2VjNjFiOTI0In0=; _gat_UA-6997633-3=1; _clsk=1c0qvum|1683627495638|2|1|s.clarity.ms/collect; _ga_8L27T28KZS=GS1.1.1683626405.3.0.1683627497.60.0.0; RT="z=1&dm=avis.com&si=71f1d09b-b765-4c45-b99b-499a3152df1f&ss=lhg3oini&sl=0&tt=0&bcn=%2F%2F02179919.akstat.io%2F&nu=43hl6rgh&cl=nu1l"';
$mycookie = 'APISID=ae3a8578-9e5f-4c80-9fc4-0e69a3b32f99; datacenter=cdal; digital-token=ff5e498f-9a09-4560-8321-3ba405bc99a3-02-cdal-ho4621; visitorId=cdal-Ae5313339-cbb0-43d6-b002-8a2d085e999b; region=euwest1; akaalb_production_config=~op=avis_euwest1_webapi_private_lbid:avis-webapi-euwest1-aws|avis_com:avis-us-dal|~rv=4~m=avis-webapi-euwest1-aws:0|avis-us-dal:0|~os=7f956ca2417c5e686d715889b6a30f65~id=0860ccdc700a6f19640b089be290d627; optimizelyEndUserId=oeu1683912107383r0.2717481621668034; _gcl_au=1.1.795029169.1683912111; _gid=GA1.2.1923232218.1683912115; _pxhd=fa8099ece3d9348ca1f774b75d08b51ab9a48f3215491485d0e28e27d0f8515c:7ca26258-f0e9-11ed-a671-4d66654c5041; pxcts=7d277c5f-f0e9-11ed-9f0e-4f71526d4f41; _pxvid=7d276d1e-f0e9-11ed-9f0e-4f71526d4f41; __qca=P0-1976913073-1683912130648; QuantumMetricSessionID=c3a438d5d84a65058988c68bd97301fc; QuantumMetricUserID=ca9f8fbb4664e8f41335932438c66fcd; _fbp=fb.1.1683912152747.1109571630; __idcontext=eyJjb29raWVJRCI6IjJQaGJFcWRWU0wxajNjUTEwQ2JidXFVRHB3VCIsImRldmljZUlEIjoiMlBoYkVtZVhtN01kRUVEdnhJbk1tUVMxWEI2IiwiaXYiOiIiLCJ2IjoiIn0%3D; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _ga_8L27T28KZS=GS1.1.1683912112.1.1.1683912521.31.0.0; _ga=GA1.2.1818303394.1683912112; _gat_wknd=1; RT="z=1&dm=avis.com&si=915f8d58-7a8e-4a6d-b4a0-9734f0465561&ss=lhkts8dn&sl=4&tt=qq3&bcn=%2F%2F173bf10f.akstat.io%2F&nu=43hl6rgh&cl=pi9n"; _gat_UA-6997633-3=1; _uetsid=7cd7ed80f0e911edae1cd5be93006870; _uetvid=7cd81620f0e911ed9ad161115b2164fc';

$digitoken = 'eyJjdHkiOiJKV1QiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiZGlyIn0..ftvZ1fDfJM1ufmdU.2j5HrLM6nJR5_Y2mlQiOg-PhffHOZZ1SHVzsp8Hk2KW5p_pTJEpbKsEHp4eq2bdiD46nE-TTtdgPBQDp1mqWT6fcYVTMwJ7Vkll2VIOAlUO14pKuoEejfQSRLRGRbotMiXm2s3UsQv4hxdgG7Ko8vt4GMJ0QutspttAf_XB9GyhV2nHE1jWKx-iHNwGNfHeqvK5wXUClvuf_sUo5Aer8qtIICUuq9f-XmjVZT5NdBEXh8Q02k2E8YvM3sLhEci6j9Vbwtip-3zhoL6RTGwELZ1L9TFRAHI4YW7Z_ipPf3KyMjEP6xWo7Lv4b7k1zhqbd-v2nlXgTYzwDb9ac2km8NVCE6DHOHpOTgvFzzKmvriYpKlUGPdqI-GMK82MsJbaRXdvAOL6RpHdTXzHKSmdk32Ako3jeSD8QQFtw-cw9cAkRsYkXDEMcYtin0ssoYvgk1UQkvsz9ERoC-NcRvUcBjApKzl4jKA5H7i3-H0lTtXpnc_tO_2cZYDQL8nWD-rXHlGtAHhwlclfSygQEbFGrLX0n_mCgurRWU83XWKLdOukdd0o2-WB_gMXIjQQk3Ego8qtqeadG5DaeNN26Rv04l-ucOa_UpIGvM4cwnMQ5p5ohgFp2mjKp6nq3_JUVURT6GMlAlyJ_K5aHIF8dKDhAkdUEX9YsJiu9FPCFgHBtywgSYJobMeBFSKkuLV9I_mmEA2wZ9W0f71EJbuHmUZtnST87KK0ZFPk8a8m6woAdfwIH69nWGGnJoqAOwfRWnaeEi6_qT0ozlEvg67HbnokNbSND64mvOQCsooWcYmu09_JTskGIZibqpF4WL70fN5kJrp6avX69SXwYf0Evyy26OiLxRNl2A-wWiPXoT0LFRkM0Lz8uSnNqeGDOeQ5XqbXS8qZ8SbyM4AYZqFRvcD2reoY_n3NfajxabU0Se9-XnmxhCsoiYC_jpSavcsT8Lk8dSfTueA66N47pe7oo306--u4qe7WN-Dlg4dLJX2ex9AkCWl_-KLz7gpsKo7wdawoM6C1QOwrQmFPNWQ9JxPnPo2njuzZr0_tIcRNtuT7l6sZ_8IRhHpPvyCexMkNk_f8Z9Dd5BzNapww_ZLFAIFjSAPu0ORGdJq_get_Xlpewkw5cfq4rKPd7_Y0GU18_wlC_UjQqGpEQlDBuBEgZR_kWnP3wPudVVIArMlF82h9ua42a-OMCT9A6NnEcS3UDMPdokQJB_ljsTc6FVqsO2M8a7r0Gf0hA4MEqy-N_TdpKhfgX1yy-NTvOAlD8Qt6GwmFMDiSQDKZ60_3CakwrvR5C1F_twfFtu4S8DCTax3fLcfOJ6mTB5N9z5K_MDIPoGs6Qo7aazhmX_79b97yiLXwVVnKheWaefMp_25FZBP-pevPxsArQ_VJiHGhcBsF8Ig2V4JYoAWq3fYX0hzygqpILyH_dZg.Fk1fCfgBsumUQudRJw5N8Q';
$sheetLink = 'https://script.google.com/macros/s/AKfycbyxbyu6t91odJgs_axPS3wmH9DgVuWNSl6Es-FEEFQ_GCxEKhnTwB8TMLp7l636dPs/exec';

session_start();
$try  = 0;
    $day = $_GET['day'];
    $days = $_GET['days'];

    $orgDate = $day;  
    $newDate1 = date("m-d-Y", strtotime($orgDate));  
    $date = str_replace('-', '/', $newDate1);  
    $newDate = date("m/d/Y", strtotime($date));  

    $dateVal = $day;
    $dropDate = date('m/d/Y', strtotime($dateVal. ' + ' . $days . ' days'));

    $row = 1;
    if (($handle = fopen("location.csv", "r")) !== FALSE) {   
        $requests = array();   
        $csvdatas = array();  
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            $row++;
            for ($c=0; $c < $num; $c++) {
                $eachData = explode('/', $data[$c]);
                if (strpos($data[$c], "https://www.avis.com") !== false){
                    $add = $eachData[count($eachData) - 1];
                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://www.avis.com/webapi/reservation/vehicles',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_HEADER => 1,
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
                    $datar = json_decode(substr($response, $header_size), false);
                    // echo "datastring: " . substr($response, $header_size) . "<br>";
                    $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
                    $header = substr($response, 0, $header_size);
                    // echo "header:---";
                    // echo $header . "<br>";
                    $digitokenbeginPos = strpos($header, "digital-token");
                    $digitokenendPos = strpos($header, "Content-Security-Policy");
                    $digitoken = substr($header, $digitokenbeginPos + 15, $digitokenendPos - $digitokenbeginPos - 16);

                    $datacenterbeginPos = strpos($header, "datacenter");
                    $datacenterendPos = strpos(substr($header, $datacenterbeginPos), ";");
                    $datacenter = substr($header, $datacenterbeginPos + 11, $datacenterendPos - 11);

                    $digitaltokenbeginPos = strpos($header, "digital-token=");
                    $digitaltokenendPos = strpos(substr($header, $digitaltokenbeginPos), ";");
                    $digitaltoken = substr($header, $digitaltokenbeginPos + 14, $digitaltokenendPos - 14);

                    $_pxhdbeginPos = strpos($header, "_pxhd=");
                    $_pxhdendPos = strpos(substr($header, $_pxhdbeginPos), ";");
                    $_pxhd = substr($header, $_pxhdbeginPos + 6, $_pxhdendPos - 6);
                    $mycookie = $mycookie0 . $datacenter . $mycookie1 . $digitaltoken . $mycookie2 . $_pxhd . $mycookie3;
                    curl_close($curl);
                    

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
                    $request = array(
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
                        'Link' => $data[$c]);
                    $csvdata = array( $date, $dropDate, $add, $datar->reservationSummary->pickLoc->address->state,
                                    $datar->reservationSummary->pickLoc->address->city,
                                    $fullAddr,
                                    $Class,
                                    $Model,
                                    $paynow,
                                    $paylater,
                                    $data[$c]);
                }
                // echo $request;
                array_push($requests, $request);
                array_push($csvdatas, $csvdata);
            }
        }
    }
    fclose($handle);
    // $delimiter = ","; 
    // $filename = "data.csv"; 
     
    // Create a file pointer 
    // $f = fopen('php://memory', 'w'); 
     
    // // Set column headers 
    // $fields = array('PickDate', 'DropDate', 'LocationCode', 'State', 'City', 'Fulladdress', 'Class', 'Type', 'payNowPrice', 'payLaterPrice', 'Link'); 
    // fputcsv($f, $fields, $delimiter); 
     
    // // Output each row of the data, format line as csv and write to file pointer 
    // for($d = 0; $d < count($requests); $d ++){
    //     $row = $requests[$d];
    //     $lineData = array($row['PickDate'], $row['DropDate'], $row['LocationCode'], $row['State'], 
    //                         $row['City'], $row['Fulladdress'], $row['Class'], $row['Type'], $row['payNowPrice'], $row['payLaterPrice'], $row['Link']); 
    //     fputcsv($f, $lineData, $delimiter); 
    // } 
     
    // // Move back to beginning of file 
    // fseek($f, 0); 
     
    // // Set headers to download file rather than displayed 
    // header('Content-Type: text/csv'); 
    // header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    // //output all remaining data on a file pointer 
    // fpassthru($f);  
    // echo $requests;
    for ($c = 0; $c < count($requests); $c ++){
        $request = $requests[$c];
        $datar = json_decode($request, false);
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
        if($response1) echo $c;
    }
}
