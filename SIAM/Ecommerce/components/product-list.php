<section class="productListWrap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="filterBock">
                    <a href="" id="selectItem">
                        <span>Filters</span>
                        <img src="<?=$images?>filterArrow.png" class='img-fluid' />
                    </a>
                    <div class="filterDropdown">
                        <form action="" class='row'>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="silver">
                                    <label class="form-check-label" for="silver">Silver 18K</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gold">
                                    <label class="form-check-label" for="gold">Gold 18K</label>
                                </div>
                            </div>
                        </form>
                        <div class="closeFilter">Close Filter X</div>
                    </div>
                </div>
                <!-- Product Block -->
                <div class="productCategoryWrap">
                    <div class="row">
                        <?php
                            for($i = 0; $i<=5; $i++){
                        ?>
                        <div class="col-12 col-lg-4">
                            <div class="productBlock">
                                <div class="productImg">
                                    <img src="<?=$images?>product/01.png" alt='' class="img-fluid" />
                                </div>
                                <div class="productDetail">
                                    <h4>1 kilo Gold, Type of Our Purchase</h4>
                                    <div class="productPrice">
                                        <h3>$120 <span>In Stock</span></h3>
                                    </div>
                                </div>
                                <div class="addCartwrap">
                                    <a href="<?=$root?>detail.php">
                                        <span>Add to Cart</span>
                                        <img src="<?=$images?>+.png" alt='Add to Cart' class='img-fluid' />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>