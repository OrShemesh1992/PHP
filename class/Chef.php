<?php

class Chef {
function makeChicken(){
    echo "Make Chicken Chef";
}
}

class ItalianChef extends Chef{

    function makeSalad(){
        echo "Make Salad";
    }
    //override
    function makeChicken(){
        echo "Make Chicken Italian";
    }
}


$italian = new ItalianChef;

echo $italian-> makeChicken();
?>