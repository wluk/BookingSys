<?php
/* Smarty version 3.1.30, created on 2017-04-08 14:22:20
  from "C:\xampp\htdocs\silka\app\Home\trainer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e8d5fc7dd195_71868462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ded1744f61ab7f1db6d412da3b99312956167fc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\silka\\app\\Home\\trainer.html',
      1 => 1491653958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e8d5fc7dd195_71868462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107622303758e8d5fc6d7599_28460725', 'hero');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189601355758e8d5fc7c9124_62947390', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("\public\main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'hero'} */
class Block_107622303758e8d5fc6d7599_28460725 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="fh5co-parallax" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/home-image-3.jpg);"
     data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                <div class="fh5co-intro fh5co-table-cell animate-box">
                    <h1 class="text-center">Kadra trenerska</h1>
                    <p>to oni pomogą Ci osiągnąć cel</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: fh5co-parallax -->
<?php
}
}
/* {/block 'hero'} */
/* {block 'top'} */
class Block_189601355758e8d5fc7c9124_62947390 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="fh5co-team-section">
    <div class="container">
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
                    <p>Poczuj się jak profesjonalny zawodnik. Zapisz się na zajęcia MMA, Boks, Brazylijskie Ju-Jitsu,
                        Muay-Thai, czy zapasy.
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
                    <p>Może nie staniesz się od razu mistrzem jak Michael Phelps, ale dzięki pływaniu masz szansę na
                        olimpijskie zdrowie.
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
                    <p>Masaż olejkiem polecamy osobom, które pragną się zrelaksować i zregenerować. Masaż przywraca
                        harmonię w organizmie niwelując
                        wszelkie skutki życia w stresie
                    </p>
                    <span><a href="?action=schedule" class="btn btn-default">Zapisy</a></span>
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
