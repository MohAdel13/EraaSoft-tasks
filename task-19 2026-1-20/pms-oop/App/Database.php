<?php
    namespace PmsOop\App;

    use PDO;
    use PDOException;

    class Database{
        private PDO $connection;
        private static ?Database $instance = null;

        private function __construct(array $config)
        {
            try{
                $dsn = "mysql:host={$config['hostname']};dbname={$config['dbname']};charset=utf8mb4";
                $this->connection = new PDO($dsn, $config['username'], $config['password']);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }

        public function get_connection(): PDO{
            return $this->connection;
        }

        public static function get_instance(array $config): Database{
            if(self::$instance === null){
                self::$instance = new self($config);
            }

            return self::$instance;
        }
    }
?>