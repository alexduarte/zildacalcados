<?php /*%%SmartyHeaderCode:3236953abb08ca077d0-48090433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbfc326b5fb77fc5aaff3bff00bd35f462ef6f65' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\themes\\default-bootstrap\\modules\\blockcategories\\blockcategories.tpl',
      1 => 1403618690,
      2 => 'file',
    ),
    '28b785c97abeebe7c395f53ee16e52f284331608' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\themes\\default-bootstrap\\modules\\blockcategories\\category-tree-branch.tpl',
      1 => 1403618690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3236953abb08ca077d0-48090433',
  'variables' => 
  array (
    'blockCategTree' => 0,
    'currentCategory' => 0,
    'isDhtml' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53abb08cb054d3_29518753',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53abb08cb054d3_29518753')) {function content_53abb08cb054d3_29518753($_smarty_tpl) {?><!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h2 class="title_block">
					Categorias
			</h2>
	<div class="block_content">
		<ul class="tree dhtml">
												
<li >
	<a 
	href="http://localhost/zildacalcados/3-chinelo" title="CHINELO">
		CHINELO
	</a>
			<ul>
												
<li >
	<a 
	href="http://localhost/zildacalcados/4-feminino" title="FEMININO">
		FEMININO
	</a>
	</li>

																
<li class="last">
	<a 
	href="http://localhost/zildacalcados/5-masculino" title="MASCULINO">
		MASCULINO
	</a>
	</li>

									</ul>
	</li>

																
<li >
	<a 
	href="http://localhost/zildacalcados/6-sapatenis" title="SAPATENIS">
		SAPATENIS
	</a>
	</li>

																
<li class="last">
	<a 
	href="http://localhost/zildacalcados/7-tenis" title="TENIS">
		TENIS
	</a>
	</li>

									</ul>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>