{extends file="main.html"}
{* przy zdefiniowanych folderach nie trzeba już podawać pełnej ścieżki *}

{block name=footer}<!-- ======= Footer ======= -->
 
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
  {/block}

{block name=content}

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

			<form action="{$conf->action_root}calcCompute" method="post">
				<table>
				<tr>
				<td><label for="x">Kwota: </label></td>
				<td><input id="x" type="text" name="kwota" value="{$form->kwota}" /></td>
				</tr><tr>
				<td><label for="y">Na ile lat: </label></td>
				<td><input id="y" type="text" name="czas" value="{$form->czas}" /></td>
				</tr><tr>	
				<td><label for="op">Oprocentowanie: </label></td>
				<td><input id="op" type="text" name="oprocentowanie" value="{$form->oprocentowanie}" /></td>
				</tr>
				<td><input type="submit" value="Oblicz" /></td>
				</table>
			</form>

<div class="messages">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>

</div> <!--KONIEC KONTENTU-->
</div> <!--KONIEC container-->
       
    </section><!-- End Features Section -->

  </main><!-- End #main -->
{/block}