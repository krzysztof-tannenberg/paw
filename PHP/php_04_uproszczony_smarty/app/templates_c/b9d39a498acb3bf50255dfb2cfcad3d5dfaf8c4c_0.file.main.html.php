<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-09 14:48:11
  from 'C:\xampp\htdocs\php_04_uproszczony_smarty\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60704d0b89c8d4_69940815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9d39a498acb3bf50255dfb2cfcad3d5dfaf8c4c' => 
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
function content_60704d0b89c8d4_69940815 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167104135360704d0b894bd1_09228254', 'content');
?>

</div><!-- content -->

<div class="footer">
	<p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51873190960704d0b898a53_16314898', 'footer');
?>

	</p>
	<p>
		Widok oparty na własnych stylach w pliku css. Następny pojekt będzie z użyciem gotowego szablonu.
	</p>
</div>

</body>
</html><?php }
/* {block 'content'} */
class Block_167104135360704d0b894bd1_09228254 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_167104135360704d0b894bd1_09228254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości w razie niepowodzenia wczytania... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_51873190960704d0b898a53_16314898 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_51873190960704d0b898a53_16314898',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki w razie niepowodzenia wczytania... <?php
}
}
/* {/block 'footer'} */
}
