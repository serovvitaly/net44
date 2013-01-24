<?php

class Private_Controller extends Base_Controller {

    public function before()
    {
        /**
        * Проверка авторизации, если не авторизованы, 
        * то перебрасываем на авторизацию
        */
        if ( !Auth::check() ) {
            return Redirect::to('/');
        }
    }
    
    public function action_index()
    {
        //
    }

}