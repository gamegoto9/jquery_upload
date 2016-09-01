<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Upload extends CI_Controller {


    public function index() {
        $this->load->view('upload/upload');
    }


    function upload_file()
    {
        $post = $this->input->post();
        
        $config['upload_path']          = './assets/files/';
        $config['encrypt_name']                 = true;
        $config['allowed_types']        = 'jpg|png|pdf|mp4|3gp|avi|flv';
        $config['max_size']                         = '25000'; //25Mb

        $this->load->library('upload', $config);
        if($this->upload->do_upload('file'))
        {
            $file = $this->upload->data();
            $data = array('title'   => $file['orig_name'],
                'ext'       => $file['file_ext'],
                'size'      => $file['file_size'],
                'path'      => 'assets/files/'.$file['file_name'],
                );

            //Menyimpan Informasi File pada database;
            //$this->db->insert("tb_file",$data);
        }


    }

    function get_file()
    {
        $file = $this->db->select("*")
        ->from("tb_file")
        ->order_by("date","ASC")
        ->get();
        $html = "";
        foreach($file->result_array() as $row)
        {
            $html .= '<div class="list">

            <span class="list-title">'.$row['title'].'</span>
        </div>';
    }

    echo json_encode(array("content" => $html));
}

}