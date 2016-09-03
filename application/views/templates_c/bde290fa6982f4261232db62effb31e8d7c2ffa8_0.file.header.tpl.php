<?php
/* Smarty version 3.1.30, created on 2016-09-03 12:12:08
  from "C:\xampp\htdocs\training-project\application\views\layouts\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57caa1f8591018_55764442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bde290fa6982f4261232db62effb31e8d7c2ffa8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-project\\application\\views\\layouts\\header.tpl',
      1 => 1472897525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57caa1f8591018_55764442 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Назва сторінки</title>
    
    <!-- jQuery library (served from Google) -->
    <?php echo '<script'; ?>
 src="media/js/jquery-3.1.0.js"><?php echo '</script'; ?>
>
    <!-- bxSlider Javascript file -->
    <?php echo '<script'; ?>
 src="media/jquery.bxslider/jquery.bxslider.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function(){
            $('.bxslider').bxSlider();
        });
    <?php echo '</script'; ?>
>
    <!-- bxSlider CSS file -->
    <link href="media/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
</head>
<body>
<?php }
}
