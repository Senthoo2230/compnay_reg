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
        $data['title'] = "#3 Company Type";
        if(!$this->session->userdata('user_id')){
            redirect('home');
        }
        $this->load->view('head',$data);
        $this->load->view('2nd_step');
    }

    public function company_details()
    {
        $data['title'] = "#3 Company Details";
        if(!$this->session->userdata('user_id')){
            redirect('home');
        }
        $this->load->view('head',$data);
        $this->load->view('3rd_step');
    }

    public function company_address()
    {
        if(!$this->session->userdata('user_id')){
            redirect('home');
        }
        $data['title'] = "#3 Company Address";
        $this->load->view('head', $data);
        $this->load->view('4th_step');
    }

    public function owner()
    {
        if(!$this->session->userdata('user_id')){
            redirect('home');
        }
        $data['title'] = "#3 Owners";
        $data['owners'] = $this->Home_model->get_owners();
        $data['owner_count'] = $this->Home_model->owner_count();

        $this->load->view('head', $data);
        $this->load->view('add_owner',$data);
    }

    public function second_step()
    {
        $type = $this->input->post('company_type');

        if ($this->Home_model->insert_type($type)) {
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
        $this->form_validation->set_rules('phone', 'Phone', 'required|numeric|max_length[10]', 
        array(
            'numeric' => 'Phone number must be in numbers',
            'max_length' => 'Enter valid phone number',
        ));
        $this->form_validation->set_rules('description', 'Business activity', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            // $this->load->view('head');
            // $this->load->view('3rd_step'); 
            $this->company_details();
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
            $this->company_address();
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
                $this->company_address();
            }

        }
    }

    public function add_owner()
    {
        $this->form_validation->set_rules('origin', 'Origin', 'required',
        array(
            'required' => 'Select your owner from'
        ));
        $this->form_validation->set_rules('identity', 'Identity', 'required');
        $this->form_validation->set_rules('fname', 'Firstname', 'required');
        $this->form_validation->set_rules('lname', 'Lastname', 'required');
        $this->form_validation->set_rules('percentage', 'Percentage', 'numeric|min_length[1]|max_length[2]',
    array(
        'numeric' => 'Percentage must be in numbers',
        'max_length' => 'Enter valid percentage',
    ));

        if ($this->form_validation->run() == FALSE){
            $this->owner(); 
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
        $data['title'] = "#3 Director";
        $data['directors'] = $this->Home_model->get_directors();
        $data['dir_count'] = $this->Home_model->dir_count();
        $this->Home_model->save_owners();

        $this->load->view('head', $data);
        $this->load->view('add_director',$data);
    }

    public function add_director()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('fname', 'Firstname', 'required');
        $this->form_validation->set_rules('lname', 'Lastname', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->director(); 
        }
        else{
            $title = $this->input->post('title');
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');

            if($this->Home_model->insert_director($title,$fname,$lname)){
                $this->director();
            }
            else{
                $this->director();
            }
        }
    }

    public function add_secretary()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('fname', 'Firstname', 'required');
        $this->form_validation->set_rules('lname', 'Lastname', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->secretary(); 
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
            $this->shareholders(); 
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
        $data['title'] = "#3 Secretary";
        $data['sec_count'] = $this->Home_model->sec_count();
        $data['secretary'] = $this->Home_model->get_secretary();

        $this->Home_model->save_directors();

        $this->load->view('head', $data);
        $this->load->view('add_secretary',$data);
    }

    public function shareholders()
    {
        if(!$this->session->userdata('user_id')){
            redirect('home');
        }
        $data['title'] = "#4 ShareHolders";

        $data['shs'] = $this->Home_model->get_sh();
        $this->Home_model->save_secretary();

        $this->load->view('head', $data);
        $this->load->view('add_sh',$data);
    }

    public function end()
    {
        if(!$this->session->userdata('user_id')){
            redirect('home');
        }

        $data['title'] = "End";
        $this->Home_model->save_sh();
        $this->load->view('head', $data);
        $this->load->view('end');
        
        $this->session->sess_destroy();
    }

    public function delete_owner($owner_id){
        $this->Home_model->delete_owner($owner_id);
        redirect('home/owner');
    }

    public function delete_director($dir_id){
        $this->Home_model->delete_dir($dir_id);
        redirect('home/director');
    }

    public function delete_secretary($sec_id){
        $this->Home_model->delete_sec($sec_id);
        redirect('home/secretary');
    }

    public function delete_sh($sh_id){
        $this->Home_model->delete_sh($sh_id);
        redirect('home/shareholders');
    }

    
}

/* End of file Home.php and path \application\controllers\Home.php */
