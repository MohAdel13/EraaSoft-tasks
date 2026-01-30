<?php

    function required_validate($inputs){
        foreach($inputs as $key => $value){
            $name = ucfirst($key);
            if($value == ""){
                return "$name is required!";
            }
        }
        return null;
    }

    function name_validate($name){
        return (strlen($name) > 3)? null: "Name must be at least 4 characters!";
    }

    function email_validate($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL)? null: "Invalid email!";
    }

    function phone_validate($phone){
        if(strlen($phone)<10){
            return "Enter a valid phone number!";
        }

        elseif(strlen($phone)>13){
            return "Enter a valid phone number!";
        }

        return null;
    }

    function password_validate($password){
        if(strlen($password) < 8){
            return "Password must be at least 8 characters!";
        }

        elseif(!preg_match("/[0-9]/", $password)){
            return "Password must contains at least one numeric digit!";
        }

        elseif(!preg_match("/[a-z]/", $password)){
            return "Password must contains at least one small case character!";
        }

        elseif(!preg_match("/[A-Z]/", $password)){
            return "Password must contains at least one capital case character!";
        }

        return null;
    }

    function confirm_password_validate($password, $confirmPassword){
        return ($password === $confirmPassword)? null: "The password pair you have entered doesn't match!";
    }

    function validate_inputs($name, $email, $phone, $password, $confirmPassword){
        $result = required_validate(
            [
                'name'=> $name,
                'email'=> $email,
                'phone' => $phone,
                'password'=> $password
            ]
        );
        if(!is_null($result)){
            return $result;
        }

        $result = name_validate($name);
        if(!is_null($result)){
            return $result;
        }

        $result = email_validate($email);
        if(!is_null($result)){
            return $result;
        }

        $result = phone_validate($phone);
        if(!is_null($result)){
            return $result;
        }

        $result = password_validate($password);
        if(!is_null($result)){
            return $result;
        }

        $result = confirm_password_validate($password, $confirmPassword);
        if(!is_null($result)){
            return $result;
        }

        return null;
    }

    function login_validate($email, $password){
        $result = required_validate([
            'email'=> $email,
            'password'=> $password
            ]
        );
        if(!is_null($result)){
            return $result;
        }

        $result = email_validate($email);
        if(!is_null($result)){
            return $result;
        }

        return null;
    }
?>