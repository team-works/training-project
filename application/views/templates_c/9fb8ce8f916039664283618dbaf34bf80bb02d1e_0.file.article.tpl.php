<?php
/* Smarty version 3.1.30, created on 2016-10-09 07:12:09
  from "C:\xampp\htdocs\training-project\application\views\article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f9d1a941f385_56962010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fb8ce8f916039664283618dbaf34bf80bb02d1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-project\\application\\views\\article.tpl',
      1 => 1475989910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f9d1a941f385_56962010 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="article-page container">

    <?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->articleTextUA;
$_prefixVariable1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->articleTextRU;
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('articleText', multyLang($_prefixVariable1,$_prefixVariable2,true));
?>


    <?php echo $_smarty_tpl->tpl_vars['articleText']->value;?>

</div>
<?php }
}
