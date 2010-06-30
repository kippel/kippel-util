<? defined('SYSPATH') or die('no direct access');

class Controller_Errors extends Controller{

    public function action_404(){
        echo "404 not found";
    }
    
    public function action_notallowed(){
        
        echo "sense permis ";
        
    }


}