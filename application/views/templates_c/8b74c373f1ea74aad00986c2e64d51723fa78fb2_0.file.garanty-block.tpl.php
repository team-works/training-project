<?php
/* Smarty version 3.1.30, created on 2016-10-12 19:58:11
  from "C:\xampp\htdocs\training-project\application\views\garanty-block.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fe79b3dd1404_28905371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b74c373f1ea74aad00986c2e64d51723fa78fb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-project\\application\\views\\garanty-block.tpl',
      1 => 1476295089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe79b3dd1404_28905371 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="garanty">
    <h1>Гарантія</h1>
    <div class="container">
        <div class="page-title">
            <fieldset>
                <legend align="center"><?php echo lang('garancy');?>
</legend>
            </fieldset>
        </div>
        <ul class="garanty-items">
            <li class="delivery">
                <div class="ico"></div>
                <div class="name"><?php echo lang('delivery');?>
</div>
            </li>
            <li class="product">
                <div class="ico"></div>
                <div class="name"><?php echo lang('productQuality');?>
</div>
            </li>
            <li class="docs">
                <div class="ico"></div>
                <div class="name"><?php echo lang('docs');?>
</div>
            </li>
            <li class="posluga">
                <div class="ico"></div>
                <div class="name"><?php echo lang('posluga');?>
</div>
            </li>
        </ul>
    </div>
</div>
            
<div class="clearfix" ></div>

<?php }
}
