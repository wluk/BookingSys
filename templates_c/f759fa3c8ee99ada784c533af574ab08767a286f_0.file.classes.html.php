<?php
/* Smarty version 3.1.30, created on 2017-03-31 23:06:02
  from "C:\xampp\htdocs\silka\app\Views\Home\classes.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dec4ba1a86f0_16285561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f759fa3c8ee99ada784c533af574ab08767a286f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\silka\\app\\Views\\Home\\classes.html',
      1 => 1490994356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dec4ba1a86f0_16285561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43646287158dec4ba1937c4_70088050', 'hero');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114672096058dec4ba1a7137_82987373', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("\app\Views\main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'hero'} */
class Block_43646287158dec4ba1937c4_70088050 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="fh5co-parallax" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/home-image-2.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                <div class="fh5co-intro fh5co-table-cell animate-box">
                    <h1 class="text-center">ZAJĘCIA</h1>
                    <p>No Pain No Gain</p>
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
class Block_114672096058dec4ba1a7137_82987373 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php
}
}
/* {/block 'top'} */
}
