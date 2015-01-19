<?php
//
// Copyright (c) 2014 Grigore Stefan, <g_stefan@yahoo.com>
// Created by Grigore Stefan <g_stefan@yahoo.com>
//
// The MIT License (MIT) <http://opensource.org/licenses/MIT>
//

defined('XYO_CLOUD') or die('Access is denied');

$this->generateElement("row-begin");
$this->generateElement("panel-begin");
$this->generateElement("select", "connection",array("submit"=>true));
$this->generateElement("select", "datasource");
$this->generateElement("select", "option");
$this->generateElement("panel-end");
$this->generateElement("row-end");
