<?php
/* Smarty version 3.1.30, created on 2016-09-11 22:15:21
  from "C:\xampp\htdocs\training-project\application\views\layouts\page-header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d5bb5906e3d2_76134138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '220c483684be6cbcec32467fa71bc485f50e8f2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-project\\application\\views\\layouts\\page-header.tpl',
      1 => 1473624825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/content-menu.tpl' => 1,
  ),
),false)) {
function content_57d5bb5906e3d2_76134138 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header id="page-header">
    <h1>Хедер сторінки</h1>
    <div>
        <div class="lang"><?php echo switchLang();?>
</div>
        <div class="page-menu">
            <?php $_smarty_tpl->_subTemplateRender("file:layouts/content-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
    </div>
</header>
<?php }
}
