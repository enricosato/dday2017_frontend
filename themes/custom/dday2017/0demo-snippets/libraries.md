# You can set CSS weights with 5 different levels of styling:
# - base key assigns a weight of CSS_BASE = -200
# - layout key assigns a weight of CSS_LAYOUT = -100
# - component key assigns a weight of CSS_COMPONENT = 0;
# - state key assigns a weight of CSS_STATE = 100
# - theme key assigns a weight of CSS_THEME = 200
# This is defined by the SMACSS standard.
# So here if you specify theme it means that the CSS file contains theme related styling
# which is pure look and feel.
# You cannot use other keys as these will cause strict warnings.
# @ see https://www.drupal.org/docs/8/creating-custom-modules/adding-stylesheets-css-and-javascript-js-to-a-drupal-8-module




global-styling:
  css:
    theme:
      css/style.css: {}
      css/ie.css: { browsers: { IE: 'IE', '!IE': false } }
      css/print.css: { media: print }
# To see all parameters: http://www.bradwade.com/drupal8/D8-3-Libraries/






slick-slider:
  css:
    theme:
      vendors/slick/slick.css: {}
      vendors/slick/slick-theme.css: {}
  js:
    vendors/slick/slick.min.js: {}
    '//code.jquery.com/jquery-1.11.0.min.js': { external: true }
    '//code.jquery.com/jquery-migrate-1.2.1.min.js': { external: true }

