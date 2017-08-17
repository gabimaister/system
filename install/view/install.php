<?php
//
// Copyright (c) 2017 Grigore Stefan, <g_stefan@yahoo.com>
// Created by Grigore Stefan <g_stefan@yahoo.com>
//
// The MIT License (MIT) <http://opensource.org/licenses/MIT>
//

defined('XYO_CLOUD') or die('Access is denied');

$this->processModel("datasource-init");

$selectDatasource = $this->getParameter("select_datasource", array());
$allOk = true;
foreach ($selectDatasource as $key => $value) {
	if ($value == "yes") {
		continue;
	};
	$allOk = false;
	break;
};			

$this->generateComponent("xui.form-action-begin");

?>
		<div class="xui-form-button-group xui--right">
                    	<input type="submit" class="xui-form-button xui-form-button--default" name="<?php $this->eElementName("back"); ?>" value="<?php $this->eLanguage("cmd_back"); ?>" ></input><!--
                    	--><input type="submit" class="xui-form-button xui-form-button--<?php if($allOk){echo "disabled";}else{echo "default";}; ?>" name="<?php $this->eElementName("try"); ?>" value="<?php $this->eLanguage("cmd_try"); ?>" <?php if($allOk){echo "disabled=\"disabled\" ";}; ?>></input><!--
                    	--><input type="submit" class="xui-form-button xui-form-button--<?php if($allOk){echo "primary";}else{echo "disabled";}; ?>" name="<?php $this->eElementName("next"); ?>" value="<?php $this->eLanguage("cmd_next"); ?>" <?php if(!$allOk){echo "disabled=\"disabled\" ";}; ?>></input>
		</div>
		<div class="xui-separator"></div>

<br />

<?php if($allOk){ ?>
	<?php $this->generateViewLanguage("msg-install-ok"); ?>
<?php }else{
		if ($this->isError()) {
             		$this->generateView("msg-error");
                }

?>
	<ul class="list-group">
<?php

		foreach ($listDatasource as $key => $value) {
			if ($value == "yes") {
				continue;
			};
			echo "<li class=\"list-group-item list-group-item-danger\">";
                        echo $key;
			echo "<span class=\"glyphicon glyphicon-remove pull-right\"></span>";
                        echo "</li>";
		};

?>
	</ul>
<?php }; ?>

<?php
                    $this->eFormRequest(array(
                        "back" => "datasource",
                        "this" => "install",
                        "next" => "settings",
                        "website_language" => $this->getSystemLanguage()
                    ));

$this->generateComponent("xui.form-action-end");
