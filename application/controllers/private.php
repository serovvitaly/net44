<?php

class Private_Controller extends Base_Controller {

    public function before()
    {   
        return Redirect::to('login'); 
        
        /**
        * Проверка авторизации, если не авторизованы, 
        * то перебрасываем на авторизацию
        */
        if ( !Auth::check() ) {
            return Redirect::to('login'); 
        }
    }
    
    public function action_index()
    {
        //
    }

}