<?php
    namespace PmsOop\App;

    use PDO;
    use PmsOop\App\traits\ManagesFiles;

    class Product{

        use ManagesFiles;

        private int $id;
        private string $name;
        private float $price;
        private string $image;

        public function __construct(int $id, string $name, float $price, string $image)
        {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
        }

        public function set_id(int $id): void{
            $this->id = $id;
        }

        public function get_id(): int{
            return $this->id;
        }

        public function set_name(string $name): void{
            $this->name = $name;
        }

        public function get_name(): string{
            return $this->name;
        }

        public function set_price(int $price): void{
            $this->price = $price;
        }

        public function get_price(): float{
            return $this->price;
        }

        public function set_image(string $image): void{
            $this->image = $image;
        }

        public function get_image(): string{
            return $this->image;
        }

        public static function create_product(PDO $pdo, string $name, float $price, array $image): Product|null{
            $imageName = "";    

            $stmt = $pdo->prepare("INSERT INTO products(name, price, image) VALUES (?, ?, ?) ;");

            $upload = self::upload_file($image, 'products')?? "";

            if($upload !== null){
                $imageName = $upload;
            }

            $success = $stmt->execute([$name, $price, $imageName]);

            if($success){
                $id = $pdo->lastInsertId();
                return new Product($id, $name, $price, $imageName);
            }

            return null;
        }

        public static function get_all_products(PDO $pdo): array{
            $stmt = $pdo->query("SELECT * FROM products;");
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $products = [];
            if($rows){
                foreach($rows as $row){
                    $products[] = new Product($row['id'], $row['name'], $row['price'], $row['image']);
                }
            }

            return $products;
        }

        public static function delete_product(PDO $pdo, int $id):void{
            $stmt = $pdo->prepare("DELETE FROM products WHERE id = ? ;");
            $success = $stmt->execute([$id]);
        }

        public static function get_product_by_id(PDO $pdo, int $id): Product|null{
            $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ? ;");
            $success = $stmt->execute([$id]);

            if($success){
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if($row){
                    return new Product($id, $row['name'], $row['price'], $row['image']);
                }
            }

            return null;
        }
    }
?>