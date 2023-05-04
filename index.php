<?php

$mycookie = 'datacenter=cwdc; visitorId=cwdc-A11d57d0c-9e80-4903-8697-d77b1b5ae89f; APISID=8698d539-a55b-4296-807e-88d40275d07d; digital-token=39db6a76-ffdd-481f-8beb-10d565d5bfc5-01-cwdc-ho4611; region=useast1; optimizelyEndUserId=oeu1682453900484r0.8156270510527024; _gcl_au=1.1.293317964.1682453933; __qca=P0-867025579-1682453948212; pxcts=72134ae0-e3a6-11ed-8ce7-4e4148547870; _pxvid=721335c3-e3a6-11ed-8ce7-4e4148547870; QuantumMetricUserID=4f01e34040f2c48f318bfb8af495a9b3; _fbp=fb.1.1682453977283.1305752564; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=76~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=8661c2a99422d53af484f8792993eacd; _pxhd=7ce3f1782a4dc1f72337e94634a8050116935e393a1c8fb16a19ec4eb94a5573:721335c3-e3a6-11ed-8ce7-4e4148547870; _gid=GA1.2.1801406899.1683197033; _clck=7g3r8s|1|fbb|0; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _uetsid=9116a780ea6811ed8927cd44226f92a1; _uetvid=6e772780e3a611eda306a3d6364fbda2; _px2=eyJ1IjoiYzUyMmZiZDAtZWE5ZS0xMWVkLWE4OGYtYWQ2ZGEwMzY2ZTkxIiwidiI6IjcyMTMzNWMzLWUzYTYtMTFlZC04Y2U3LTRlNDE0ODU0Nzg3MCIsInQiOjE2ODMyMjA2MTEwOTAsImgiOiJjZDJkOTdhYTcyZjJiN2U3NWVjYWFkNTQ5M2UwYTZmMTZiMzBkZGRjYmU5NzRkNTAzOWI2NWE4NGY2N2Y2MmVkIn0=; _clsk=dvmure|1683220329467|1|0|s.clarity.ms/collect; _ga_8L27T28KZS=GS1.1.1683220122.9.1.1683220342.60.0.0; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZFyvsgAaEACcYIUsUq16zFoJB0A+gHMmilOxQoaTTjABmFMBqFLlEdZu26DRjQF8gA; _ga=GA1.2.48087019.1682453947; QuantumMetricSessionID=34adbf2b53721f3491a7709f2b0ba0f9; _gat_UA-6997633-3=1; RT="z=1&dm=avis.com&si=d4f2f80e-675c-4436-8d2e-031048187205&ss=lh9dw5bu&sl=1&tt=1fuf&bcn=%2F%2F684dd32e.akstat.io%2F&ld=1h8x&nu=43hl6rgh&cl=3rzu"';
$digitoken = 'eyJjdHkiOiJKV1QiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiZGlyIn0..Anms3xOnsBAdsB42.JzW9cf0YsW5L4escwOeTX24aRdJTSr4EBoHEGsBY9EPvvDqJZh0oIzacKoDjBLv5N7SxumrROZLkbd8qQpbIxNEpxWyOcM0D-cKEc_kOEyq0TfY8OzohghCaLaMmz1NBH_HlVRBrfka7edN3-VjrFsc8Ou8Y1s7WCs2YLVfO-Dkd6knEz_1kD3A4kZJF8QMTtXPxiRX6CFyJTCLx_wM1_oACF-WkUaHcaPppo40BD6BEXa6wBelet3ECx8fkpllzQAc6jfkSYF4eZn75cmIuugum4y4L17Gs2ge0zD6hKFyXy3b4HAKX1v7SPo0.eXpBDYUqedEZ9zJ2eBn-Qw';
$sheetLink = 'https://script.google.com/macros/s/AKfycbxR9OBxf0v5zjVfSG-zsYnkmqLnzyklqJ8bW2ZTRUctHpFT4Sw4FKuR-6l12en89nQ/exec';

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
    
    // ob_start();
    // // Set PHP headers for CSV output.
    // header('Content-Type: text/csv; charset=utf-8');
    // header('Content-Disposition: attachment; filename=car_rental.csv');
    // // Create the headers.
    // $header_args = array( 'PickDate', 'DropDate', 'LocationCode', 'State', 'City', 'Address', 'Fulladdress', 'Class', 'Type', 'payNowPrice', 'payLaterPrice', 'Link');
    // $csvData = array();

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
                            'digital-token: ' . $digitoken,
                            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36',
                            'cookie: ' . $mycookie
                        ),
                    ));

                    $response = curl_exec($curl);

                    curl_close($curl);
                    $data = json_decode($response, false);

                    $carAmount = count($data->vehicleSummaryList);
                    for ($ca=0; $ca < $carAmount; $ca++) {
                        $state = $data->reservationSummary->pickLoc->address->state;
                        $city = $data->reservationSummary->pickLoc->address->city;
                        $Address = $data->reservationSummary->pickLoc->address->address1;
                        $Class = $data->vehicleSummaryList[$ca]->carGroup;
                        $Model = $data->vehicleSummaryList[$ca]->makeModel;
                        $fullAddr = $data->reservationSummary->pickLoc->address->address1 
                                    . $data->reservationSummary->pickLoc->address->city 
                                    . $data->reservationSummary->pickLoc->address->state 
                                    . $data->reservationSummary->pickLoc->address->zipCode 
                                    . $data->reservationSummary->pickLoc->address->country;

                        // $newRow = array(
                        //     $date,
                        //     $dropDate,
                        //     $add,
                        //     $data->reservationSummary->pickLoc->address->state,
                        //     $data->reservationSummary->pickLoc->address->city,
                        //     $data->reservationSummary->pickLoc->address->address1,
                        //     $fullAddr,
                        //     $data->vehicleSummaryList[$ca]->carGroup,
                        //     $data->vehicleSummaryList[$ca]->makeModel,
                        //     $data->vehicleSummaryList[$ca]->payNowRate->amount . $data->vehicleSummaryList[$ca]->payNowRate->currency,
                        //     $data->vehicleSummaryList[$ca]->payLaterRate->amount . $data->vehicleSummaryList[$ca]->payLaterRate->currency,
                        //     $data->webHeader->p13nDetailsMap->referrer,
                        // );
                        // $rows = [$newRow]; 
                        // array_push($csvData, $newRow);
                        
                        // $curl1 = curl_init();

                        // curl_setopt_array($curl1, array(
                        //     CURLOPT_URL => $sheetLink,
                        //     CURLOPT_RETURNTRANSFER => true,
                        //     CURLOPT_ENCODING => '',
                        //     CURLOPT_MAXREDIRS => 10,
                        //     CURLOPT_TIMEOUT => 0,
                        //     CURLOPT_FOLLOWLOCATION => true,
                        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        //     CURLOPT_CUSTOMREQUEST => 'POST',
                        //     CURLOPT_POSTFIELDS => array(
                        //         'PickDate' => $date,
                        //         'DropDate' => $dropDate,
                        //         'LocationCode' => $add,
                        //         'State' => $data->reservationSummary->pickLoc->address->state,
                        //         'City' => $data->reservationSummary->pickLoc->address->city,
                        //         'Address' => $data->reservationSummary->pickLoc->address->address1,
                        //         'Fulladdress' => $fullAddr,
                        //         'Class' => $data->vehicleSummaryList[$ca]->carGroup,
                        //         'Type' => $data->vehicleSummaryList[$ca]->makeModel,
                        //         'payNowPrice' => $data->vehicleSummaryList[$ca]->payNowRate->amount . $data->vehicleSummaryList[$ca]->payNowRate->currency,
                        //         'payLaterPrice' => $data->vehicleSummaryList[$ca]->payLaterRate->amount . $data->vehicleSummaryList[$ca]->payLaterRate->currency,
                        //         'Link' => $data->webHeader->p13nDetailsMap->referrer,
                        //         'formDataNameOrder' => '["PickDate","DropDate","LocationCode","State","City","Address","Fulladdress","Class","Type","payNowPrice","payLaterPrice","Link"]',
                        //         'formGoogleSheetName' => 'responses',
                        //         'formGoogleSendEmail' => 'edmonddantes000313@gmail.com'),
                        //     ));

                        // $response1 = curl_exec($curl1);

                        // curl_close($curl1);
                        // echo $response;



                        // echo "Pick Date: ";
                        // echo $date . "<br>";
                        // echo "  Drop Date: ";
                        // echo $dropDate . "<br>";
                        // echo "  Location Code: ";
                        // echo $add . "<br>";
                        // echo "  State: ";
                        // echo $data->reservationSummary->pickLoc->address->state . "<br>";
                        // echo "  City: ";
                        // echo $data->reservationSummary->pickLoc->address->city . "<br>";
                        // echo "  Address: ";
                        // echo $data->reservationSummary->pickLoc->address->address1 . "<br>";
                        // echo "  Full address: ";
                        // echo $data->reservationSummary->pickLoc->address->address1 . " ";
                        // echo $data->reservationSummary->pickLoc->address->city . " ";
                        // echo $data->reservationSummary->pickLoc->address->state . " ";
                        // echo $data->reservationSummary->pickLoc->address->zipCode . " ";
                        // echo $data->reservationSummary->pickLoc->address->country . "<br>";
                        // echo "  Class: ";
                        // echo $data->vehicleSummaryList[$ca]->carGroup . "<br>";
                        // echo "  Type: ";
                        // echo $data->vehicleSummaryList[$ca]->makeModel . "<br>";
                        // echo "  payNowPrice: ";
                        // echo $data->vehicleSummaryList[$ca]->payNowRate->amount . $data->vehicleSummaryList[$ca]->payNowRate->currency . "<br>";
                        // echo "  payLaterPrice: ";
                        // echo $data->vehicleSummaryList[$ca]->payLaterRate->amount . $data->vehicleSummaryList[$ca]->payLaterRate->currency . "<br>";
                        // echo "  Link: ";
                        // echo $data->webHeader->p13nDetailsMap->referrer . "<br>";
                        // echo "<br>";
                    }
                    // echo "<br>";
                }
            }
        }
        fclose($handle);
    }
    
    // // Clean up output buffer before writing anything to CSV file.
    // ob_end_clean();
    // $output = fopen( 'php://output', 'w' );
    // fputcsv( $output, $header_args );
    // foreach( $data as $data_item ){
    //     fputcsv( $output, $data_item );
    // }
    // fclose( $output );
    // // exit;


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