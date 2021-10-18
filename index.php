<?php

require_once __DIR__ . '/config/config.php';
require __DIR__ . '/vendor/autoload.php';

if (empty($orderusConfig) || empty($beastConfig)) {
    die("Invalid config!");
}

$orderusPlayer  = Libraries\UserFactory::create("Libraries\Orderus",$orderusConfig);
$beastPlayer    = Libraries\UserFactory::create("Libraries\Player",$beastConfig);
$battle         = Libraries\BattleFactory::create("War\Magic", $orderusPlayer, $beastPlayer, $skills);

function start(\War\War $battle, \Libraries\Fighter $orderusPlayer, \Libraries\Fighter $beastPlayer, array $skills){
    $battle->start($orderusPlayer, $beastPlayer, $skills);
}

start($battle, $orderusPlayer, $beastPlayer, $skills);
