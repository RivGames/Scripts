<?php
function getAge($y, $m, $d){
    if($m > date('m') || $m == date('m') && $d > date('d')){
        return (date('Y') - $y - 1);
    }
    else{
        return (date('Y') - $y);
    }
}