<?php

class Spend
{
    
    
    public function output($param1)
    {
        //print_r($param1);
        $extractedarray=array();
        $i=0;
        foreach($param1 as $value)
        {
            if($i>1)
            array_push($extractedarray, $value);

            $i++;
        }
        
        $output = "No CashBack";
        $amount=0;
        $min=min($extractedarray);
        $max=max($extractedarray);
       if($min >= 50)
        $amount = ($max * 20)/100;
       else if($min >=20)
        $amount = ($max * 15)/100;
       else if($min >=10)
        $amount = ($max * 10)/100;
       else if($min > 0)
        $amount = ($max * 5)/100;

        if($amount>0)
        {
            echo "Award cashback:".number_format((float)$amount, 2, '.', '');;
        }
        else
            echo $output;

    }
    
}