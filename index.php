
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

$mycookie = 'datacenter=cdal; visitorId=cdal-A2616b165-e306-413c-96cb-3e75d620cdb3; APISID=0a31552e-dced-4b64-9aab-d543eef982fc; digital-token=11b3a286-dedf-4d27-bb09-104812450ba3-11-cdal-ho4056; region=euwest1; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; akaalb_production_config=~op=avis_euwest1_webapi_private_lbid:avis-webapi-euwest1-aws|avis_com:avis-us-digital-euwest1-aws|~rv=9~m=avis-webapi-euwest1-aws:0|avis-us-digital-euwest1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=6e5d5be5931121bc1853c2fb18a95f8d; optimizelyEndUserId=oeu1683431435249r0.8101969281957939; _gcl_au=1.1.1031513463.1683431438; _ga_8L27T28KZS=GS1.1.1683431440.1.0.1683431440.60.0.0; _uetvid=55f72540ec8a11edb756b7a649f18b14; pxcts=56a0322c-ec8a-11ed-85fe-5a5958754467; _pxvid=56a023e7-ec8a-11ed-85fe-5a5958754467; _ga=GA1.2.1163021244.1683431440; __qca=P0-1779038743-1683431441885; _fbp=fb.1.1683431476475.33122265; __idcontext=eyJjb29raWVJRCI6IjJQUnQwRHR5UXFHUEYybmxjejBSWDZQQ1dudSIsImRldmljZUlEIjoiMlBSdDBDQlpDdUtnZFVWMEJqTzZYWXpOS1dmIiwiaXYiOiIiLCJ2IjoiIn0%3D; QuantumMetricUserID=0785695ee308c242b7b4e54c0e4939f4; _px2=eyJ1IjoiNTY3MjU5OTAtZWM4YS0xMWVkLWJhNmQtNGIyMDgzNDVmMDE5IiwidiI6IjU2YTAyM2U3LWVjOGEtMTFlZC04NWZlLTVhNTk1ODc1NDQ2NyIsInQiOjE1Mjk5NzEyMDAwMDAsImgiOiIwNzUzMzJiZDg3MDVmY2NmODFiMGJlMTY3Mzg3YjVkYzQ3OWIwYzc5NjdiNDZjNjZjYzgxNGM1YTIzYmJiOTNkIn0=; RT="z=1&dm=avis.com&si=85794183-e111-4420-992a-db7eb7c72171&ss=lhcvls4u&sl=0&tt=0&bcn=%2F%2F68794912.akstat.io%2F&nu=43hl6rgh&cl=1wtedh"; _gid=GA1.2.1804242264.1683547000; _gat_UA-6997633-3=1';
$digitoken = 'eyJjdHkiOiJKV1QiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiZGlyIn0..JavWIr4rjDQyAgej.B6jpvqT9UDJA3HwE8QuOheaNSWexeTiinMZTRzbmhgObZsvM44nDp4nrSF5kV2VplsEFuV6GanXP4IuByLz1HRCSC5iHfxFpHGjRrYn4xPXzvvdFPRLdJ4hkMQHCYEtH_86ILRSMugYmxy8N1DyNF-WHZ6VCCoDUeARSHVaFeaus8M-rELjLA7uQW4kGH4j-Nt8r_XqT2ZnhTyvpGBZEiVCrK2ptS9E39ghdXI1tC2nB6vT4bVUhrFlQONd50JjwxXKpd1sAN5WmmDSSlMOKJ0eKxw42Qu2H9WX-DiVXI_hXwcHMk-PkkVWD9Pk.Ra3eFNADzvrx7udfsPB8hQ';
$sheetLink = 'https://script.google.com/macros/s/AKfycbxl9HcxoSYiyBFBxV135wVlVR-KDFdu36rI7FCiIEPRSQWz6cRob6f2uiOk0ES3AjA/exec';

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
        // ob_start();
        // // Set PHP headers for CSV output.
        // header('Content-Type: text/csv; charset=utf-8');
        // header('Content-Disposition: attachment; filename=car_rental.csv');

        // // Create the headers.
        // $header_args = array( 'PickDate', 'DropDate', 'LocationCode', 'State', 'City', 'Fulladdress', 'Class', 'Type', 'payNowPrice', 'payLaterPrice', 'Link');

        // $csvdata = array(
        //     // array( 'PickDate', 'DropDate', 'LocationCode', 'State', 'City', 'Address', 'Fulladdress', 'Class', 'Type', 'payNowPrice', 'payLaterPrice', 'Link')
        // );

        
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
                        $fullAddr = $data->reservationSummary->pickLoc->address->address1 . " "
                                    . $data->reservationSummary->pickLoc->address->city  . " "
                                    . $data->reservationSummary->pickLoc->address->state  . " "
                                    . $data->reservationSummary->pickLoc->address->zipCode  . " "
                                    . $data->reservationSummary->pickLoc->address->country;

                        $newRow = [
                            strval($date),
                            strval($dropDate),
                            strval($add),
                            strval($data->reservationSummary->pickLoc->address->state),
                            strval($data->reservationSummary->pickLoc->address->city),
                            // strval($data->reservationSummary->pickLoc->address->address1),
                            strval($fullAddr),
                            strval($data->vehicleSummaryList[$ca]->carGroup),
                            strval($data->vehicleSummaryList[$ca]->makeModel),
                            strval($data->vehicleSummaryList[$ca]->payNowRate->amount . $data->vehicleSummaryList[$ca]->payNowRate->currency),
                            strval($data->vehicleSummaryList[$ca]->payLaterRate->amount . $data->vehicleSummaryList[$ca]->payLaterRate->currency),
                            strval($data->webHeader->p13nDetailsMap->referrer),
                        ];
                        array_push($csvdata, array(
                            strval($date),
                            strval($dropDate),
                            strval($add),
                            strval($data->reservationSummary->pickLoc->address->state),
                            strval($data->reservationSummary->pickLoc->address->city),
                            // strval($data->reservationSummary->pickLoc->address->address1),
                            strval($fullAddr),
                            strval($data->vehicleSummaryList[$ca]->carGroup),
                            strval($data->vehicleSummaryList[$ca]->makeModel),
                            strval($data->vehicleSummaryList[$ca]->payNowRate->amount . $data->vehicleSummaryList[$ca]->payNowRate->currency),
                            strval($data->vehicleSummaryList[$ca]->payLaterRate->amount . $data->vehicleSummaryList[$ca]->payLaterRate->currency),
                            strval($data->webHeader->p13nDetailsMap->referrer),
                        ));
                        $rows = [$newRow]; 
                        
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
                                'State' => $data->reservationSummary->pickLoc->address->state,
                                'City' => $data->reservationSummary->pickLoc->address->city,
                                // 'Address' => $data->reservationSummary->pickLoc->address->address1,
                                'Fulladdress' => $fullAddr,
                                'Class' => $data->vehicleSummaryList[$ca]->carGroup,
                                'Type' => $data->vehicleSummaryList[$ca]->makeModel,
                                'payNowPrice' => $data->vehicleSummaryList[$ca]->payNowRate->amount . $data->vehicleSummaryList[$ca]->payNowRate->currency,
                                'payLaterPrice' => $data->vehicleSummaryList[$ca]->payLaterRate->amount . $data->vehicleSummaryList[$ca]->payLaterRate->currency,
                                'Link' => $data->webHeader->p13nDetailsMap->referrer,
                                'formDataNameOrder' => '["PickDate","DropDate","LocationCode","State","City","Fulladdress","Class","Type","payNowPrice","payLaterPrice","Link"]',
                                'formGoogleSheetName' => 'responses',
                                'formGoogleSendEmail' => 'edmonddantes000313@gmail.com'),
                            ));

                        $response1 = curl_exec($curl1);

                        curl_close($curl1);
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

        // ob_end_clean();

        // // Create a file pointer with PHP.
        // $output = fopen( 'php://output', 'w' );

        // // Write headers to CSV file.
        // fputcsv( $output, $header_args );

        // // Loop through the prepared data to output it to CSV file.
        // foreach( $csvdata as $data_item ){
        //     fputcsv( $output, $data_item );
        // }

        // // Close the file pointer with PHP with the updated output.
        // fclose( $output );
        // exit;

        fclose($handle);
    }
    }  
} 
?>
