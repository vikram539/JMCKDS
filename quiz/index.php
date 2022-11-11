<?php
    $page_ID = 1;
    require("assets/header.php");
?>
</head>
    <body>        
       <section class='p-4'>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <H2>Quiz</H2>
                        <form>
                            <div class="mb-3">
                                <label for="shipDelivering " class="form-label">Are you delivering the goods via Ship or Land/Air Transport?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="delivering" id="delivering">
                                    <label class="form-check-label" for="exampleRadios1">Ship Freight</label>                                    
                                </div> 
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="delivering" id="exampleRadios1">
                                    <label class="form-check-label" for="exampleRadios1">Land/Air Freight</label>                                    
                                </div>                               
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
       </section>
        <?php require("assets/footer.php"); ?>
    </body>
</html>
<script>
    
</script>