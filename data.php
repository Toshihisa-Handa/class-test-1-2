<?php 
require_once('menu.php');
$cake = new Menu('チョコ',140);//constructでの初期値を設定
$juce = new Menu('レモネード',240);
$pasta = new Menu('パスタ',540);
$curry = new Menu('カレー',480);

$menus = [$cake,$juce,$pasta,$curry];
