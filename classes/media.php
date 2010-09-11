<? defined('SYSPATH') or die('media d ');

class Media {

    static protected $_scripts = array();
    static protected $_styles = array();


    public static function addToArray( Array & $array, $data){
           
           if (is_array($data))
                $array = array_merge( $array, $data);
           else
                $array[] = $data;
           
    }

    public static function addScript( $scripts){
    
         self::addToArray( self::$_scripts, $scripts);
    
    }

    public static function addStyle( $styles){
        
         self::addToArray( self::$_styles, $styles);
    }

    public static function renderScripts(){
    
    
         if (count(self::$_scripts) == 0)
            return FALSE; 
    

         self::$_scripts = array_unique(self::$_scripts);

           // kohana:: $environment
         if ( kohana::$environment == Kohana::DEVELOPMENT){
    
            foreach (self::$_scripts as $js){
              
                echo HTML::script("media/scripts/".$js);
              
            }
            
         }else{
                                              
            $js = implode( ",", self::$_scripts);
           
            ?><script type="text/javascript" src="<?=url::base();?>min/index.php?b=media/scripts&amp;f=<?=$js?>"></script><?
                     
         }
                                                                         
    
    }

    public static function renderStyles(){
               
         if (count(self::$_styles) == 0)
               return FALSE;      
               
         self::$_styles = array_unique(self::$_styles);      
               
         switch ( Kohana::$environment){
           
              case Kohana::DEVELOPMENT:
              case Kohana::STAGING:
              case kohana::TESTING:     
              default:
                                      
                 foreach (self::$_styles as $style){
                       echo HTML::style("media/styles/".$style);
                 }
                  
                 break;
                 
             case Kohana::PRODUCTION:
               
               ?><link rel='stylesheet' type='text/css' href='<?=url::base();?>min/index.php?b=media/styles&amp;f=<?=implode(",", self::$_styles);?>' /><?

                 break;                        
          } 
          
    }


}