<?php

use PmsOop\App\Product;

$products = Product::get_all_products($pdo);

foreach ($products as $product):
    $image = "App/public/uploads/" . $product->get_image();
    $name = $product->get_name();
    $price = $product->get_price();
    $id = $product->get_id();
    ?>

    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <div class="col mb-5">
            <a href="index.php?page=product-view&id=<?= $id; ?>">
                <div class="card h-100">

                    <img class="card-img-top" src="<?= $image; ?>" alt="<?= $name; ?>" />

                    <div class="card-body p-4">
                        <div class="text-center">

                            <h5 class="fw-bolder"><?= $name; ?></h5>

                            <?= $price . " EGP"; ?>
                        </div>
                    </div>

                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-outline-dark mt-auto" href="index.php?page=cart-control&action=add&id=<?= $id; ?>&qty=1">Add to cart</a>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
    <?php
endforeach;
?>
</div>
</section>