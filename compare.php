<?php
function getMax($num1 , $num2){
    if( $num1 == $num2){
        return $num1;
    }else{
        return  $num2;
    }
}
echo getMax(3,6);

?>