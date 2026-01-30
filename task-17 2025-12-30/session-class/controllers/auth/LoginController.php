<?php
    if(check_method('POST') 
        && check_post_parameters(['email', 'password',])){
            foreach($_POST as $key=> $value){
                $$key = htmlspecialchars(trim($value));
            }

            $result = login_validate($email, $password);
            
            if(is_null($result)){
                $result = login_user($email, $password);
            }
            
            if(is_null($result)){
                $type = 'success';
                $content = 'Login Success!';
                $location = 'profile';
            }

            else{
                $type = 'danger';
                $content = $result;
                $location = 'login';
            }

            set_message( $content, $type);

            header("Location: index.php?page=$location");
            die();
    }
    else{
        set_message('Something is wrong please try again!', 'danger');

        header('Location: index.php?page=login');
        die();
    }
?>