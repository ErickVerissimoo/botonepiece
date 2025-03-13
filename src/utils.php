<?php
namespace Discord\Proihibida;

require_once __DIR__.'/../vendor/autoload.php';

use R;
use Stichoza\GoogleTranslate\GoogleTranslate;
$container = include __DIR__.'/raridades.php';
function convert(array $akumas): array{
    $tr = new GoogleTranslate;
    $tr->setTarget('pt-br');
    $validTypes = ['Logia','Paramecia', 'Zoan'];
$arrei =[];
foreach($akumas as $ass){
    $romanname='';
    $description = $tr->translate($ass['description']);
    if(array_key_exists('roman_name', $ass)){
        $romanname =trim($ass['roman_name']);
    }
    else{
        continue;
    }

    $romanname= trim($romanname);
    $type =trim( $ass['type']);
    $type = ($type === 'Zoan Mythique') ? 'Zoan' : $type;
    $exists = in_array($type, $validTypes);
    $raridade = getRaridade($romanname);
    if( !$exists ){continue;}
    
    
    
    $image = $ass['filename'];
    $akuma=R::dispense('akuma');
    $akuma->description=$description;
    $akuma->image=$image;
    $akuma->name=$romanname;
    $akuma->tipo=$type;
    $akuma->raridade=$raridade;
    
    
    array_push($arrei, $akuma);
    }
return $arrei;
}


function getRaridade(?string $akuma): ?string
{

    if(!$akuma){
return null;
    }
    $container = $GLOBALS['container'];
    
    if (in_array($akuma, $container->get('comum'))) {
        $raridade = Raridade::COMUM;
    } elseif (in_array($akuma, $container->get('raro'))) {
        $raridade = Raridade::RARO;
    } elseif (in_array($akuma, $container->get('epico'))) {
        $raridade = Raridade::EPICO;
    } elseif (in_array($akuma, $container->get('lendario'))) {
        $raridade = Raridade::LENDARIO;
    } elseif (in_array($akuma, $container->get('mitico'))) {
        $raridade = Raridade::MITICO;
    } else{
        return null;
    }

    return $raridade->value;
}

$raridad = getRaridade('Shari Shari no mi');

echo $raridad;