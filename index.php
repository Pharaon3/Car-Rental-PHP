<?php

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
                }
            }
        }
        fclose($handle);
    }


    
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
            "pickInfo":"ANB",
            "pickDate":"' . $date .'",
            "pickTime":"12:00 PM",
            "dropInfo":"ANB",
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
            'digital-token: eyJjdHkiOiJKV1QiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiZGlyIn0..Ds-c6BfsW3476OwM.SPl7mjUorYejcIKZyOMGVMXFUcmCN5qPz6FaAr2lh_9IJnPVeqqxBywBU3pYK4Qw5QTY73oCPFYlwZrj57sONa-voSOVU4zLBFzrmZNjcCJyaKeLXgU8S3FIM7p8UmNHaisEELoWPg9T_-L16vtw3F0YvxZSqGWP30ayxOy0B_pk4YUQm1BmJLzkPy3kMmN1EVEfKYn-XRIjuwOL8bUWv54CEquSbT-omJNQ7uZt2oHEf5j36tIGUCjdJ_cwxmXF1-Q_BUNjyRMmDyrbPKwWUL-623nF2oo17H3-cO0SUKedqU9zQI_yqMS8ENA.5ug7CmxrlVEYMmvBAt9AMA',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36',
            'cookie: datacenter=cwdc; APISID=772615ba-e89d-4e4e-9be6-708f6a065429; digital-token=a65fdb09-5115-4abd-ac78-42f7b473fe6f-02-cwdc-ho3917; visitorId=cwdc-A11d57d0c-9e80-4903-8697-d77b1b5ae89f; region=useast1; optimizelyEndUserId=oeu1682453900484r0.8156270510527024; _gcl_au=1.1.293317964.1682453933; __qca=P0-867025579-1682453948212; pxcts=72134ae0-e3a6-11ed-8ce7-4e4148547870; _pxvid=721335c3-e3a6-11ed-8ce7-4e4148547870; QuantumMetricUserID=4f01e34040f2c48f318bfb8af495a9b3; _fbp=fb.1.1682453977283.1305752564; akaalb_production_config=~op=avis_useast1_webapi_private_lbid:avis-webapi-useast1-aws|avis_com:avis-us-digital-useast1-aws|~rv=76~m=avis-webapi-useast1-aws:0|avis-us-digital-useast1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=8661c2a99422d53af484f8792993eacd; _gid=GA1.2.2071928034.1683022607; _gat_UA-6997633-3=1; _uetsid=726a9010e8d211edbf2a99ca79df9e1f; _uetvid=6e772780e3a611eda306a3d6364fbda2; RT="z=1&dm=avis.com&si=d4f2f80e-675c-4436-8d2e-031048187205&ss=lh645a9o&sl=0&tt=0&bcn=%2F%2F684dd325.akstat.io%2F&nu=43hl6rgh&cl=2g4s"; _ga_8L27T28KZS=GS1.1.1683022622.3.0.1683022622.60.0.0; _ga=GA1.2.48087019.1682453947; _clck=7g3r8s|1|fb9|0; _clsk=1hscg1m|1683022647587|1|0|s.clarity.ms/collect'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $data = json_decode($response, false);
    echo "Pick Date: ";
    echo $date;
    echo "  Drop Date: ";
    echo $dropDate;
    echo "  City: ";
    echo $data->reservationSummary->pickLoc->address->city;
    echo "  Address: ";
    echo $data->reservationSummary->pickLoc->address->address1;
    echo $data->reservationSummary->pickLoc->address->city;
    echo $data->reservationSummary->pickLoc->address->state;
    echo $data->reservationSummary->pickLoc->address->zipCode;
    echo $data->reservationSummary->pickLoc->address->country;
    echo "  Class: ";
    echo $data->vehicleSummaryList[0]->carGroup;
    echo "  Type: ";
    echo $data->vehicleSummaryList[0]->makeModel;
    echo "  payNowPrice: ";
    echo $data->vehicleSummaryList[0]->payNowRate->amount . $data->vehicleSummaryList[0]->payNowRate->currency;
    echo "  payLaterPrice: ";
    echo $data->vehicleSummaryList[0]->payLaterRate->amount . $data->vehicleSummaryList[0]->payLaterRate->currency;
    echo "  Link: ";
    echo $data->webHeader->p13nDetailsMap->referrer;
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
                        <input class="button" type="button" value="Today" style="cursor: pointer;" onclick="setToday()">
                        <input class="button" type="button" value="Tomorrow" style="cursor: pointer;" onclick="setTomorrow()">
                        <input class="button" type="button" value="next month" style="cursor: pointer;" onclick="setMonth()">
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
    function setFromCustom(){
        $("#day").css("display", "block")
    }
</script>
</html>