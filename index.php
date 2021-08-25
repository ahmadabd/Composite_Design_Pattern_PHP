<?php

use App\Link;
use App\Menu;

require_once __DIR__.'/vendor/autoload.php';

ini_set('display_error', 1);

$main_menu = new Menu("Mian Menu");

$laptop_menu = new Menu("Laptop");
$laptop_menu->add(new Link('L1', '/laptop/l1'));
$laptop_menu->add(new Link('L2', '/laptop/l2'));

$cellPhone_menu = new Menu("CellPhone");
$cellPhone_menu->add(new Link('C1', '/cellphone/c1'));
$cellPhone_menu->add(new Link('C2', '/cellphone/c2'));

$smartPhone_menu = new Menu("SmartPhone");
$smartPhone_menu->add(new Link('S1', '/smartphone/s1'));
$smartPhone_menu->add(new Link('S2', '/smartphone/s2'));


$cellPhone_menu->add($smartPhone_menu);
$main_menu->add($cellPhone_menu);
$main_menu->add($laptop_menu);

$result = $main_menu->render();

var_dump($result);