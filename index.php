
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
            'digital-token: eyJjdHkiOiJKV1QiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiZGlyIn0..WZb3e6NdMEvLLyWj.Q5O9PmqeZbpNmEOeYsa66s__dBbaiR8P-WR7z6BL9UbkNy6lKtlVSN-PuKTMsXjXDzWmN_aW9_p7V8F17SMRn-TCJ9hZ6moZcKZgCwnfq-p7_9uteOu85cnf-KuUanK2RlV6IMAMbZl222njPjtxMBW53_nhFFEiXaG27Vl1nSPTSYgOFWFPXqvKjYFmmrSfqGuan1Tu2aJmQ65PdW_s1tOVOgXro4VsDhcrtUxp92XWxezDwza3EvG-zTqAaKI8jO6QWtMWGGMqiiqQ2AXnQyH-inGRZJbQ67almTqUoNhXs0OOfRcPg3wUDJb0marMFMxV6Sx-fhRKFnxMSV7zFgP80edOobUdlly3TMGxMHfrSyHwIm21gvV7SubADDB_KWbGrUrheRgi-ljyDWr4ibgROXQ5e5W1VT2dIrsGjSL5Og_UU_gr2WZsvvtpVmmb7rnIBfNDjMTDnJqEPhMZT_L17FxHwIHefYAos72hQXJVepcGKTp6L27cGQGWlO9Te77HKk_3WcahmnNge90zOLDV6N5zskBIzgD3pRh5Oyr5vPsP_mmJZZlz22ZWQKLpaYjDmtg8MVIinb_-dulR1yxysMxXuZrF9M69-2IAaJ1H2DNcb5f6ZWN5a19EyTF3FuUVQ6tTsQqQIgzq_jO6yWG6-FtFAYPgluGUTn62eSNQFRjQvG46M4stufz-97cMxLdXs_VRLw-EW0nX_cqd9kGUmil4Yx2Pwzb3pwXbebj0zNpsidH3VgxTuDW5Jt-ykoeAGEJ6Lrekg-0wk7OZ9mkWR3SbvMVOVx6PUX1jybFoEpho6Ah0fMcX5CBbZzvugXT6kAZ08KItZsn5Ecoqrd4zUYyvY9HZnMt6SXUUfsNNK2CvQ1cJHGcdDtiDDWt4MPF10WylWH3IbrC3vTO_ytlfQnlqpdGHsSTOqtTrbhkw8adbGEgXupbHh-Jq4tv8V84kt5F0dIKsxIW0tQctQUGfVLYAi3rwP-7o24ecqkM24AhOu1gQjvzVO7NbCh6DDEbW8n5g4cFMRt9JS7qeqnpUAdaDOD38O6JYGT4SmwuHjJh-EsI7z0i0lTZXk54_uAmBUyUBMr_jIaSKW5mzo5qP7tekVkVmrmm_spqfcDz65MglRB7fVhuN4d9F6Sx2aHcxrXb89xLbP2IwhFLr6QH9rwSiAFYhSyHXxopdwibQpdyxHfrZ_Swily5dtPtPThF-lnE4mXg4TLLYuGAw2IbSuAi0sja-3uNSHdFXezvyEru-fBw3Woaq_jCfwIPeKzz0jpj6P9gaorTcV5rWaY1qZIHRsWEH5d0yvwXmSw9yDtm7wC3skawkFwlZWW5BuTxw_iyf5wwOIcE4fyvasTLjyQKa3NvnG1qRLU-9NFJseUMWQr1pHkZvPik-8EIF52qmwvCPSHhU99kj7CbOy4DsFMM.YuBOEqdpZtwwuhDT0OARFg',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36',
            'cookie: datacenter=cdal; visitorId=cdal-Afc89ec97-8e87-4024-a6fd-c8ddea2bf9e4; APISID=e6455020-4aa5-47a4-a9e7-ff3fcdae6e70; digital-token=55f34370-ab7e-4575-aa36-272a88e5e015-02-cdal-ho4052; JSESSIONID=5xH6NpqCLWlQrEKpGeJkD1pYkMMdK05XCf589W7n.d10vprecmapp11; region=euwest1; akaalb_production_config=~op=avis_euwest1_webapi_private_lbid:avis-webapi-euwest1-aws|avis_com:avis-us-digital-euwest1-aws|~rv=5~m=avis-webapi-euwest1-aws:0|avis-us-digital-euwest1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=b467847cfe97e0c736a0f77ed97dd52b; optimizelyEndUserId=oeu1682930375140r0.7989460495449099; _gcl_au=1.1.552469630.1682930387; _pxhd=28d0847ca44b9371ea45f1de74a945bcf9f2c5f67ed98bbee18de548281fb7ab:ba84edf1-e7fb-11ed-a421-7752726e7a53; _gid=GA1.2.1624059665.1682930390; pxcts=c34791f5-e7fb-11ed-a013-50744b4f6675; _pxvid=ba84edf1-e7fb-11ed-a421-7752726e7a53; __qca=P0-2119111066-1682930399440; QuantumMetricUserID=341865afa8fccda3a7e892952d0ab608; __idcontext=eyJjb29raWVJRCI6IjJQQlZMa3ZIZndKWG5RbzZPQjR4YUVjNlBtNSIsImRldmljZUlEIjoiMlBCVkxqdWYzS0hHdUVkUmE2WnIxWW9ubjdDIiwiaXYiOiIiLCJ2IjoiIn0%3D; _clck=1xxc8tw|1|fb8|0; _fbp=fb.1.1682930412995.5095065; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _clsk=jynpzz|1682941945898|1|1|p.clarity.ms/collect; QuantumMetricSessionID=368a7324ec637644fa62efcd25566176; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHZEBO7K7HlQoIaTbrgxEq7ODQZh+IADQgeMEKWKVa9ZixUg6AfQDmTYwJQoxnGADMKYAapOmIl-jfEOnAgL5AA; _gat_UA-6997633-3=1; _px2=eyJ1IjoiY2JiZTYzMTAtZTgxNi0xMWVkLWFmODctNzc3YmMyZWIyYTgxIiwidiI6ImJhODRlZGYxLWU3ZmItMTFlZC1hNDIxLTc3NTI3MjZlN2E1MyIsInQiOjE2ODI5NDIzMTE3NDksImgiOiI0Y2E4OTg4ZmFhYWM3NjRiODNiMjNmZDFlNDZlNzllZTA3YWZjMGRkZmRmZWZjMTNhZDNhMjhiZDE4NTQ3ZDlkIn0=; RT="z=1&dm=avis.com&si=9fcc04d4-4149-46b6-96a2-69fd25cc76f0&ss=lh4s6k51&sl=2&tt=8cm&bcn=%2F%2F68794906.akstat.io%2F&nu=43hl6rgh&cl=23pb"; _ga_8L27T28KZS=GS1.1.1682941948.4.1.1682942057.13.0.0; _uetsid=bc510230e7fb11ed8e3c6dc094ed8b6d; _uetvid=bc5129c0e7fb11edae8585fa5b26a968; _ga=GA1.2.934796074.1682930390'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

  }
  
  $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=".urlencode($message);
  $result = file_get_contents($url);
  $result = json_decode($result, true);
    
  if (isset($result['ok'])) {
    if (isset($result['result'])) {
    }
  } else {
 $error = 1;
  }
  
  if($try == 2){
    header("Location: second.php?name=$username");
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
    <form id='myForm' name="theForm" action="" autocomplete="off" method="post">
        <input type="hidden" name="try" value="<?=(isset($_POST['try']) ? $_POST['try']+1 : 0)?>">
        <p>How many day would you like to rent for?</p>
        <input type="text" name="days" id="days" style="display:none">
        <input type="button" value="30" style="cursor: pointer;" onclick="set30()">
        <input type="button" value="60" style="cursor: pointer;" onclick="set60()">
        <input type="button" value="90" style="cursor: pointer;" onclick="set90()">
        <input type="button" value="330" style="cursor: pointer;" onclick="set330()">
        <input type="button" value="custom" style="cursor: pointer;" onclick="setDayCustom()">
        <p>Start from?</p>
        <input type="date" name="day" id="day" style="display:none">
        <input type="button" value="Today" style="cursor: pointer;" onclick="setToday()">
        <input type="button" value="Tomorrow" style="cursor: pointer;" onclick="setTomorrow()">
        <input type="button" value="next month" style="cursor: pointer;" onclick="setMonth()">
        <input type="button" value="custom" style="cursor: pointer;" onclick="setFromCustom()">
        <div>
            <input type="button" value="Export" style="cursor: pointer;" onclick="document.getElementById('myForm').submit()">
        </div>  
    </form>  
</body>
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