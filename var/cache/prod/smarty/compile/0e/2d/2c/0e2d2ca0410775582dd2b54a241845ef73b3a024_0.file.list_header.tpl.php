<?php
/* Smarty version 3.1.33, created on 2019-01-04 02:26:01
  from 'D:\xamppp\htdocs\jms_freshy\admin031gwo77f\themes\default\template\controllers\cart_rules\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2f0a896f9bb2_51962135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e2d2ca0410775582dd2b54a241845ef73b3a024' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\admin031gwo77f\\themes\\default\\template\\controllers\\cart_rules\\helpers\\list\\list_header.tpl',
      1 => 1541535861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2f0a896f9bb2_51962135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10494532325c2f0a896ee029_31966335', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_10494532325c2f0a896ee029_31966335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_10494532325c2f0a896ee029_31966335',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['submit_form_ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		$('#voucher', window.parent.document).val('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['new_cart_rule']->value->code,'html','UTF-8' ));?>
');
		parent.add_cart_rule(<?php echo intval($_smarty_tpl->tpl_vars['new_cart_rule']->value->id);?>
);
		parent.$.fancybox.close();
	<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block 'override_header'} */
}
