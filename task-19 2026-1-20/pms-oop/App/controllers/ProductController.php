<?php
    use PmsOop\App\Product;

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_FILES['image'];

        $product = Product::create_product($pdo, $name, $price, $image);

        if($product!=null){
            $content = "Product Added successfully";
            $type = "success";
        }
        else{
            $content = "Something Wrong happened";
            $type = "danger";
        }

        set_messages([['content'=> $content, 'type' => $type]]);

        header("Location: index.php?page=product-add");
        die();
    }
?>