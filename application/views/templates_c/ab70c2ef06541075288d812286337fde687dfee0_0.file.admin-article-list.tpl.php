<?php
/* Smarty version 3.1.30, created on 2016-10-27 23:31:54
  from "C:\xampp\htdocs\training-project\application\views\dataview\admin-article-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5812724adb8204_80648429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab70c2ef06541075288d812286337fde687dfee0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-project\\application\\views\\dataview\\admin-article-list.tpl',
      1 => 1477603912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5812724adb8204_80648429 (Smarty_Internal_Template $_smarty_tpl) {
?>
<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->articleNameUA;
$_prefixVariable1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->articleNameRU;
$_prefixVariable2=ob_get_clean();
echo multyLang($_prefixVariable1,$_prefixVariable2);?>
</td>

<td>
    <a class="link-edit" title="<?php echo lang('edit');?>
" onclick="doAction('updatearticle', <?php echo $_smarty_tpl->tpl_vars['item']->value->articleID;?>
)"><?php echo lang('edit');?>
</a>
    <a class="link-delete" item-data="<?php echo $_smarty_tpl->tpl_vars['item']->value->articleID;?>
" title="<?php echo lang('delete');?>
" onclick="toConfirm('updatearticle/delete', this)"><?php echo lang('delete');?>
</a>
    <div class="separator"></div>
    
    <?php if ($_smarty_tpl->tpl_vars['item']->value->articleStatus == 1) {?>
        <?php $_smarty_tpl->_assignInScope('class', 'green');
?>
        <?php $_smarty_tpl->_assignInScope('text', 'publish');
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('class', 'red');
?>
        <?php $_smarty_tpl->_assignInScope('text', 'unPublish');
?>
    <?php }?>
    <a class="link <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" item-data="<?php echo $_smarty_tpl->tpl_vars['item']->value->articleID;?>
" onclick="doAction('updatearticle/deactivate', <?php echo $_smarty_tpl->tpl_vars['item']->value->articleID;?>
, true);"><?php echo lang($_smarty_tpl->tpl_vars['text']->value);?>
</a>
</td><?php }
}
