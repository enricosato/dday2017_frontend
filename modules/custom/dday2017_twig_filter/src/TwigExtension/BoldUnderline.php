<?php
namespace Drupal\dday2017_twig_filter\TwigExtension;


class BoldUnderline extends \Twig_Extension {

  /**
   * Generates a list of all Twig filters that this extension defines.
   */
  public function getFilters() {
    return [
      new \Twig_SimpleFilter('boldunderline', array($this, 'boldUnderline')),
    ];
  }

  /**
   * Gets a unique identifier for this Twig extension.
   */
  public function getName() {
    return 'dday2017_twig_filter.twig_extension';
  }

  /**
   * Replaces all numbers from the string.
   */
  public static function boldUnderline($string) {
    $new_string = '<strong>' . $string . '</strong>';
    return $new_string;
  }

}
