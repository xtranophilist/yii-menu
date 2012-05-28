<?php
class AtUIAutocomplete extends CWidget
{
	public $id;
	public $source;
	public function init()
    {
        Yii::app()->clientScript->registerScriptFile("http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js");
    	Yii::app()->clientScript->registerCssFile('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/base/jquery-ui.css');
    	Yii::app()->clientScript->registerScriptFile('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js');
    	$js = '
    		$("#'.$this->id.'").autocomplete({
    			source:"'.$this->source.'",
    			minLength: 0
    		})
    	';
    	Yii::app()->clientScript->registerScript('at-ui-autocomplete-'.$this->id,$js,CClientScript::POS_READY);    
    }

}