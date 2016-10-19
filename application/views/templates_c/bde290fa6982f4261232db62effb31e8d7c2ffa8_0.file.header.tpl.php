<?php
/* Smarty version 3.1.30, created on 2016-10-18 19:57:57
  from "C:\xampp\htdocs\training-project\application\views\layouts\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580662a5d14226_15546735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bde290fa6982f4261232db62effb31e8d7c2ffa8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-project\\application\\views\\layouts\\header.tpl',
      1 => 1476813474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580662a5d14226_15546735 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? lang('default_title') : $tmp);?>
 | <?php echo site_name();?>
</title>
    <!-- jQuery library (served from Google) -->
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
media/js/jquery-1.8.2.js"><?php echo '</script'; ?>
>
    <!-- bxSlider Javascript file -->
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
media/js/jquery.bxslider/jquery.bxslider.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
media/js/main.js"><?php echo '</script'; ?>
>
    <!-- bxSlider CSS file -->
    <link href="<?php echo base_url();?>
media/js/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>
media/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>
media/css/admin.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php }
}
