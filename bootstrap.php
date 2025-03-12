<?php
require_once __DIR__.'/rb-mysql.php' ;

require_once __DIR__.'/vendor/autoload.php';
use Stichoza\GoogleTranslate\GoogleTranslate;
R::setup('mysql:host=172.18.0.2;dbname=bot', 'root','rootpassword');

$tr = new GoogleTranslate;
$tr->setTarget('pt-br');
$json = file_get_contents("https://api.api-onepiece.com/v2/fruits/en");
$akumas = json_decode($json, true);
foreach($akumas as $ass){
$description = $tr->translate($ass['description']);
$romanname= $ass['roman_name'];
if(!$romanname){
break;
}
$image = $ass['filename'];
$akuma=R::dispense('akuma');
$akuma->description=$description;
$akuma->image=$image;
$akuma->name=$romanname;
R::store($akuma);
}