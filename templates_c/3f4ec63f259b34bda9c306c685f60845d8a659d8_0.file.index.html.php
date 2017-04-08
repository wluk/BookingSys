<?php
/* Smarty version 3.1.30, created on 2017-04-08 14:21:53
  from "C:\xampp\htdocs\silka\app\Home\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e8d5e140e2c3_65145607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f4ec63f259b34bda9c306c685f60845d8a659d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\silka\\app\\Home\\index.html',
      1 => 1491653995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e8d5e140e2c3_65145607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64069914958e8d5e11302b7_31603553', 'hero');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162375692058e8d5e13db537_53767008', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("\public\main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'hero'} */
class Block_64069914958e8d5e11302b7_31603553 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/home-image.jpg);">
        <div class="desc animate-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h2>W zdrowym <b>ciele</b> zdrowy duch</h2>
                        <span><a class="btn btn-primary" href="?action=reg">Zacznij już dziś!</a></span>
                    </div>
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
class Block_162375692058e8d5e13db537_53767008 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- end:fh5co-hero -->
<div id="fh5co-schedule-section" class="fh5co-lightgray-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading-section text-center animate-box">
                    <h2>Harmonogram zajęć</h2>
                    <p>Wybierz zajęcia, które pasują do Ciebie lub skorzystaj z porady trenera personalnego
                    </p>
                </div>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-10 col-md-offset-1 text-center">
                <ul class="schedule">
                    <li><a href="#" class="active" data-sched="sunday">Niedziela</a></li>
                    <li><a href="#" data-sched="monday">Poniedziałek</a></li>
                    <li><a href="#" data-sched="tuesday">Wtorek</a></li>
                    <li><a href="#" data-sched="wednesday">Środa</a></li>
                    <li><a href="#" data-sched="thursday">Czwartek</a></li>
                    <li><a href="#" data-sched="monday">Piątek</a></li>
                    <li><a href="#" data-sched="saturday">Sobota</a></li>
                </ul>
            </div>
            <div class="row text-center">
                <div class="col-md-12 schedule-container">
                    <div class="schedule-content active" data-day="sunday">
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-dumbell.svg" alt="Cycling">
                                <small>14-15</small>
                                <h3>SIŁA</h3>
                                <span>PAT i MAT</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-yoga.svg" alt="">
                                <small>16-17</small>
                                <h3>Yoga</h3>
                                <span>Mr. Bean</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-cycling.svg" alt="">
                                <small>18-19</small>
                                <h3>ROWERKI</h3>
                                <span>Princes Leia</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-boxing.svg" alt="Cycling">
                                <small>19-20</small>
                                <h3>Boks</h3>
                                <span>Kimberly</span>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-content" data-day="monday">
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-yoga.svg" alt="">
                                <small>16-17</small>
                                <h3>Yoga</h3>
                                <span>Mr. Bean</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-cycling.svg" alt="">
                                <small>18-19</small>
                                <h3>ROWERKI</h3>
                                <span>Princes Leia</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-boxing.svg" alt="Cycling">
                                <small>19-20</small>
                                <h3>Boks</h3>
                                <span>Kimberly</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-dumbell.svg" alt="Cycling">
                                <small>20-21</small>
                                <h3>SIŁA</h3>
                                <span>PAT i MAT</span>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-content" data-day="tuesday">
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-cycling.svg" alt="">
                                <small>17-18</small>
                                <h3>ROWERKI</h3>
                                <span>Princes Leia</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-boxing.svg" alt="Cycling">
                                <small>18-19</small>
                                <h3>Boks</h3>
                                <span>Kimberly</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-dumbell.svg" alt="Cycling">
                                <small>19-20</small>
                                <h3>SIŁA</h3>
                                <span>PAT i MAT</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-yoga.svg" alt="">
                                <small>20-21</small>
                                <h3>Yoga</h3>
                                <span>Mr. Bean</span>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-content" data-day="wednesday">
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-boxing.svg" alt="Cycling">
                                <small>17-18</small>
                                <h3>Boks</h3>
                                <span>Kimberly</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-dumbell.svg" alt="Cycling">
                                <small>18-19</small>
                                <h3>SIŁA</h3>
                                <span>PAT i MAT</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-yoga.svg" alt="">
                                <small>19-20</small>
                                <h3>Yoga</h3>
                                <span>Mr. Bean</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-cycling.svg" alt="">
                                <small>21-22</small>
                                <h3>ROWERKI</h3>
                                <span>Princes Leia</span>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-content" data-day="thursday">
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-dumbell.svg" alt="Cycling">
                                <small>16-17</small>
                                <h3>SIŁA</h3>
                                <span>PAT i MAT</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-boxing.svg" alt="Cycling">
                                <small>17-18</small>
                                <h3>Boks</h3>
                                <span>Kimberly</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-yoga.svg" alt="">
                                <small>18-19</small>
                                <h3>Yoga</h3>
                                <span>Mr. Bean</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-cycling.svg" alt="">
                                <small>20-21</small>
                                <h3>ROWERKI</h3>
                                <span>Princes Leia</span>
                            </div>
                        </div>

                    </div>
                    <div class="schedule-content" data-day="friday">
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-dumbell.svg" alt="Cycling">
                                <small>17-18</small>
                                <h3>SIŁA</h3>
                                <span>PAT i MAT</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-yoga.svg" alt="">
                                <small>18-19</small>
                                <h3>Yoga</h3>
                                <span>Mr. Bean</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-cycling.svg" alt="">
                                <small>19-20</small>
                                <h3>ROWERKI</h3>
                                <span>Princes Leia</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-boxing.svg" alt="Cycling">
                                <small>20-21</small>
                                <h3>Boks</h3>
                                <span>Kimberly</span>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-content" data-day="saturday">
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-boxing.svg" alt="Cycling">
                                <small>16-17</small>
                                <h3>Boks</h3>
                                <span>Kimberly</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-yoga.svg" alt="">
                                <small>15-16</small>
                                <h3>Yoga</h3>
                                <span>Mr. Bean</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-dumbell.svg" alt="Cycling">
                                <small>17-18</small>
                                <h3>SIŁA</h3>
                                <span>PAT i MAT</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="program program-schedule">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-cycling.svg" alt="">
                                <small>19-20</small>
                                <h3>ROWERKI</h3>
                                <span>Princes Leia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fh5co-parallax" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/home-image-3.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                <div class="fh5co-intro fh5co-table-cell animate-box">
                    <h1 class="text-center">stań się bardziej FIT</h1>
                    <p>z przyjemnością Ci w tym pomożemy</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: fh5co-parallax -->
<div id="fh5co-programs-section">
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
                    <p>Poczuj się jak profesjonalny zawodnik. Zapisz się na zajęcia MMA, Boks, Brazylijskie Ju-Jitsu, Muay-Thai,
                        czy zapasy. Pracuj nad swoim bezpieczeństwem i kondycją.
                    </p>
                    <span><a href="?action=schedule" class="btn btn-default">Zapisy</a></span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="program animate-box">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/fit-swimming.svg" alt="">
                    <h3>Pływanie</h3>
                    <p>Może nie staniesz się od razu mistrzem jak Michael Phelps, ale dzięki pływaniu masz szansę na olimpijskie
                        zdrowie.
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
                    <p>Masaż olejkiem polecamy osobom, które pragną się zrelaksować i zregenerować. Masaż przywraca harmonię
                        w organizmie niwelując wszelkie skutki życia w stresie
                    </p>
                    <span><a href="?action=schedule" class="btn btn-default">Zapisy</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-team-section" class="fh5co-lightgray-section">
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
<div class="fh5co-parallax" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/home-image-2.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 fh5co-table">
                <div class="fh5co-intro fh5co-table-cell box-area">
                    <div class="animate-box">
                        <h1>Program <b>LATO</b></h1>
                        <p>promocja 20%</p>
                        <a href="?action=reg" class="btn btn-primary">Dołącz już dziś</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: fh5co-parallax -->
<div id="fh5co-pricing-section" class="fh5co-pricing fh5co-lightgray-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading-section text-center animate-box">
                    <h2>Cenni</h2>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pricing">
                <div class="col-md-3 animate-box">
                    <div class="price-box animate-box">
                        <h2 class="pricing-plan">Starter</h2>
                        <div class="price"><sup class="currency">zł</sup>30<small>/miesięcznie</small></div>
                        <ul class="classes">
                            <li>10 cardio</li>
                            <li class="color">5 trening pływacki</li>
                            <li>6 Yoga</li>
                            <li class="color">20 aerobics</li>
                            <li>10 zumba</li>
                            <li class="color">5 masaż</li>
                            <li>4 siła</li>
                        </ul>
                        <a href="#" class="btn btn-default">Wybierz plan</a>
                    </div>
                </div>

                <div class="col-md-3 animate-box">
                    <div class="price-box animate-box">
                        <h2 class="pricing-plan">Basic</h2>
                        <div class="price"><sup class="currency">zł</sup>43<small>/miesięcznie</small></div>
                        <ul class="classes">
                            <li>10 cardio</li>
                            <li class="color">10 trening pływacki</li>
                            <li>10 Yoga</li>
                            <li class="color">10 aerobics</li>
                            <li>10 zumba</li>
                            <li class="color">10 masaż</li>
                            <li>10 siła</li>
                        </ul>
                        <a href="#" class="btn btn-default">Wybierz plan</a>
                    </div>
                </div>

                <div class="col-md-3 animate-box">
                    <div class="price-box animate-box popular">
                        <h2 class="pricing-plan pricing-plan-offer">Pro<span>polecana oferta</span></h2>
                        <div class="price"><sup class="currency">zł</sup>50<small>/miesięcznie</small></div>
                        <ul class="classes">
                            <li>15 cardio</li>
                            <li class="color">8 trening pływacki</li>
                            <li>8 Yoga</li>
                            <li class="color">6 aerobics</li>
                            <li>6 zumba</li>
                            <li class="color">12 masaż</li>
                            <li>20 siła</li>
                        </ul>
                        <a href="#" class="btn btn-select-plan btn-sm">Wybierz plan</a>
                    </div>
                </div>

                <div class="col-md-3 animate-box">
                    <div class="price-box animate-box">
                        <h2 class="pricing-plan">Unlimited</h2>
                        <div class="price"><sup class="currency">zł</sup>100<small>/month</small></div>
                        <ul class="classes">
                            <li>brak limitów</li>
                            <li class="color">wszystkie zajęcia</li>
                        </ul>
                        <a href="#" class="btn btn-default">Wybierz plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div id="fh5co-blog-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="col-md-12">
                    <div class="heading-section animate-box">
                        <h2>Recent from Blog</h2>
                    </div>
                </div>
                <div class="col-md-12 col-md-offset-0">
                    <div class="fh5co-blog animate-box">
                        <div class="inner-post">
                            <a href="#"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/blog-1.jpg" alt=""></a>
                        </div>
                        <div class="desc">
                            <h3><a href="" #>Starting new session of body building this summer</a></h3>
                            <span class="posted_by">Posted AdminCtrldmin</span>
                            <span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
                            <p>Far far away, behind the word mountains</p>
                            <a href="#" class="btn btn-default">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-md-offset-0">
                    <div class="fh5co-blog animate-box">
                        <div class="inner-post">
                            <a href="#"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/blog-1.jpg" alt=""></a>
                        </div>
                        <div class="desc">
                            <h3><a href="" #>Starting new session of body building this summer</a></h3>
                            <span class="posted_by">Posted AdminCtrldmin</span>
                            <span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
                            <p>Far far away, behind the word mountains</p>
                            <a href="#" class="btn btn-default">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-12">
                    <div class="heading-section animate-box">
                        <h2>Upcoming Events</h2>
                    </div>
                </div>
                <div class="col-md-12 col-md-offset-0">
                    <div class="fh5co-blog animate-box">
                        <div class="meta-date text-center">
                            <p><span class="date">14</span><span>June</span><span>2016</span></p>
                        </div>
                        <div class="desc desc2">
                            <h3><a href="" #>Starting new session of body building this summer</a></h3>
                            <span class="posted_by">Posted AdminCtrldmin</span>
                            <span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <a href="#" class="btn btn-default">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-md-offset-0">
                    <div class="fh5co-blog animate-box">
                        <div class="meta-date text-center">
                            <p><span class="date">13</span><span>June</span><span>2016</span></p>
                        </div>
                        <div class="desc desc2">
                            <h3><a href="" #>Starting new session of body building this summer</a></h3>
                            <span class="posted_by">Posted AdminCtrldmin</span>
                            <span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <a href="#" class="btn btn-default">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
<?php
}
}
/* {/block 'top'} */
}
