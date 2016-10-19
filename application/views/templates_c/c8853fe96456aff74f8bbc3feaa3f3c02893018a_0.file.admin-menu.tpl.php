<?php
/* Smarty version 3.1.30, created on 2016-10-18 19:47:22
  from "C:\xampp\htdocs\training-project\application\views\admin\admin-menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5806602a859ca9_11210104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8853fe96456aff74f8bbc3feaa3f3c02893018a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-project\\application\\views\\admin\\admin-menu.tpl',
      1 => 1476812799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5806602a859ca9_11210104 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="admin-menu">

    <div class="adm-item-parent products" id="4">
        <a href="<?php echo base_lang_url();?>
admin/catalog"><?php echo lang('catalogManage');?>
</a>
    </div>
    
    <div class="adm-item-parent site-content" id="3">
        <a href="<?php echo base_lang_url();?>
admin/articles"><?php echo lang('article');?>
</a>
    </div>
    
</div>
<?php }
}
