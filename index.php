<?php

// require __DIR__ . '/vendor/autoload.php';

// // configure the Google Client
// $client = new \Google_Client();
// $client->setApplicationName('Car Rental');
// $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
// $client->setAccessType('offline');
// // credentials.json is the key file we downloaded while setting up our Google Sheets API
// $path = './credentials.json';
// $client->setAuthConfig($path);

// // configure the Sheets Service
// $service = new \Google_Service_Sheets($client);

// // the spreadsheet id can be found in the url https://docs.google.com/spreadsheets/d/143xVs9lPopFSF4eJQWloDYAndMor/edit
// $spreadsheetId = '1y3bKqZbEkLsep2uWOzNlbDuFiKGys-DaeYqNugNJP8k';
// $spreadsheet = $service->spreadsheets->get($spreadsheetId);
// var_dump($spreadsheet);


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
                            'digital-token: eyJjdHkiOiJKV1QiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiZGlyIn0..Par2vNy1aRg0BLPC.G4VbeSo9CDx50b6Usv2HN567NxyPgZC9VHsI394UpDNRuaT_BjcVnGGGQw1N-18W5nAJZ0akHjIOrrdEhv4RZBwgqZokQPzSlWcUsH4DkmWaaU0nD9MKxnstbBuLvFyQum3l75oiGxg_TFe0FUiZhSBqeJbHJTVYGE-eOFaym8SQRZA9JE5_XrFxREU4NqPLYwgJGaa7o1lDhKHdctailGXBKOInGQbCd2kZhx73In8ihhC9JnRfFS8LJu41SPjM2-WKPmDoviey694e2F2HRj0LzTAL-_21G1tkOKGKNyE8Dk4_nNH3fNar8kA.fjRmbWvq9m9AwC6hbW4AIA',
                            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36',
                            'cookie: datacenter=cwdc; visitorId=cwdc-A11d57d0c-9e80-4903-8697-d77b1b5ae89f; APISID=5e00ba78-8599-4d33-a255-e52df3dcec11; digital-token=d87ebf1e-1697-444e-9527-02fca5720182-01-cwdc-ho3914; region=useast1; optimizelyEndUserId=oeu1682453900484r0.8156270510527024; _gcl_au=1.1.293317964.1682453933; __qca=P0-867025579-1682453948212; pxcts=72134ae0-e3a6-11ed-8ce7-4e4148547870; _pxvid=721335c3-e3a6-11ed-8ce7-4e4148547870; QuantumMetricUserID=4f01e34040f2c48f318bfb8af495a9b3; _fbp=fb.1.1682453977283.1305752564; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=76~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=8661c2a99422d53af484f8792993eacd; _gid=GA1.2.2071928034.1683022607; _clck=7g3r8s|1|fb9|0; _pxhd=7ce3f1782a4dc1f72337e94634a8050116935e393a1c8fb16a19ec4eb94a5573:721335c3-e3a6-11ed-8ce7-4e4148547870; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _gat_UA-6997633-3=1; _uetsid=726a9010e8d211edbf2a99ca79df9e1f; _uetvid=6e772780e3a611eda306a3d6364fbda2; _ga_8L27T28KZS=GS1.1.1683108879.9.0.1683108879.60.0.0; _ga=GA1.2.48087019.1682453947; RT="z=1&dm=avis.com&si=d4f2f80e-675c-4436-8d2e-031048187205&ss=lh7jjra6&sl=0&tt=0&bcn=%2F%2F02179918.akstat.io%2F&nu=43hl6rgh&cl=uni"'
                        ),
                    ));

                    $response = curl_exec($curl);

                    curl_close($curl);
                    $data = json_decode($response, false);

                    $carAmount = count($data->vehicleSummaryList);
                    for ($ca=0; $ca < $carAmount; $ca++) {
                        $fullAddr = $data->reservationSummary->pickLoc->address->address1 
                                    . $data->reservationSummary->pickLoc->address->city 
                                    . $data->reservationSummary->pickLoc->address->state 
                                    . $data->reservationSummary->pickLoc->address->zipCode 
                                    . $data->reservationSummary->pickLoc->address->country;

                        $newRow = [
                            $date,
                            $dropDate,
                            $add,
                            $data->reservationSummary->pickLoc->address->state,
                            $data->reservationSummary->pickLoc->address->city,
                            $data->reservationSummary->pickLoc->address->address1,
                            $fullAddr,
                            $data->vehicleSummaryList[$ca]->carGroup,
                            $data->vehicleSummaryList[$ca]->makeModel,
                            $data->vehicleSummaryList[$ca]->payNowRate->amount . $data->vehicleSummaryList[$ca]->payNowRate->currency,
                            $data->vehicleSummaryList[$ca]->payLaterRate->amount . $data->vehicleSummaryList[$ca]->payLaterRate->currency,
                            $data->webHeader->p13nDetailsMap->referrer,
                        ];
                        $rows = [$newRow]; // you can append several rows at once
                        // $valueRange = new \Google_Service_Sheets_ValueRange();
                        // $valueRange->setValues($rows);
                        // $range = 'Sheet1'; // the service will detect the last row of this sheet
                        // $options = ['valueInputOption' => 'USER_ENTERED'];
                        // $service->spreadsheets_values->append($spreadsheetId, $range, $valueRange, $options);

                        echo "Pick Date: ";
                        echo $date . "<br>";
                        echo "  Drop Date: ";
                        echo $dropDate . "<br>";
                        echo "  Location Code: ";
                        echo $add . "<br>";
                        echo "  State: ";
                        echo $data->reservationSummary->pickLoc->address->state . "<br>";
                        echo "  City: ";
                        echo $data->reservationSummary->pickLoc->address->city . "<br>";
                        echo "  Address: ";
                        echo $data->reservationSummary->pickLoc->address->address1 . "<br>";
                        echo "  Full address: ";
                        echo $data->reservationSummary->pickLoc->address->address1 . " ";
                        echo $data->reservationSummary->pickLoc->address->city . " ";
                        echo $data->reservationSummary->pickLoc->address->state . " ";
                        echo $data->reservationSummary->pickLoc->address->zipCode . " ";
                        echo $data->reservationSummary->pickLoc->address->country . "<br>";
                        echo "  Class: ";
                        echo $data->vehicleSummaryList[$ca]->carGroup . "<br>";
                        echo "  Type: ";
                        echo $data->vehicleSummaryList[$ca]->makeModel . "<br>";
                        echo "  payNowPrice: ";
                        echo $data->vehicleSummaryList[$ca]->payNowRate->amount . $data->vehicleSummaryList[$ca]->payNowRate->currency . "<br>";
                        echo "  payLaterPrice: ";
                        echo $data->vehicleSummaryList[$ca]->payLaterRate->amount . $data->vehicleSummaryList[$ca]->payLaterRate->currency . "<br>";
                        echo "  Link: ";
                        echo $data->webHeader->p13nDetailsMap->referrer . "<br>";
                        echo "<br>";
                    }
                    // echo "<br>";
                }
            }
        }
        fclose($handle);
    }
    }  
} 
?>

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
                        <input class="button" type="button" value="30" style="cursor: pointer;" onclick="set30()">
                        <input class="button" type="button" value="60" style="cursor: pointer;" onclick="set60()">
                        <input class="button" type="button" value="90" style="cursor: pointer;" onclick="set90()">
                        <input class="button" type="button" value="330" style="cursor: pointer;" onclick="set330()">
                        <input class="button" type="button" value="custom" style="cursor: pointer;" onclick="setDayCustom()">
                    </div>
                </div>
            </div>
            <div>
                <p>Start from?</p>
                <div>
                    <input class="input" type="date" name="day" id="day" style="display:none">
                    <div>
                        <input class="button" type="button" value="Today" style="cursor: pointer;" onclick="setToday()" disabled>
                        <input class="button" type="button" value="Tomorrow" style="cursor: pointer;" onclick="setTomorrow()" disabled>
                        <input class="button" type="button" value="next month" style="cursor: pointer;" onclick="setMonth()" disabled>
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
    }
    function set60(){
        $("#days").val(60)
    }
    function set90(){
        $("#days").val(90)
    }
    function set330(){
        $("#days").val(330)
    }
    function setDayCustom(){
        $("#days").css("display", "block")
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