<?php
    class crud
    {
        private $db;

        function __construct($conn)
        {
            $this->db = $conn;
        }

        public function insertListItem($name, $user_id){
            try 
            {
                $sql = "INSERT INTO `lists`(`name`, `users_id`) VALUES (:name,:user_id)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':name',$name);
                $stmt->bindparam(':user_id',$user_id);
                $stmt->execute();
                return true;
            }
            catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        } 

        public function getList($users_id){
            try
            {
                $sql = "SELECT * FROM `lists` WHERE users_id = :users_id";
                $result = $this->db->prepare($sql);
                $result->bindparam(':users_id', $users_id);
                $result->execute();
                return $result;
            }
            catch (PDOException $e) 
            {
                echo $e->getMessage();
                return false;
            }
        }

        public function getListbyId($id){
            try
            {
                $sql = "SELECT * FROM `lists` WHERE id = :id";
                $result = $this->db->prepare($sql);
                $result->bindparam(':id', $id);
                $result->execute();
                return $result;
            }
            catch (PDOException $e) 
            {
                echo $e->getMessage();
                return false;
            }
        }

        public function editList($id, $name, $users_id){
            try
            {
                $sql = "UPDATE `lists` SET `name` = :name, users_id = :users_id WHERE `lists`.`id` = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':name',$name);
                $stmt->bindparam(':users_id',$users_id);
                $stmt->execute();
                return true;
            }
            catch (PDOException $e) 
            {
                echo $e->getMessage();
                return false;
            }
        }

        public function deleteListItem($id){
            try
            {
                $sql = "DELETE FROM lists WHERE id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                return true;
            }
            catch (PDOException $e) 
            {
                echo $e->getMessage();
                return false;
            }
        }
    }
?>