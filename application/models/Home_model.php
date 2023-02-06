<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Home_model extends CI_Model 
{
    public function insert_basic($email,$mobile)
    {
        $sql = "INSERT INTO users (email, mobile) VALUES ('$email','$mobile')";
        $result = $this->db->query($sql);
        return $result;
    }
    
    public function get_id($email,$mobile)
    {
        $sql = "SELECT id FROM users WHERE email = '$email' AND mobile = '$mobile'";
        $query = $this->db->query($sql);
        $row = $query->first_row();
        return $row->id;
    }

    public function insert_type($type)
    {
        $user_id = $this->session->user_id;

        $sql = "INSERT INTO user_company_type (user_id, type) VALUES ('$user_id','$type')";
        $result = $this->db->query($sql);
        return $result;
    }

    public function insert_company_details($name,$email,$phone,$des)
    {
        $user_id = $this->session->user_id;

        $sql = "INSERT INTO company_details (user_id, name, email, phone, description) VALUES ('$user_id','$name','$email','$phone','$des')";
        $result = $this->db->query($sql);
        return $result;
    }

    public function insert_company_address($line1,$line2,$district,$city,$postal,$ds,$gs)
    {
        $user_id = $this->session->user_id;

        $sql = "INSERT INTO company_address (user_id, line1, line2, district, city, postal, ds , gs) VALUES ('$user_id', '$line1', '$line2', '$district', '$city', '$postal','$ds','$gs')";
        $result = $this->db->query($sql);
        return $result;
    }

    public function insert_owner_from($owner_from)
    {
        $user_id = $this->session->user_id;

        $sql = "INSERT INTO owner_from (user_id,origin) VALUES ('$user_id','$owner_from')";
        $result = $this->db->query($sql);
        return $result;
    }

    public function insert_owner($origin,$identity,$fname,$lname,$percentage,$title)
    {
        $user_id = $this->session->user_id;

        $sql = "INSERT INTO owners 
        (user_id,origin,identity,firstname,lastname,percentage,title) 
        VALUES 
        ('$user_id','$origin','$identity','$fname','$lname','$percentage','$title')";
        $result = $this->db->query($sql);
        return $result;
    }

    public function insert_director($title,$fname,$lname)
    {
        $user_id = $this->session->user_id;

        $sql = "INSERT INTO directors 
        (user_id,title,firstname,lastname) 
        VALUES 
        ('$user_id','$title','$fname','$lname')";
        $result = $this->db->query($sql);
        return $result;
    }

    public function insert_secretary($title,$fname,$lname)
    {
        $user_id = $this->session->user_id;

        $sql = "INSERT INTO secretary 
        (user_id,title,firstname,lastname) 
        VALUES 
        ('$user_id','$title','$fname','$lname')";
        $result = $this->db->query($sql);
        return $result;
    }

    public function insert_sh($title,$fullname,$address,$email,$city,$state,$postal)
    {
        $user_id = $this->session->user_id;

        $sql = "INSERT INTO shareholders 
        (title,fullname,user_id,address,email,city,state,postal) 
        VALUES 
        ('$title','$fullname','$user_id','$address','$email','$city','$state','$postal')";
        $result = $this->db->query($sql);
        return $result;
    }

    public function get_owners()
    {
        $user_id = $this->session->user_id;
        $sql = "SELECT * FROM owners WHERE user_id = $user_id";
        $query = $this->db->query($sql);
        $result = $query->result();

        return $result;
    }

    public function get_directors()
    {
        $user_id = $this->session->user_id;
        $sql = "SELECT * FROM directors WHERE user_id = $user_id";
        $query = $this->db->query($sql);
        $result = $query->result();

        return $result;
    }

    public function get_secretary()
    {
        $user_id = $this->session->user_id;
        $sql = "SELECT * FROM secretary WHERE user_id = $user_id";
        $query = $this->db->query($sql);
        $result = $query->result();

        return $result;
    }

    public function get_sh()
    {
        $user_id = $this->session->user_id;
        $sql = "SELECT * FROM shareholders WHERE user_id = $user_id";
        $query = $this->db->query($sql);
        $result = $query->result();

        return $result;
    }

    public function save_owners()
    {
        $user_id = $this->session->user_id;
        $sql = "UPDATE owners
        SET status = 1
        WHERE user_id = $user_id";
        $this->db->query($sql);
    }

    public function save_directors()
    {
        $user_id = $this->session->user_id;
        $sql = "UPDATE directors
        SET status = 1
        WHERE user_id = $user_id";
        $this->db->query($sql);
    }

    public function save_secretary()
    {
        $user_id = $this->session->user_id;
        $sql = "UPDATE secretary
        SET status = 1
        WHERE user_id = $user_id";
        $this->db->query($sql);
    }

    public function save_sh()
    {
        $user_id = $this->session->user_id;
        $sql = "UPDATE shareholders
        SET status = 1
        WHERE user_id = $user_id";
        $this->db->query($sql);
    }

    public function owner_count()
    {
        $user_id = $this->session->user_id;
        $sql = "SELECT id
        FROM owners
        WHERE user_id = $user_id";
        $query = $this->db->query($sql);
        $count = $query->num_rows();

        return $count;
    }

    public function delete_owner($owner_id)
    {
        $sql = "DELETE FROM owners WHERE id = $owner_id";
        $this->db->query($sql);
    }

    public function dir_count()
    {
        $user_id = $this->session->user_id;
        $sql = "SELECT id
        FROM directors
        WHERE user_id = $user_id";
        $query = $this->db->query($sql);
        $count = $query->num_rows();

        return $count;
    }

    public function delete_dir($dir_id)
    {
        $sql = "DELETE FROM directors WHERE id = $dir_id";
        $this->db->query($sql);
    }

    public function sec_count()
    {
        $user_id = $this->session->user_id;
        $sql = "SELECT id
        FROM secretary
        WHERE user_id = $user_id";
        $query = $this->db->query($sql);
        $count = $query->num_rows();

        return $count;
    }

    public function delete_sec($sec_id)
    {
        $sql = "DELETE FROM secretary WHERE id = $sec_id";
        $this->db->query($sql);
    }

    public function delete_sh($sh)
    {
        $sql = "DELETE FROM shareholders WHERE id = $sh";
        $this->db->query($sql);
    }

    public function owner_data($id)
    {
        $sql = "SELECT * FROM owners WHERE id = $id LIMIT 1";
        $query = $this->db->query($sql);
        $row = $query->first_row();
        return $row;

    }

    public function get_districts()
    {
        $sql = "SELECT * FROM district";
        $query = $this->db->query($sql);
        $result = $query->result();

        return $result;
    }

    public function get_postal()
    {
        $sql = "SELECT * FROM postal_code ORDER BY code";
        $query = $this->db->query($sql);
        $result = $query->result();

        return $result;
    }

    public function cities($dis_id)
    {
        $sql = "SELECT * FROM cities WHERE district_id = $dis_id";
        $query = $this->db->query($sql);
        $result = $query->result();

        return $result;
    }

    public function ds_divisions($city_id)
    {
        $sql = "SELECT * FROM ds_divisions WHERE city_id = $city_id";
        $query = $this->db->query($sql);
        $result = $query->result();

        return $result;
    }

    public function gn_divisions($ds_id)
    {
        $sql = "SELECT * FROM gn_divisions WHERE ds_id = $ds_id";
        $query = $this->db->query($sql);
        $result = $query->result();

        return $result;
    }

    public function check_owner($identity){
        $user_id = $this->session->user_id;
        $sql = "SELECT *
        FROM owners
        WHERE user_id = $user_id AND identity = '$identity'";
        $query = $this->db->query($sql);
        $count = $query->num_rows();

        if ($count == 0) {
            return TRUE;
        }
        else{
            $this->form_validation->set_message('check_owner', 'Owner already is in!');
            return FALSE;
        }
    }

    public function check_director($title,$fname,$lname)
    {
        $user_id = $this->session->user_id;
        $sql = "SELECT *
        FROM directors
        WHERE user_id = $user_id AND title = '$title' AND firstname = '$fname' AND lastname = '$lname'";
        $query = $this->db->query($sql);
        $count = $query->num_rows();
        return $count;
    }

    public function percentage_sum()
    {
        $user_id = $this->session->user_id;
        $sql = "SELECT sum(percentage) as per FROM owners WHERE user_id = $user_id";
        $query = $this->db->query($sql);
        $row = $query->row();

        return $row->per;
    }

    public function company_data()
    {
        $user_id = $this->session->user_id;
        $sql = "SELECT * FROM company_details WHERE user_id = $user_id";
        $query = $this->db->query($sql);
        $row = $query->row();

        return $row;
    }

    public function address_data()
    {
        $user_id = $this->session->user_id;
        $sql = "SELECT * FROM company_address WHERE user_id = $user_id";
        $query = $this->db->query($sql);
        $row = $query->row();

        return $row;
    }
    
    public function confirm_user(){
        $user_id = $this->session->user_id;
        $sql = "UPDATE users
        SET confirm = 1
        WHERE id = $user_id";
        $this->db->query($sql);
    }

    
          
}


/* End of file Home_model.php and path \application\models\Home_model.php */
