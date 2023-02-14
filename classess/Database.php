<?php
    # Define the class
    class Database{
        # Definr the connection properties
        private $db_server_name ="localhost"; // 124.0.0.1 
        private $db_username = "root"; //default
        private $db_password = ""; // default in XAMMP it empty, in MAMP = 'roop'
        private $database_name = "the_company";
        protected $conn;

            # Define constructor
            public function __construct(){
                $this->conn = new mysqli($this->db_server_name, $this->db_username, $this->db_password, $this->database_name);


            if($this->conn->connect_error){
                die("Unable to connect the database. " . $this->conn->connect_error);
            }
        }
    }
?>
