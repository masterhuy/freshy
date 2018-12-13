<?php
/* Smarty version 3.1.33, created on 2018-12-12 23:25:05
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\modules\jmsvermegamenu\views\templates\hook\jmsvermegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c11df21062ce4_50474333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b566cb1c422727c5a5152b4b5d350d83a18e7cd' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\modules\\jmsvermegamenu\\views\\templates\\hook\\jmsvermegamenu.tpl',
      1 => 1542795069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c11df21062ce4_50474333 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['vermenu_html']->value;?>

<?php echo '<script'; ?>
 type="text/javascript">
	var jmvmm_event = '<?php echo $_smarty_tpl->tpl_vars['JMSVMM_MOUSEEVENT']->value;?>
';
	var jmvmm_duration = <?php echo $_smarty_tpl->tpl_vars['JMSVMM_DURATION']->value;?>
;	
<?php echo '</script'; ?>
>
<style type="text/css">
.jms-vermegamenu .dropdown-menu {    
	transition:all <?php echo $_smarty_tpl->tpl_vars['JMSVMM_DURATION']->value;?>
ms;
}
</style><?php }
}
