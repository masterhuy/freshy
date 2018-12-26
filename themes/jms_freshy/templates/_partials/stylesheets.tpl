{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<link rel="stylesheet" type="text/css" href="{$urls.theme_assets}css/linearicon.css" />
<link rel="stylesheet" type="text/css" href="{$urls.theme_assets}css/typo-icon.css" />
<link rel="stylesheet" type="text/css" href="{$urls.theme_assets}css/pe-icon-set-food.css" />
<link rel="stylesheet" type="text/css" href="{$urls.theme_assets}css/helper.css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,700" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Playball:400,500,600,700" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{$urls.theme_assets}/css/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
<link rel="stylesheet" type="text/css" href="{$urls.theme_assets}/fonts/storm/storm.css" />
<link rel="stylesheet" type="text/css" href="{$urls.theme_assets}css/global.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
{foreach $stylesheets.external as $stylesheet}
<link rel="stylesheet" href="{$stylesheet.uri}" type="text/css" media="{$stylesheet.media}">
{/foreach}

{foreach $stylesheets.inline as $stylesheet}
<style>
{$stylesheet.content}
</style>
{/foreach}
