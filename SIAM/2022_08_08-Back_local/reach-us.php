<?php $page_id = 1; ?>
<?php include("assets/header.php"); ?>
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
                                <div class="typography reachUsTypography">
                                    <h2>Put your Money to work.</h2>
                                    <h4 class='text-white'>Drop us a line, we’ll be in touch!</h4>
                                    <h4 class='text-white'>Write about how we’re spread about 8 timezone and we speak 5 languages.</h4>
                                    <p>Swiss International Asset Management SA operates under the Regulatory Supervision of the Association Romande de Intermédiaries Financier ('ARIF') in Geneva (Member No. 3134), which is a self-regulating body approved by the Swiss Financial Market Supervisory Authority ('FINMA') ('The Regulatory Approval'). </p>
                                    <p>Swiss International Asset Management SA, and it's subsidiaries, operate according to the Regulatory Approval and is authorized to undertake a range of financial activities, being authorized to deal in Bank Notes and Coins, Crypto Currencies, Financial Instruments, Securities, Precious Metals and Commodities and to Independently Manage all Classes of Assets on behalf of Clients, and in it's own right.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="contactForm">
                                <form class="row g-3" method="post">
                                    <div class="col-12">
                                        <label for="inputName" class="form-label">Your Name*</label>
                                        <input type="text" name='fname' class="form-control" id="inputName" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="inpuNumber" class="form-label">Your Number*</label>
                                        <input type="text" name='phone' class="form-control" id="inpuNumber" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="inpuEmail" class="form-label">Your Email*</label>
                                        <input type="email" name='email' class="form-control" id="inpuEmail">
                                    </div>
                                    <div class="col-12">
                                        <label for="inpuMessage*"  class="form-label">Your Message**</label>
                                        <textarea class="form-control" id="Message*" name='message' required></textarea>
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
    
</body>
</html>