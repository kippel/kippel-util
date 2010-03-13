<? defined('SYSPATH') or die('no direct access');

class Controller_Template extends Kohana_Controller_Template {
    
	final private static function add_to_array(Array & $array, $data){
          
		if (is_array($data)){
			$array = array_merge($array,$data);
		}else{
			$array[] = $data;
		}
        
	}

	private static function add_error( &$file){
	     $file = 'errors/'.i18n::$lang.'/'.$file;
	}

	public function add_error_script($scripts){
	      if (is_array($scripts)){
	        array_walk($scripts,array('Controller_Template','add_error'));
	      }else{
	        self::add_error($scripts);
	      }
	      self::add_to_array($this->template->footer->javascripts,$scripts);
	}
    
	public function add_script( $scripts){
		self::add_to_array( $this->template->footer->javascripts, $scripts);
	}
    
	public function add_style( $styles){
		self::add_to_aray($this->template->header->styles, $styles);
	}
                                                                                                                                                  
}
