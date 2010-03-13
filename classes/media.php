<? defined('SYSPATH') or die('media d ');

class Media {


    public static function render_scripts(Array $javascripts ){
    
        if (count($javascripts)) ==0)
            return FALSE;
    
    
        if (!IN_PRODUCTION){
    
            foreach ($javascripts as $js){
              
                echo HTML::script("media/js/".$js);
              
            }
            
        }else{
                                              
            $js = implode(",",$javascripts);
           
            ?><script type="text/javascript" src="<?=url::base();?>min/index.php?b=media/js&amp;f=<?=$js?>"></script><?
                     
        }
                                                                         
    
    }

    public static function render_styles( Array $styles){
               
           if (count($styles))==0)
               return FALSE;    
               
           if (!IN_PRODUCTION){
          
               foreach ($styles as $style){
    
                   echo HTML::style("media/styles/".$style);
    
               }
               	                                                                    
          }else{
               
               $styles = implode(",",$styles);
               ?><link rel='stylesheet' type='text/css' href='<?=url::base();?>min/index.php?b=media/styles&amp;f=<?=$styles?>'></script><?
                       
          } 
          
    }






}