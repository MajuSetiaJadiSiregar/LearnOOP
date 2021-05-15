<?php

require_once "data/Confilct.php";
require_once "data/Helper.php";


$confilctOne = new Data\One\Confilct();
$confilctTwo  = new Data\Two\Confilct();

echo Helper\APPLICATION . PHP_EOL;
helper\helpMe();