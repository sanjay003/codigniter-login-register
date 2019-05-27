<?php
class User extends CI_Model{

public function UserInsert(){
$data = array(
'name' => $this->input->post('name'),
'email' => $this->input->post('email'),
'password' => $this->input->post('password')
);
$this->db->insert('users',$data);
}

}


?>