<?php
//
// Copyright (c) 2017 Grigore Stefan, <g_stefan@yahoo.com>
// Created by Grigore Stefan <g_stefan@yahoo.com>
//
// The MIT License (MIT) <http://opensource.org/licenses/MIT>
//

defined('XYO_CLOUD') or die('Access is denied');

$this->set("table_primary_key", "id");

$this->set("table_item", array(
		   "id" => array("bigint","DEFAULT","unsigned","auto_increment"),
		   "name" => array("varchar",64,null),
		   "description" => array("varchar",192,null),
		   "enabled" => array("int",0,"unsigned")
	   ));

$this->set("table_link",array(
		   "xyo_acl_module"=>array("db.table.xyo_acl_module","id_xyo_module_group","id","delete")
	   ));
