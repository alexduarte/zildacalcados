<?php /*%%SmartyHeaderCode:2868553a59967493616-57364918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa200bf1d2034a83c4c98626c1f28c38892d16a1' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\themes\\default-bootstrap\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1403618690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2868553a59967493616-57364918',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53aab111829c10_80630082',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53aab111829c10_80630082')) {function content_53aab111829c10_80630082($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
					<a href="http://localhost/zildacalcados/manufacturers" title="Fabricantes">
						Fabricantes
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="first_item">
						<a 
						href="http://localhost/zildacalcados/1_fashion-manufacturer" title="Mais sobre Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
																			<li class="item">
						<a 
						href="http://localhost/zildacalcados/4_kalunga-futebol-clube" title="Mais sobre Kalunga futebol clube">
							Kalunga futebol clube
						</a>
					</li>
																			<li class="item">
						<a 
						href="http://localhost/zildacalcados/15_nike-01" title="Mais sobre NIKE 01">
							NIKE 01
						</a>
					</li>
																			<li class="last_item">
						<a 
						href="http://localhost/zildacalcados/16_pulma" title="Mais sobre PULMA">
							PULMA
						</a>
					</li>
												</ul>
										<form action="/zildacalcados/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">Todos os fabricantes</option>
													<option value="http://localhost/zildacalcados/1_fashion-manufacturer">Fashion Manufacturer</option>
													<option value="http://localhost/zildacalcados/4_kalunga-futebol-clube">Kalunga futebol clube</option>
													<option value="http://localhost/zildacalcados/15_nike-01">NIKE 01</option>
													<option value="http://localhost/zildacalcados/16_pulma">PULMA</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>