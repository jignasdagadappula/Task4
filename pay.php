<?php

    $name=$_POST['user'];
    $email=$_POST['email'];
    $phone=$_POST['num'];
    $amount=$_POST['amt'];
    
    include 'instamojo/Instamojo.php';
    $api = new Instamojo\Instamojo('test_a3015377180888281947115dd8d','test_31adffe240268ff2aa3be052544', 'https://test.instamojo.com/api/1.1/');

    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => "TSF",
            "amount" => $amount,
            "send_email" => true,
            "email" => $email,
            "buyer_name" =>$user,
            "phone"=>$phone,
            "send_sms" => true,
            "allow_repeated_payments" =>false,
            "redirect_url" => "http://localhost:8000/thankyou.php"
            )
        );
        $pay_url=$response['longurl'];
        header("location: $pay_url");
    	}
    	catch (Exception $e) {
    	    print('Error: ' . $e->getMessage());
    	}
?>

