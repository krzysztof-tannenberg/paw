<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-09 14:19:58
  from 'C:\xampp\htdocs\php_04_uproszczony_smarty\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6070466e712a53_99505725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cd05020624d1f8d86ff6b754cf6d67bd1e1ac5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_uproszczony_smarty\\templates\\main.html',
      1 => 1617969992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6070466e712a53_99505725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? 'Opis domyślny' : $tmp);?>
">
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css">	
</head>
<body>

<div class="header">
	<h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
	<h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_header']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
	<p>
		<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>

	</p>
</div>

<div class="content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19737504206070466e70ad53_05145507', 'content');
?>

</div><!-- content -->

<div class="footer">
	<p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3307190866070466e70ebd5_13574599', 'footer');
?>

	</p>
	<p>
		Widok oparty na własnych stylach w pliku css. Następny pojekt będzie z użyciem gotowego szablonu.
	</p>
</div>

</body>
</html><?php }
/* {block 'content'} */
class Block_19737504206070466e70ad53_05145507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19737504206070466e70ad53_05145507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości w razie niepowodzenia wczytania... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_3307190866070466e70ebd5_13574599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3307190866070466e70ebd5_13574599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki w razie niepowodzenia wczytania... <?php
}
}
/* {/block 'footer'} */
}
