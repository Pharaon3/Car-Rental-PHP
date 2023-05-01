
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

    echo "___";
    echo $day;
    echo "___";
    echo $days;
    echo "_date__";
    echo $date;
    echo "__newDate__";
    echo $newDate;

    
    //Assign a date value
    $dateVal = $orgDate;

    echo "Today is ", date_format($dateVal, "d-m-Y"), "<br/>";

    //Use date_add() function to add 5 days
    date_add($dateVal, date_interval_create_from_date_string("50 days"));

    //Display the new date
    echo "The date after 5 days is ", date_format($dateVal, "d-m-Y"), "<br/>";

    //Use date_add() function to add 2 months 10 days
    date_add($dateVal, date_interval_create_from_date_string("2 months + 10 days"));  

    //Display the new date
    echo "The date after 2 months 15 days is ", date_format($dateVal, "d-m-Y");  



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
            "dropDate":"05/05/2023",
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
            'digital-token: eyJjdHkiOiJKV1QiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiZGlyIn0..3oJvIERqsuSXzSb2.Fn4gtBYohTM61LDBnvGx2Bbvu4YEO_ggYcDPhbhNqk0AAVM9ixVXKWJGwKzLRs8ev_AjO1RMChsiIlagvdO00TL8tmm4C8HWbRqV9N4CSKvudCr_M6s403hCH9VMb7MeivtGzIvZ47DqotUaJtjY_E_vbQ3Jd4pL38FLQrSf9cz5pgbQ7YX5u__jvmYuuLsGIl6BMA-KMK8K_vbTSXRHS5YNx8ZXXWloqeYmp8OCj8b8yJdTK2dg9g60uF3nqygb0J3CMz1yo7zAk9I2e9ivvUXP9VJEBd_3pEq2essssEYCB9ch-1-oRoeDmxg.D7Lvit1v7Z2U5uzIx4_PCQ',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36',
            'cookie: datacenter=cdal; visitorId=cdal-Afc89ec97-8e87-4024-a6fd-c8ddea2bf9e4; APISID=fb6e1d67-f6b9-43de-89e2-76f4637358ad; JSESSIONID=5xH6NpqCLWlQrEKpGeJkD1pYkMMdK05XCf589W7n.d10vprecmapp01; digital-token=0d4fc32d-6246-4ed9-b5fd-bb54de61c41e-01-cdal-op3814; region=euwest1; akaalb_production_config=~op=avis_euwest1_webapi_private_lbid:avis-webapi-euwest1-aws|avis_com:avis-us-digital-euwest1-aws|~rv=5~m=avis-webapi-euwest1-aws:0|avis-us-digital-euwest1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=b467847cfe97e0c736a0f77ed97dd52b; optimizelyEndUserId=oeu1682930375140r0.7989460495449099; _gcl_au=1.1.552469630.1682930387; _pxhd=28d0847ca44b9371ea45f1de74a945bcf9f2c5f67ed98bbee18de548281fb7ab:ba84edf1-e7fb-11ed-a421-7752726e7a53; _gid=GA1.2.1624059665.1682930390; pxcts=c34791f5-e7fb-11ed-a013-50744b4f6675; _pxvid=ba84edf1-e7fb-11ed-a421-7752726e7a53; __qca=P0-2119111066-1682930399440; QuantumMetricUserID=341865afa8fccda3a7e892952d0ab608; __idcontext=eyJjb29raWVJRCI6IjJQQlZMa3ZIZndKWG5RbzZPQjR4YUVjNlBtNSIsImRldmljZUlEIjoiMlBCVkxqdWYzS0hHdUVkUmE2WnIxWW9ubjdDIiwiaXYiOiIiLCJ2IjoiIn0%3D; _clck=1xxc8tw|1|fb8|0; _fbp=fb.1.1682930412995.5095065; SessionPersistence=PROFILEDATA%3A%3DauthorizableId%253Danonymous; _clsk=8tul6m|1682932492869|2|0|p.clarity.ms/collect; bounceClientVisit2252v=N4IgNgDiBcIBYBcEQM4FIDMBBNAmAYnvgO6kB0AhgG4CWKZAxgPYC2RApgHYcBOPTPIgBYADCJAAaEDxghSxSrXrMWkkHQD6AcyYaU7FChpNOMAGYUw+qZq0Q9BoyfOX9AXyA; QuantumMetricSessionID=c76bff84e136e9f2acb61fa6c4ec7290; _gat_UA-6997633-3=1; _ga_8L27T28KZS=GS1.1.1682932477.2.1.1682932534.3.0.0; _uetsid=bc510230e7fb11ed8e3c6dc094ed8b6d; _uetvid=bc5129c0e7fb11edae8585fa5b26a968; _ga=GA1.2.934796074.1682930390; RT="z=1&dm=avis.com&si=9fcc04d4-4149-46b6-96a2-69fd25cc76f0&ss=lh4mjsyt&sl=0&tt=0&bcn=%2F%2F68794912.akstat.io%2F&nu=43hl6rgh&cl=1204"'
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
        <input type="button" value="Export" style="cursor: pointer;" onclick="document.getElementById('myForm').submit()">
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