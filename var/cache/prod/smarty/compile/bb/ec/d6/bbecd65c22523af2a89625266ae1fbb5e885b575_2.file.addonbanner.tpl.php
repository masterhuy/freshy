<?php
/* Smarty version 3.1.33, created on 2019-01-04 04:26:30
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\modules\jmspagebuilder\views\templates\hook\addonbanner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2f26c66dc550_23549738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbecd65c22523af2a89625266ae1fbb5e885b575' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\modules\\jmspagebuilder\\views\\templates\\hook\\addonbanner.tpl',
      1 => 1544696434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2f26c66dc550_23549738 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="jms-banner<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
<?php if ($_smarty_tpl->tpl_vars['banner']->value) {?>
	
		<a href="<?php if ($_smarty_tpl->tpl_vars['banner_link']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner_link']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"<?php if ($_smarty_tpl->tpl_vars['target']->value == 'new window') {?> target="_blank"<?php }?>>
			<img class="img-responsive" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alt_text']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
		</a>

<?php }
if ($_smarty_tpl->tpl_vars['html_content']->value) {?>
	<div class="banner-content">
		<?php echo $_smarty_tpl->tpl_vars['html_content']->value;?>

	</div>
<?php }?>
</div>	
<?php }
}
