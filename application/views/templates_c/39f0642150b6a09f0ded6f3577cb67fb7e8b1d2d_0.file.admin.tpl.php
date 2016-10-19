<?php
/* Smarty version 3.1.30, created on 2016-10-18 19:37:09
  from "C:\xampp\htdocs\training-project\application\views\layouts\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58065dc5ae89b7_85133015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39f0642150b6a09f0ded6f3577cb67fb7e8b1d2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-project\\application\\views\\layouts\\admin.tpl',
      1 => 1476812203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/header.tpl' => 1,
    'file:layouts/page-header.tpl' => 1,
    'file:admin/admin-menu.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_58065dc5ae89b7_85133015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container" id="container">
    <?php $_smarty_tpl->_subTemplateRender("file:layouts/page-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="left-column">
        <?php $_smarty_tpl->_subTemplateRender("file:admin/admin-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <div class="right-column content">
        <?php if (isset($_smarty_tpl->tpl_vars['breadcrumbs']->value)) {?>
            <div class="bread-crumbs"><?php echo $_smarty_tpl->tpl_vars['breadcrumbs']->value;?>
</div>
            <div class="clearfix" ></div>
        <?php }?>
    </div>
</div>
<div class="clearfix" ></div>

<div class="footer container-fluid">
    <?php $_smarty_tpl->_subTemplateRender("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
