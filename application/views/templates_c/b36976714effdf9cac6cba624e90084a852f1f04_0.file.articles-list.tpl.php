<?php
/* Smarty version 3.1.30, created on 2016-10-08 23:39:50
  from "C:\xampp\htdocs\training-project\application\views\articles-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f967a6d71f62_95696443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b36976714effdf9cac6cba624e90084a852f1f04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-project\\application\\views\\articles-list.tpl',
      1 => 1475962787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f967a6d71f62_95696443 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\training-project\\application\\libraries\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\training-project\\application\\libraries\\smarty\\libs\\plugins\\modifier.truncate.php';
?>
<div class="articles container">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <li>
                <img width="140" height="90" src="<?php echo base_url();?>
media/img/articles/<?php echo $_smarty_tpl->tpl_vars['item']->value->articleLogo;?>
" />
                <div class="description">
                    <div class="name">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->articleNameUA;
$_prefixVariable1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->articleNameRU;
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('articleName', multyLang($_prefixVariable1,$_prefixVariable2,true));
?>
                        <a href="<?php echo base_lang_url();?>
article/<?php echo $_smarty_tpl->tpl_vars['item']->value->articleID;?>
" title="<?php echo $_smarty_tpl->tpl_vars['articleName']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['articleName']->value;?>
</a>
                        <div class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value->articleTime,"%d.%m.%Y");?>
</div>
                    </div>
                    <div class="shot-text"><?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->articleTextUA;
$_prefixVariable3=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->articleTextRU;
$_prefixVariable4=ob_get_clean();
echo smarty_modifier_truncate(multyLang($_prefixVariable3,$_prefixVariable4,true),300);?>
</div>
                    
                    <div class="clearfix"></div>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
</div>
<?php }
}
