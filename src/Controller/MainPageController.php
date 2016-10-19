<?php

namespace Drupal\texgen\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * The main page controller.
 */
class MainPageController extends ControllerBase {
  /**
   * {@inheritdoc}
   */
  public function content() {
    $build = array();
    $build[] = array(
      '#theme' => 'texgen_page',
    );

    global $_SESSION;
    if (isset($_SESSION['texgen']['result'])) {
      drupal_set_message(t('Your document has been created.'));

      $doc = $_SESSION['texgen']['result'];
      $build[] = array(
        '#markup' => $doc,
      );

    }
    return $build;
  }

}