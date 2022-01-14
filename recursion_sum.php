<?php
//Вычисление суммы списка чисел с помощью рекурсии
function arrSum($arr){
    if(count($arr)==1){
        return $arr[0];
    }else{
        return $arr[0] + arrSum(array_slice($arr,1));
    }
}
echo (arrSum([1,2,3]));