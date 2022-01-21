<?php
$string = 'abc1a';
$arr = preg_match('#[a-z][0-9].#',$string);//true
var_dump($arr);
$string1 = '1a';
$arr1 = preg_match('#[0-9]+a+#',$string1);//квантификаторы: * + ?
var_dump($arr1);
$string2 = '0 js 0';
$arr2 = preg_match('#\d\s\w+\s\d#',$string2);//true
var_dump($arr2);
/*  Modifiers
*   i   Регистр не учытывается
*   U   Если указать данный модификатор, то будет вестись поиск минимального по длине соответствия.
*   x   Пробелы будут игнорироватся
/*
