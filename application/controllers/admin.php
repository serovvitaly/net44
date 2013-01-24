<?php


class Admin_Controller extends Private_Controller {

    public function action_index()
    {
        return View::make('admin.index');
    }

}