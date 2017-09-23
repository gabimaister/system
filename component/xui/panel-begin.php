<?php
//
// Copyright (c) 2017 Grigore Stefan, <g_stefan@yahoo.com>
// Created by Grigore Stefan <g_stefan@yahoo.com>
//
// The MIT License (MIT) <http://opensource.org/licenses/MIT>
//

defined('XYO_CLOUD') or die('Access is denied');

$title=$this->getArgument("title-text",$this->getFromLanguage($this->getArgument("title",$this->getParameter("form_title"))));
$noTitle=$this->getArgument("no-title",0);

?>
<div class="xui-panel">
<?php if(!$noTitle) {?>
	<div class="xui-panel__title"><?php echo $title; ?></div>
<?php }; ?>
	<div class="xui-panel__content">
