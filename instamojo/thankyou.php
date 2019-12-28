<?php include "header.php"; ?>
    <body>
<?php
include 'src/Instamojo.php';

		$api = new Instamojo\Instamojo('7b99a8fdb5d54eeddf05e09e1a3b91f9', '97f9fddf696a4fd5363b584cf8175a2f','https://www.instamojo.com/api/1.1/');

$pay_req_id=$_GET['payment_request_id'];
$pay_id=$_GET['payment_id'];
$fail=0;
$transaction=0;
try {

$response = $api->paymentRequestStatus($pay_req_id);
print_r($response);
//include "../connection/index.php";


	if($response['payments'][0]['status']=='Credit')
	{
		$transaction=1;
		$payment_request_id=$pay_req_id;
		$phone=$response['payments'][0]['buyer_phone'];
	$email=$response['payments'][0]['buyer_email'];
		
	$amount=$response['payments'][0]['amount'];
	 $purpose=$response['purpose'];
		 $response['address'];
$payment_id=$response['payments'][0]['payment_id'];
		$status=$response['payments'][0]['status'];
		$buyer_name=$response['payments'][0]['buyer_name'];
		date_default_timezone_set('Asia/Kolkata');
		$date=date('Y-m-d');
		$start_date=date('Y-m-d');
	?>
    <div class="container">
		<h2 align="center" style="color:green">Donation Successfull</h2>
        <h3 align="center">You Paid <?php echo $amount ?> to El Shaddai Evangelical Ministry and Social Organisation </h3>
        <div>
        <table align="center" border="1" cellspacing="0" cellpadding="10" style="background:rgba(0,61,106,1.00); color:white;">
            <tr>
            	<td class="pad">Payment ID</td>
                <td class="pad"><?php echo $pay_id ?></td>
            </tr>
            <tr>
            	<td class="pad">Payment Request ID</td>
                <td class="pad"><?php echo $pay_req_id ?></td>
            </tr>
            <tr>
            	<td class="pad">Amount Paid</td>
                <td class="pad"><?php echo $amount ?></td>
            </tr>
            <tr>
            	<td class="pad">Purpose Of Payment</td>
                <td class="pad"><?php echo $purpose ?></td>
            </tr>
            

        </table>
      
        
        </div>
    </div>
	<?php
	
	}
	else
	{
	echo "<h2>Transaction Failed</h2>";	
	}
}

catch (Exception $e) {
    print('Error: ' . $e->getMessage());

}


?>



   <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/scroll-entrance.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>