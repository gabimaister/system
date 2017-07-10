<?php
//
// Copyright (c) 2017 Grigore Stefan, <g_stefan@yahoo.com>
// Created by Grigore Stefan <g_stefan@yahoo.com>
//
// The MIT License (MIT) <http://opensource.org/licenses/MIT>
//

defined('XYO_CLOUD') or die('Access is denied');

$className = "xyo_app_Login";

class xyo_app_Login extends xyo_mod_Application {

	function __construct(&$object, &$cloud) {
        	parent::__construct($object, $cloud);
		//
		// force logoff
		//
                $user=&$this->cloud->getModule("xyo-mod-ds-user");
                if($user){
                    $user->makeResetCookie();
                    $user->doLogout();
                };
	}

	function eFormAction($request=null){
		$this->eRequestUri($this->arrayMerge(
				$this->moduleFromRequestDirect($this->popRequest($this->getRequestDirect()))
				,$request));
	}

	function eFormRequest($request=null){
		$this->eFormBuildRequest($this->arrayMerge(
				$this->moduleFromRequestDirect($this->popRequest($this->getRequestDirect()))
				,$request));
	}
}
