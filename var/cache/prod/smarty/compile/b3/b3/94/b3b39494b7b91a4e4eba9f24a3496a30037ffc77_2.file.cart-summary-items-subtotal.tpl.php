<?php
/* Smarty version 3.1.33, created on 2019-01-03 04:51:56
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\templates\checkout\_partials\cart-summary-items-subtotal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2ddb3c3f8e31_00819556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3b39494b7b91a4e4eba9f24a3496a30037ffc77' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\templates\\checkout\\_partials\\cart-summary-items-subtotal.tpl',
      1 => 1542795069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2ddb3c3f8e31_00819556 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
  <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
  <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
</div>
<?php }
}
