<?php
/* Smarty version 3.1.30, created on 2021-05-10 21:00:50
  from "C:\xampp\htdocs\php_06_namespaces\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_609982e2c41361_12903445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '539dfb074d54a411cf2dd51c3f900d2dc26cedc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_namespaces\\app\\views\\CalcView.tpl',
      1 => 1620669976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.html' => 1,
  ),
),false)) {
function content_609982e2c41361_12903445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2094767058609982e2c29c50_40958526', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1546471204609982e2c3d4e3_99482632', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_2094767058609982e2c29c50_40958526 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- ======= Footer ======= -->
 
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 footer-info">
            <h3>Dziekujemy !</h3>
            <p>Wkrótce pojawi się wiecej funkcji.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
</footer>
  <?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1546471204609982e2c3d4e3_99482632 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- ======= Hero No Slider Section ======= -->
  <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h2>Witam w kalkulatorze oprocentowania</h2>
          <p>Dzięki temu kalkulatorowi możesz obliczyć jakie będą twoje miesięczne raty. Podaj kwotę, oprocentowanie i czas na jakich chcesz pożyczyć a kalkulator automatycznie obliczy wysokość spłaty. </p>
          <a onclick="location.href='#oblicz';" class="btn-get-started ">Oblicz !</a>
		  
        </div>
      </div>
    </div>
  </section><!-- End Hero No Slider Sectio -->
   <a id="oblicz"></a>
 

 <main id="main">


    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">
		
        <div class="section-title">
          <h2>Kalkulator</h2>
        
        </div>

        <div class="row" data-aos="fade-up">

			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
				<table>
				<tr>
				<td><label for="x">Kwota: </label></td>
				<td><input id="x" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" /></td>
				</tr><tr>
				<td><label for="y">Na ile lat: </label></td>
				<td><input id="y" type="text" name="czas" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->czas;?>
" /></td>
				</tr><tr>	
				<td><label for="op">Oprocentowanie: </label></td>
				<td><input id="op" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
" /></td>
				</tr>
				<td><input type="submit" value="Oblicz" /></td>
				</table>
			</form>

<div class="messages">


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>

</div> <!--KONIEC KONTENTU-->
</div> <!--KONIEC container-->
       
    </section><!-- End Features Section -->

  </main><!-- End #main -->
<?php
}
}
/* {/block 'content'} */
}
