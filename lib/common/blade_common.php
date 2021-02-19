<?php

use eftec\bladeone\BladeOne;
$views = $_SERVER['DOCUMENT_ROOT'] . '../views';
$cache = $_SERVER['DOCUMENT_ROOT'] . '../cache';

$blade = new eftec\bladeone\BladeOne($views,$cache,BladeOne::MODE_AUTO);

