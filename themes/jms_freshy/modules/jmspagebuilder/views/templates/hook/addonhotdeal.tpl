{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<script type="text/javascript">
	var h_items = {if $items_show}{$items_show nofilter}{else}1{/if},
	    h_itemsDesktop = {if $items_show}{$items_show nofilter}{else}1{/if},
	    h_itemsDesktopSmall = {if $items_show_md}{$items_show_md nofilter}{else}1{/if},
	    h_itemsTablet = {if $items_show_sm}{$items_show_sm nofilter}{else}1{/if},
	    h_itemsMobile = {if $items_show_xs}{$items_show_xs nofilter}{else}1{/if};
	    h_nav = {if $navigation == 1}true{else}false{/if};
		h_pag = {if $pagination == 1}true{else}false{/if};
		h_auto_play_carousel = {if $autoplay == 1}true{else}false{/if};
</script>
{if $addon_title}
<div class="addon-title">
	<h3>{$addon_title nofilter}</h3>
</div>
{/if}
{if $addon_desc}
<p class="addon-desc">{$addon_desc nofilter}</p>
{/if}
<div class="jms-hotdeal">
	<div class="product_box">
		<div class="hotdeal-carousel">
			{foreach from=$products item=product key=k}	
				<div class="item">
					<div class="product-box product-preview" itemtype="http://schema.org/Product" data-id-product="{$product.id_product nofilter}" data-id-product-attribute="{$product.id_product_attribute nofilter}" >
						{block name='product_thumbnail'}
						<div class="img-hotdeal">
						  	<a href="{$product.url nofilter}" class="product-image">
								<img class="img-responsive"
								  src = "{$product.cover.bySize.home_default.url nofilter}"
								  alt = "{$product.cover.legend nofilter}"
								  data-full-size-image-url = "{$product.cover.large.url nofilter}"
								>
						 	</a>				 
						 </div>
						{/block}

						<div class="product-info hotdeal">
							<div class="countdown" id="countdown-{$hotdeals[$k].id_hotdeals nofilter}">{$hotdeals[$k].deals_time nofilter}</div>
							{block name='product_name'}
							   	<a href="{$product.url nofilter}" class="product-link">{$product.name nofilter}</a>
							{/block}

							{block name='product_price_and_shipping'}
								{if $product.show_price}
									<div class="content_price">
									  	{hook h='displayProductPriceBlock' product=$product type="before_price"}

									  	{if $product.has_discount}
										  	{hook h='displayProductPriceBlock' product=$product type="old_price"}
										  	<span class="old price">{$product.regular_price nofilter}</span>
										{/if}

										<span itemprop="price" class="price new">{$product.price nofilter}</span>
										
										
										{hook h='displayProductPriceBlock' product=$product type='unit_price'}

										{hook h='displayProductPriceBlock' product=$product type='weight'}
									</div>
								{/if}
							{/block}
						</div>

						<div class="highlighted-informations{if !$product.main_variants} no-variants{/if} hidden-sm-down">
						  	{block name='product_variants'}
								{if $product.main_variants}
							  		{include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
								{/if}
						  	{/block}
						</div>

						<div class="product_action">
							{block name='product_variants'}
								{if $product.main_variants}
									{if isset($jpb_pcolor) && $jpb_pcolor == 1}
										<div class="color_to_pick_list">
											{include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
										</div>
									{/if}
								{/if}
							{/block}
							<button {if $product.quantity < 1}disabled{/if} title="{if $product.quantity < 1}{l s='Out of Stock' d='Shop.Theme.Actions'}{else}{l s='Add to Cart' d='Shop.Theme.Actions'}{/if}" class="ajax-add-to-cart product-btn cart-button {if $product.quantity < 1}disabled{/if}" data-id-product="{$product.id}" data-minimal-quantity="{$product.minimal_quantity}" data-token="{if isset($static_token) && $static_token}{$static_token}{/if}">
								<span class="fa fa-spin fa-spinner"></span>
								<span class="fa fa-check"></span>
								<span class="text-addcart"><i class="flaticon-shopping-basket"></i>{l s='Add to cart' d='Shop.Theme.Actions'}</span>		
								<span class="text-outofstock">{l s='Out of stock' d='Shop.Theme.Actions'}</span>			
						   	</button>
						   	<a data-link-action="quickview" class="quick-view product-btn hidden-xs" title="{l s='Quick view' d='Shop.Theme.Actions'}">
								Quick view
							</a>
					    </div>
		  			</div>
		  		</div>
			{/foreach}
		</div>
	</div>
	{if ($showall_link == '1')} 
		<div class="hotdeal-viewall col-lg-12 col-sm-12 col-xs-12 col-md-12">
			<a href="{$link->getModuleLink('hotdeals','allproduct') nofilter}" class="btn-shopnow btn-effect1">{l s='View All Product' d='Modules.JmsPagebuilder'}</a>
		</div>
	{/if}
</div>