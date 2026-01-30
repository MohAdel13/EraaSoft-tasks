<?php
    class Session{

        protected static function start()
        {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
        }

        static public function get($key){
            self::start();

            if(self::check($key)){
                return $_SESSION[$key];
            }

            return null;
        }

        static public function set($key, $value){
            self::start();

            $_SESSION[$key] = $value;
        }

        static public function flash($key){
            self::start();

            $value = self::get($key);
            
            self::remove($key);

            return $value;
        }

        static public function remove($key){
            self::start();

            if(self::check($key)){
                unset($_SESSION[$key]);
            }
        }

        static public function removeAll(){
            self::start();

            session_unset();

            session_destroy();
        }

        static public function getAll($key){
            self::start();

            return $_SESSION;
        }

        static public function check($key){
            self::start();
            
            return isset($_SESSION[$key]);
        }

    }
?>