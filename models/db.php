<?php
	class Database{
        //DB Params
        private $host = 'lallah';
        private $db_name = 'Run-project';
        private $username = 'liqxegml';
        private $password = 'QvoBlP5rv3Yqj-q6MvSRxadf-H00OHD4';
        private $conn;

        public function connect(){
            $this->conn = null;

            try{
                $this->conn= new PDO('pgsql:host=' . $this->host . ';dbname= ' . $this->db_name, $this->username, $this->password);
                if ($conn){
                    echo "connected to db";
                }
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            }
            catch(PDOException $e){
                echo 'Connection failed: ' . $e->getMessage();
            }
            return $this->conn;
        }
    }
?>