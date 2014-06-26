<?php /* Smarty version Smarty-3.1.14, created on 2014-06-26 10:50:12
         compiled from "C:\wamp\www\zildacalcados\pdf\invoice.tax-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2874353ac33240d9b24-07331664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cfae407da01e697acb37f3ff61a3050385d30f2' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\pdf\\invoice.tax-tab.tpl',
      1 => 1403695507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2874353ac33240d9b24-07331664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tax_exempt' => 0,
    'use_one_after_another_method' => 0,
    'product_tax_breakdown' => 0,
    'rate' => 0,
    'is_order_slip' => 0,
    'order' => 0,
    'product_tax_infos' => 0,
    'shipping_tax_breakdown' => 0,
    'shipping_tax_infos' => 0,
    'ecotax_tax_breakdown' => 0,
    'ecotax_tax_infos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ac33244070f1_67234120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac33244070f1_67234120')) {function content_53ac33244070f1_67234120($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\wamp\\www\\zildacalcados\\tools\\smarty\\plugins\\function.cycle.php';
?><<<<<<< HEAD
<?php if ($_smarty_tpl->tpl_vars['tax_exempt']->value){?>
	<div style = "text-align: center">
		<?php echo smartyTranslate(array('s'=>'Exempt of VAT according section 259B of the General Tax Code.','pdf'=>'true'),$_smarty_tpl);?>

	</div>
<?php }else{ ?>
	<br /><br />
	<!--  TAX DETAILS -->
	<table style="width: 100%">
		<tr>
			<td style="text-align: left; background-color: #CCC; color: #FFF; padding-left: 10px; font-weight: bold; width: 40%"><?php echo smartyTranslate(array('s'=>'Tax Detail','pdf'=>'true'),$_smarty_tpl);?>
</td>
			<td style="text-align: right; background-color: #CCC; color: #FFF; padding-left: 10px; font-weight: bold; width: 20%"><?php echo smartyTranslate(array('s'=>'Tax Rate','pdf'=>'true'),$_smarty_tpl);?>
</td>
			<?php if (!$_smarty_tpl->tpl_vars['use_one_after_another_method']->value){?>
				<td style="text-align: right; background-color: #CCC; color: #FFF; padding-left: 10px; font-weight: bold; width: 20%"><?php echo smartyTranslate(array('s'=>'Total Tax Excl','pdf'=>'true'),$_smarty_tpl);?>
</td>
			<?php }?>
			<td style="text-align: right; background-color: #CCC; color: #FFF; padding-left: 10px; font-weight: bold; width: 20%"><?php echo smartyTranslate(array('s'=>'Total Tax','pdf'=>'true'),$_smarty_tpl);?>
</td>
		</tr>

		<?php if (isset($_smarty_tpl->tpl_vars['product_tax_breakdown']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['product_tax_infos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_tax_infos']->_loop = false;
 $_smarty_tpl->tpl_vars['rate'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_tax_breakdown']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_tax_infos']->key => $_smarty_tpl->tpl_vars['product_tax_infos']->value){
$_smarty_tpl->tpl_vars['product_tax_infos']->_loop = true;
 $_smarty_tpl->tpl_vars['rate']->value = $_smarty_tpl->tpl_vars['product_tax_infos']->key;
?>
				<tr style="line-height:6px;background-color:<?php echo smarty_function_cycle(array('values'=>'#FFF,#EEE'),$_smarty_tpl);?>
;">
					<td style="width: 40%"><?php echo smartyTranslate(array('s'=>'Products','pdf'=>'true'),$_smarty_tpl);?>
</td>
					<td style="width: 20%; text-align: right;"><?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
 %</td>
					<?php if (!$_smarty_tpl->tpl_vars['use_one_after_another_method']->value){?>
						<td style="width: 20%; text-align: right;">
							<?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value){?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['product_tax_infos']->value['total_price_tax_excl']),$_smarty_tpl);?>

						</td>
					<?php }?>
					<td style="width: 20%; text-align: right;"><?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value){?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['product_tax_infos']->value['total_amount']),$_smarty_tpl);?>
</td>
				</tr>
			<?php } ?>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['shipping_tax_breakdown']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['shipping_tax_infos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping_tax_infos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping_tax_breakdown']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping_tax_infos']->key => $_smarty_tpl->tpl_vars['shipping_tax_infos']->value){
$_smarty_tpl->tpl_vars['shipping_tax_infos']->_loop = true;
?>
				<tr style="line-height:6px;background-color:<?php echo smarty_function_cycle(array('values'=>'#FFF,#EEE'),$_smarty_tpl);?>
;">
					<td style="width: 40%"><?php echo smartyTranslate(array('s'=>'Shipping','pdf'=>'true'),$_smarty_tpl);?>
</td>
					<td style="width: 20%; text-align: right;"><?php echo $_smarty_tpl->tpl_vars['shipping_tax_infos']->value['rate'];?>
 %</td>
					<?php if (!$_smarty_tpl->tpl_vars['use_one_after_another_method']->value){?>
						<td style="width: 20%; text-align: right;"><?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value){?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['shipping_tax_infos']->value['total_tax_excl']),$_smarty_tpl);?>
</td>
					<?php }?>
					<td style="width: 20%; text-align: right;"><?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value){?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['shipping_tax_infos']->value['total_amount']),$_smarty_tpl);?>
</td>
				</tr>
			<?php } ?>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['ecotax_tax_breakdown']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['ecotax_tax_infos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ecotax_tax_infos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ecotax_tax_breakdown']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ecotax_tax_infos']->key => $_smarty_tpl->tpl_vars['ecotax_tax_infos']->value){
$_smarty_tpl->tpl_vars['ecotax_tax_infos']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['ecotax_tax_infos']->value['ecotax_tax_excl']>0){?>
					<tr style="line-height:6px;background-color:<?php echo smarty_function_cycle(array('values'=>'#FFF,#EEE'),$_smarty_tpl);?>
;">
						<td style="width: 40%"><?php echo smartyTranslate(array('s'=>'Ecotax','pdf'=>'true'),$_smarty_tpl);?>
</td>
						<td style="width: 20%; text-align: right;"><?php echo $_smarty_tpl->tpl_vars['ecotax_tax_infos']->value['rate'];?>
 %</td>
						<?php if (!$_smarty_tpl->tpl_vars['use_one_after_another_method']->value){?>
							<td style="width: 20%; text-align: right;"><?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value){?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['ecotax_tax_infos']->value['ecotax_tax_excl']),$_smarty_tpl);?>
</td>
						<?php }?>
						<td style="width: 20%; text-align: right;"><?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value){?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>($_smarty_tpl->tpl_vars['ecotax_tax_infos']->value['ecotax_tax_incl']-$_smarty_tpl->tpl_vars['ecotax_tax_infos']->value['ecotax_tax_excl'])),$_smarty_tpl);?>
</td>
					</tr>
				<?php }?>
			<?php } ?>
		<?php }?>
	</table>
	<!--  / TAX DETAILS -->
<?php }?>

=======
<?php if ($_smarty_tpl->tpl_vars['tax_exempt']->value){?>
	<div style = "text-align: center">
		<?php echo smartyTranslate(array('s'=>'Exempt of VAT according section 259B of the General Tax Code.','pdf'=>'true'),$_smarty_tpl);?>

	</div>
<?php }else{ ?>
	<br /><br />
	<!--  TAX DETAILS -->
	<table style="width: 100%">
		<tr>
			<td style="text-align: left; background-color: #CCC; color: #FFF; padding-left: 10px; font-weight: bold; width: 40%"><?php echo smartyTranslate(array('s'=>'Tax Detail','pdf'=>'true'),$_smarty_tpl);?>
</td>
			<td style="text-align: right; background-color: #CCC; color: #FFF; padding-left: 10px; font-weight: bold; width: 20%"><?php echo smartyTranslate(array('s'=>'Tax Rate','pdf'=>'true'),$_smarty_tpl);?>
</td>
			<?php if (!$_smarty_tpl->tpl_vars['use_one_after_another_method']->value){?>
				<td style="text-align: right; background-color: #CCC; color: #FFF; padding-left: 10px; font-weight: bold; width: 20%"><?php echo smartyTranslate(array('s'=>'Total Tax Excl','pdf'=>'true'),$_smarty_tpl);?>
</td>
			<?php }?>
			<td style="text-align: right; background-color: #CCC; color: #FFF; padding-left: 10px; font-weight: bold; width: 20%"><?php echo smartyTranslate(array('s'=>'Total Tax','pdf'=>'true'),$_smarty_tpl);?>
</td>
		</tr>

		<?php if (isset($_smarty_tpl->tpl_vars['product_tax_breakdown']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['product_tax_infos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_tax_infos']->_loop = false;
 $_smarty_tpl->tpl_vars['rate'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_tax_breakdown']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_tax_infos']->key => $_smarty_tpl->tpl_vars['product_tax_infos']->value){
$_smarty_tpl->tpl_vars['product_tax_infos']->_loop = true;
 $_smarty_tpl->tpl_vars['rate']->value = $_smarty_tpl->tpl_vars['product_tax_infos']->key;
?>
				<tr style="line-height:6px;background-color:<?php echo smarty_function_cycle(array('values'=>'#FFF,#EEE'),$_smarty_tpl);?>
;">
					<td style="width: 40%"><?php echo smartyTranslate(array('s'=>'Products','pdf'=>'true'),$_smarty_tpl);?>
</td>
					<td style="width: 20%; text-align: right;"><?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
 %</td>
					<?php if (!$_smarty_tpl->tpl_vars['use_one_after_another_method']->value){?>
						<td style="width: 20%; text-align: right;">
							<?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value){?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['product_tax_infos']->value['total_price_tax_excl']),$_smarty_tpl);?>

						</td>
					<?php }?>
					<td style="width: 20%; text-align: right;"><?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value){?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['product_tax_infos']->value['total_amount']),$_smarty_tpl);?>
</td>
				</tr>
			<?php } ?>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['shipping_tax_breakdown']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['shipping_tax_infos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping_tax_infos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping_tax_breakdown']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping_tax_infos']->key => $_smarty_tpl->tpl_vars['shipping_tax_infos']->value){
$_smarty_tpl->tpl_vars['shipping_tax_infos']->_loop = true;
?>
				<tr style="line-height:6px;background-color:<?php echo smarty_function_cycle(array('values'=>'#FFF,#EEE'),$_smarty_tpl);?>
;">
					<td style="width: 40%"><?php echo smartyTranslate(array('s'=>'Shipping','pdf'=>'true'),$_smarty_tpl);?>
</td>
					<td style="width: 20%; text-align: right;"><?php echo $_smarty_tpl->tpl_vars['shipping_tax_infos']->value['rate'];?>
 %</td>
					<?php if (!$_smarty_tpl->tpl_vars['use_one_after_another_method']->value){?>
						<td style="width: 20%; text-align: right;"><?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value){?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['shipping_tax_infos']->value['total_tax_excl']),$_smarty_tpl);?>
</td>
					<?php }?>
					<td style="width: 20%; text-align: right;"><?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value){?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['shipping_tax_infos']->value['total_amount']),$_smarty_tpl);?>
</td>
				</tr>
			<?php } ?>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['ecotax_tax_breakdown']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['ecotax_tax_infos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ecotax_tax_infos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ecotax_tax_breakdown']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ecotax_tax_infos']->key => $_smarty_tpl->tpl_vars['ecotax_tax_infos']->value){
$_smarty_tpl->tpl_vars['ecotax_tax_infos']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['ecotax_tax_infos']->value['ecotax_tax_excl']>0){?>
					<tr style="line-height:6px;background-color:<?php echo smarty_function_cycle(array('values'=>'#FFF,#EEE'),$_smarty_tpl);?>
;">
						<td style="width: 40%"><?php echo smartyTranslate(array('s'=>'Ecotax','pdf'=>'true'),$_smarty_tpl);?>
</td>
						<td style="width: 20%; text-align: right;"><?php echo $_smarty_tpl->tpl_vars['ecotax_tax_infos']->value['rate'];?>
 %</td>
						<?php if (!$_smarty_tpl->tpl_vars['use_one_after_another_method']->value){?>
							<td style="width: 20%; text-align: right;"><?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value){?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['ecotax_tax_infos']->value['ecotax_tax_excl']),$_smarty_tpl);?>
</td>
						<?php }?>
						<td style="width: 20%; text-align: right;"><?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value){?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>($_smarty_tpl->tpl_vars['ecotax_tax_infos']->value['ecotax_tax_incl']-$_smarty_tpl->tpl_vars['ecotax_tax_infos']->value['ecotax_tax_excl'])),$_smarty_tpl);?>
</td>
					</tr>
				<?php }?>
			<?php } ?>
		<?php }?>
	</table>
	<!--  / TAX DETAILS -->
<?php }?>

>>>>>>> f2715e34e995550843b564d7cb90b4c1408c2c4a
<?php }} ?>