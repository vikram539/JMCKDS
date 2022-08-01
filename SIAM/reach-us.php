<?php $page_id = 1; ?>
<?php include("assets/header.php"); ?>
</head>
<body>
    <main>
        <header class="headerSection">
            <?php include("assets/navbar.php");  ?>
            <div class="bannerTextWrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="bannerTextWrap">
                                <div class="typography">
                                    <h2>Put your Money to work.</h2>
                                    <p>Drop us a line, we’ll be in touch!</p>
                                    <p>Write about how we’re spread about 8 timezone and we speak 5 languages.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="contactForm">
                                <form class="row g-3">
                                    <div class="col-12">
                                        <label for="inputName" class="form-label">Your Name*</label>
                                        <input type="text" class="form-control" id="inputName">
                                    </div>
                                    <div class="col-12">
                                        <label for="inpuNumber" class="form-label">Your Number*</label>
                                        <input type="text" class="form-control" id="inpuNumber">
                                    </div>
                                    <div class="col-12">
                                        <label for="inpuEmail" class="form-label">Your Email*</label>
                                        <input type="email" class="form-control" id="inpuEmail">
                                    </div>
                                    <div class="col-12">
                                        <label for="inpuMessage*" class="form-label">Your Message**</label>
                                        <textarea class="form-control" id="Message*"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check d-flex align-items-center justify-content-between">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                I agree to receive communications from Passbase.
                                            </label>
                                        </div>
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