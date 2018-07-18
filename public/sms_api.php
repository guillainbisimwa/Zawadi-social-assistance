<?php
  function sendSms($number, $message)
  {
    $url = "http://localhost:8130/inbox";
    $sercet = "";
    $request = array('secret' => $sercet ,
                     'message' => $message,
                     'recipents' => array(array('type' => 'mobile','value' => $number))
                );
    $req = json_encode($request);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type/application/json'));
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);
    curl_close($ch);

    return split(",", $result);
  }
?>
