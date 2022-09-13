<?php
    $name = "Crypto";
    $root = "";

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on')
    {
        $root="https";
    }
    else
    {
        $root="http";
    }
    $root.="://".$_SERVER['HTTP_HOST']."/JMCKDS/crypto/";
    $images = $root."images/";

    // Services
    $serviceArray =[
    "financial" => "Financial Planning",
    "asset" => "Asset management",
    "wealth" => "Wealth Management",
    "growth" => "Growth Equity",
    "stabilized" => "Stabilized Equity",
    "financial_2" => "Financial Controlling, Budgeting & Reporting"
    ];
?>