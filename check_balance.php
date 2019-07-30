
<?php
//
// A very simple PHP example that sends a HTTP POST to a remote site
//

$ch = curl_init();


curl_setopt($ch, CURLOPT_URL,'https://www.xxxxxxx.com/api/?');

curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS,$_POST['api_message']);


curl_setopt($ch, CURLOPT_POSTFIELDS,"token=yourkey&format=json&type=balance");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close ($ch);


echo $server_output;

// Further processing ...

?>












