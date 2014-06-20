<?php /* Smarty version Smarty-3.1.14, created on 2014-06-19 19:34:41
         compiled from "C:\wamp\www\zildacalcados\modules\blockleoprodcarousel\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1169953a35771514306-63083945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15b6f483e891fe0d82438edd20ceb26cb62df9b7' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\modules\\blockleoprodcarousel\\products.tpl',
      1 => 1390395324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1169953a35771514306-63083945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'tabname' => 0,
    'itemsperpage' => 0,
    'mproducts' => 0,
    'columnspage' => 0,
    'scolumn' => 0,
    'product' => 0,
    'link' => 0,
    'add_prod_display' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'static_token' => 0,
    'priceDisplay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a3577170bea3_83121515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a3577170bea3_83121515')) {function content_53a3577170bea3_83121515($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['products']->value)){?>
<div class=" carousel slide" id="<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
">
	 <?php if (count($_smarty_tpl->tpl_vars['products']->value)>$_smarty_tpl->tpl_vars['itemsperpage']->value){?>	 
		<a class="carousel-control left icon-leo-prev" href="#<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
"   data-slide="prev">&nbsp;</a>
		<a class="carousel-control right icon-leo-next" href="#<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
"  data-slide="next">&nbsp;</a>
	 
	<?php }?>
	<div class="carousel-inner">
	<?php $_smarty_tpl->tpl_vars['mproducts'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['products']->value,$_smarty_tpl->tpl_vars['itemsperpage']->value), null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['products'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['products']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['products']->key => $_smarty_tpl->tpl_vars['products']->value){
$_smarty_tpl->tpl_vars['products']->_loop = true;
 $_smarty_tpl->tpl_vars['products']->index++;
 $_smarty_tpl->tpl_vars['products']->first = $_smarty_tpl->tpl_vars['products']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mypLoop']['first'] = $_smarty_tpl->tpl_vars['products']->first;
?>
		<div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mypLoop']['first']){?>active<?php }?>">
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
				<?php if ($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==1&&$_smarty_tpl->tpl_vars['columnspage']->value>1){?>
				  <div class="row-fluid">
				<?php }?>
				<div class="p-item span<?php echo $_smarty_tpl->tpl_vars['scolumn']->value;?>
 product_block ajax_block_product <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last']){?>last_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['index']%2){?>alternate_item<?php }else{ ?>p-item<?php }?> clearfix">
					<div class="product-container">
						<div class="center_block">
							<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="product_image"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1){?><span class="new"><?php echo smartyTranslate(array('s'=>'New','mod'=>'blockleoprodcarousel'),$_smarty_tpl);?>
</span><?php }?></a>
							<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']==1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
								<?php if (($_smarty_tpl->tpl_vars['product']->value['quantity']>0||$_smarty_tpl->tpl_vars['product']->value['allow_oosp'])){?>
								<a class="button exclusive ajax_add_to_cart_button" rel="ajax_id_product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart');?>
?qty=1&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
&amp;add" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockleoprodcarousel'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockleoprodcarousel'),$_smarty_tpl);?>
</a>
								<?php }else{ ?>
								<span class="button exclusive"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockleoprodcarousel'),$_smarty_tpl);?>
</span>
								<?php }?> 
							<?php }?>
							<a href="#" id="wishlist_button<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" title="<?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'blockleoprodcarousel'),$_smarty_tpl);?>
" class="btn-add-wishlist button" onclick="LeoWishlistCart('wishlist_block_list', 'add', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', $('#idCombination').val(), 1 ); return false;"><i class="icon-heart icon-white">&nbsp;</i><?php echo smartyTranslate(array('s'=>'wishlist','mod'=>'blockleoprodcarousel'),$_smarty_tpl);?>
</a>
							
							<a class="lnk_more button comparator" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'blockleoprodcarousel'),$_smarty_tpl);?>
"><i class="icon-check">&nbsp;</i><?php echo smartyTranslate(array('s'=>'View','mod'=>'blockleoprodcarousel'),$_smarty_tpl);?>
</a>
  						</div>
  						<div class="right_block">
							<p class="s_title_block"><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],50,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],35,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></p>
							<p class="product_desc"><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smartyTranslate(array('s'=>'More','mod'=>'blockleoprodcarousel'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['description_short']),65,'...');?>
</a></p>
						 	<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?><p class="price_container"><span class="price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span></p><?php }else{ ?><div style="height:21px;"></div><?php }?>
  						</div>
					 
					</div>
				</div>
				
				<?php if (($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last'])&&$_smarty_tpl->tpl_vars['columnspage']->value>1){?>
					</div>
				<?php }?>
					
				<?php } ?>
		</div>		
	<?php } ?>
	</div>
</div>
<?php }?><?php }} ?>