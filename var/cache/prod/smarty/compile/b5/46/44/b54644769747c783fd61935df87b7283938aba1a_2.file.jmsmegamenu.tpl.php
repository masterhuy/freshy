<?php
/* Smarty version 3.1.33, created on 2019-01-04 04:26:43
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\modules\jmsmegamenu\views\templates\hook\jmsmegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2f26d3e49c91_64603455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b54644769747c783fd61935df87b7283938aba1a' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\modules\\jmsmegamenu\\views\\templates\\hook\\jmsmegamenu.tpl',
      1 => 1546416813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2f26d3e49c91_64603455 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="jms-megamenu-wrap">
	<a id="open-button" class="open-button hidden-lg hidden-md" href="#"></a>
	<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu_html']->value,'' ));?>

</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var jmmm_event = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JMSMM_MOUSEEVENT']->value, ENT_QUOTES, 'UTF-8');?>
';
	var jmmm_duration = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JMSMM_DURATION']->value, ENT_QUOTES, 'UTF-8');?>
;	
<?php echo '</script'; ?>
><?php }
}
