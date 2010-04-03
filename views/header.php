<? defined('SYSPATH') or die('no direct access allowed');

  ?><title><?=$title;?></title><?


  if (isset($styles) && is_array($styles)){
        Media::render_styles($styles);
  }
  
?><script>var base_url='<?=url::base();?>';</script>