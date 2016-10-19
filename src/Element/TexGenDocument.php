<?php
/**
 * @file
 * Contains \Drupal\texgen\Element\TexGenDocument.
 */

namespace Drupal\texgen\Element;

use Drupal\Core\Render\Element\RenderElement;
use Drupal\Core\Url;

/**
 * Provides an example element.
 *
 * @RenderElement("texgen_document")
 */
class TexGenDocument extends RenderElement {
  /**
   * {@inheritdoc}
   */
  public function getInfo() {
    $class = get_class($this);
    return [
      '#theme' => 'texgen_document',
      '#texgenformdata' => array(),
      '#pre_render' => [
        [$class, 'preRenderTexGenDocument'],
      ],
    ];
  }

  /**
   * Prepare the render array for the template.
   */
  public static function preRenderTexGenDocument($element) {
    $element['d'] = $element['#texgenformdata'];
    return $element;
  }
}