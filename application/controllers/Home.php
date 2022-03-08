<?php
class Home extends CI_Controller{

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
        $page_data['page_name']='dashboards';
        $page_data['title']='Pitch | Dashboard';
        $this->load->view('dashboards',$page_data);
    }

    public function createpersentation(){
        $page_data['page_name']='createpersentation';
        $page_data['title']='Pitch | Create Persentation';
        $this->load->view('createpersentation',$page_data);
    }

    public function presentationlist(){
        $page_data['page_name']='presentationlist';
        $page_data['title']='Pitch | Presentationlist';
        $this->load->view('presentationlist',$page_data);
    }

    public function workspace(){
        $page_data['page_name']='workspace';
        $page_data['title']='Pitch | Workspace';
        $this->load->view('workspace',$page_data);
    }
    
    public function pricing(){
        $page_data['page_name']='pricing';
        $page_data['title']='Pitch | Pricing';
        $this->load->view('pricing',$page_data);
    }

    public function accountsetting(){
        $page_data['page_name']='accountsetting';
        $page_data['title']='Pitch | Account Setting';
        $this->load->view('accountsetting',$page_data);
    }

    public function accountsecurity(){
        $page_data['page_name']='accountsecurity';
        $page_data['title']='Pitch | Account Security';
        $this->load->view('accountsecurity',$page_data);
    }

    public function accountbilling(){
        $page_data['page_name']='accountbilling';
        $page_data['title']='Pitch | Account Billing';
        $this->load->view('accountbilling',$page_data);
    }

    public function accountnotifications(){
        $page_data['page_name']='accountnotifications';
        $page_data['title']='Pitch | Account Notifications';
        $this->load->view('accountnotifications',$page_data);
    }

    public function accountconnections(){
        $page_data['page_name']='accountconnections';
        $page_data['title']='Pitch | Account Connections';
        $this->load->view('accountconnections',$page_data);
    }

    public function authregisterbasic(){
        $page_data['page_name']='auth-login-basic';
        $page_data['title']='Pitch | Account auth-login-basic';
        $this->load->view('auth-login-basic',$page_data);
    }
    
    public function authlogincover(){
        $page_data['page_name']='auth-login-cover';
        $page_data['title']='Pitch | Account auth-login-cover';
        $this->load->view('auth-login-cover',$page_data);
    }

    public function appaccessroles(){
        $page_data['page_name']='app-access-roles';
        $page_data['title']='Pitch | Account app-access-roles';
        $this->load->view('app-access-roles',$page_data);
    }

    public function appaccesspermission(){
        $page_data['page_name']='app-access-permission';
        $page_data['title']='Pitch | Account app-access-permission';
        $this->load->view('app-access-permission',$page_data);
    }

}















