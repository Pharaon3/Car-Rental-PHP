
<!DOCTYPE html>
<html>

<head>
    <title>
        Car Rental Information
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
    <div class="formDiv">
        <form id='myForm' name="theForm" action="" autocomplete="off" method="post">
            <div>
                <input type="hidden" name="try" value="<?=(isset($_POST['try']) ? $_POST['try']+1 : 0)?>">
                <p>How many day would you like to rent for?</p>
                <div>
                    <input class="input" type="text" name="days" id="days" style="display:none">
                    <div>
                        <input class="button" type="button" value="30" style="cursor: pointer;" onclick="set30()" id="set301">
                        <input class="button" type="button" value="60" style="cursor: pointer;" onclick="set60()" id="set601">
                        <input class="button" type="button" value="90" style="cursor: pointer;" onclick="set90()" id="set901">
                        <input class="button" type="button" value="330" style="cursor: pointer;" onclick="set330()" id="set3301">
                        <input class="button" type="button" value="custom" style="cursor: pointer;" onclick="setDayCustom()">
                    </div>
                </div>
            </div>
            <div>
                <p>Start from?</p>
                <div>
                    <input class="input" type="date" name="day" id="day" style="display:none">
                    <div>
                        <input class="button" type="button" value="Today" style="cursor: pointer;" onclick="setToday()" id="setToday" disabled>
                        <input class="button" type="button" value="Tomorrow" style="cursor: pointer;" onclick="setTomorrow()" id="setTomorrow" disabled>
                        <input class="button" type="button" value="next month" style="cursor: pointer;" onclick="setMonth()" id="setMonth" disabled>
                        <input class="button" type="button" value="custom" style="cursor: pointer;" onclick="setFromCustom()">
                    </div>
                </div>
            </div>
            <div>
                <input class="button" type="button" value="Export" style="width: 100%" onclick="document.getElementById('myForm').submit()">
            </div>  
            
        </form>  
    </div>
</body>
<style>
    *{
        font-family: sans-serif;
        font-size: 20px;
    }
    .formDiv{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 500px;
        width: 600px;
        background-color: white;
        border-radius: 50px;
    }
    body{
        background-color: gainsboro;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .input{
        width: 100%;
    }
    div{
        margin: 10px;
    }
    .button {
        cursor: pointer;
        background-color: yellow;
        border-radius: 15px;
        min-width: 80px;
        min-height: 40px;
        border-color: white;
        padding: 10px;
    }
    .button:active  {
        background-color: wheat;
    }
</style>
<script>
    function set30(){
        $("#days").val(30)
        resetDay()
        $("#set301").css("background-color", "darkorange")
    }
    function set60(){
        $("#days").val(60)
        resetDay()
        $("#set601").css("background-color", "darkorange")
    }
    function set90(){
        $("#days").val(90)
        resetDay()
        $("#set901").css("background-color", "darkorange")
    }
    function set330(){
        $("#days").val(330)
        resetDay()
        $("#set3301").css("background-color", "darkorange")
    }
    function setDayCustom(){
        $("#days").css("display", "block")
        resetDay()
    }
    function resetDay() {
        $("#set301").css("background-color", "yellow")
        $("#set601").css("background-color", "yellow")
        $("#set901").css("background-color", "yellow")
        $("#set3301").css("background-color", "yellow")
    }
    function setToday(){
        var datepicker = $('#day');
        // datepicker.datepicker();
        datepicker.datepicker('setDate', new Date());
    }
    function setFromCustom(){
        $("#day").css("display", "block")
    }
</script>
</html>

<?php

// $mycookie = 'datacenter=cwdc; visitorId=cwdc-A30671a44-471f-41bd-8cad-3daef295e31b; APISID=30d9ceca-eadb-4d16-b481-2b97d5cb5aa2; digital-token=98470088-a850-4964-92b1-10ad70e94557-02-cwdc-ho3859; region=useast1; optimizelyEndUserId=oeu1683558557050r0.0976546555374116; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=67~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=0ad224a7ce787f6ba26a479a0460d2e3; _pxhd=9f90cd42a3c513cd008b13c831a1bc025ebb7d1e43d57404e8de308162168353:b5b76ad6-edb2-11ed-9e5c-706a78416f4a; _gcl_au=1.1.1208556564.1683558815; _gid=GA1.2.2019665117.1683558820; _pxvid=b5b76ad6-edb2-11ed-9e5c-706a78416f4a; pxcts=eaf3899e-edb2-11ed-9342-62436d415a4b; QuantumMetricUserID=0465c6e9c976587d441370d6d5dbb31f; __qca=P0-1150698787-1683558833603; _fbp=fb.1.1683558850982.1778528935; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _uetsid=e8a06340edb211edb381436783c91f7a; _uetvid=e8a0af00edb211eda286b555c1a32b02; _ga=GA1.2.802961379.1683558820; _clck=1tc5h6n|1|fbg|0; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; QuantumMetricSessionID=04067eba6b33e6bced529eb1c2dbd10a; _px2=eyJ1IjoiNDY4ODM3ODAtZWU1MC0xMWVkLTgwNTAtOTU2ZjM3YWMwNmFiIiwidiI6ImI1Yjc2YWQ2LWVkYjItMTFlZC05ZTVjLTcwNmE3ODQxNmY0YSIsInQiOjE2ODM2Mjc2NzI0MTYsImgiOiJhYjk1NmMyMTQ1NTUxNzYwZjk2MzU2NzI4YjUxMDJiY2FiZDczMzc4NDkxZWJmYmNhZDNmZWE0N2VjNjFiOTI0In0=; _gat_UA-6997633-3=1; _clsk=1c0qvum|1683627495638|2|1|s.clarity.ms/collect; _ga_8L27T28KZS=GS1.1.1683626405.3.0.1683627497.60.0.0; RT="z=1&dm=avis.com&si=71f1d09b-b765-4c45-b99b-499a3152df1f&ss=lhg3oini&sl=0&tt=0&bcn=%2F%2F02179919.akstat.io%2F&nu=43hl6rgh&cl=nu1l"';
$mycookie0 = 'datacenter=';
$mycookie1 = '; visitorId=cwdc-A30671a44-471f-41bd-8cad-3daef295e31b; APISID=30d9ceca-eadb-4d16-b481-2b97d5cb5aa2; digital-token=';
$mycookie2 = '; region=useast1; optimizelyEndUserId=oeu1683558557050r0.0976546555374116; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=67~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=0ad224a7ce787f6ba26a479a0460d2e3; _pxhd=';
$mycookie3 = '; _gcl_au=1.1.1208556564.1683558815; _gid=GA1.2.2019665117.1683558820; _pxvid=b5b76ad6-edb2-11ed-9e5c-706a78416f4a; pxcts=eaf3899e-edb2-11ed-9342-62436d415a4b; QuantumMetricUserID=0465c6e9c976587d441370d6d5dbb31f; __qca=P0-1150698787-1683558833603; _fbp=fb.1.1683558850982.1778528935; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _uetsid=e8a06340edb211edb381436783c91f7a; _uetvid=e8a0af00edb211eda286b555c1a32b02; _ga=GA1.2.802961379.1683558820; _clck=1tc5h6n|1|fbg|0; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; QuantumMetricSessionID=04067eba6b33e6bced529eb1c2dbd10a; _px2=eyJ1IjoiNDY4ODM3ODAtZWU1MC0xMWVkLTgwNTAtOTU2ZjM3YWMwNmFiIiwidiI6ImI1Yjc2YWQ2LWVkYjItMTFlZC05ZTVjLTcwNmE3ODQxNmY0YSIsInQiOjE2ODM2Mjc2NzI0MTYsImgiOiJhYjk1NmMyMTQ1NTUxNzYwZjk2MzU2NzI4YjUxMDJiY2FiZDczMzc4NDkxZWJmYmNhZDNmZWE0N2VjNjFiOTI0In0=; _gat_UA-6997633-3=1; _clsk=1c0qvum|1683627495638|2|1|s.clarity.ms/collect; _ga_8L27T28KZS=GS1.1.1683626405.3.0.1683627497.60.0.0; RT="z=1&dm=avis.com&si=71f1d09b-b765-4c45-b99b-499a3152df1f&ss=lhg3oini&sl=0&tt=0&bcn=%2F%2F02179919.akstat.io%2F&nu=43hl6rgh&cl=nu1l"';
$mycookie = 'datacenter=cwdc; visitorId=cwdc-A30671a44-471f-41bd-8cad-3daef295e31b; APISID=50f2a7f7-01c3-4659-a34c-6dcf93b939ad; digital-token=24871795-37a0-41ed-ac9e-d57a4cf04792-02-cwdc-mr5457; region=useast1; optimizelyEndUserId=oeu1683558557050r0.0976546555374116; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=67~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=0ad224a7ce787f6ba26a479a0460d2e3; _pxhd=9f90cd42a3c513cd008b13c831a1bc025ebb7d1e43d57404e8de308162168353:b5b76ad6-edb2-11ed-9e5c-706a78416f4a; _gcl_au=1.1.1208556564.1683558815; _gid=GA1.2.2019665117.1683558820; _pxvid=b5b76ad6-edb2-11ed-9e5c-706a78416f4a; pxcts=eaf3899e-edb2-11ed-9342-62436d415a4b; QuantumMetricUserID=0465c6e9c976587d441370d6d5dbb31f; __qca=P0-1150698787-1683558833603; _fbp=fb.1.1683558850982.1778528935; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _clck=1tc5h6n|1|fbh|0; QuantumMetricSessionID=04067eba6b33e6bced529eb1c2dbd10a; _ga=GA1.2.802961379.1683558820; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; _px2=eyJ1IjoiMjI5NTRkMzAtZWVkOC0xMWVkLTgxNjctYWY3MDVlZGM0MGNkIiwidiI6ImI1Yjc2YWQ2LWVkYjItMTFlZC05ZTVjLTcwNmE3ODQxNmY0YSIsInQiOjE2ODM2ODY1NTU3MjUsImgiOiIwODY1ZTE1Y2ZhNTUzN2M4YmUwZTNiYzgzYjc2M2RhNmRiMWRhNTRkYmU0OTM2YTNkYjE4NjI4NzM2NTBmZDRhIn0=; _gat_UA-6997633-3=1; _clsk=1qkiqds|1683686273700|3|0|s.clarity.ms/collect; _ga_8L27T28KZS=GS1.1.1683684702.6.1.1683686284.60.0.0; _uetsid=e8a06340edb211edb381436783c91f7a; _uetvid=e8a0af00edb211eda286b555c1a32b02; RT="z=1&dm=avis.com&si=71f1d09b-b765-4c45-b99b-499a3152df1f&ss=lhh3c0zw&sl=0&tt=0&bcn=%2F%2F684dd32a.akstat.io%2F&nu=43hl6rgh&cl=k74"';

$digitoken = 'eyJjdHkiOiJKV1QiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiZGlyIn0..vtzX_f1f98sEmKgB.aPqv63HW3ZjMI0tEB1JYmmPV3atKc5CjNjbdqHYHUeBArMvLDYb7drCeGGX90Vtezvi7T-iN_6mP7o2bP-p2HrM51A2UUYDTAt7RjUAz48hBmBojRrvDaPZuYKjoS4AwSMfbAv3HeKo-5DL8dcHEpuA_-IstiT3-XjPwmBcTUDc0yIOUsFq8iarI853nSZ9bK7KDzYjYEn5nvLne_d-EJ4kVImVovirrfzINczXku4Bdq8cg2i0718Ayu82Vk2J6-9XDX0hCQ6Q0jm_OHqMHziq_yP8-7hJuVYpRsFOUj5HHixdpl4ZmbwsK2XR5Er-ky-oxa7rt8LjFq8whoPIAebjgqIcOnz23-cLWaEkRuDConJUs3czuf7XYSe6-W3SONtl0XShuZVkZErifEOPb6l5-RufMZw7_Gea673kZTs9_0RaRUNm1DEVFbEdjZchBJuC5_cIJ5wG4s7f_Vx9PO4DoKJTzVGLaPvRnzeW-FZ5YeqKvKTdbqgcpZ-oQtFhtAwbT8sIKsNBTRJ89nyfsPqz1bsJRSfE7DMnduDBJ7_dgNgUeEk30BWt4oL_bCTRNPAuqfrNHr7GhDVe8mcpELA-nVdBF8k8tifo3KxjP4vdEoEPwZyQrkiZkgBPfOfCE1Gy1uSSOTfV7i70v2Thg75F1ZlepH90KuRILJArnlbuC2RQakwB1CDS4izCpLrk7w6J7UUwstSXDxQAI0R3q5gEfGPGJQnmXyocAIs2kV-kgbm0SBmZiHx9qotQ-h04kMR9EZlHuApOjGrrOBhUK3qagDCZ5Z97DWMTPnHtIZPt_kh4hGHgAa1zQDf50XZxh2E7i6kbfRwwUtuZmPmAEUp1h7qlvrDAnkN0FkfXuXbAs0J8DbXV7lEOQZRAKDhA_K27PGPZYoSf7nDEl5Usz5gg10UmsBQGz-lQe9MbZcOiyOXD1OXvZd75n347qiz59M3m0RK-LEaIdVDOyVfIq-DjKU0ZvihBnpizp7E_awWxd7h6RGXsUaLaLKGqaem6nu4bOQXTZ62iShnJgk6pSDShtXnBBH8vNJL3M2Tl-Oaz7IXYm28u7EJW2aKChrcWKl-Wn3mGauhkPDMG-Sfm9CrQ1Ym4K1obxAWQYDLhZPWmZTAuudLXkLGVzLIYVW40jvWhGXwezbQRQyA5AP0ZoQYp-_o7Jq1CZW_Ssf-cK9kwxaG7lpMGhZXJg8kwJmXhhW9vQkY54gkzER9a6f0vvzQF_4TK15kMEGULMiSXbJYAoPLaJLlft_4knm64BFMsEZhLQ8m0PQ2NtN8CRHwGSypr6IqQh1GREF7f92NM4TCBEe-y7KEwRMT-RViFnJdttk4DGMWqWo_rwl3q5-ouMKYbQn10iZ6oXLqyiLbCego0RRLGA20C3fezypSPEvokKQDwN-LxWUwuQYzB5MhT82A.S5NfvOYXYakOBWlyfy15wQ';
$sheetLink = 'https://script.google.com/macros/s/AKfycbxZl7Piw_ZrqIYbJUHkHDcvX2r7TOn2SJ2zPEdeYBOraPQ3DNKAo4g4uhI360FKwbs/exec';

session_start();
$try  = 0;
if (isset($_POST['try'])) {
  $try = $_POST['try']+1;
  if ($try == 1){
    $day = $_POST['day'];
    $days = $_POST['days'];

    $orgDate = $day;  
    $newDate1 = date("m-d-Y", strtotime($orgDate));  
    $date = str_replace('-', '/', $newDate1);  
    $newDate = date("m/d/Y", strtotime($date));  

    $dateVal = $day;
    $dropDate = date('m/d/Y', strtotime($dateVal. ' + ' . $days . ' days'));

    $row = 1;
    if (($handle = fopen("location.csv", "r")) !== FALSE) {        
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
                        if ($datar->vehicleSummaryList[$ca]->makeModel) $Model = $Class . "," . $datar->vehicleSummaryList[$ca]->makeModel;
                        else $Model = $Class . ", ";
                        if ($datar->vehicleSummaryList[$ca]->payNowRate->amount) $paynow = $paynow . "," . $datar->vehicleSummaryList[$ca]->payNowRate->amount . $datar->vehicleSummaryList[$ca]->payNowRate->currency;
                        else $paynow = $paynow . ", ";
                        if ($datar->vehicleSummaryList[$ca]->payLaterRate->amount) $paylater = $paylater . "," . $datar->vehicleSummaryList[$ca]->payLaterRate->amount . $datar->vehicleSummaryList[$ca]->payLaterRate->currency;
                        else $paylater = $paylater . ", ";
                    }
                    echo "carAmount: " . $carAmount . "<br>";
                    echo "Class: " . $Class . "<br>";

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
                            'Link' => $data[$c],
                            'formDataNameOrder' => '["PickDate","DropDate","LocationCode","State","City","Fulladdress","Class","Type","payNowPrice","payLaterPrice","Link"]',
                            'formGoogleSheetName' => 'responses',
                            'formGoogleSendEmail' => 'edmonddantes000313@gmail.com',
                            'amount' => $carAmount),
                        ));
                    echo "curl1: " . $curl1 . "<br>";
                    $response1 = curl_exec($curl1);
                    }
                }
            }
        }
        fclose($handle);
    }
}  
?>
