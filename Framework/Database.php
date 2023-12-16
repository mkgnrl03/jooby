<?php
    namespace Framework;
    use PDO, PDOException, Exception;
  
    class Database {
        public $conn;

        /**
         * Constructor for database class
         * @param array $config
         */
        public function __construct($config){
            $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset=utf8";
            
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ];

            try {
                $this->conn = new PDO($dsn, $config['username'], $config['password'], $options);
            }catch (PDOException $e){
                throw new Exception("Database connect failed: {$e->getMessage()}");
            }
        }


        /**
         * Query in to db and return all jobs
         *
         * @return PDOStatement
         * @throws PDOException
         * 
         */

        public function query($query, $params = []){
           try{
                $stmt = $this->conn->prepare($query);
                
                // Bind named params
                foreach($params as $param => $value){
                    $stmt->bindValue(':' . $param, $value);
                }

                $stmt->execute();
                return $stmt;

           } catch (PDOException $e){
              throw new Exception("Failed to execute query: {$e->getMessage()}");
           }
        }

    }

?>