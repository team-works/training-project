<?php
/* Smarty version 3.1.30, created on 2016-09-11 22:59:09
  from "C:\xampp\htdocs\training-project\application\views\categories-on-main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d5c59d3303e6_30824644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '472fb18e8912734f54464044474b72793557acba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-project\\application\\views\\categories-on-main.tpl',
      1 => 1473627544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d5c59d3303e6_30824644 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="category">
    <h1>Категорії товарів</h1>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <div class="category-item">
                <div class="name">
                    <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value->catalogNameUA;?>
</a>
                </div>
                <div class="img">
                    <a href="#" >
                        <img src="<?php echo base_url();?>
media/img/catalog/<?php echo $_smarty_tpl->tpl_vars['item']->value->catalogLogo;?>
" width="304" height="260" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->catalogNameUA;?>
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

<div class="clearfix" ></div>
<?php }
}
