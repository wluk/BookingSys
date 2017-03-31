<?php
/* Smarty version 3.1.30, created on 2017-03-31 23:18:32
  from "C:\xampp\htdocs\silka\app\Views\Home\about.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dec7a88b13b0_84617309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec659f72c5b9f6da95b308060128fc93f6eb3577' => 
    array (
      0 => 'C:\\xampp\\htdocs\\silka\\app\\Views\\Home\\about.html',
      1 => 1490995109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dec7a88b13b0_84617309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132567555858dec7a88a0554_66537653', 'hero');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206615652958dec7a88ac791_21246739', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("\app\Views\main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'hero'} */
class Block_132567555858dec7a88a0554_66537653 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="fh5co-parallax" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/home-image-4.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
				<div class="fh5co-intro fh5co-table-cell animate-box">
					<h1 class="text-center">Poznajmy się bliżej</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}
}
/* {/block 'hero'} */
/* {block 'top'} */
class Block_206615652958dec7a88ac791_21246739 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- end: fh5co-parallax -->
<!-- end:fh5co-hero -->
<div id="fh5co-team-section">
	<div class="container">
		<div class="row about">
			<div class="col-md-12 col-md-offset-0">
				<img class="img-responsive animate-box" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/home-image-2.jpg" alt="About">
			</div>
			<div class="col-md-12 col-md-offset-0 animate-box">
				<p>Fitness Club SILKA powstał we wrześniu 2014 roku w miejscu, gdzie kiedyś znajdowała się fabryka obić zgrzebnych "Hahnel & Manhardt Comp."</p>

				<p>Od samego początku staramy się, aby poziom oferowanych usług, był możliwie najwyższy. Dlatego też klub wyposażony został w sprzęt renomowanych firm Hammer Strenght oraz Life Fitness, a naszą kadrę charakteryzuje wysoki poziom umiejętności.</p>

				<p>Stawiamy przede wszystkim na dobranie optymalnego programu treningowego, który ustalany jest każdorazowo podczas indywidualnej rozmowy z klienetm. Bardzo istotne dla nas jest bezpieczeństwo oraz zdrowotny aspekt ćwiczeń, nie zapominając przy tym
					o dobrym samopoczuciu naszych Gości.</p>

				<p>Zapewniamy przyjemną atmosferę, fachową obsługę oraz 5 stref treningowych (strefa treningu siłowego, strefa treningu funkcjonalnego, strefa fitness, strefa sztuk walki, strefa relaksu). Cieszymy się z przybycia każdej nowej osoby, która
					chce zadbać o swoje zdrowie, dobre samopoczucie i własną sylwetkę.</p>

				<p>Zapraszamy<br> zespół Fitness Clubu SILKA</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="heading-section text-center animate-box">
					<h2>Poznaj naszą kadrę</h2>
					<p>Są to pasjonaci i zapaleńcy, którzy zaraża Cię swoją miłością do ćwiczeń
					</p>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-4 col-sm-6">
				<div class="team-section-grid animate-box" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/trainer-1.jpg);">
					<div class="overlay-section">
						<div class="desc">
							<h3>Pat</h3>
							<span>Trójboista</span>
							<p>Nie zna wzoru na pole kwadratu, ale wie jak dokładać obciążenia</p>
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter-with-circle"></i></a>
								<a href="#"><i class="icon-facebook-with-circle"></i></a>
								<a href="#"><i class="icon-instagram-with-circle"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="team-section-grid animate-box" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/trainer-2.jpg);">
					<div class="overlay-section">
						<div class="desc">
							<h3>C.J.</h3>
							<span>Trener pływania</span>
							<p>Piękana syrenka, która dusi się na powierzchni</p>
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter-with-circle"></i></a>
								<a href="#"><i class="icon-facebook-with-circle"></i></a>
								<a href="#"><i class="icon-instagram-with-circle"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="team-section-grid animate-box" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/trainer-3.jpg);">
					<div class="overlay-section">
						<div class="desc">
							<h3>Mat</h3>
							<span>Kulturystyka</span>
							<p>Jeśli potrzebujesz ditety to Mat Ci pomoże, on zna się na rzeczy
							</p>
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter-with-circle"></i></a>
								<a href="#"><i class="icon-facebook-with-circle"></i></a>
								<a href="#"><i class="icon-instagram-with-circle"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="team-section-grid animate-box" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/trainer-4.jpg);">
					<div class="overlay-section">
						<div class="desc">
							<h3>Princes Leia</h3>
							<span>Szefowa z pasją</span>
							<p>Jak w rowerową podróż międzygalaktyczną to tylką z nią
							</p>
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter-with-circle"></i></a>
								<a href="#"><i class="icon-facebook-with-circle"></i></a>
								<a href="#"><i class="icon-instagram-with-circle"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="team-section-grid animate-box" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/trainer-5.jpg);">
					<div class="overlay-section">
						<div class="desc">
							<h3>Mr. Bean</h3>
							<span>Menadżer klubu i ostoja spokoju</span>
							<p>Doskonały kierownik i przyjaciel, jego pasją jest medytacja
							</p>
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter-with-circle"></i></a>
								<a href="#"><i class="icon-facebook-with-circle"></i></a>
								<a href="#"><i class="icon-instagram-with-circle"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="team-section-grid animate-box" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/trainer-6.jpg);">
					<div class="overlay-section">
						<div class="desc">
							<h3>Kimberly</h3>
							<span>Instruktorka sztuk walki</span>
							<p>Nie straszna jej walka w ręcz, da sobię radę z każdą przeciwnością
							</p>
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter-with-circle"></i></a>
								<a href="#"><i class="icon-facebook-with-circle"></i></a>
								<a href="#"><i class="icon-instagram-with-circle"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-programs-section" class="fh5co-lightgray-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="heading-section text-center animate-box">
						<h2>Polecamy</h2>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-4 col-sm-6">
					<div class="program animate-box">
						<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-dumbell.svg" alt="Cycling">
						<h3>SIŁA</h3>
						<p>Trening siłowy pod okiem naszych wykwalfikowanych trenerów
						</p>
						<span><a href="?action=schedule" class="btn btn-default">Zapisy</a></span>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="program animate-box">
						<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-yoga.svg" alt="">
						<h3>Yoga</h3>
						<p>Czas na rozciąganie i chilę spokoju
						</p>
						</br>
						<span><a href="?action=schedule" class="btn btn-default">Zapisy</a></span>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="program animate-box">
						<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-cycling.svg" alt="">
						<h3>Rowerki</h3>
						<p>Czy deszcz czy słońce, u nas podczas indoor cycling zawsze leje się pot.
						</p>
						<span><a href="?action=schedule" class="btn btn-default">Zapisy</a></span>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="program animate-box">
						<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-boxing.svg" alt="Cycling">
						<h3>Boks</h3>
						<p>Poczuj się jak profesjonalny zawodnik. Zapisz się na zajęcia MMA, Boks, Brazylijskie Ju-Jitsu, Muay-Thai, czy zapasy.
							Pracuj nad swoim bezpieczeństwem i kondycją.
						</p>
						<span><a href="?action=schedule" class="btn btn-default">Zapisy</a></span>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="program animate-box">
						<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-swimming.svg" alt="">
						<h3>Pływanie</h3>
						<p>Może nie staniesz się od razu mistrzem jak Michael Phelps, ale dzięki pływaniu masz szansę na olimpijskie zdrowie.
						</p>
						</br>
						</br>
						<span><a href="?action=schedule" class="btn btn-default">Zapisy</a></span>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="program animate-box">
						<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-massage.svg" alt="">
						<h3>Masaż</h3>
						<p>Masaż olejkiem polecamy osobom, które pragną się zrelaksować i zregenerować. Masaż przywraca harmonię w organizmie
							niwelując wszelkie skutki życia w stresie
						</p>
						<span><a href="?action=schedule" class="btn btn-default">Zapisy</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}
}
/* {/block 'top'} */
}
