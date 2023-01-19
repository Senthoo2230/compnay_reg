<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        /*load Model*/
	    $this->load->model('Home_model');

        
    }

    public function index()
    {
        $this->load->view('home');
    }
    public function getStart()
    {
        
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('home'); 
        }
        else
        {
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');

            if($this->Home_model->insert_basic($email,$mobile)){
                // Success
                $id = $this->Home_model->get_id($email,$mobile);
                $this->session->set_userdata('user_id',$id);

                // Second Step
                redirect('home/company_type');
            }
            else{
                // Not Inserted
                $this->load->view('home'); 
            }

        }
    }

    public function company_type()
    {
        $this->load->view('head');
        $this->load->view('2nd_step');
        $this->load->view('footer');
    }

    public function company_details()
    {
        $this->load->view('3rd_step');
    }

    public function company_address()
    {
        $this->load->view('4th_step');
    }

    public function owner()
    {
        if(!$this->session->userdata('user_id')){
            redirect('home');
        }
        $data['owners'] = $this->Home_model->get_owners();
        $this->load->view('add_owner',$data);
    }

    public function second_step()
    {
        $type_id = $this->input->post('company_type');

        if ($this->Home_model->insert_type($type_id)) {
            // Third Step
            redirect('home/company_details');
        }
        else{
            // Stay here
            redirect('home/company_type');
        }
    }

    //Company Details
    public function third_step()
    {
        $this->form_validation->set_rules('company_name', 'Company Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('description', 'Business activity', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('3rd_step'); 
        }
        else
        {
            $name = $this->input->post('company_name');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $description = $this->input->post('description');

            if($this->Home_model->insert_company_details($name,$email,$phone,$description)){
                // 4th Step
                redirect('home/company_address');
            }
            else{
                // Not Inserted
                $this->load->view('company_details');
            }

        }
    }

    // Company Address
    public function fourth_step()
    {
        $this->form_validation->set_rules('line1', 'Address Line 1', 'required');
        $this->form_validation->set_rules('district', 'District', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('postal', 'Postal Code', 'required');
        $this->form_validation->set_rules('ds', 'DS Division', 'required');
        $this->form_validation->set_rules('gs', 'GS Division', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('4th_step'); 
        }
        else
        {
            $line1 = $this->input->post('line1');
            $line2 = $this->input->post('line2');
            $district = $this->input->post('district');
            $city = $this->input->post('city');
            $postal = $this->input->post('postal');
            $ds = $this->input->post('ds');
            $gs = $this->input->post('gs');
            

            if($this->Home_model->insert_company_address($line1,$line2,$district,$city,$postal,$ds,$gs)){
                // 5th Step
                redirect('home/owner');
            }
            else{
                // Not Inserted
                $this->load->view('4th_step');
            }

        }
    }

    public function add_owner()
    {
        $this->form_validation->set_rules('origin', 'Origin', 'required');
        $this->form_validation->set_rules('identity', 'Identity', 'required');
        $this->form_validation->set_rules('fname', 'Firstname', 'required');
        $this->form_validation->set_rules('lname', 'Lastname', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('add_owner'); 
        }
        else{
            $origin = $this->input->post('origin');
            $identity = $this->input->post('identity');
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $percentage = $this->input->post('percentage');

            if($this->Home_model->insert_owner($origin,$identity,$fname,$lname,$percentage)){
                redirect('home/owner');
            }
            else{
                redirect('home/owner');
            }
        }

    }

    public function director()
    {
        if(!$this->session->userdata('user_id')){
            redirect('home');
        }
        $data['directors'] = $this->Home_model->get_directors();
        $this->Home_model->save_owners();
        $this->load->view('add_director',$data);
    }

    public function add_director()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('fname', 'Firstname', 'required');
        $this->form_validation->set_rules('lname', 'Lastname', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('add_director'); 
        }
        else{
            $title = $this->input->post('title');
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');

            if($this->Home_model->insert_director($title,$fname,$lname)){
                redirect('home/director');
            }
            else{
                redirect('home/owner');
            }
        }
    }

    public function add_secretary()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('fname', 'Firstname', 'required');
        $this->form_validation->set_rules('lname', 'Lastname', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('add_secretary'); 
        }
        else{
            $title = $this->input->post('title');
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');

            if($this->Home_model->insert_secretary($title,$fname,$lname)){
                redirect('home/secretary');
            }
            else{
                redirect('home/secretary');
            }
        }
    }

    public function add_sh()
    {
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('add_sh'); 
        }
        else{
            $address = $this->input->post('address');
            $email = $this->input->post('email');
            $city = $this->input->post('city');
            $state = $this->input->post('state');
            $postal = $this->input->post('postal');

            if($this->Home_model->insert_sh($address,$email,$city,$state,$postal)){
                redirect('home/shareholders');
            }
            else{
                redirect('home/shareholders');
            }
        }
    }

    public function secretary()
    {
        if(!$this->session->userdata('user_id')){
            redirect('home');
        }
        $data['secretary'] = $this->Home_model->get_secretary();
        $this->Home_model->save_directors();
        $this->load->view('add_secretary',$data);
    }

    public function shareholders()
    {
        if(!$this->session->userdata('user_id')){
            redirect('home');
        }
        $data['shs'] = $this->Home_model->get_sh();
        $this->Home_model->save_secretary();
        $this->load->view('add_sh',$data);
    }

    public function end()
    {
        $this->Home_model->save_sh();
        $this->load->view('end');
        $this->session->sess_destroy();
    }
}

/* End of file Home.php and path \application\controllers\Home.php */
