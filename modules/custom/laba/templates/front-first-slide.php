<?php
$path = $_SERVER['DOCUMENT_ROOT'];
chdir($path);
define('DRUPAL_ROOT', getcwd());
require_once '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
?>

<div class="ip-main">
    <div id="pt-main" class="pt-perspective">
      <div class="pt-page pt-page-0" style="background-image: url('/sites/all/themes/laba/images/content/00.jpg')">
        <div class="container text-center">
          <div><img src="/sites/all/themes/laba/images/content/00-sign.png" /></div>
          <div class="top-banner"><img src="/sites/all/themes/laba/images/content/00-h1.png" /></div>
          <h2>IN WWW SINCE MAY 2013</h2>
          <div class="presents-banner"><img src="/sites/all/themes/laba/images/content/00-presents.png" /></div>
          <div class="img-footer"><img src="/sites/all/themes/laba/images/content/00-image.png" /></div>
      </div></div>
