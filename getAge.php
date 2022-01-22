<?php
//Реализол скрипт который выводит сколько лет пользователю.
function getAge($y, $m, $d){
    if(($m > date('m') or $m == date('m')) && $d > date('d')){
        return (date('Y') - $y - 1);
    }
    else{
        return (date('Y') - $y);
    }
}
echo getAge(2005,01,12);//17