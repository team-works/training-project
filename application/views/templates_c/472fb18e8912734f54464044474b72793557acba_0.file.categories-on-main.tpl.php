<?php
/* Smarty version 3.1.30, created on 2016-10-12 19:58:11
  from "C:\xampp\htdocs\training-project\application\views\categories-on-main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fe79b3d34fe6_36304795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '472fb18e8912734f54464044474b72793557acba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-project\\application\\views\\categories-on-main.tpl',
      1 => 1476295089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fe79b3d34fe6_36304795 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="category">
    <div class="container">
        <div class="page-title">
            <fieldset>
                <legend align="center" class="bg-grey"><?php echo lang('proposition');?>
</legend>
            </fieldset>
        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->catalogNameUA;
$_prefixVariable1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->catalogNameRU;
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('catalogName', multyLang($_prefixVariable1,$_prefixVariable2));
?>
        
            <div class="category-item">
                <div class="name">
                    <a href="#" ><?php echo $_smarty_tpl->tpl_vars['catalogName']->value;?>
</a>
                </div>
                <div class="img">
                    <a href="#" >
                        <img src="<?php echo base_url();?>
media/img/catalog/<?php echo $_smarty_tpl->tpl_vars['item']->value->catalogLogo;?>
" width="304" height="260" alt="<?php echo $_smarty_tpl->tpl_vars['catalogName']->value;?>
" />
                    </a>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div>
<div class="clearfix" ></div>
<?php }
}
