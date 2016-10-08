<?php
/* Smarty version 3.1.30, created on 2016-10-01 15:13:42
  from "C:\xampp\htdocs\training-project\application\views\layouts\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57efb68646fed3_07001388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6deb9625d88d1d5d944fcbae0a226e98108ab25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training-project\\application\\views\\layouts\\footer.tpl',
      1 => 1475315528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57efb68646fed3_07001388 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer id="footer">
    <h1>Футер сторінки</h1>
    <form method="post" action="models/Catalog_model.php">
        catalogNameUA:<br/>
        <input type="text" name="catalogNameUA"><br/>
        catalogNameRU:<br/>
        <input type="text" name="catalogNameRU"><br/>
        catalogTextUA:<br/>
        <textarea type="text" name="catalogTextUA"></textarea><br/>
        catalogTextRU:<br/>
        <textarea type="text" name="catalogTextRU"></textarea><br/>
        <input type="submit" value="Submit">
    </form>
</footer>
<?php }
}
