<?php
class Admin extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'form'));
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    }

    public function index(){
        $page_data['page_name']='login';
        $page_data['title']='pitch';
        $this->load->view('login', $page_data);
    }

    public function dashboard(){
        $page_data['page_name']='dashboard';
        $page_data['title']='Pitch | Dashboard';
        $this->load->view('admin/dashboard',$page_data);
    }

    public function user(){
        $page_data['page_name']='user';
        $page_data['title']='Pitch | User';
        $this->load->view('admin/user',$page_data);
    }

    public function user_role(){
        $page_data['page_name']='user_roles';
        $page_data['title']='Pitch | User Role';
        $this->load->view('admin/user_roles',$page_data);
    }

    public function draft(){
        $page_data['page_name']='draft';
        $page_data['title']='Pitch | Draft';
        $this->load->view('admin/draft',$page_data);
    }

    public function presentation(){
        $page_data['page_name']='presentation';
        $page_data['title']='Pitch | Presentation';
        $this->load->view('admin/presentation',$page_data);
    }

    public function purcahse(){
        $page_data['page_name']='purcahse';
        $page_data['title']='Pitch | Purcahse';
        $this->load->view('admin/purcahse',$page_data);
    }

    public function subscription(){
        $page_data['page_name']='subscription';
        $page_data['title']='Pitch | Subscription';
        $this->load->view('admin/subscription',$page_data);
    }

    public function accountsetting(){
        $page_data['page_name']='accountsetting';
        $page_data['title']='Pitch | Setting';
        $this->load->view('admin/accountsetting',$page_data);
    }

    public function accountsecurity(){
        $page_data['page_name']='accountsecurity';
        $page_data['title']='Pitch | Security';
        $this->load->view('admin/accountsecurity',$page_data);
    }

    public function accountbilling(){
        $page_data['page_name']='accountbilling';
        $page_data['title']='Pitch | Billing';
        $this->load->view('admin/accountbilling',$page_data);
    }

    public function accountnotification(){
        $page_data['page_name']='accountnotification';
        $page_data['title']='Pitch | Notification';
        $this->load->view('admin/accountnotification',$page_data);
    }

    public function accountconnections(){
        $page_data['page_name']='accountconnections';
        $page_data['title']='Pitch | Connections';
        $this->load->view('admin/accountconnections',$page_data);
    }

    public function profile(){
        $page_data['page_name']='profile';
        $page_data['title']='Pitch | Profile';
        $this->load->view('admin/profile',$page_data);
    }

    public function profileteam(){
        $page_data['page_name']='profileteam';
        $page_data['title']='Pitch | Team';
        $this->load->view('admin/profileteam',$page_data);
    }

    public function profileproject(){
        $page_data['page_name']='profileproject';
        $page_data['title']='Pitch | Project';
        $this->load->view('admin/profileproject',$page_data);
    }

    public function profileconnection(){
        $page_data['page_name']='profileconnection';
        $page_data['title']='Pitch | Connection';
        $this->load->view('admin/profileconnection',$page_data);
    }

    public function login(){
        $page_data['page_name']='login';
        $page_data['title']='Pitch | Login';
        $this->load->view('admin/login',$page_data);
    }


}