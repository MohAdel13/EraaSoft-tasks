<?php
    if(check_method('POST') 
        && check_post_parameters(['name', 'email', 'phone', 'password', 'confirmPassword'])){
            foreach($_POST as $key=> $value){
                $$key = htmlspecialchars(trim($value));
            }

            $result = validate_inputs($name, $email, $phone, $password, $confirmPassword);
            
            if(is_null($result)){
                $result = register_user($name, $email, $phone, $password);
            }
            
            if(is_null($result)){
                $type = 'success';
                $content = 'Register completed!';
                $location = 'profile';
            }

            else{
                $type = 'danger';
                $content = $result;
                $location = 'register';
            }

            set_message( $content, $type);

            header("Location: index.php?page=$location");
            die();
    }
    else{
        set_message('Something is wrong please try again!', 'danger');

        header('Location: index.php?page=register');
        die();
    }
?>