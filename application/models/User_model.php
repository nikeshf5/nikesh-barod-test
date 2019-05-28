<?php
class User_model extends CI_Model{
  function __construct() {
     parent::__construct();             
  }

    public function getData() {
       $query = $this->db->order_by('job_date', 'DESC')->get('users')->result();
       return $query;
    }

    public function getJobCount() {       
      $getJobCount = $this->db->query("SELECT * FROM `users`")->num_rows();
      return $getJobCount;
    }

    public function getSingleJobData($id) {       
      $JobData=$this->db->where('id',$id)->get('users')->row();
      return $JobData;
    }

    public function updateJob($id,$data) {       
      $JobUpdate=$this->db->where('id',$id)->update('users',$data);
      return $JobUpdate;
    }

    public function createJob($data) {       
      $JobCreate=$this->db->insert('users',$data);
      return $JobCreate;
    }

    public function DeleteJob($id) {       
      $Delete=$this->db->where('id',$id)->delete('users');
      return $Delete;
    }
    
    public function activeDactive($id) {
      $act=$this->db->query('UPDATE users
      SET status = CASE status WHEN 0 THEN 1 WHEN 1 THEN 0 END WHERE id ='.$id.'');
      return $act;
    }
}