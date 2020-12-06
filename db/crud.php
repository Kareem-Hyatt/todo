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

        public function getList(){
            try
            {
                $sql = "SELECT * FROM lists l INNER JOIN users u ON l.users_id = u.id where u.id = 1";  
                //  $sql = "SELECT * FROM users u INNER JOIN lists l ON l.users_id = l.users_id WHERE username = :username";
                $result = $this->db->query($sql);

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

        // public function editAttendee($id, $fname, $lname, $dob, $email, $contact, $specialty){
        //     try
        //     {
        //         $sql = "UPDATE attendee SET firstname=:fname,lastname=:lname,dateofbirth=:dob,
        //         emailaddress=:email,contactnumber=:contact,specialty_id=:specialty WHERE attendee_id = :id";
                
        //         $stmt = $this->db->prepare($sql);

        //         $stmt->bindparam(':id',$id);
        //         $stmt->bindparam(':fname',$fname);
        //         $stmt->bindparam(':lname',$lname);
        //         $stmt->bindparam(':dob',$dob);
        //         $stmt->bindparam(':email',$email);
        //         $stmt->bindparam(':contact',$contact);
        //         $stmt->bindparam(':specialty',$specialty);

        //         $stmt->execute();

        //         return true;
        //     }
        //     catch (PDOException $e) 
        //     {
        //         echo $e->getMessage();
        //         return false;
        //     }
        // }

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