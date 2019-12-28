<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bapuji Society</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/css/user.css">
</head>
<style>
.form_donate
{
		transition:box-shadow .5s;
	padding:20px 30px;
	background:rgba(220, 218, 218, 0.14901960784313725);
	box-shadow:0px 0px 5px 1px rgb(220, 220, 220);
}
.form_donate:hover
{
	transition:box-shadow .5s;
	box-shadow:0px 0px 11px 2px rgb(179, 179, 179);
}
.inp
{
	background:rgba(255, 255, 255, 0.7294117647058823);
	width:85%;
	font-size:17px;
	border:1px solid rgba(185,185,185,1.00);
	border-radius:3px;
	padding:2px 5px;
}
.bt1
{
	padding: 3px 20px;
    font-size: 20px;
    background: rgb(134, 133, 133);
    border: none;
    border-radius: 3px;
    color: white;
    box-shadow: 1px 1px 5px grey;
}
.bt1:hover
{
	background:rgb(58, 86, 165);
}
</style>
<body>
  <?php include "../header.php"; ?>

<div class="container" style="margin-top:25px">

    <form method="post" name="donate_form" action="pay.php" class="form_donate">
    <div class="row">
    		<div class="col-md-12 col-lg-12">
            	<h3 align="center">Please Fill Form to Donate</h3>
            </div>
            

            
            
            <div class="col-md-12 col-lg-12 pad_bottom">
                <div style="text-align:center; padding-bottom:25px"><input  name="d_amount" placeholder="Amount" class="amount inp" required ></div>
            </div>

            <div class="col-md-12">
            	<div class="row">
                	<div class="col-md-6">
                    	<div class="row">
                        
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                    <div class="form_label">Name</div>
                                </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                   <input type="text" name="d_name" id="d_name"  class="inp" placeholder="full name" required>
                                </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                    <div class="form_label">Email</div>
                                </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                    <input type="email" name="d_email" id="email" class="inp" placeholder="Email ID" required>
                                </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                    <div class="form_label">Phone Number</div>
                                </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                    <input name="d_contact" id=""   class="inp" placeholder="Phone Number" required/>
                                   
                                    
                                </div>
                        </div>
                    </div>
                	<div class="col-md-6">
                    	<div class="row">
                            <div class="col-md-6 col-lg-6 pad_bottom">
                                <div class="form_label">Address</div>
                            </div>
                            <div class="col-md-6 col-lg-6 pad_bottom">
                                <input type="text" name="d_address" id="d_address" class="inp" placeholder="Address" required>
                            </div>
                            <div class="col-md-6 col-lg-6 pad_bottom">
                                <div class="form_label">City</div>
                            </div>
                            <div class="col-md-6 col-lg-6 pad_bottom">
                                <input type="text" name="d_city" class="inp" placeholder="City" required>
                            </div>
                            <div class="col-md-6 col-lg-6 pad_bottom">
                                <div class="form_label">State</div>
                            </div>
                            <div class="col-md-6 col-lg-6 pad_bottom">
                                <input type="text" name="d_state" class="inp" placeholder="State" required>
                            </div>
                            <div class="col-md-6 col-lg-6 pad_bottom">
                                <div class="form_label">Country</div>
                            </div>
                            <div class="col-md-6 col-lg-6 pad_bottom">
                                <input type="text" name="d_country" class="inp" placeholder="Country" required>
                                <input type="text" name="d_Zip" class="inp" placeholder="Zipcpde" required>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            
                                <div class="col-md-12 pad_bottom">
				               <div style="text-align:center">
                                <input type="submit" value="Continue" class="bt1"></div>
          
        
    		</div>
		    </div>
	</form>
</div>
  <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>