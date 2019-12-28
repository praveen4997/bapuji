<?php
session_start();

		include 'src/Instamojo.php';

		$api = new Instamojo\Instamojo('7b99a8fdb5d54eeddf05e09e1a3b91f9', '97f9fddf696a4fd5363b584cf8175a2f','https://www.instamojo.com/api/1.1/');
	
		
		$buyer_name=$_POST['d_name'];
		$email=$_POST['d_email'];
		$contact=$_POST['d_contact'];
		$purpose='Donation to Bapuji Society';
		$amount=$_POST['d_amount'];
		$address=$_POST['d_address'];
		$city=$_POST['d_city'];
		$state=$_POST['d_state'];
		$country=$_POST['d_country'];
		$zip=$_POST['d_zip'];
	
	
	try {
		$response = $api->paymentRequestCreate(array(
			"purpose" => $purpose,
			"amount" => $amount,
			"buyername" => $buyer_name,
			"phone" => $contact,
			"shipping_address"=> $address,
			"shipping_city"=> $city,
			"shipping_state"=> $state,
			"shipping_zip"=> $zip,
			"shipping_country"=> $country,
			"send_email" => true,
			"email" => $email,
			"redirect_url" => "https://www.bapujisociety.com/instamojo/thankyou.php",
			'allow_repeated_payments' => false
			));
		print_r($response);
		$pay_url= $response['longurl'];
		echo "<br><br><br>".$pay_url;
		header("location:$pay_url");
		exit();
	}
	catch (Exception $e) {
		print('Error: ' . $e->getMessage());
	}

?>