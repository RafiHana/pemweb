<?php 

class User extends MY_Controller
{
    public function profile()
    {

        $user = \Orm\User::first();
        
        if($this->input->post()){

        }

        view('backend.User.profile', ['user => $user']);
    }
}