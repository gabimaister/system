<?php
//
// Copyright (c) 2017 Grigore Stefan, <g_stefan@yahoo.com>
// Created by Grigore Stefan <g_stefan@yahoo.com>
//
// The MIT License (MIT) <http://opensource.org/licenses/MIT>
//

defined('XYO_CLOUD') or die('Access is denied');

$className = "lib_BootstrapFileInput";

class lib_BootstrapFileInput extends xyo_Module {

    public function __construct(&$object, &$cloud) {
        parent::__construct($object, $cloud);
        if ($this->isBase("lib_BootstrapFileInput")) {
		$this->setHtmlCss($this->site."lib/bootstrap-fileinput/css/fileinput.min.css");
		$this->setHtmlJs($this->site."lib/bootstrap-fileinput/js/fileinput.min.js");
        }
    }

}
