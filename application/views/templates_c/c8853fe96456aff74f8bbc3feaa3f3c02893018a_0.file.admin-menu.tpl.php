<?php
/* Smarty version 3.1.30, created on 2016-10-30 23:38:00
  from "C:\xampp\htdocs\training-project\application\views\admin\admin-menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58167648d60ba4_65221205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8853fe96456aff74f8bbc3feaa3f3c02893018a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-project\\application\\views\\admin\\admin-menu.tpl',
      1 => 1477867071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58167648d60ba4_65221205 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="admin-menu">

    <div class="adm-item-parent products" id="1">
        <a href="<?php echo base_lang_url();?>
admin/catalog"><?php echo lang('catalogManage');?>
</a>
    </div>
    
    <div class="adm-item-parent site-articles" id="2">
        <a href="<?php echo base_lang_url();?>
admin/articles"><?php echo lang('article');?>
</a>
    </div>
    
    <div class="adm-item-parent site-content" id="3">
        <a href="<?php echo base_lang_url();?>
admin/contents"><?php echo lang('contentPages');?>
</a>
    </div>
    
    <div class="adm-item-parent site-contacts" id="3">
        <a href="<?php echo base_lang_url();?>
admin/contacts"><?php echo lang('contacts');?>
</a>
    </div>
</div>
<?php }
}
