<?php
//
// Copyright (c) 2017 Grigore Stefan, <g_stefan@yahoo.com>
// Created by Grigore Stefan <g_stefan@yahoo.com>
//
// The MIT License (MIT) <http://opensource.org/licenses/MIT>
//

defined('XYO_CLOUD') or die('Access is denied');

$className = "lib_MaterialIcons";

class lib_MaterialIcons extends xyo_Module {
	public function __construct(&$object, &$cloud) {
		parent::__construct($object, $cloud);
		if ($this->isBase("lib_MaterialIcons")) {
			$this->setHtmlCss($this->site."lib/material-icons/css/material-icons.css");
        	}
	}
}
