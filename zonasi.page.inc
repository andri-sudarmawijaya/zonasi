<?php

/**
 * @file
 * Contains zonasi.page.inc.
 *
 * Page callback for Zonasi entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Zonasi templates.
 *
 * Default template: zonasi.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_zonasi(array &$variables) {
  // Fetch Zonasi Entity Object.
  $zonasi = $variables['elements']['#zonasi'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
