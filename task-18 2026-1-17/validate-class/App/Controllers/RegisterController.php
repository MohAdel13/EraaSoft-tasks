<?php
    if($_SERVER['REQUEST_METHOD'] === "POST" && 
    check_post_fields(['name', 'email', 'phone', 'password'])){
        $validator = new Validator();

        $validator->validate([
            "name" => ["required", "string"],
            "email"=> ["required", "email"],
            "phone"=> ["required", "numeric"],
            "password"=> ["required", "string", "min:3"]
        ]);

        $errors = $validator->get_errors();

        if(empty($errors)){
            set_message("Register Completed!", "success");
        }
        else{
            foreach($errors as $key=>$value){
                set_errors($value);
            }
        }

        header("Location: index.php?page=register");
    }
    else{
        header("Location: index.php?page=error");
    }
?>