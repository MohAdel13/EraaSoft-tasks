<?php
    namespace PmsOop\App\traits;

    trait ManagesFiles{
        private static $uploadDir = "App/public/uploads/";

        public static function upload_file(array $file, string $uploadFolder="", $allowExt = ['jpg', 'png', 'pdf']): string|null{
            $filename = $file['name'];
            $extFile = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

            if(!in_array($extFile, $allowExt)){
                return null;
            }

            $realPath = realpath(__DIR__."/../../")."/".self::$uploadDir.$uploadFolder;

            if(!is_dir($realPath)){
                mkdir($realPath,0777,true);
            }

            $fullPath = self::$uploadDir.$uploadFolder."/".$filename;

            if(move_uploaded_file($file['tmp_name'], $fullPath)){
                return $uploadFolder."/".$filename;
            }

            return null;
        }
    }
?>