<?php /*%%SmartyHeaderCode:1373453ac2fee30ab50-55543925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e882aa410dbd3b0885bccdd8a341d29a136f1902' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\themes\\default-bootstrap\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1403618691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1373453ac2fee30ab50-55543925',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ac36112b96e6_59070311',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac36112b96e6_59070311')) {function content_53ac36112b96e6_59070311($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://localhost/zildacalcados/supplier" title="Fornecedores">
					Fornecedores
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="last_item">
                					<a 
					href="http://localhost/zildacalcados/1__fashion-supplier" 
					title="Encontre mais sobre Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
										</ul>
										<form action="/zildacalcados/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">Todos os fornecedores</option>
													<option value="http://localhost/zildacalcados/1__fashion-supplier">Fashion Supplier</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>