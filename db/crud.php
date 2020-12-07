<?php
    class crud
    {
        private $db;

        function __construct($conn)
        {
            $this->db = $conn;
        }

        public function insertUsers($username, $email, $password){
            try 
            {
                $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES (:username, :email, :password)";
                                
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':username',$username);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':password',$password);
                $stmt->execute();

                return true;
            }
            catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        } 

        public function insertListItem($user_id){
            try 
            {
                $sql = "INSERT INTO `lists`(`name`, `users_id`) VALUES (:name,:user_id)";
                                
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':user_id',$user_id);
                $stmt->execute();

                return true;
            }
            catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        } 

        public function getList($user_id){
            try
            {
                $sql = "SELECT * FROM lists l INNER JOIN users u ON l.users_id = u.id where u.id = :user_id";  //FIX THIS KAREEM
                $result = $this->db->query($sql);

                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':user_id', $user_id);
                // $stmt->bindparam(':name', $name);


                return $result;
            }
            catch (PDOException $e) 
            {
                echo $e->getMessage();
                return false;
            }
        }

        // public function getSpecialties(){
        //     try
        //     {
        //         $sql = "SELECT * FROM specialties";
        //         $result = $this->db->query($sql);

        //         return $result;
        //     }
        //     catch (PDOException $e) 
        //     {
        //         echo $e->getMessage();
        //         return false;
        //     }
        // }

        // public function getAttendeeDetails($id){
        //     try
        //     {
        //         $sql = "SELECT * FROM attendee a INNER JOIN specialties s 
        //         ON a.specialty_id = s.specialty_id WHERE attendee_id = :id";

        //         $stmt = $this->db->prepare($sql);
        //         $stmt->bindparam(':id', $id);
        //         $stmt->execute();
        //         $result = $stmt->fetch();

        //         return $result;
        //     }
        //     catch (PDOException $e) 
        //     {
        //         echo $e->getMessage();
        //         return false;
        //     }
        // }

        public function editList($id, $name, $user_id){
            try
            {
                $sql = "UPDATE `lists` SET `name`= :name WHERE :user_id";    
                // $sql = "UPDATE attendee SET firstname=:fname,lastname=:lname,dateofbirth=:dob,
                // emailaddress=:email,contactnumber=:contact,specialty_id=:specialty WHERE attendee_id = :id";
                
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':name',$name);
                $stmt->bindparam(':user_id',$user_id);


                $stmt->execute();

                return true;
            }
            catch (PDOException $e) 
            {
                echo $e->getMessage();
                return false;
            }
        }

        // public function deleteAttendee($id){
        //     try
        //     {
        //         $sql = "DELETE FROM attendee WHERE attendee_id = :id";
        //         $stmt = $this->db->prepare($sql);
        //         $stmt->bindparam(':id',$id);
        //         $stmt->execute();
        //         return true;
        //     }
        //     catch (PDOException $e) 
        //     {
        //         echo $e->getMessage();
        //         return false;
        //     }
        // }
    }
?>