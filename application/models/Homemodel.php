<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Homemodel extends CI_Model
{
    
    /**
     * This function used to check the login credentials of the user
     * @param string $email : This is email of the user
     * @param string $password : This is encrypted password of the user
     */
    public function select_with_where($table,$where,$data){
        $sql =  $this->db->select($data)
                         ->where($where)
                         ->get($table);
           if ($sql) {
             return $sql->result_array();
           }
           else{
             return false;
           }    
       }
           public function insert($table,$data){
           $sql =  $this->db->insert($table,$data);
           if ($sql) {
                 return true;
               }else{
                 return false;
               }  
         }
         //update data data into any table  
         public function update($table,$where,$data){
           $sql = $this->db->where($where)
                           ->update($table,$data);
     
           if ($sql) {
                 return true;
               }else{
                 return false;
               }  
         }
         public function delete($table,$where){
           $sql = $this->db->where($where)
                           ->delete($table);
              if ($sql) {
                 return true;
               }else{
                 return false;
               }               
         }
         public function fetch_row_array($table,$where,$data){
        $sql =  $this->db->select($data)
                         ->where($where)
                         ->get($table);
           if ($sql) {
             return $sql->row_array();
           }
           else{
             return false;
           }    
       }
        public function fetch_with_limit($table,$where,$data,$limit){
        $sql =  $this->db->select($data)
                ->where($where)
                ->limit($limit)
                ->order_by("id","DESC")
                ->get($table);
                //->result_array()
                        
           if ($sql) {
             return $sql->result_array();
           }
           else{
             return false;
           }
       }
}

?>