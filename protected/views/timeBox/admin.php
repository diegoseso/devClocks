<?php
/* @var $this TimeBoxController */

$this->pageTitle=Yii::app()->name;



foreach ($model as $timeBox){
    echo "<pre>";
    var_dump( $timeBox->description );
    echo "</pre>";
}
