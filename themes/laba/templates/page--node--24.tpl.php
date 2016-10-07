<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */

  if ( !empty($node) ) {
    $nid = $node->nid;
  }

  function check2showPreloader($nid) {
    if ($nid != 28) {
        return true;
    } else {
        return false;
    }
  }
?>

<a id="showMenu" class="logo navbar-btn pull-left" href="" title="Меню"><img src="/sites/all/themes/laba/images/menu.png" alt="Меню" /></a>

<div id="perspective" class="perspective effect-laydown">
  <div id="perspective-container">
    <div id="perspective-wrapper"><!-- wrapper needed for scroll -->

      <div id="ip-container" class="ip-container">
        <?php if (check2showPreloader($nid)): ?>
          <header class="preloader text-center">
          	<img src="<?php print $base_path ;?>sites/all/themes/laba/images/logo-ani.gif" width="420" height="368">
          	<p><?php print t("Loading, please wait..."); ?></p>
          </header>

        <?php endif; ?>

        <div class="container">
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php if (!empty($title)): ?>
            <h1 class="page-header"><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php print $messages; ?>
          <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
          <?php endif; ?>
          <?php if (!empty($page['help'])): ?>
            <?php print render($page['help']); ?>
          <?php endif; ?>
          <?php if (!empty($action_links)): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>

          <section id="intro" class="appear  animated"  data-animation="bounceInRight">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="devider"><span></span></div>

                  <h1 class="section-title text-center">Велич та незакомплексованість тварюки</h1>

                  <div >
                    <div class="col-sm-4">
                      <a class="pull-right" href="#">
                        <img class="img-circle" src="/sites/all/themes/lab/images/intro.png" alt="...">
                      </a>
                    </div>

                    <div class="col-sm-8">
                      <div class="intro-desc">
                        <p class="fp">
                          Не всі знають, що у кота Шредінгера була своя лабораторія,</br>
                          &nbsp;де він проводив власні досліди.</br>
                          &nbsp;&nbsp;Але не на мишах. Ні.</p>

                        <p class="fp">
                          &nbsp;&nbsp;&nbsp;Сам Шредінгер казав про кота так:</br>
                          <i>&nbsp;&nbsp;"Він, клятий, мишей зовсім не чіпа.</br>
                            &nbsp;Каже, шо з мишами треба поводитись так,</br>
                            як хочеш, шоб миші поводились з тобою… "</i>
                        </p>
                      </div>
                    </div>
                  </div>



                </div><!-- col-->

              </div> <!--row-->

            </div> <!-- container-->
          </section>



          <!-- ==============================================
          About
          =============================================== -->
          <section id="about" class="appear animated"  data-animation="bounceInRight" >
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="devider"><span></span></div>

                  <h1 class="section-title text-center">Хто ми та шо ми</h1>
                  <p class="fp">Продающій тєкст Продающій тєкст Продающій тєкст Продающій тєкст Продающій тєкст Продающій тєкст Продающій тєкст Продающій тєкст Продающій тєкст Продающій тєкст Продающій тєкст Продающій тєкст Продающій тєкст Продающій тєкст Продающій тєкст Продающій тєкст Продающій тєкст Продающій тєкст </p>
                  <h2 class="section-pre-title text-center">
                    Ми працюємо над кожним проектом поки клієнт не залишиться задоволеним. Пропорційно наші послуги це: веб-розробка, корпоративний стиль, копірайт та консультації.
                  </h2>
                  <h2 class="section-pre-title text-center">Наша місія: Індивідуальний підхід до клієнта, та колонізація Титану!</h2>


                </div> <!-- End Column 12 -->
              </div> <!-- End Row -->

              <div class="row about-skills">
                <div class="col-md-4 text-center animated" data-animation="flipInX">
                  <div class="pie-chart bottom-margin" data-percent="90"><span class="num">90%</span></div>
                  <h4>Веб-розробка</h4>
                  <p class="pie-chart-text text-center circle-text">
                    У 90% нашим кліентам потрібен сайт. Ми майже не робимо простих візиток на Wordpress і тд.
                    Навпаки - до нас приходять клієнти з простими сайтами та проханням зробити «з нуля», краще та додати більше можливостей. Андрій сповідує прості чисті дизайни та зручні інтерфейси, тому дуже страждає, коли нас просять додати "насиченості", зробити меньшим та щільнішим текст, тощо.
                  </p>
                </div>
                <div class="col-md-4 text-center animated" data-animation="flipInX" data-animation-delay="300">
                  <div class="pie-chart bottom-margin" data-percent="70"><span class="num">70%</span></div>
                  <h4>Корпоративний стиль</h4>
                  <p class="pie-chart-text text-center circle-text">
                    У більшості випадків ми переробляєм або розроблюємо з нуля корпоративний стиль. Логотипи виходять з-пад пера Генадія як гарячі пиріжки. Два дні у нього займає розробка і тиждень займає переконання кліента прийняти нове та сучасне :)
                  </p>
                </div>
                <div class="col-md-4 text-center animated" data-animation="flipInX" data-animation-delay="600">
                  <div class="pie-chart bottom-margin" data-percent="50"><span class="num">50%</span></div>
                  <h4>Копірайт та консультації</h4>
                  <p class="pie-chart-text text-center circle-text">
                    Як правило, ми робимо замість клієнта тз, пишемо/переписуємо основні тексти, придумуємо продукти та таргет одіенс, будуємо "Лійку продажів".
                  </p>
                </div>
              </div> <!-- End Row -->
            </div> <!-- End Container -->
          </section> <!-- End About Section -->



        </div>

      </div>

    </div>
  </div>

  <nav class="outer-nav left vertical">
    <a href="/" class="icon-home"><?php print t("Головна"); ?></a>
    <a href="/works" class="icon-news"><?php print t("Роботи"); ?></a>
    <a href="/blog" class="icon-image"><?php print t("Блог"); ?></a>
    <a href="/contacts" class="icon-mail"><?php print t("Контакти"); ?></a>
    <a href="/brif" class=""><?php print t("Бріф"); ?></a>
  </nav>

</div><!-- /perspective -->