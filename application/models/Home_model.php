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

    public function insert_owner($origin,$identity,$fname,$lname,$percentage)
    {
        $user_id = $this->session->user_id;

        $sql = "INSERT INTO owners 
        (user_id,origin,identity,firstname,lastname,percentage) 
        VALUES 
        ('$user_id','$origin','$identity','$fname','$lname','$percentage')";
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

    public function insert_sh($address,$email,$city,$state,$postal)
    {
        $user_id = $this->session->user_id;

        $sql = "INSERT INTO shareholders 
        (user_id,address,email,city,state,postal) 
        VALUES 
        ('$user_id','$address','$email','$city','$state','$postal')";
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
                    
}


/* End of file Home_model.php and path \application\models\Home_model.php */