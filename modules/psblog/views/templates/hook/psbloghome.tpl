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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- Block Last post-->
<div class="container blog-container">
<div class="latest_block block pxblog-latest">
	<h2 class="h1 products-section-title text-uppercase">
		{l s='أحدث الأخبار' d="Modules.PsBlog.Shop"}
	</h2>

	
	<div class="homeblog-inner">
		{assign var='no_blog' value=count($blogs)}
		{assign var='sliderFor' value=4} <!-- Define Number of product for SLIDER -->
		{if $no_blog >= $sliderFor}
			<ul id="blog-carousel" class="ps-carousel product_list">
		{else}
			<ul id="blog-grid" class="blog_grid product_list grid row gridcount">
		{/if}
	
		{foreach from=$blogs item=blog name="item_name" }
			<li class="blog-post {if $no_blog >= $sliderFor}item{else}product_item col-xs-12 col-sm-6 col-md-4 col-lg-4{/if}">
				<div class="blog-item">
					{if $blog.image}
						<div class="blog-image text-xs-center">
							<a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}" class="link">
								<img src="{$blog.preview_url|escape:'html':'UTF-8'}" alt="{$blog.title|escape:'html':'UTF-8'}" class="img-fluid"/>
							</a>
							<span class="blogicons">
								<a class="icon zoom" title="Click to view Full Image" href="{$blog.preview_url|escape:'html':'UTF-8'}" data-lightbox="example-set"><i class="material-icons">&#xE8FF;</i></a>
							</span>
						</div>
					{/if}
					
					<div class="blog-meta">							
						<!--<span class="blog-author">
							<span class="fa fa-user"> {l s='Posted By' d='Modules.PsBlog.Shop'}:</span> 
							<a href="{$blog.author_link|escape:'html':'UTF-8'}" title="{$blog.author|escape:'html':'UTF-8'}">{$blog.author|escape:'html':'UTF-8'}</a> 
						</span>					
						<span class="blog-cat"> 
							<span class="fa fa-list"> {l s='In' d='Modules.PsBlog.Shop'}:</span> 
							<a href="{$blog.category_link|escape:'html':'UTF-8'}" title="{$blog.category_title|escape:'html':'UTF-8'}">{$blog.category_title|escape:'html':'UTF-8'}</a>
						</span>-->
						
						<span class="blog-hit">
							<i class="material-icons">&#xE417;</i>
							<i class="fa fa-heart"></i>{l s='الآراء' d='Modules.PsBlog.Shop'}: 
							{$blog.hits|intval}
						</span>
						<span class="blog-created">
							 <i class="material-icons">&#xE8A3;</i>
							<!--<span class="fa fa-calendar"> {l s='On' d='Modules.PsBlog.Shop'}: </span> -->
							<time class="date" datetime="{strtotime($blog.date_add)|date_format:"%Y"|escape:'html':'UTF-8'}">
								<!--{l s=strtotime($blog.date_add)|date_format:"%a"|escape:'html':'UTF-8' d='Modules.PsBlog.Shop'},-->	<!-- day of week -->	
								{l s=strtotime($blog.date_add)|date_format:"%e"|escape:'html':'UTF-8' d='Modules.PsBlog.Shop'}	<!-- day of month -->
								{l s=strtotime($blog.date_add)|date_format:"%b"|escape:'html':'UTF-8' d='Modules.PsBlog.Shop'}		<!-- month-->
								{l s=strtotime($blog.date_add)|date_format:"%Y"|escape:'html':'UTF-8' d='Modules.PsBlog.Shop'}		<!-- year -->
							</time>
						</span>
					</div>
					
					<div class="blog-content-wrap">						
						<h4 class="title">
							<a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}">{$blog.title|escape:'html':'UTF-8'}</a>
						</h4>
						
						<div class="blog-shortinfo">
							{$blog.description|strip_tags:'UTF-8'|truncate:120:'...' nofilter}{* HTML form , no escape necessary *}
							<div class="readmore">
								<a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}" class="btn">{l s='قراءة المزيد' d='Modules.PsBlog.Shop'}</a>
							</div>
						</div>					
					</div>
				</div>
			</li>
		{/foreach}
		</ul>
		
		{if $no_blog >= $sliderFor}
			<div class="customNavigation">
				<a class="btn prev blog_prev">&nbsp;</a>
				<a class="btn next blog_next">&nbsp;</a>
			</div>
		{/if}
	</div>
</div>

</div>
<!-- /Block Last Post -->
