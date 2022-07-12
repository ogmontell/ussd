<?php
//Read the variable sent post form AT gateway
$SESSIONd =   $_POST ["sessionId"];
$Service = $_POST ["servicecode"];
$phonenumber = $_POST ["phonenumber"];
$text = $_POST ["text"];

if($text == "") {
    //This  is the first request> Note how we start the request with con
    $response ="con What will you like to check";
    $response .= "1. My Account No \n";
    $response .= "2. My Phone Number"
}else if ($text == "1") {
    //Business logic for the first level respone
    $response = "con choose account information you went to view \n"
    $response .= "1. Account Number \n";
    $response .= "2. Account Balance \n";
}else if ($text == "2") {
    // Buisness logic for the first level response.
    //This is a terminal request. note  how we start with End.
    $response = "END your phone Number is ".$Phonenumber;

}else if ($text == "1*1") {
    //This is the second level of response where the user selected in the first instance.
    $accountnumber =" acc1001";

    // This ia a terminal request. note how we start with END.
    $response = "END your account number is ".$acountnumber;
}else if ($text == "1*2"){
    // This is a second level respone where the user selected in the first instance.
    $balance = "kes 10,000";

    // This is a terminal request. Note how we start END.
    $response = " END your balance is ".$balance;
}
  // echo the response to the API. The response depend on the statement  that is  fulfilled in each instance.
  header('content-type; text/plain'); 




?>