<?php
//
// Copyright (c) 2014 Grigore Stefan, <g_stefan@yahoo.com>
// Created by Grigore Stefan <g_stefan@yahoo.com>
//
// The MIT License (MIT) <http://opensource.org/licenses/MIT>
//

defined('XYO_CLOUD') or die('Access is denied');

$this->isNew = true;
$this->processModel("set-primary-key-value-one");
$this->processModel("set-ds");

if (!$this->isError()) {    
    $this->processModel("form-select");
}

if (!$this->isError()) {
    $this->clearElementError();
    $this->processModel("form-new-save");
}

if ($this->isError()) {
	$this->doRedirect("form-new");
	return;
}

$this->isNew = false;
$this->doRedirect("table-view");
