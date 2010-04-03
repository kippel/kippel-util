<? defined('SYSPATH') or die('no direct access');

  if (isset($javascripts) && is_array($javascripts)){
        Media::render_scripts($javascripts);
  }