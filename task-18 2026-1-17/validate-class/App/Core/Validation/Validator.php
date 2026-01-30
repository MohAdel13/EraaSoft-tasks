<?php
    class Validator{
        private array $errors = [];

        public function validate(array $fields): void{
            foreach($fields as $field => $rules){
                $value = $_POST[$field];
                foreach($rules as $rule){
                    if($rule === "required" && empty($value)){
                        $this->add_error($field, "The $field field is required!");
                    }

                    else if($rule === "string" && !is_string($value)){
                        $this->add_error($field, "The $field field must be string!");
                    }

                    else if($rule === "numeric" && !is_numeric($value)){
                        $this->add_error($field, "The $field field must be numeric!");
                    }

                    else if($rule === "email" && !filter_var($value, FILTER_VALIDATE_EMAIL)){
                        $this->add_error($field, "Invalid email!");
                    }

                    else if(str_starts_with($rule, "min:")){
                        $min = (int) explode(":", $rule)[1];
                        if($min > strlen($value)){
                            $this->add_error($field, "The $field field must be at least $min characters!");
                        }
                    }
                }
            }
        }

        private function add_error($field, $error): void{
            $this->errors[$field][] = $error;
        }

        public function get_errors(): array{
            return $this->errors;
        }
    }
?>