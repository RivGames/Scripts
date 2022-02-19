<?php
function truncation($str, $length)
{
    $str = substr($str, 0, $length - 2);        //Обрезаем до заданной длины
    $words = explode(" ", $str);                //Разбиваем по словам
    array_splice($words, -1);                //Удаляем последнее слово

    $last = array_pop($words);                //Получаем последнее слово

    for ($i = 1; $i < strlen($last); $i++)
    {
        //Ищем и удаляем в конце последнего слова все кроме букв и цифр
        if (preg_match('/\W$/', substr($last, -1, 1))) $last = substr($last, 0, strlen($last) - 1);
        else break;
    }
    return implode(" ", $words) . ' ' . $last . '...';
}
$text = "Демонстрация работы скрипта правильной обрезки текста!!! Тестируем работу.";

echo truncation($text, 60);