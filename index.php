<?php 
echo "aa";
require 'form.php';

$form = new form();

$attribute = array(
			'name' => 'lorem',
			'value' => 'aa',
			'style' => 'color:red'
			);

?>


 <?php echo $form->create('name'); ?>
 <?php echo $form->text('sss','aaa',array('aaa'),$attribute); ?>
 <?php echo $form->textarea('aaaa','assdadsa',array('aa','aaa'),$attribute); ?>
 <?php echo $form->end(); ?>