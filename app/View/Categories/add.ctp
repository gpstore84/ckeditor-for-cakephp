<?php 
$config['resize_enabled'] = 'false';
$events['instanceReady'] = 'function (ev) { }';
echo $this->Cksource->ckeditor('Page.content', array('events'=>$events,'escape' => false,'config'=>$config, 'id'=>'content'));?>
	