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
      '#label' => 'Default Label',
      '#description' => 'Default Description',
      '#pre_render' => [
        [$class, 'preRenderTexGenDocument'],
      ],
    ];
  }
 
  /**
   * Prepare the render array for the template.
   */
  public static function preRenderTexGenDocument($element) {
    // Create a link render array using our #label.
    $element['link'] = [
      '#type' => 'link',
      '#title' => $element['#label'],
      '#url' => Url::fromUri('http://www.drupal.org'),
    ];
 
    // Create a description render array using #description.
    $element['description'] = [
      '#markup' => $element['#description']
    ];
 
    $element['pre_render_addition'] = [
      '#markup' => 'Additional text.'
    ];
 
    // Create a variable.
    $element['#random_number'] = rand(0,100);
 
    return $element;
  }
}