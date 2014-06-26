<?php /* Smarty version Smarty-3.1.14, created on 2014-06-24 09:16:00
         compiled from "C:\wamp\www\zildacalcados\pdf\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:942853a599b07e3e86-48170458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '004a28f53f43087f5c64fd68f2607f64028620bd' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\pdf\\footer.tpl',
      1 => 1403615753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '942853a599b07e3e86-48170458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a599b085ebb3_65001972',
  'variables' => 
  array (
    'available_in_your_account' => 0,
    'shop_address' => 0,
    'shop_details' => 0,
    'shop_phone' => 0,
    'shop_fax' => 0,
    'free_text' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a599b085ebb3_65001972')) {function content_53a599b085ebb3_65001972($_smarty_tpl) {?><table>
	<tr>
		<td style="text-align: center; font-size: 6pt; color: #444">
            <?php if ($_smarty_tpl->tpl_vars['available_in_your_account']->value){?>
                <?php echo smartyTranslate(array('s'=>'An electronic version of this invoice is available in your account. To access it, log in to our website using your e-mail address and password (which you created when placing your first order).','pdf'=>'true'),$_smarty_tpl);?>
             
    			<br />
            <?php }?>
			<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_address']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

            
            <?php if (isset($_smarty_tpl->tpl_vars['shop_details']->value)){?>
                - <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_details']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br />
			<?php }else{ ?>
				<br />
            <?php }?>
			
			<?php if (!empty($_smarty_tpl->tpl_vars['shop_phone']->value)||!empty($_smarty_tpl->tpl_vars['shop_fax']->value)){?>
				<?php echo smartyTranslate(array('s'=>'For more assistance, contact Support:','pdf'=>'true'),$_smarty_tpl);?>

				<?php if (!empty($_smarty_tpl->tpl_vars['shop_phone']->value)){?>
					Tel: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_phone']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

				<?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['shop_fax']->value)){?>
					Fax: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_fax']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

				<?php }?>
			<?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['free_text']->value)){?>
    			<br /><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['free_text']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

            <?php }?>
		</td>
	</tr>
</table><?php }} ?>