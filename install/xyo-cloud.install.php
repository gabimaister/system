<?php
//
// Copyright (c) 2017 Grigore Stefan, <g_stefan@yahoo.com>
// Created by Grigore Stefan <g_stefan@yahoo.com>
//
// The MIT License (MIT) <http://opensource.org/licenses/MIT>
//

defined('XYO_CLOUD') or die('Access is denied');
defined('XYO_CLOUD_INSTALL') or die('Access is denied');
//
//$this->set("log_module",true);
//$this->set("log_request",true);
//$this->set("log_response",true);
//
$this->set("language", "en-GB");
if ($this->isRequest("website_language")) {
    if (strcmp($this->getRequest("website_language"), "-") != 0) {
        $this->set("language", $this->getRequest("website_language"));
    };
};
$this->set("datasource_layer", "xyo-datasource-xyo");
$this->includeConfig("config.website");
/* --- */
$this->includeConfig("xyo-cloud.common.module");
/* --- */
$this->setModule(null, "install", "xyo-app-install", true, null, true,false);
$this->setModule("xyo-app-install", null, "xyo-tpl-install", true,null,true,false);
$this->setModuleGroup("xyo-tpl-install", "xyo-system-exec");
$this->setModuleAsApplication("xyo-app-install");
$this->setApplication("xyo-app-install");

