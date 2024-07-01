<?php
    namespace Class\Connection;
    use \Exception;
    use \PDO;
use PDOException;

    class PDOConnection 
    {
        private $_hostname = "";
        private $_username = "";
        private $_password = "";
        private $_databaseName = "";
        private $_typeDatabase = "MYSQL";
        public $pdo;

        public function __construct($connectionStatus = false)
        {
            if($connectionStatus == false):
                return;
            else:
                switch ($this->_typeDatabase) {
                    case 'MYSQL':
                            $this->OpenConnectionMysql();
                        break;
                    case 'SQLSERVER':
                            $this->OpenConnectionSQLSERVER();
                        break;
                    default:
                        try {
                            throw new Exception("Not in mysql and sql server", 1);
                        } catch (\Throwable $err) {
                            echo "Error : ".$err->getMessage();
                        }
                          
                    break;
                }
    
            endif;
         
        }
        public function OpenConnectionMysql() {
           try {
            $pdo = new PDO("mysql:host=$this->_hostname;dbname=$this->_username;",$this->_username,$this->_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
            throw new Exception("Error Processing Request", 1);
           } catch (\Throwable $err) {
                echo  $err->getMessage();
           } 
        }
        public function OpenConnectionSQLSERVER() {
            try {
             $pdo = new PDO("mysql:host=$this->_hostname;dbname=$this->_username;",$this->_username,$this->_password);
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $this->pdo = $pdo;
             throw new Exception("Error Processing Request", 1);
            } catch (PDOException $err) {
                 echo  $err->getMessage();
            } 
         }
    }
?>
