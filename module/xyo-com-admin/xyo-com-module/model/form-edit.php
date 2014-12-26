<?php
//
// Copyright (c) 2014 Grigore Stefan, <g_stefan@yahoo.com>
// Created by Grigore Stefan <g_stefan@yahoo.com>
//
// The MIT License (MIT) <http://opensource.org/licenses/MIT>
//

defined('XYO_CLOUD') or die('Access is denied');

$this->processModel("select-enabled-edit");
$this->processModel("select-component-edit");

if($this->isNew) {
	$this->processModel("select-acl-enabled-edit");
	$this->processModel("select-xyo-core-edit");
	$this->processModel("select-xyo-module-group-edit");
	$this->processModel("select-xyo-user-group-edit");
}
