{*
 * @package Jms Ajax Search
 * @version 1.1
 * @Copyright (C) 2009 - 2015 Joommasters.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @Website: http://www.joommasters.com
*}
{if $jpb_homepage == 4 || $jpb_homepage == 5}
<div class="btn-group compact-hidden jms_ajax_search" id="jms_ajax_search">
	<div class="search-box">
		<form method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" class="searchbox">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input type="text" id="ajax_search" name="search_query" placeholder="{l s='Search everything here' d='Modules.JmsAjaxsearch'}" class="form-control ajax_search"  />		
		 	<button type="submit" name="submit_search" class="button-search">Search</button>
		</form>
		<div id="search_result"></div>
	</div>	
</div>
{else}
<div class="btn-group compact-hidden jms_ajax_search" id="jms_ajax_search">
	<a href="#" class="btn-search dropdown-toggle" data-toggle="dropdown">
		
	</a>
	<div class="search-box dropdown-menu">
		<form method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" class="searchbox">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input type="text" id="ajax_search" name="search_query" placeholder="{l s='Search here' d='Modules.JmsAjaxsearch'}" class="form-control ajax_search" />
		</form>
		<div id="search_result"></div>
	</div>	
</div>
{/if}

