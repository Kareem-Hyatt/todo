<?php
    class user
    {
        private $db;

        function __construct($conn)
        {
            $this->db = $conn;
        }

        public function insertUsers($username, $email, $password, $avatar_path){
            try 
            {
                $result = $this->getUserByUsername($username);
                if($result['num']>0)
                {
                    return false;
                }
                else
                {
                    $new_password = md5($password.$username);
                    $sql = "INSERT INTO `users` (`username`, `email`, `password`, `avatar_path`) VALUES (:username, :email, :password, :avatar_path)";               
                    $stmt = $this->db->prepare($sql);
                    $stmt->bindparam(':username',$username);
                    $stmt->bindparam(':email',$email);
                    $stmt->bindparam(':password',$new_password);
                    $stmt->bindparam(':avatar_path',$avatar_path);
                    $stmt->execute();
                    return true;
                }
            }
            catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        } 

        public function getUser($username, $password){
            try
            {
                $sql = "SELECT * FROM users where username = :username AND password = :password"; 
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':username', $username);
                $stmt->bindparam(':password', $password);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }
            catch (PDOException $e) 
            {
                echo $e->getMessage();
                return false;
            }
        }

        public function getUserByUsername($username){
            try
            {
                $sql = "SELECT COUNT(*) AS num FROM users where username = :username"; 
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':username', $username);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }
            catch (PDOException $e) 
            {
                echo $e->getMessage();
                return false;
            }
        }

        public function getUserById($id){
            try
            {
                $sql = "SELECT * FROM `users` WHERE id = :id"; 
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }
            catch (PDOException $e) 
            {
                echo $e->getMessage();
                return false;
            }
        }

        public function editProfile($id, $username, $email, $avatar_path){
            try
            {
                $sql = "UPDATE `users` SET `username`= :username, `email`= :email, `avatar_path`= :avatar_path WHERE id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':username',$username);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':avatar_path',$avatar_path);
                $stmt->execute();
                return true;
            }
            catch (PDOException $e) 
            {
                echo $e->getMessage();
                return false;
            }
        }

        public function deleteProfile($id){
            try
            {
                $sql = "DELETE FROM `users` WHERE `id` = :id";
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