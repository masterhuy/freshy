<?php
/* Smarty version 3.1.33, created on 2019-01-02 05:21:36
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\templates\checkout\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2c90b04a6738_85840877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31529e5f1af29d678897f0dc7eb89a81de539551' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\templates\\checkout\\cart.tpl',
      1 => 1544417065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed.tpl' => 1,
    'file:checkout/_partials/cart-detailed-totals.tpl' => 1,
    'file:checkout/_partials/cart-detailed-actions.tpl' => 1,
  ),
),false)) {
function content_5c2c90b04a6738_85840877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11511895385c2c90b048f025_15661439', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'cart_overview'} */
class Block_9914970525c2c90b048f027_69332409 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
					  	<?php
}
}
/* {/block 'cart_overview'} */
/* {block 'continue_shopping'} */
class Block_1935184895c2c90b0496d29_08646524 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  			<a class="btn-shopping button-small btn-effect1 btn-checkout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

			  			</a>
					<?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_totals'} */
class Block_13939922185c2c90b04a28a4_87409470 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						  	<?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
						<?php
}
}
/* {/block 'cart_totals'} */
/* {block 'cart_actions'} */
class Block_16649542685c2c90b04a28a8_68962136 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						  	<?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
						<?php
}
}
/* {/block 'cart_actions'} */
/* {block 'cart_summary'} */
class Block_18625977025c2c90b049ea24_54361797 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  		<div class="card cart-summary">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13939922185c2c90b04a28a4_87409470', 'cart_totals', $this->tplIndex);
?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16649542685c2c90b04a28a8_68962136', 'cart_actions', $this->tplIndex);
?>

			  		</div>
					<?php
}
}
/* {/block 'cart_summary'} */
/* {block 'display_reassurance'} */
class Block_590645395c2c90b04a6735_26570395 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'display_reassurance'} */
/* {block 'content'} */
class Block_11511895385c2c90b048f025_15661439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11511895385c2c90b048f025_15661439',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_9914970525c2c90b048f027_69332409',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_1935184895c2c90b0496d29_08646524',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_18625977025c2c90b049ea24_54361797',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_13939922185c2c90b04a28a4_87409470',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_16649542685c2c90b04a28a8_68962136',
  ),
  'display_reassurance' => 
  array (
    0 => 'Block_590645395c2c90b04a6735_26570395',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="main">
    <div class="cart-grid">
		<div class="row first">
      		<!-- Left Block: cart product informations & shpping -->
      		<div class="cart-grid-body col-xs-12 col-lg-12">
				<div class="cart-box">
					<!-- cart products detailed -->
					<div class="cart cart-container">
					  	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9914970525c2c90b048f027_69332409', 'cart_overview', $this->tplIndex);
?>

					</div>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1935184895c2c90b0496d29_08646524', 'continue_shopping', $this->tplIndex);
?>


					<!-- shipping informations -->
					<div>
			  			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

					</div>
				</div>
    		</div>

      		<!-- Right Block: cart subtotal & cart total -->
      		<div class="cart-grid-right pull-right col-xs-12 col-lg-4">
				<div class="right-box">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18625977025c2c90b049ea24_54361797', 'cart_summary', $this->tplIndex);
?>


					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_590645395c2c90b04a6735_26570395', 'display_reassurance', $this->tplIndex);
?>

				</div>
      		</div>
		</div>
    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}
