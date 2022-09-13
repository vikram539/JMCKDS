<?php
    $name = "Swiss International Asset Management SA";
    $root = "";

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on')
    {
        $root="https";
    }
    else
    {
        $root="http";
    }
    $root.="://".$_SERVER['HTTP_HOST']."/JMCKDS/SIAM/Ecommerce/";
    $images = $root."images/"
?>