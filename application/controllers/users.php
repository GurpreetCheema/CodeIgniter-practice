<?php
class Users extends CI_controller {

    public function User()
    {
        $this->load->model ('Usermodel');
        $data['users']=$this->Usermodel->getUserdata();
        $this->load->view ('Users/userlist',$data);
    }

}
?>