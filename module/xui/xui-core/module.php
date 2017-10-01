<?php
//
// Copyright (c) 2017 Grigore Stefan, <g_stefan@yahoo.com>
// Created by Grigore Stefan <g_stefan@yahoo.com>
//
// The MIT License (MIT) <http://opensource.org/licenses/MIT>
//

defined('XYO_CLOUD') or die('Access is denied');

$className = "xui_Core";

class xui_Core extends xyo_Module {

	public function __construct(&$object, &$cloud) {
		parent::__construct($object, $cloud);
		if ($this->isBase("xui_Core")) {
			$this->setHtmlCss($this->site."lib/xui/css/xui.css");
			$this->setHtmlJs($this->site."lib/xui/js/xui.js");
			$this->setHtmlClass("xui-html");
			$this->setHtmlBodyClass("xui-body");
        	}
	}

}
