<?php
//
// Copyright (c) 2017 Grigore Stefan, <g_stefan@yahoo.com>
// Created by Grigore Stefan <g_stefan@yahoo.com>
//
// The MIT License (MIT) <http://opensource.org/licenses/MIT>
//

defined('XYO_CLOUD') or die('Access is denied');

$this->generateComponent("bootstrap.row-begin");
$this->generateComponent("bootstrap.panel-begin");

if ($this->id_xyo_module) {
    
} else {
	$this->generateComponent("bootstrap.select", "id_xyo_module");
}


if ($this->id_xyo_module_group) {
    
} else {
	$this->generateComponent("bootstrap.select", "id_xyo_module_group");
}

$this->generateComponent("bootstrap.order", "order");
$this->generateComponent("bootstrap.select", "id_xyo_user_group");
$this->generateComponent("bootstrap.select", "id_xyo_core");
$this->generateComponent("bootstrap.select", "enabled");
$this->generateComponent("bootstrap.panel-end");
$this->generateComponent("bootstrap.row-end");

