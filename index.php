<?php

// Подключаем библиотеку Simple HTML DOM Parser
// include 'db.php';
include_once 'lib/simple_html_dom.php';



function curlGetPage($url, $referer = 'https://www.google.com/') //url - адрес самой страницы, $referer - адрес страницы с которой мы переходим на сайт 
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_URL,  $url);
    curl_setopt($ch, CURLOPT_REFERER,  $referer);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;

}
$page =  curlGetPage(url:'https://meshok.net/item/134761649_%D0%9D%D0%BE%D0%B6_%D0%A1%D0%A1%D0%A1%D0%A0_%D0%B4%D0%BB%D1%8F_%D0%B7%D0%B0%D1%82%D0%BE%D1%87%D0%BA%D0%B8_%D1%82%D1%80%D1%83%D0%B1%D1%87%D0%B0%D1%82%D1%8B%D1%85_%D1%81%D0%B2%D0%B5%D1%80%D0%BB');

// $html = str_get_html ($page);
$html = file_get_contents ($page);