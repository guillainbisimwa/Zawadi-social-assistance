<?php


    // configuration
    require("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

      $sms_api_result = sendSms("+243978532756","ESSAI du API");
      if($sms_api_result[0]=="ok")
      {
        echo "MERCI, SMS was sent";
      }
      else {
        print_r($sms_api_result);
      }
    }
    else
    {

      render("tontine_form.php", ["title" => "Tontine"]);
	}



?>
