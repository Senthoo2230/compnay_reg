<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        /*load Model*/
        $this->load->model('Home_model');
    }

    public function index()
    {
        $data['title'] = "1 First Step – #360 Consultations";
        $this->load->view('head', $data);
        $this->load->view('home_new',$data);
    }
    public function getStart()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]',
            array('is_unique' => 'Email ID is already registered!')
        );
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|numeric|min_length[9]|max_length[10]',
            array(
                'min_length' => 'Enter a valid Mobile number!',
                'max_length' => 'Enter a valid Mobile number!',
                'numeric' => 'Enter a valid Mobile number!'
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');

            if ($this->Home_model->insert_basic($email, $mobile)) {
                // Success
                $id = $this->Home_model->get_id($email, $mobile);
                $this->session->set_userdata('user_id', $id);

                // Second Step
                redirect('home/company_type');
            } else {
                // Not Inserted
                $this->index();
            }
        }
    }

    public function company_type()
    {
        $data['title'] = "#3 Company Type";
        if (!$this->session->userdata('user_id')) {
            redirect('home');
        }
        $data['type_is'] = $this->Home_model->is_company_type();
        $data['type_data'] = $this->Home_model->company_type_data();

        $this->load->view('head', $data);
        $this->load->view('2nd_step',$data);
    }

    public function blank()
    {
        $data['title'] = "blank";
        $this->load->view('head', $data);
        $this->load->view('blank');
    }

    public function company_details()
    {
        $data['title'] = "#3 Company Details";
        
        if (!$this->session->userdata('user_id')) {
            redirect('home');
        }

        $data['detail_is'] = $this->Home_model->detail_is();
        $data['detail_data'] = $this->Home_model->company_detail_data();

        $this->load->view('head', $data);
        $this->load->view('3rd_step',$data);
    }

    public function company_address()
    {
        if (!$this->session->userdata('user_id')) {
            redirect('home');
        }

        $data['address_is'] = $this->Home_model->address_is();
        $data['address_data'] = $this->Home_model->company_address_data();
        $data['districts'] = $this->Home_model->get_districts();
        $data['postals'] = $this->Home_model->get_postal();

        $data['title'] = "#3 Company Address";
        $this->load->view('head', $data);

        $this->load->view('4th_step');
    }

    public function owner()
    {
        if (!$this->session->userdata('user_id')) {
            redirect('home');
        }
        $data['title'] = "#3 Owners";
        $data['owners'] = $this->Home_model->get_owners();
        $data['owner_count'] = $this->Home_model->owner_count();

        $this->load->view('head', $data);
        $this->load->view('add_owner', $data);
    }

    public function second_step($action)
    {
        $type = $this->input->post('company_type');

        if ($this->Home_model->insert_type($type,$action)) {
            // Third Step
            redirect('home/company_details');
        } else {
            // Stay here
            redirect('home/company_type');
        }
    }

    //Company Details
    public function third_step($action)
    {
        $this->form_validation->set_rules('company_name', 'Company Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules(
            'phone',
            'Phone',
            'required|numeric|max_length[10]',
            array(
                'numeric' => 'Phone number must be in numbers',
                'max_length' => 'Enter valid phone number',
            )
        );

        if ($this->form_validation->run() == FALSE) {
            // $this->load->view('head');
            // $this->load->view('3rd_step'); 
            $this->company_details();
        } else {
            $name = $this->input->post('company_name');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $description = $this->input->post('description');

            if ($this->Home_model->insert_company_details($name, $email, $phone, $description,$action)) {
                // 4th Step
                redirect('home/company_address');
            } else {
                // Not Inserted
                $this->load->view('company_details');
            }
        }
    }

    // Company Address
    public function fourth_step($action)
    {
        $this->form_validation->set_rules('line1', 'Address Line 1', 'required');
        $this->form_validation->set_rules('district', 'District', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('postal', 'Postal Code', 'required');
        $this->form_validation->set_rules('ds', 'DS Division', 'required');
        $this->form_validation->set_rules('gs', 'GS Division', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->company_address();
        } else {
            $line1 = $this->input->post('line1');
            $line2 = $this->input->post('line2');
            $district = $this->input->post('district');
            $city = $this->input->post('city');
            $postal = $this->input->post('postal');
            $ds = $this->input->post('ds');
            $gs = $this->input->post('gs');


            if ($this->Home_model->insert_company_address($line1, $line2, $district, $city, $postal, $ds, $gs, $action)) {
                // 5th Step
                redirect('home/owner');
            } else {
                // Not Inserted
                $this->company_address();
            }
        }
    }

    public function add_owner()
    {
        $this->form_validation->set_rules(
            'origin',
            'Origin',
            'required',
            array(
                'required' => 'Select your owner from'
            )
        );
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('identity', 'Identity', 'required|callback_check_owner');
        $this->form_validation->set_rules('fname', 'Firstname', 'required');
        $this->form_validation->set_rules('lname', 'Lastname', 'required');
        $this->form_validation->set_rules(
            'percentage',
            'Percentage',
            'numeric|min_length[1]|max_length[2]|callback_sum_of_percentage',
            array(
                'numeric' => 'Percentage must be in numbers',
                'max_length' => 'Enter valid percentage',
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->owner();
        } else {
            $origin = $this->input->post('origin');
            $title = $this->input->post('title');
            $identity = $this->input->post('identity');
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $percentage = $this->input->post('percentage');

            if ($this->Home_model->insert_owner($origin, $identity, $fname, $lname, $percentage, $title)) {
                redirect('home/owner');
            } else {
                redirect('home/owner');
            }
        }
    }

    public function check_owner()
    {
        $identity = $this->input->post('identity');
        $is_unique = $this->Home_model->check_owner($identity);
        return $is_unique;
    }

    public function sum_of_percentage()
    {
        $current_per = $this->input->post('percentage');
        $sum = $this->Home_model->percentage_sum();
        if ($sum+$current_per > 100) {
            $this->form_validation->set_message('sum_of_percentage', 'Total percentage cannot exits more than 100%');
            return FALSE;
        }
        else{
            return TRUE;
        }
        
    }

    public function director()
    {
        if (!$this->session->userdata('user_id')) {
            redirect('home');
        }
        $data['title'] = "#3 Director";
        $data['directors'] = $this->Home_model->get_directors();
        $data['owners'] = $this->Home_model->get_owners();
        $data['dir_count'] = $this->Home_model->dir_count();

        $this->Home_model->save_owners();

        $this->load->view('head', $data);
        $this->load->view('add_director', $data);
    }

    public function add_director()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('fname', 'Firstname', 'required');
        $this->form_validation->set_rules('lname', 'Lastname', 'required');
        $this->form_validation->set_rules('check_dir', 'Director', 'callback_check_dir');

        if ($this->form_validation->run() == FALSE) {
            $this->director();
        } else {
            $title = $this->input->post('title');
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');

            if ($this->Home_model->insert_director($title, $fname, $lname)) {
                $this->director();
            } else {
                $this->director();
            }
        }
    }

    public function check_dir()
    {
        $title = $this->input->post('title');
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $dir = $this->Home_model->check_director($title,$fname,$lname);
        if ($dir == 0) {
            return TRUE;
        }
        else{
            $this->form_validation->set_message('check_dir', 'Director already is in!');
            return FALSE;
        }
    }

    public function add_secretary()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('fname', 'Firstname', 'required');
        $this->form_validation->set_rules('lname', 'Lastname', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->secretary();
        } else {
            $title = $this->input->post('title');
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');

            if ($this->Home_model->insert_secretary($title, $fname, $lname)) {
                redirect('home/secretary');
            } else {
                redirect('home/secretary');
            }
        }
    }

    public function add_sh()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_sh');
        $this->form_validation->set_rules('city', 'City', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->shareholders();
        } else {
            $title = $this->input->post('title');
            $fullname = $this->input->post('fullname');
            $address = $this->input->post('address');
            $email = $this->input->post('email');
            $city = $this->input->post('city');
            $state = $this->input->post('state');
            $postal = $this->input->post('postal');

            if ($this->Home_model->insert_sh($title, $fullname, $address, $email, $city, $state, $postal)) {
                redirect('home/shareholders');
            } else {
                redirect('home/shareholders');
            }
        }
    }

    public function check_sh(){
        $email = $this->input->post('email');
        $shs = $this->Home_model->check_sh($email);
        if ($shs == 0) {
            return TRUE;
        }
        else{
            $this->form_validation->set_message('check_sh', 'Shareholder already is in!');
            return FALSE;
        }
    }

    

    public function secretary()
    {
        if (!$this->session->userdata('user_id')) {
            redirect('home');
        }
        $data['title'] = "#3 Secretary";
        $data['sec_count'] = $this->Home_model->sec_count();
        $data['owners'] = $this->Home_model->get_owners();
        $data['secretary'] = $this->Home_model->get_secretary();

        $this->Home_model->save_directors();

        $this->load->view('head', $data);
        $this->load->view('add_secretary', $data);
    }

    public function shareholders()
    {
        if (!$this->session->userdata('user_id')) {
            redirect('home');
        }
        $data['title'] = "#4 ShareHolders";

        $data['shs'] = $this->Home_model->get_sh();
        $this->Home_model->save_secretary();

        $this->load->view('head', $data);
        $this->load->view('add_sh', $data);
    }

    public function end()
    {
        if (!$this->session->userdata('user_id')) {
            redirect('home');
        }

        $data['title'] = "End";
        $this->Home_model->confirm_user();
        $this->load->view('head', $data);
        $this->load->view('end');

        $this->session->sess_destroy();
    }

    public function delete_owner($owner_id)
    {
        $this->Home_model->delete_owner($owner_id);
        redirect('home/owner');
    }

    public function delete_director($dir_id)
    {
        $this->Home_model->delete_dir($dir_id);
        redirect('home/director');
    }

    public function delete_secretary($sec_id)
    {
        $this->Home_model->delete_sec($sec_id);
        redirect('home/secretary');
    }

    public function delete_sh($sh_id)
    {
        $this->Home_model->delete_sh($sh_id);
        redirect('home/shareholders');
    }

    public function owner_data()
    {
        $owner_id = $this->input->post('owner_id');
        $owner = $this->Home_model->owner_data($owner_id);

?>
        <div class="col-md-3">
            <input type="text" name="title" value="<?php echo $owner->title; ?>" class="form-control">
        </div>
        <div class="col-md-3">
            <input type="text" name="fname" value="<?php echo $owner->firstname; ?>" class="form-control">
        </div>
        <div class="col-md-3">
            <input type="text" name="lname" value="<?php echo $owner->lastname; ?>" class="form-control">
        </div>
        <div class="col-md-3">
            <?php
            $sec = $owner_id = $this->input->post('sec');
            if ($sec == 1) {
                ?>
                    <input type="submit" class="btn btn-primary w-100" value="Add Secretary">
                <?php
            }
            else{
                ?>
                <input type="submit" class="btn btn-primary w-100" value="Add Director">
                <?php
            }
            ?>
            
        </div>
        <?php
    }

    public function get_cities()
    {
        $dis_id = $this->input->post('dis_id');
        $cities = $this->Home_model->cities($dis_id);

        echo "<option value=''>Select City</option>";
        foreach ($cities as $city) {
        ?>
            <option value="<?php echo $city->city_id; ?>"><?php echo $city->city; ?></option>
        <?php
        }
    }

    public function get_ds()
    {
        $city_id = $this->input->post('city_id');
        $ds = $this->Home_model->ds_divisions($city_id);
        echo "<option value=''>Select DS Division</option>";
        foreach ($ds as $d) {
        ?>
            <option value="<?php echo $d->ds_id; ?>"><?php echo $d->ds; ?></option>
        <?php
        }
    }

    public function get_gn()
    {
        $ds_id = $this->input->post('ds_id');
        $gn = $this->Home_model->gn_divisions($ds_id);
        echo "<option value=''>Select GN Division</option>";
        foreach ($gn as $g) {
        ?>
            <option value="<?php echo $g->gs_id; ?>"><?php echo $g->gs; ?></option>
        <?php
        }
    }

    public function confirm()
    {
        if (!$this->session->userdata('user_id')) {
            redirect('home');
        }
            $data['company_data'] = $this->Home_model->company_data();
            $data['address_data'] = $this->Home_model->address_data();
            $data['owners'] = $this->Home_model->get_owners();
            $data['directors'] = $this->Home_model->get_directors();
            $data['secretary'] = $this->Home_model->get_secretary();
            $data['shs'] = $this->Home_model->get_sh();
            $data['title'] = "Confirm";
        //$this->Home_model->save_sh();
        $this->load->view('head', $data);
        $this->load->view('confirm');
    }

    public function out()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}

/* End of file Home.php and path \application\controllers\Home.php */
