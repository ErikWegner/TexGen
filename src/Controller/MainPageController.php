<?php

namespace Drupal\texgen\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class MainPageController extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  public function content() {
    $build = array();
    $build[] = array(
      '#theme' => 'texgen-page',
    );
    $build[] = array(
      '#type' => 'texgen_document',
      '#label' => $this->t('Example Label'),
      '#description' => $this->t('This is the description text.'),
    );
    return $build;
  }

}