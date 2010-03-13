<? defined('SYSPATH') or die();
class Request extends Kohana_Request {
/**
 * @var  boolean  internal request
  */
  protected $internal = TRUE;
  public static function instance( & $uri = TRUE)
  {
      $instance = parent::instance($uri);
      $instance->internal = FALSE;
      
      return $instance;
  }
  
  public function isInternal(){
      return (BOOL)$this->internal;
  }
  
}

