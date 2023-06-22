<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR . 'Contract' . DIRECTORY_SEPARATOR . 'GunContract.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR . 'Class' . DIRECTORY_SEPARATOR . 'Soldier.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR . 'Class' . DIRECTORY_SEPARATOR . 'Gun.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR . 'Class' . DIRECTORY_SEPARATOR . 'M4.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR . 'Class' . DIRECTORY_SEPARATOR . 'J3.php';

$m4 = new M4();
$j3 = new J3();

$soldier = new Soldier($m4);

$soldier->attack();
$soldier->changeGun($j3);
$soldier->attack();
