<?php $page_id = 1; ?>
<?php include("assets/header.php"); ?>
<script src="https://www.google.com/recaptcha/api.js?render=6LdJYkwhAAAAALjMiXlvkRLum4ZmBaC6-vkyXvWn"></script>

</head>
<body>
    <main>
        <header class="headerSection">
            <?php include("assets/navbar.php");  ?>
            <div class="bannerTextWrap reachUs">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="bannerText">
                                <div class="typography">
                                    <h2 style='font-weight: 600'>Put your Money to work.</h2>
                                    <p>Drop us a line, we’ll be in touch!</p>
                                    <p>Write about how we’re spread about 8 timezone and we speak 5 languages.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="contactForm">
                                <form class="row g-3" method="post">
                                    <div class="col-12">
                                        <label for="inputName" class="form-label">Your Name*</label>
                                        <input type="text" name='fname' class="form-control" id="inputName">
                                    </div>
                                    <div class="col-12">
                                        <label for="inpuNumber" class="form-label">Your Number*</label>
                                        <input type="text" name='phone' class="form-control" id="inpuNumber">
                                    </div>
                                    <div class="col-12">
                                        <label for="inpuEmail" class="form-label">Your Email*</label>
                                        <input type="email" name='email' class="form-control" id="inpuEmail">
                                    </div>
                                    <div class="col-12">
                                        <label for="inpuMessage*"  class="form-label">Your Message**</label>
                                        <textarea class="form-control" id="Message*" name='message'></textarea>
                                    </div>
                                    <input type="hidden" id="token_generate" name="token_generate">
                                    <div class="col-12">
                                    <input type="submit" name="enquiry" class="btn btn-danger" value='Submit'>                                        
                                        <!-- <div class="btn-group mt-4">
                                            <div class="comm_btn">
                                                <a href="" class="d-flex">submit</a>
                                            </div>
                                        </div> -->
                                        <!-- <div class="form-check d-flex align-items-center justify-content-between">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                I agree to receive communications from Passbase.
                                            </label>
                                        </div> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("assets/footer.php");  ?>
        </header>
    </main>
<?php
    if(isset($_POST['enquiry']))
    {
    	$url = "https://www.google.com/recaptcha/api/siteverify";
    	$secret_key = '6LdJYkwhAAAAADEUo2BUsJsX52zbm7nBe_g8kska';
    	$response = $_POST['token_generate'];
    	$remoteip = $_SERVER['REMOTE_ADDR'];
    	$request = file_get_contents($url."?secret=".$secret_key."&response=".$response);
    	$result = json_decode($request);
    	

        if($_POST['fname'] != '' || $_POST['email'] != '' || $_POST['phone'] != '' || $_POST['mesage'] != '')
        {
        	if($result->success == 1){
        
	            $to = 'info@cityreachmotel.com.au';
	            $subject = $name;
	            $from = $_POST['email'];
	             
	            // To send HTML mail, the Content-type header must be set
	            $headers  = 'MIME-Version: 1.0' . "\r\n";
	            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	             
	            // Create email headers
	            $headers .= 'From: '.$from."\r\n".
	                'Reply-To: '.$from."\r\n" .
	                'X-Mailer: PHP/' . phpversion();
	             
	            // Compose a simple HTML email message
	            $message = '<html><body>';
	            $message .= '<h1 style="color:#f40;">'.$subject.'</h1>';
	            $message .= '<p style="color:#080;font-size:18px;"><strong>Name:&nbsp;'.$_POST['fname'].'</strong></p>';
	            $message .= '<p style="color:#080;font-size:18px;"><strong>Email:&nbsp;'.$_POST['email'].'</strong></p>';
	            $message .= '<p style="color:#080;font-size:18px;"><strong>Phone:&nbsp;'.$_POST['phone'].'</strong></p>';
	            $message .= '<p style="color:#080;font-size:18px;"><strong>Message:&nbsp;'.$_POST['message'].'</strong></p>';
	            $message .= '</body></html>';
	             
	            // Sending email
	            if(mail($to, $subject, $message, $headers)){
	                echo '<script> alert("Your Message has been sent successfully.") </script>
	                <meta http-equiv="refresh" content="1">';
	            } else{
	                echo '<script> alert("Unable to send Message. Please try again.") </script>
	                <meta http-equiv="refresh" content="1">';
	            }
	        }
        }
    }
?>
     
    
</body>
</html>
<script> 
    grecaptcha.ready(function() {
      grecaptcha.execute('6LdJYkwhAAAAALjMiXlvkRLum4ZmBaC6-vkyXvWn', {action: 'submit'}).then(function(token) {
          let response = document.getElementById('token_generate');
          response.value = token;
      });
    });
  
</script>