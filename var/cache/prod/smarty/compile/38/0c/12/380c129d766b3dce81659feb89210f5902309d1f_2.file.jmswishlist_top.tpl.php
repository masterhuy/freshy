<?php
/* Smarty version 3.1.33, created on 2018-12-13 05:24:43
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\modules\jmswishlist\jmswishlist_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c12336bdd0f90_94728915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '380c129d766b3dce81659feb89210f5902309d1f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\modules\\jmswishlist\\jmswishlist_top.tpl',
      1 => 1542795069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c12336bdd0f90_94728915 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var loggin_required= '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loggin_required']->value, ENT_QUOTES, 'UTF-8');?>
';
    var added_to_wishlist= '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['added_to_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
';
    var mywishlist_url= '<?php echo $_smarty_tpl->tpl_vars['mywishlist_url']->value;?>
';
<?php echo '</script'; ?>
>
<?php }
}
