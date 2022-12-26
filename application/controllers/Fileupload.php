<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fileupload extends CI_Controller {
function __construct()
{
    parent::__construct();
  
$this->load->model('Fileupload_model');
}

function index()
{
    $this->load->view('files');

}
function imgupload()
{
    header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
    // print_r($_FILES['file']['name']);die;
    $uploadPath = 'assets/upload/'; 
    $config['upload_path'] = $uploadPath; 
    $config['allowed_types'] = '*'; 
    $this->load->library('upload', $config); 
    $this->upload->initialize($config); 


    if($this->upload->do_upload('file')){ 
        // exit('shshs');
        $fileData = $this->upload->data(); 
        $uploadData['file_name'] = $fileData['file_name']; 
        $uploadData['created'] = date("Y-m-d H:i:s"); 
        //  print_r($uploadData);die;
        $insert = $this->Fileupload_model->insert($uploadData); 
    } 


  
}
}
