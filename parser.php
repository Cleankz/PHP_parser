<?php

// Подключаем библиотеку Simple HTML DOM Parser
include 'db.php';
include 'lib/simple_html_dom.php';
include 'curl_query.php';



function curlGetPage($url, $referer = 'https://www.google.com/') //url - адрес самой страницы, $referer - адрес страницы с которой мы перешли сюда 
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
$page =  curlGetPage(url:'https://tilda.cc/ru/');
$html = str_get_html($page);

foreach ($html->find('') AS $post){
    $img
}
?>