<?php
/* Smarty version 3.1.33, created on 2018-12-12 22:59:33
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\templates\customer\_partials\block-address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c11d925584d85_82976658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3562164348aee293b589b6131bb9f06e0ea2817e' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\templates\\customer\\_partials\\block-address.tpl',
      1 => 1542795069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c11d925584d85_82976658 (Smarty_Internal_Template $_smarty_tpl) {
?><article id="address-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="address" data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
  <div class="address-body">
    <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['alias'], ENT_QUOTES, 'UTF-8');?>
</h4>
    <address><?php echo $_smarty_tpl->tpl_vars['address']->value['formatted'];?>
</address>
  </div>
  <div class="address-footer">
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','id'=>$_smarty_tpl->tpl_vars['address']->value['id'],'params'=>array('delete'=>1,'token'=>$_smarty_tpl->tpl_vars['token']->value)),$_smarty_tpl ) );?>
" data-link-action="delete-address" class="btn-default btn-delete">
      <i class="fa fa-trash"></i>
      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
    </a>
	 <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','id'=>$_smarty_tpl->tpl_vars['address']->value['id']),$_smarty_tpl ) );?>
" data-link-action="edit-address" class="btn-default">
      <i class="fa fa-pencil-square-o"></i>
      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
    </a>
  </div>
</article>
<?php }
}
