<?php


class Merchant_Controller extends Private_Controller {

    public function action_index()
    {
        return View::make('merchant.index');
    }
    
    
    public function action_login()
    {
        $email = Input::get('user_email');
        $pass  = Input::get('user_pass');
        
        $credentials = array('username' => $email, 'password' => $pass);
        
        if (Auth::attempt($credentials)) {
             return Redirect::to('/merchant');
        }       
        
        return View::make('auth.login', array(
            'template_extends' => 'merchant/_layout.twig'
        ));
    }
    
    public function action_products_groups()
    {
        return View::make('merchant.products.groups');
    }
    
    public function action_products_list()
    {
        $products = Product::take(21)->get();
        
        return View::make('merchant.products.list', array('products' => $products));
    }
    
    public function action_prices_rules()
    {
        return View::make('merchant.products.prices_rules');
    }
    
    public function action_purchases_list()
    {
        return View::make('merchant.purchases.list');
    }

}