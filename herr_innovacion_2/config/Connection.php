<?php

require_once('Constant.php');
require_once('UtilsMethod.php');

class Connection
{

    private $db;

    public function __construct()
    {

        try {
            $conn = new PDO("mysql:host=" . Constant::DB_SERVER . ";dbname=" . Constant::DB_NAME . ";charset=utf8", Constant::DB_USER, Constant::DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {

            echo 'Error de conn: ' . $e->getMessage();
        }
        $this->db = $conn;
    }



    public function getArrayData($sql)
    {
        try {
            $results = $this->db->prepare($sql);
            $results->execute(); //= $this->db->query($sql);
            $data = $results->fetchAll(PDO::FETCH_OBJ);
            //UtilsMethod::utf8_encode_deep($data); 
            return array(
                "status" => 200,
                "message" => "Done",
                "data" => $data
            );
        } catch (PDOException $e) {
            return array(
                "status" => 500,
                "message" => $e->getMessage(),
                "data" => array()
            );
        }
    }

    public function setExecute($sql)
    {
        try {
            $results = $this->db->prepare($sql);
            $res = $results->execute();

            if ($res) {
                return array(
                    "status" => 200,
                    "message" => "Done",
                    "data" => true
                );
            } else {
                return array(
                    "status" => 200,
                    "message" => "Done",
                    "data" => false
                );
            }
        } catch (PDOException $e) {
            return array(
                "status" => 500,
                "message" => $e->getMessage(),
                "data" => false
            );
        }
    }
}
