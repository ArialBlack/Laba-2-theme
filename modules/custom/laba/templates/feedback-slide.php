<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  chdir($path);
  define('DRUPAL_ROOT', getcwd());
  require_once '/includes/bootstrap.inc';
  drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

  $feedback_block = module_invoke('webform', 'block_view', 'client-block-12');
?>

<div class="pt-page pt-page-lead">
    <div class="container_wrap">
        <div class="container text-center">
          <h2 id="shine" class="shine-title">Like it?</h2>
            <h3>Then <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseFeedback" aria-expanded="false" aria-controls="collapseExample">write some message</a> to us</h3>
              <div class="collapse" id="collapseFeedback">
                <?php
                  print render($feedback_block['content']);
                ?>
              </div>
        </div>
    </div>
</div>
