<?php $page_id = 1; ?>
<?php include("assets/header.php"); ?>
<script src="https://www.google.com/recaptcha/api.js?render=6LdK9YYhAAAAAK08VmD8XotCtvTIY8jmkRk7tjEd"></script>

</head>
<body>
    <main>
        <header class="headerSection">
            <?php include("assets/navbar.php");  ?>
        </header>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3 d-none d-lg-block  d-xl-block">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="mainContent marginTop_150 reach-us">
                            <h2><span>Let’s</span> Create<h2>
                            <h2>Progress <span>Together</span></h2> 
                            <p>Book a committment free consultation with your Private Wealth Advisor and understand how Eight International can add help you reach your financial goals. </p>

                            <!-- Services -->
                            <h4>Services<h4>
                            <ul class='list-unstyled p-0 row'>
                                <?php include("assets/services.php"); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3 d-none d-lg-block  d-xl-block">
                    </div>
                </div>
            </div>
        </section>
        <?php include("assets/contact-form.php");  ?>
        
        <?php include("assets/footer.php");  ?>
    </main> 
</body>
</html>
<script> 
    grecaptcha.ready(function() {
      grecaptcha.execute('6LdK9YYhAAAAAK08VmD8XotCtvTIY8jmkRk7tjEd', {action: 'submit'}).then(function(token) {
          let response = document.getElementById('token_generate');
          response.value = token;
      });
    });
  
</script>