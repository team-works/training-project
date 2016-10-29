<?php
/* Smarty version 3.1.30, created on 2016-10-29 08:04:20
  from "C:\xampp\htdocs\training-project\application\views\dataview\admin-content-pages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58143be445fb63_25281422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc20066c748cb49a97648406087027223fb722b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-project\\application\\views\\dataview\\admin-content-pages.tpl',
      1 => 1477680872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58143be445fb63_25281422 (Smarty_Internal_Template $_smarty_tpl) {
?>
<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->contentNameUA;
$_prefixVariable1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->contentNameRU;
$_prefixVariable2=ob_get_clean();
echo multyLang($_prefixVariable1,$_prefixVariable2);?>
</td>
<td>
    <?php echo lang('order');?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value->contentOrder;?>

</td>
<td>
    <a class="link-edit" title="<?php echo lang('edit');?>
" onclick="doAction('updatecontent', <?php echo $_smarty_tpl->tpl_vars['item']->value->contentID;?>
)"></a>

    <div class="separator"></div>
    
    <?php if ($_smarty_tpl->tpl_vars['item']->value->contentStatus == 1) {?>
        <?php $_smarty_tpl->_assignInScope('class', 'green');
?>
        <?php $_smarty_tpl->_assignInScope('text', 'activate');
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('class', 'red');
?>
        <?php $_smarty_tpl->_assignInScope('text', 'disable');
?>
    <?php }?>
    <a class="link <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" item-data="<?php echo $_smarty_tpl->tpl_vars['item']->value->contentID;?>
" onclick="doAction('updatecontent/deactivate', <?php echo $_smarty_tpl->tpl_vars['item']->value->contentID;?>
, true);"><?php echo lang($_smarty_tpl->tpl_vars['text']->value);?>
</a>
    
</td><?php }
}
