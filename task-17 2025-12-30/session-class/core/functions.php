<?php
    function set_message($content, $type){
        $message = [
            'content'=> $content,
            'type' => $type
        ];

        Session::set('message', $message);
    }

    function show_message(){
        if(Session::check('message')){
            $message = Session::flash('message');

            $content = $message['content'];
            $type = $message['type'];

            echo "<div class='alert alert-$type'> $content </div>";
        }
    }

    function check_method($method){
        return ($_SERVER['REQUEST_METHOD'] == $method);
    }

    function check_post_parameters($params){
        foreach($params as $param){
            if(!isset($_POST[$param])){
                return false;
            }
        }

        return true;
    }

    function register_user($name, $email, $phone, $password){
        global $conn;

        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password');";

        try{
             mysqli_query( $conn, $sql);

             $id = mysqli_insert_id($conn);

             $user = [
                'id' => $id,
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
             ];

            Session::set('user', $user);
        }
        catch(Exception $e){
            return 'Something is wrong please try again!';
        }

        return null;
    }

    function login_user($email, $password){
        global $conn;

        $sql = "SELECT * FROM users WHERE email = '$email'";

        try{
            $result = mysqli_query( $conn, $sql);

            $user = mysqli_fetch_assoc($result);

            if(is_null($user)){
            return 'Wrong Email!';
            }

            if(!password_verify($password, $user['password'])){
            return 'Wrong Password!';
            }

            unset($user['password']);

            Session::set('user', $user);;
        }
        catch(Exception $e){
            return 'Something is wrong please try again!';
        }

        return null;
    }
?>