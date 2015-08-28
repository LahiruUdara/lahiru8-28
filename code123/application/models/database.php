<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class database extends CI_Model 
{

    function __construct() 
    {
        parent::__construct();
        //loading model
        $this->load->database();
    }

    function login($email, $password) 
    {
        try 
        {
            $sql = "select name from login1 where email=? and password=?";
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->bindParam(1, $email);
            $stmt->bindParam(2, $password);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } 
        catch (Exception $ex) 
        {
            return null;
        }
    }

}

?>
