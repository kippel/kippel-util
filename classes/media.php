<? defined('SYSPATH') or die('media d ');

class Media {


    public static function render_scripts(Array $javascripts ){
    
          foreach ($javascripts as $js){
              
              echo HTML::script("media/js/".$js);
              
          }
                                              
                                              
    
    }

    public static function render_styles( Array $styles){
               
           foreach ($styles as $style){
    
               echo HTML::style("media/styles/".$style);
    
           }                                                                    
    
    }






}