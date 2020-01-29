<?php
 if ( ! defined('BASEPATH')) exit(header('Location:../'));
class register extends CI_controller
{
  function __construct()
  {
   parent:: __construct();
   // error_reporting(0);
   if($this->session->userdata('admin/v_register') != TRUE){
     redirect(base_url(''));
     exit;
  };
   $this->load->model('m_register');
  }

  public function index()
  {
      $x = array('judul' =>'Halaman v_register');
      /*$table_to_count = ['pegawai','']
      for ($i=0; $i <=count($table_to_count) ; $i++) { 
        $count_data[i]=$this->m_admin->count_data($table);
      }*/
      tpl('admin/home',$x); 
  }
}