<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-09 15:15:47
  from 'C:\xampp\htdocs\php_04_5_proste_szablony_bootstprap_smarty\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60705383373102_68134067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7f3ee076f2de987a3bb396a8265ad191e1db1d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_5_proste_szablony_bootstprap_smarty\\templates\\main.html',
      1 => 1617974143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60705383373102_68134067 (Smarty_Internal_Template $_smarty_tpl) {
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
	  <!-- Vendor CSS Files -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/style.css" rel="stylesheet">
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Kalkulator</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="/assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="">Licz</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



<div class="content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18769011956070538336b3f4_27249656', 'content');
?>

</div><!-- content -->

 <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8591796966070538336f279_73938800', 'footerr');
?>

</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/vendor/aos/aos.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/vendor/glightbox/js/glightbox.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/vendor/isotope-layout/isotope.pkgd.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/vendor/php-email-form/validate.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/vendor/purecounter/purecounter.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/vendor/swiper/swiper-bundle.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/vendor/waypoints/noframework.waypoints.js"><?php echo '</script'; ?>
>

  <!-- Template Main JS File -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'content'} */
class Block_18769011956070538336b3f4_27249656 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18769011956070538336b3f4_27249656',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości w razie niepowodzenia wczytania... <?php
}
}
/* {/block 'content'} */
/* {block 'footerr'} */
class Block_8591796966070538336f279_73938800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerr' => 
  array (
    0 => 'Block_8591796966070538336f279_73938800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki w razie niepowodzenia wczytania... <?php
}
}
/* {/block 'footerr'} */
}
