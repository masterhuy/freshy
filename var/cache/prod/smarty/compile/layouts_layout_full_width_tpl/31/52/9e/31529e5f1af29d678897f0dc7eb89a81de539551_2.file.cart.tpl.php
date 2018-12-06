<?php
/* Smarty version 3.1.33, created on 2018-12-06 05:28:36
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\templates\checkout\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c08f9d4128a44_58997272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31529e5f1af29d678897f0dc7eb89a81de539551' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\templates\\checkout\\cart.tpl',
      1 => 1542795069,
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
function content_5c08f9d4128a44_58997272 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1901045515c08f9d410d4c9_26235872', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'cart_overview'} */
class Block_9327228705c08f9d4111349_47703497 extends Smarty_Internal_Block
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
class Block_19885911525c08f9d4119047_60441777 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <a class="btn-default btn-shopping button-small btn-effect" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

			  </a>
			<?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_totals'} */
class Block_8754223935c08f9d4124bc5_04845943 extends Smarty_Internal_Block
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
class Block_8378867425c08f9d4124bc7_63755907 extends Smarty_Internal_Block
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
class Block_11189975745c08f9d4120d49_68337335 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <div class="card cart-summary">

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8754223935c08f9d4124bc5_04845943', 'cart_totals', $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8378867425c08f9d4124bc7_63755907', 'cart_actions', $this->tplIndex);
?>


			  </div>
			<?php
}
}
/* {/block 'cart_summary'} */
/* {block 'display_reassurance'} */
class Block_4238675915c08f9d4128a49_17180836 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block 'display_reassurance'} */
/* {block 'content'} */
class Block_1901045515c08f9d410d4c9_26235872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1901045515c08f9d410d4c9_26235872',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_9327228705c08f9d4111349_47703497',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_19885911525c08f9d4119047_60441777',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_11189975745c08f9d4120d49_68337335',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_8754223935c08f9d4124bc5_04845943',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_8378867425c08f9d4124bc7_63755907',
  ),
  'display_reassurance' => 
  array (
    0 => 'Block_4238675915c08f9d4128a49_17180836',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
	 <div class="cart-block">
            <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h1>
          </div>
    <div class="cart-grid">
		<div class="row first">
      <!-- Left Block: cart product informations & shpping -->
      <div class="cart-grid-body col-xs-12 col-lg-8">
		<div class="cart-box">
			<!-- cart products detailed -->
			<div class="cart cart-container">
			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9327228705c08f9d4111349_47703497', 'cart_overview', $this->tplIndex);
?>

			</div>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19885911525c08f9d4119047_60441777', 'continue_shopping', $this->tplIndex);
?>


			<!-- shipping informations -->
			<div>
			  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

			</div>
		</div>
      </div>

      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-xs-12 col-lg-4">
		<div class="right-box">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11189975745c08f9d4120d49_68337335', 'cart_summary', $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4238675915c08f9d4128a49_17180836', 'display_reassurance', $this->tplIndex);
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
