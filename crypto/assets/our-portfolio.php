<section>
    <div class="container"
        <div class="row">
            <div class="col-12">
                <div class="portfolio">
                    <ul class='row'>
                        <?php
                        $i = 1;
                            foreach($serviceArray as $servicesNAme){
                                echo"<li data-bs-toggle='modal' data-bs-target='#modal_$i' class='col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6'>
                                    <div class='border-box'>
                                        <h4>".$servicesNAme."</h4>
                                    </div>                               
                                </li>";
                                $i++;
                            }
                        ?>
                    </ul>                    
                </div>
            </div>
        </div>
    </div>
</section>