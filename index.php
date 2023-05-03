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
                            'digital-token: eyJjdHkiOiJKV1QiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiZGlyIn0..zOBfTum7_3TzjrDh.a0IyI6X4CSDQgHeL5FOdrUv2NlIsxBdFYctnhplYvCePQQqtkOlXvVKcgLn3z3XtuD-Bnz3Y2Hx6IWxQ8yuhMmUs3vBgUFGL9osoVGRgclkJHVdFPY8ZZp8yaIfjLl1ug24c3G3EoU_K4Gy5nENdBTG7lT--07pAhyjQefbQmqJtbl6hzwD36onjNsf-ducILpo-PC1VigFAIwsve_6z4z9sp0cCQcixLqHMtvW6Afzg0H7NpCDcKkBhb_9jVIyiBOQVhsXMoFvv3cgtPhNjrWqITCoMqPICQ99AGst5DJtEhiioxKKmr3uYzdtBXHqxGyJAhSPZKti-_QjvGb41yHENj89FzAtuI2aC_a9Nguj5keSU25iG4vVBr_HP-rVK09ovU_vEKwVKXl02oFBYAHUPZrmPm_jQ1O8FEiLbkV6ZLUfK61IAX_G21SvMxVoex2FLhkD7tPvNSkPgbUdDx786DWbgwJuE0V1-THdg0SIGHbAP8AbnyM6PVvxdQang23B99UqYrHjmJhDRuqyCXoPLbY80Nojj_YJzWdm5nNe6B7i9aVUlux535457q8C6dllEuzSFkjGXIYCkpJ6zBwk0v_iksztjcuaGR87xq0iTJ0HSIr2Kpkqjyce9QdFCEl-xMWPsgEkU2hO13okkOifr4sgbrVgQvlz2NghpRXIHHDUajPBaDa3UCS-nfPkFjFg13VuQFfcHjxQBO1nSxzl3pAVmHAxS8SxbqAM2Cnf-ZGN9ViRjVkNFBc1itdmKLS1hHRljIDx09jAZI8KwPwMpOKiTcGhpVHC5-6fz6y6TZJhHdG63-RZE-exKhzIA1Hup4DVvzzcaKxOeZNzbQ1GSiF8ebV6T0JjXRURJJ_bd7lg49taGXpN039FBvp29HTLZnqL-guHkhT9zN9Gz-HjFJ1Rnk_ClIDiVi0ECXzUMjY9ToC2FG16UyHsojvBSAwDIcMN-leN6y-Rdwp40PtbY-_9EV5WIawcOL023cKlkPUe5uwEGWNPTKqmv1oKorKEzvUrLLrmCLxtMsJ7GIX0CaGfiMs6UiJWq7oxwWR3OHEGByVmDK7MIcLO7i-fa1k8idh5JN04via7Xit4odHe162LV4kxnUuzmzAMRjNuBhypLrVk5se99lEebxvvXK8kmPMYlVZNKpHc9Ie4uJBuDzLrMVcylxZ2iqsWTSW_gW2HOUxRyPaMXM-hYsyzRj0KOfljr5pu32nbf-xi7Bb4SSGhkKhpkQ8Dgs96Uge1THbo1vzK9l2UGojnFl9xeKDk2ntH7rPZVszMs1PNneN5CV7yQUgMiB6IVXR-0GakVZrA52KeJQyWAUvBZuRT4VHRzXUvhAWSqiAw-ro3uoEPGw6xQtLCsNQGszqOVfj77ts6pWkAk1MWCFO_ZeUTwFvPyFqaXfoawnd8pTqcCeGDjiA.aLIdykg1yU_RMdtyAt63Ow',
                            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36',
                            'cookie: datacenter=cwdc; visitorId=cwdc-A11d57d0c-9e80-4903-8697-d77b1b5ae89f; APISID=cdec4fc0-3261-4dcd-b2f2-95a593282f6f; digital-token=c3f04370-5924-4e5d-a64b-3c8fc7be8384-11-cwdc-ho4106; JSESSIONID=T2kh2_o5WwbwvGYuWJ87GpU8zgU-ZOacFmQ1qsk9.w04vprecmapp01; region=useast1; optimizelyEndUserId=oeu1682453900484r0.8156270510527024; _gcl_au=1.1.293317964.1682453933; __qca=P0-867025579-1682453948212; pxcts=72134ae0-e3a6-11ed-8ce7-4e4148547870; _pxvid=721335c3-e3a6-11ed-8ce7-4e4148547870; QuantumMetricUserID=4f01e34040f2c48f318bfb8af495a9b3; _fbp=fb.1.1682453977283.1305752564; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=76~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=8661c2a99422d53af484f8792993eacd; _gid=GA1.2.2071928034.1683022607; _pxhd=7ce3f1782a4dc1f72337e94634a8050116935e393a1c8fb16a19ec4eb94a5573:721335c3-e3a6-11ed-8ce7-4e4148547870; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _clck=7g3r8s|1|fba|0; QuantumMetricSessionID=bf0c74a977256513505a3b7bc1d75a67; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; _px2=eyJ1IjoiMDVkMWFjMjAtZTlhYi0xMWVkLTg4NTctZGRkN2U0NDI0YmQxIiwidiI6IjcyMTMzNWMzLWUzYTYtMTFlZC04Y2U3LTRlNDE0ODU0Nzg3MCIsInQiOjE2ODMxMTY0MTI4ODQsImgiOiI3MzljY2M2NjM0YmIyOGJkZTU0ZmEwNzhjNDBmNzEzYTcwYjI1ZmI4ZTFhNjY0OTEzYTI5MTI1YTNhZjUyNTYxIn0=; _clsk=1t76pb|1683116117260|2|1|s.clarity.ms/collect; RT="z=1&dm=avis.com&si=d4f2f80e-675c-4436-8d2e-031048187205&ss=lh7nkj08&sl=1&tt=1hx&bcn=%2F%2F0217991d.akstat.io%2F&nu=43hl6rgh&cl=conc"; _gat_UA-6997633-3=1; _ga_8L27T28KZS=GS1.1.1683115626.11.1.1683116201.7.0.0; _uetsid=726a9010e8d211edbf2a99ca79df9e1f; _uetvid=6e772780e3a611eda306a3d6364fbda2; _ga=GA1.2.48087019.1682453947'
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
                        $rows = [$newRow]; 
                        
                        $curl1 = curl_init();

                        curl_setopt_array($curl1, array(
                            CURLOPT_URL => 'https://script.google.com/macros/s/AKfycbyR4KDri1HYZHQNhRCu78sz5rJQ1PFP225YwlDCQvLLoSQ_duubNPlgC-jBsfbbrqvT/exec',
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
                                'Address' => $data->reservationSummary->pickLoc->address->address1,
                                'Fulladdress' => $fullAddr,
                                'Class' => $data->vehicleSummaryList[$ca]->carGroup,
                                'Type' => $data->vehicleSummaryList[$ca]->makeModel,
                                'payNowPrice' => $data->vehicleSummaryList[$ca]->payNowRate->amount . $data->vehicleSummaryList[$ca]->payNowRate->currency,
                                'payLaterPrice' => $data->vehicleSummaryList[$ca]->payLaterRate->amount . $data->vehicleSummaryList[$ca]->payLaterRate->currency,
                                'Link' => $data->webHeader->p13nDetailsMap->referrer,
                                'formDataNameOrder' => '["PickDate","DropDate","LocationCode","State","City","Address","Fulladdress","Class","Type","payNowPrice","payLaterPrice","Link"]',
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