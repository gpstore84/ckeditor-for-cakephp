
#1.	Add form helper to our controller class

<?php public $helpers =	array('Form');	?>

#2.	Copy ckeditor to app/webroot/js/ location

#3.	Copy CksourceHelper.php to app/View/Helper location

#4.	Write code to view's ctp file for showing ckeditor

<?php 
$config['resize_enabled'] = 'false';
$events['instanceReady'] = 'function (ev) { }';
echo $this->Cksource->ckeditor('content', array('events'=>$events,'escape' => false,'config'=>$config, 'id'=>'content'));
?>	