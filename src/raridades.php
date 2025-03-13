<?php
# PARAMECIAS
namespace Discord\Proihibida;
require_once __DIR__.'/../vendor/autoload.php';

use DI\Container;

$comum1='Beri Beri no mi, Shari Shari no mi, Fuku Fuku no mi, Koro Koro no mi, Sube Sube no mi, Iro Iro No Mi, Poke Poke no mi, Kobu Kobu No Mi, Kilo Kilo No Mi, Guru Guru No Mi, Toge Toge no mi, Awa Awa No Mi, Ami Ami No Mi, Iro Iro No Mi, Woshu Woshu No Mi, Sui Sui No Mi, Ori Ori No Mi, Nagi Nagi No Mi, Noko Noko No Mi, Mane Mane No Mi, Kuku Kuku No Mi, Jara Jara No Mi';
$raro1='Bata Bata no Mi, Bara Bara no Mi, Bane Bane No mi, Kama Kama No Mi, Giro Giro No Mi, Hira Hira No Mi, Suke Suke No Mi, Gocha Gocha No Mi, Mini Mini No Mi, Shibo Shibo No Mi, Beta Beta No Mi, Choki Choki No Mi, Doru Doru No Mi, Noro Noro No Mi, Kuri Kuri No Mi, Memo Memo No Mi, Nui Nui No Mi, Mato Mato No Mi, Modo Modo No Mi, Bomu Bomu No Mi, Jake Jake no mi, Supa Supa No Mi, Goe Goe no Mi, Mosa Mosa No Mi, Sabi Sabi No Mi, Muchi Muchi no Mi, Nomi Nomi no Mi, Hiso Hiso no Mi';
$epico1='Doa Doa No Mi, Buki Buki No Mi, Kachi Kachi No Mi, Pamu Pamu No Mi, Chiyu Chiyu No Mi, Oto Oto no Mi, Buku Buku No Mi, Bisu Bisu No Mi, Gutsu Gutsu No Mi, Oshi Oshi No Mi, Ton Ton No Mi, Kyubu Kyubu No Mi, Ishi Ishi No Mi, Yomi Yomi No Mi, Mira Mira No Mi, Goru Goru No Mi, Hoya Hoya No Mi, Pero Pero No Mi, Shiro Shiro No Mi, Baku Baku No Mi, Gabu Gabu no Mi';
$lendario1='Mero Mero No Mi, Wara Wara No Mi, Ato Ato No Mi, Hana Hana No Mi, Hobi Hobi No Mi, Modo Modo no Mi, Nuke Nuke No Mi, Jiki Jiki No Mi, Maki Maki no Mi, Juku Juku No Mi, Kage Kage No Mi, Peto Peto No Mi, Netsu Netsu No Mi, Mochi Mochi No Mi, Atsu Atsu No Mi, Horo Horo No Mi, Shimo Shimo no Mi, Wapu Wapu no Mi, Gunyo Gunyo no Mi
';
$mitico1='Fuwa Fuwa No Mi, Riki Riki no Mi, Shiku Shiku no Mi, Bari Bari No Mi, Gura Gura No Mi, Nikyu Nikyu No Mi, Zushi Zushi No Mi, Doku Doku No Mi, Ope Ope No Mi, Soru Soru No Mi, Ito Ito No Mi, Kira Kira No Mi, Moa Moa No Mi, Gasha Gasha No Mi';


#ZOAN
$comum2='Inu Inu no Mi, Inu Inu no Mi, Inu Inu no Mi, Koara Koara no Mi, Mogu Mogu no Mi, Mushi Mushi no Mi, Mushi Mushi no Mi, Tori Tori no Mi, Uma Uma no Mi, Hito Hito no Mi, Inu Inu no Mi, Uma Uma no Mi, Kame Kame no Mi';
$epico2='Neko Neko no Mi, Neko Neko no Mi, Tori Tori no Mi, Ushi Ushi no Mi, Ushi Ushi no Mi, Sara Sara no Mi, Zou Zou no Mi, Akuma no Mi, Hebi Hebi no Mi, Hebi Hebi no Mi, Inu Inu no Mi, Rhino Rhino no Mi';
$lendario2='Kumo Kumo no Mi, Neko Neko no Mi, Ryu Ryu no Mi, Ryu Ryu no Mi, Ryu Ryu no Mi, Ryu Ryu no Mi, Ryu Ryu no Mi, Ryu Ryu no Mi, Zou Zou no Mi
';
$mitico2='Batto Batto no Mi, Hito Hito no Mi, Hito Hito no Mi, Hito Hito no Mi, Hebi Hebi no Mi, Inu Inu no Mi, Inu Inu no Mi, Tori Tori no Mi, Hito Hito no Mi, Uma Uma no Mi, Uo Uo no Mi';

#Logia
#epico
$epico3 = 'Susu Susu no Mi, Ame Ame No Mi, Pasa Pasa No Mi, Numa Numa No Mi, Yuki Yuki No Mi, Toro Toro No Mi
';
$lendario3='Moku Moku No Mi, Mera Mera No Mi, Suna Suna No Mi, Mori Mori no Mi
';
$mitico3='Hie Hie No Mi, Magu Magu No Mi, Yami Yami No Mi, Pika Pika No Mi, Goro Goro No Mi, Gasu Gasu No Mi';




$comuns = implode( ', ', [$comum1, $comum2]);
$raros = $raro1;
$epicos = implode(', ', [$epico1, $epico2, $epico3]);
$lendarios = implode(', ', [$lendario1, $lendario2, $lendario3]);
$miticos = implode(', ', [$mitico1, $mitico2, $mitico3]);

$comuns = explode(', ', $comuns);
$raros = explode(', ', $raros);
$epicos = explode(', ', $epicos);
$lendarios = explode(', ', $lendarios);
$miticos = explode(', ', $miticos);


$container = new Container;

$container->set('comum', $comuns);
$container->set('raro', $raros);
$container->set('epico', $epicos);
$container->set('lendario', $lendarios);
$container->set('mitico', $miticos);

return $container;