<?php
/* Smarty version 3.1.33, created on 2018-12-10 22:00:00
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\templates\catalog\listing\product-list-desc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0f28301bf8f6_65931012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9751da7d264e894526a13c5fede6239455683e74' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\templates\\catalog\\listing\\product-list-desc.tpl',
      1 => 1544436378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5c0f28301bf8f6_65931012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5074238105c0f2830194962_31494488', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_top'} */
class Block_4804015775c0f28301a4364_55527420 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_4583080115c0f28301ac069_90187602 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="" class="hidden-sm-down">
            <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

          </div>
        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_3850115565c0f28301b7be5_82964834 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_20008299615c0f28301bba72_52912549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_5074238105c0f2830194962_31494488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5074238105c0f2830194962_31494488',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_4804015775c0f28301a4364_55527420',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_4583080115c0f28301ac069_90187602',
  ),
  'product_list' => 
  array (
    0 => 'Block_3850115565c0f28301b7be5_82964834',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_20008299615c0f28301bba72_52912549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">
    <section id="products">
			   <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == "category") {?>
				
						<div class="cat_desc">
              <div class="addon-title">
                <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</h3>
              </div>
							<div class="flex-box">
								 <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
									<div id="category-description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
								  <?php }?>
							</div>
						</div>
				<?php }?>
			
      <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
        <div id="">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4804015775c0f28301a4364_55527420', 'product_list_top', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4583080115c0f28301ac069_90187602', 'product_list_active_filters', $this->tplIndex);
?>


        <div id="product_list" class="product_list <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 1) {?>products-list-in-column<?php } else { ?>products-list-in-row<?php }?>  products-list-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_productperrow']->value, ENT_QUOTES, 'UTF-8');?>
">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3850115565c0f28301b7be5_82964834', 'product_list', $this->tplIndex);
?>

        </div>

        <div id="js-product-list-bottom">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20008299615c0f28301bba72_52912549', 'product_list_bottom', $this->tplIndex);
?>

        </div>

      <?php } else { ?>

        <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php }?>
    </section>

  </section>
<?php
}
}
/* {/block 'content'} */
}
