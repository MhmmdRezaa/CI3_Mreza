<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
    public function simpan()
    {
        $data = $this->input->post();
        if(!empty($data)){
            return $this->db->insert('data_siswa', $data);
        }
    }


    public function edit($id)
    {
        $data=$this->input->post();
        if(!empty($data)){
            return $this->db->update('data_user', $data, ['id'=>$id]);
        }

    }

    public function getUser()
    {
        $nama = $this->input->get('username');
        if(!empty($nama)){
            return $this->db->query('SELECT * FROM data_user WHERE username LIKE ?','%'.$nama.'%')->result_array();
        }else{
            return $this->db->get('data_user')->result_array();
        } 
    }
    public function getData($id)
    {
        return $this->db->get_where('data_user', ['id'=>$id])->row_array();
    }
    public function delete($id)
    {
        return $this->db->delete('data_user', ['id'=>$id]);
    }
}
