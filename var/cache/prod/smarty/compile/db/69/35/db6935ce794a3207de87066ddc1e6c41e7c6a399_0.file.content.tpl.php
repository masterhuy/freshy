<?php
/* Smarty version 3.1.33, created on 2018-11-22 23:46:39
  from 'D:\xamppp\htdocs\jms_freshy\admin031gwo77f\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf7862fe08d18_62662696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db6935ce794a3207de87066ddc1e6c41e7c6a399' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\admin031gwo77f\\themes\\new-theme\\template\\content.tpl',
      1 => 1541535861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf7862fe08d18_62662696 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}