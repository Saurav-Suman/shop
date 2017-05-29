<?php

class Signup 
{
    const signupMapping = array("www.shopback.sg"=>"SGD 5","www.shopback.my"=>"MYR 10","www.shopback.co.id"=>"IDR 25.000","www.shopback.com.tw"=>"TWD 1000","www.myshopback.co.th"=>"THB 500","www.myshopback.com"=>"USD 5");

    
    public function output($param1)

    {
        //print_r($param1);
        if(isset(Signup::signupMapping[$param1[2]]))
        echo('Award bonus: ' . Signup::signupMapping[$param1[2]]);
        else
        echo "Invalid Domain";
    }
    
}
?>