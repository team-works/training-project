<?php
/* Smarty version 3.1.30, created on 2016-10-09 07:35:11
  from "C:\xampp\htdocs\training-project\application\views\layouts\one_column.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f9d70fe260b0_94568760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f092747e9c1d6289037d7e66baca0475c12f5cef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-project\\application\\views\\layouts\\one_column.tpl',
      1 => 1475991306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/header.tpl' => 1,
    'file:layouts/page-header.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_57f9d70fe260b0_94568760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:layouts/page-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (!empty($_smarty_tpl->tpl_vars['heading']->value)) {?>
    <header class="title-content-page">
        <h1><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</h1>
    </header>
<?php }?>

<div class="workspace">
    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['workspace']->value)===null||$tmp==='' ? "empty page" : $tmp);?>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
