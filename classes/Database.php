<?php
    class Database{
        private $server_name = "localhost";
        private $username = "root";
        private $password = "root";
        private $db_name = "the_company";
        protected $conn;

        #Define constructor
        public function __construct(){
            $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);

            #check the connection for any error
            if ($this->conn->connect_error)
                #if there is an error
                die("Unable to connect to the database: " . $this->conn->connect_error);
        }
}