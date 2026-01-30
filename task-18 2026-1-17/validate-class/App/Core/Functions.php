<?php
    function check_post_fields(array $fields): bool{
        foreach($fields as $field){
            if(!isset($_POST[$field])){
                return false;
            }
        }
        return true;
    }

    function set_errors(array $messages): void{
        foreach($messages as $message){
            set_message($message, 'danger');
        }
    }

    function set_message(string $content, string $type): void{
        $message = [
            'content'=> $content,
            'type' => $type
        ];

        $_SESSION['messages'][] = $message;
    }

    function get_messages(): void{
        if(isset($_SESSION['messages'])){
            $messages = $_SESSION['messages'];
            foreach($messages as $message){
                $content = $message['content'];
                $type = $message['type'];
                echo "<div class='alert alert-$type'>$content</div>";
            }

            unset($_SESSION['messages']);
        }
    }


?>