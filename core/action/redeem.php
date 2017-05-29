<?php

class Redeem
{
    const redeemMapping = array("www.shopback.sg"=>"https://www.shopback.sg","www.shopback.my"=>"https://www.shopback.my","www.shopback.co.id"=>"https://www.shopback.co.id","www.shopback.com.tw"=>"https://www.shopback.com.tw","www.myshopback.co.th"=>"https://www.myshopback.co.th","www.myshopback.com"=>"https://www.myshopback.com");


    
    public function output($param1)
    {
        //print_r($param1);
        if(isset(Redeem::redeemMapping[$param1[2]]))
        echo("Visit ". Redeem::redeemMapping[$param1[2]] ." to start earning cashback!");
        else
        echo "Invalid Domain";
    }
    
}