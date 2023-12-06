<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["sname"];
    
       $to = "info@kanbunkers.com";
    $subject = "New Subscribing Kanbunker";
   
      $data = '<!DOCTYPE html>
			<html lang="en">
			<head>
			<meta charset="utf-8" />
			<title>Kanbunker New mail</title>
			</head>
			<body style="margin-top: 0px;margin-bottom: 0px;font-family: "zonaprouploaded_file";">';
			
            $data .= '<div style="font-size:16px;font-family:Arial,sans-serif;line-height:140%;background:#f2f2f2;color:#606060">
            <center>
            <table style="border-collapse:collapse">
            <tbody>
            <tr>
            <td align="center">
            <table style="background:#fff;width:700px;margin-left:auto;margin-right:auto; border-left:solid 25px #082152; color:black;">
            <tbody>
            <tr>
            <td style="padding:0 15px 15px 15px">
            <table style="border-collapse:collapse">
            <tbody>
            <tr style="text-align:center;"><td>
            <img style="width:60%;" src="https://kanbunkers.com/images/klogo.png" />
            </td></tr>
            <tr><td style="padding:20px 10px 0 10px;margin:0">
            <p style="font-size:16px;font-family:Arial,sans-serif;line-height:140%;padding:0 10px 0 0"><b>Dear Mam/Sir,</b></p>
            
            <p style="font-size:16px;text-align:justify;font-family:Arial,sans-serif;line-height:140%;padding:0 10px 0 0">
                 Subscribe_Email:- '.$name.'
            
            </p>
            
         
            
            
            
            
            <br />
            
            <h1 style="font-size:18px;font-family:Arial,sans-serif;line-height:1.4;color:#082152;margin:0;text-align:center;">Regards,</h1>
            <h1 style="font-size:18px;font-family:Arial,sans-serif;line-height:1.4;color:#000;margin:0;text-align:center;">Team Kanbunker</h1>
            
            </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></center></div>
            ';

			$data .= '</body></html>';
     $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";
    $headers .= "From: support@kanbunkers.com \r\n";
    $parameters = '-f support@kanbunkers.com';
    $send_email=mail($to, $subject, $data, $headers,$parameters);
    
    if ($send_email) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
}


?>
