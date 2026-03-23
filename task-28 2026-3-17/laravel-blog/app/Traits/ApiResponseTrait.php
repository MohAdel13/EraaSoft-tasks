<?php
    namespace App\Traits;

    trait ApiResponseTrait{

        public function success($message = 'success', $data, $code = 200, $error = null){
            return response()->json([
                    'message' => $message,
                    'data' => $data,
                    'errors' => $error
                ],
                $code,
                [
                    'Accept'=>'application/json'
                ]
            );
        }

        public function error($message = 'error', $data = null, $code = 400, $error = null){
            return response()->json([
                    'message' => $message,
                    'data' => $data,
                    'error' => $error
                ],
                $code,
                [
                    'Accept'=>'application/json'
                ]
            );
        }
    }
?>