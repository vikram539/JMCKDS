<section id="menuPosition">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="menuNav">
                    <div id="iconBar">
                        <a href="#">
                            <img src="<?=$imgPath ?>bar-icon.png" alt="Menu" class="img-fluid d-block ms-auto" />                            
                        </a>
                    </div>                      
                </div>
            </div>
        </div>
    </div>
    <div class="menuItems">
        <div class="container">
            <ul>
                <?php
                    $navItems = $fun_obj->commonSelect_table("cms_pages", "page_ID^page_name^filename", "WHERE for_menu='active' ORDER BY page_order ASC");
                    while($fetchAll =  mysqli_fetch_assoc($navItems)){
                        $pageName = $fetchAll['page_name'];
                        $pageUrl = $fetchAll['filename'];
                        if($fetchAll['page_name'] == "index"){
                            $pageName ="Home";
                        }
                    
                ?>
                    <li class="itemLinks">
                        <a data-text="<?=$pageName?>" href="<?=$website_domain.$pageUrl?>" ><?=$pageName?></a>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </div>    
</section>
               
                