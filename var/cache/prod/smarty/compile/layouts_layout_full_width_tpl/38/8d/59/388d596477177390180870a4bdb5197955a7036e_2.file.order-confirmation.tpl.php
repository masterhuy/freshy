<?php
/* Smarty version 3.1.33, created on 2019-01-02 05:17:39
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\templates\checkout\order-confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2c8fc345df65_91250766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '388d596477177390180870a4bdb5197955a7036e' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\templates\\checkout\\order-confirmation.tpl',
      1 => 1542795069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/order-confirmation-table.tpl' => 1,
  ),
),false)) {
function content_5c2c8fc345df65_91250766 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4198740515c2c8fc342b2d8_54817043', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20326255845c2c8fc343acd0_71606848', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_container'} */
class Block_4198740515c2c8fc342b2d8_54817043 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_4198740515c2c8fc342b2d8_54817043',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content-hook_order_confirmation" class="card">
		<div class="card-block">
			<div class="row">
				<div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
					<div class="title-block">
						<h3 class="h1 card-title">
						<i class="done fa fa-check-circle-o"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order is confirmed','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

					</h3>
					<p>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An email has been sent to your mail address %email%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%email%'=>$_smarty_tpl->tpl_vars['customer']->value['email'])),$_smarty_tpl ) );?>

						<?php if ($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url']) {?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can also [1]download your invoice[/1]','d'=>'Shop.Theme.Checkout','sprintf'=>array('[1]'=>"<a href='".((string)$_smarty_tpl->tpl_vars['order']->value['details']['invoice_url'])."'>",'[/1]'=>"</a>")),$_smarty_tpl ) );?>

					  <?php }?>
					</p>
				<?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

					</div>
				</div>
			</div>
		</div>
    </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'order_confirmation_table'} */
class Block_14775085535c2c8fc343acd7_69487812 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/order-confirmation-table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['order']->value['products'],'subtotals'=>$_smarty_tpl->tpl_vars['order']->value['subtotals'],'totals'=>$_smarty_tpl->tpl_vars['order']->value['totals'],'labels'=>$_smarty_tpl->tpl_vars['order']->value['labels'],'add_product_link'=>false), 0, false);
?>
        <?php
}
}
/* {/block 'order_confirmation_table'} */
/* {block 'action_button'} */
class Block_6718875665c2c8fc344e567_64792377 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="action-buttons">
		<a class="btn-default btn-shopping btn-effect button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

		</a>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8');?>
" class="btn-default btn-effect button-small">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account Page','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

		</a>
	</div>
			<?php
}
}
/* {/block 'action_button'} */
/* {block 'page_content_container'} */
class Block_20326255845c2c8fc343acd0_71606848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_20326255845c2c8fc343acd0_71606848',
  ),
  'order_confirmation_table' => 
  array (
    0 => 'Block_14775085535c2c8fc343acd7_69487812',
  ),
  'action_button' => 
  array (
    0 => 'Block_6718875665c2c8fc344e567_64792377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content page-order-confirmation card">
    <div class="card-block">
      <div class="row">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14775085535c2c8fc343acd7_69487812', 'order_confirmation_table', $this->tplIndex);
?>


        <div id="order-details" class="col-md-4">
          <h3 class="h3 card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order details','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
:</h3>
          <ul>
            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference: %reference%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%reference%'=>$_smarty_tpl->tpl_vars['order']->value['details']['reference'])),$_smarty_tpl ) );?>
</li>
            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment method: %method%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%method%'=>$_smarty_tpl->tpl_vars['order']->value['details']['payment'])),$_smarty_tpl ) );?>
</li>
            <?php if (!$_smarty_tpl->tpl_vars['order']->value['details']['is_virtual']) {?>
              <li>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping method: %method%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%method%'=>$_smarty_tpl->tpl_vars['order']->value['carrier']['name'])),$_smarty_tpl ) );?>
<br>
                <em><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['carrier']['delay'], ENT_QUOTES, 'UTF-8');?>
</em>
              </li>
            <?php }?>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <?php if (!empty($_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value)) {?>
  <section id="content-hook_payment_return" class="card definition-list">
    <div class="card-block">
      <div class="row">
        <div class="col-md-12 payment_return">
          <?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value;?>

        </div>
      </div>
    </div>
  </section>
  <?php }?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6718875665c2c8fc344e567_64792377', 'action_button', $this->tplIndex);
?>

  <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_guest']) {?>
    <div id="registration-form" class="card">
      <div class="card-block">
        <h4 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save time on your next order, sign up now','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/customer-form.tpl','ui'=>$_smarty_tpl->tpl_vars['register_form']->value),$_smarty_tpl ) );?>

      </div>
    </div>
  <?php }?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmation1'),$_smarty_tpl ) );?>


  <section id="content-hook-order-confirmation-footer">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmation2'),$_smarty_tpl ) );?>

  </section>
<?php
}
}
/* {/block 'page_content_container'} */
}
