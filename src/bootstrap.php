<?php
namespace Discord\Proihibida;



require_once __DIR__.'/../vendor/autoload.php';

use R;
use Stichoza\GoogleTranslate\GoogleTranslate;
R::setup('mysql:host=172.18.0.2;dbname=bot', 'root','rootpassword');


$json = file_get_contents("https://api.api-onepiece.com/v2/fruits/en");
$akumas = json_decode($json, true);
$result = convert($akumas);

R::storeAll($result);
