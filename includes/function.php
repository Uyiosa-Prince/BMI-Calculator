<?php
    function CalculateBMI($weight, $height, $unit){
        if($unit == 1){
           $weight = ConvertToKilogram($weight);          
        }
        $height = ConvertToMeters($height);
        $BMI = $weight/pow($height,2);

        return number_format($BMI,2);
    }

    function ConvertToKilogram($weight){
        return $weight/2.2;
    }
    function ConvertToMeters($height){
        return $height/100;
    }

?>