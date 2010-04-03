<?php defined('SYSPATH') or die('no direct'.__CLASS__);

abstract class Controller_Website extends Controller_Template{

    public $template = 'templates/template';

    public function before(){
          
          parent::before();
          
          $this->template->header = View::factory('header');
          
          $this->template->header->title = '';
          
          $this->template->header->styles = array();


          $this->template->menu = '';
          
          $this->template->content = '';
    
          
          
          $this->template->footer = View::factory('footer');
          
          $this->template->footer->javascripts = array();
          
          
    }
	

}