<?php include("includes/header.php") ?>
<div class="register loginPage">
    <div class="row">
        <div class="col-5">
            <div class="register loginLeft_block container">
                <div class="register loginDetail">
                    <div class="logo">
                       <?php include ('includes/logo.php') ?>
                    </div>
                    <div class="sign-up-form">
                        <div class="response_msg"></div>
                        <h4>Sign Up</h4>
                        <form id="sign-up" method="post">
                            <div class="mb-3">
                              <label for="signupName" class="form-label">name</label>
                              <input type="text" class="form-control" id="signupName" placeholder="Name" name="name"/>
                            </div>
                            <div class="mb-3">
                              <label for="signupAddress" class="form-label">Wallet Address</label>
                              <textarea class="form-control" id="signupAddress" placeholder="Address" name="wallet"></textarea>
                            </div>
                            <div class="mb-3">
                              <label for="sigiupEmail" class="form-label">Email</label>
                              <input type="email" class="form-control" id="sigiupEmail" placeholder="name@example.com" name="email" />
                            </div>
                            <div class="mb-3">
                              <label for="signupPassword" class="form-label">password</label>
                              <input type="password" class="form-control" id="signupPassword" placeholder="Password" name="passwd" />
                            </div>
                            <div class="mb-3">
                              <label for="signupconfirmpassword" class="form-label">Confirm Password</label>
                              <input type="password" class="form-control" id="signupconfirmpassword" placeholder="Confirm Password">
                            </div>
                            <button type="button" id="signin-btn" class='button_style'>
                                Sign up
                            </button>
                            <p class="from_p">Have an Acoount ALready? <a href="/login" class="text-white text-decoration-none"><strong> Sign in</strong></a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="register loginRight_block container">
                <div class="loadingscreen">
                    <img src="images/setting.png" alt="Logo" />
                </div>
            </div>
        </div>
    </div>
    <div class="p-tb"></div>
</div>
<div class="spinner_modal d-none">
    <div class="spinner_-content">
        <div class="spinner_-body">
            <span class="text-white spinner-border spinner-border-sm me-4" role="status" aria-hidden="true"></span>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#signin-btn").on("click", function(){
            let signupName = $("#signupName").val();
            let signupAddress = $("#signupAddress").val();
            let sigiupEmail = $("#sigiupEmail").val();
            let signupPassword = $("#signupPassword").val();
            let signupconfirmpassword = $("#signupconfirmpassword").val();
            
            

            if(signupName == "" || signupAddress == "" || sigiupEmail == "" || signupPassword == "" || signupconfirmpassword == ""){

                $(".response_msg").slideDown();
                $(".response_msg").html("All Fields are Required");
                setTimeout(function(){
                    $(".response_msg").slideUp();
                }, 3000);

            }else{
                
                $(".spinner_modal").removeClass('d-none');
                $(this).attr("disabled", true);

                $.post("https://jsonplaceholder.typicode.com/posts", $("#sign-up").serialize(), function(data){

                    // let formData = JSON.stringify(data);
                    if(data != "")
                    {             
                        $("#sign-up").trigger("reset");
                        $(".spinner_modal").addClass('d-none');
                        $("#signin-btn").attr("disabled", false);
                        $(".response_msg").slideDown();
                        $(".response_msg").html("<div class='text-success'>Data Saved successfully!!!!....</div>");
                        
                        setTimeout(function(){
                            $(".response_msg").slideUp();
                        }, 3000);
                    }
                })
            }
        })
    })
</script>
<?php include('includes/footer.php') ?>