<?php

    use PmsOop\App\Product;

    if(($_SERVER['REQUEST_METHOD'] != "GET")||(!isset($_GET['id']))){
        header("Location: index.php?page=error");
    }
    $id = $_GET['id'];
    $product = Product::get_product_by_id($pdo, $id);
    $name = $product->get_name();
    $price = $product->get_price();
    $image = "App/public/uploads/".$product->get_image();
?>

<div class="container px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 align-items-center">

        <div class="col-md-6">
            <img class="card-img-top mb-5 mb-md-0" src="<?= $image ?>" alt="<?= $name ?>"
                style="height: 500px; object-fit: cover;" />
        </div>

        <div class="col-md-6">

            <h1 class="display-5 fw-bolder"><?= $name ?></h1>

            <span><?= $price . " EGP" ?></span>

            <form action="index.php?page=cart-add" method="POST">
                <input type="hidden" name="id" value="<?= $id ?>">

                <div class="d-flex">
                    <input class="form-control text-center me-3" name="quantity" type="number" value="1"
                        style="max-width: 4rem" min="1" max="99" />

                    <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
</div>