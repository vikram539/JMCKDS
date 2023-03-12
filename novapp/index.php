<?php 
session_start();
if(!isset($_SESSION['email']) && ($_SESSION['email'] == '')){
    header("Location:login.php");
}
include("includes/header.php") ?>
<body>
<div class="content">
    <div class="dashboard_wrapper">
        <div class="row">
            <div class="col-3">
                <div class="dashboard_navbar_section">
                    <?php include('includes/left-navbar.php') ?>             
                </div>
            </div>
            <div class="col-9">
                <div class="dashboard_content_section">
                    <header class="row"> 
                        <?php include('includes/header-top-bar.php') ?>  
                        <div class="col-12">
                            <div class="dashboard_chart_section">
                                <?php include('includes/dashboard.php') ?>
                            </div>                                               
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>

