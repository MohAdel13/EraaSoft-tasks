<?php
$products = [
    new Product(
        "Wireless Headphones",
        2499,
        "Sony",
        "headphone.jpg",
        "High-quality wireless headphones with noise cancellation and long battery life.",
        14
    ),

    new Product(
        "Gaming Mouse",
        899,
        "Logitech",
        "mouse.jpg",
        "Ergonomic gaming mouse with RGB lighting and high-precision sensor.",
        14
    ),

    new Product(
        "Smart Watch",
        3999,
        "Samsung",
        "smart watch.jpg",
        "Smart watch with health tracking, AMOLED display, and water resistance.",
        14
    ),
];
?>

<main class="container my-5">

    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4 mb-4">
                <div class="card product-card h-100 shadow-sm">
                    <img src="assets/images/<?= $product->getImage(); ?>" class="card-img-top" alt="Product Image">

                    <div class="card-body">
                        <h5 class="card-title"><?= $product->getName(); ?></h5>

                        <p class="text-muted mb-1">
                            <del><?= $product->getPrice() . " EGP"; ?></del>
                        </p>

                        <p class="fs-4 fw-bold text-success mt-2">
                            <?= $product->priceAfterDiscount() . " EGP";?>
                        </p>

                        <button class="btn btn-primary w-100">
                            Buy Now
                        </button>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
</main>