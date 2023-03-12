<?php 
    session_start();
include("includes/header.php") ?>
<div class="loginPage">
    <div class="row">
        <div class="col-5">
            <div class="loginLeft_block container">
                <div class="loginDetail">
                    <div class="logo">
                       <?php include ('includes/logo.php') ?>
                    </div>
                    <div class="sign-in-form">
                        <h4>Sign In</h4>
                        <p>Enter your email and password to sign in!</p>
                        <form id="sign-in" method="post" action="#">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Email</label>
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                              <label for="password" class="form-label">password</label>
                              <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input checkbox" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Keep me SIgned In
                                </label>
                                <label class="form-check-label float-end" for="flexCheckDefault">
                                    <a href="" class="text-decoration-none text-white">Forgot Password?</a>
                                </label>
                            </div>
                            <button type="submit" id="signin-btn" class='button_style'>Sign in</button>
                            <p class="from_p">Not registered yet? <a href="/signup" class="text-white text-decoration-none"><strong>Create an Account</strong></a></p>
                        </from>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="loginRight_block container">
                <div class="loadingscreen">
                    <img src="images/setting.png" alt="Logo" />
                </div>
            </div>
        </div>
    </div>
    <div class="p-tb"></div>
</div>
<?php include('includes/footer.php') 
   
?>