<?php
    $books = [
        new BOOK(
            "Clean Code",
            450,
            "clean-code.jpg",
            "A handbook of agile software craftsmanship.",
            ["Prentice Hall", "Pearson", "Addison-Wesley"],
            "Robert C. Martin",
            "White",
            "Tech Books Supplier"
        ),

        new BOOK(
            "The Pragmatic Programmer",
            520,
            "pragmatic-programmer.jpg",
            "Your journey to mastery as a modern software developer.",
            ["Addison-Wesley", "O'Reilly"],
            "Andrew Hunt & David Thomas",
            "Black",
            "Global Books Ltd"
        )
    ];

    $babyCars = [
        new BabyCar(
            "Smart Baby Stroller",
            3200,
            "stroller-1.jpg",
            "Lightweight baby stroller suitable for daily use.",
            "6 months - 3 years",
            15,
            ["Aluminum", "Plastic", "Fabric"],
            10 
        ),

        new BabyCar(
            "Luxury Baby Car",
            5400,
            "stroller-2.jpg",
            "Premium baby car with advanced safety features.",
            "1 - 4 years",
            18,
            ["Steel", "Leather", "Rubber"],
            15
        ),
    ];
?>

<main class="container my-5">

        <h3 class="mb-3">📘 Books</h3>
        <div class="row g-4">
            <?php foreach($books as $book):?>
            <div class="col-md-4">
                <div class="card product-card h-100">
                    <img src="assets/images/<?= $book->image; ?>" class="card-img-top" alt="<?= $book->name ?>">

                    <div class="card-body">
                        <h5 class="card-title"><?= $book->name ?></h5>
                        <p class="card-text"><?= $book->description ?></p>

                        <ul class="list-unstyled small">
                            <li><strong>Writer:</strong> <?= $book->writter ?></li>
                            <li><strong>Color:</strong> <?= $book->color ?></li>
                            <li><strong>Publisher:</strong> <?= $book->choose_publisher() ?></li>
                        </ul>
                    </div>

                    <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">
                        <span class="fw-bold"><?= $book->price ?> EGP</span>
                        <button class="btn btn-primary btn-sm">Buy Now</button>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>

        <hr class="my-5">

        <h3 class="mb-3">🚼 Baby Cars</h3>
        <div class="row g-4">
            <?php foreach($babyCars as $babyCar):?>
            <div class="col-md-4">
                <div class="card product-card h-100">
                    <img src="assets/images/<?= $babyCar->image ?>" class="card-img-top" alt="">

                    <div class="card-body">
                        <h5 class="card-title"> <?= $babyCar->name ?></h5>
                        <p class="card-text"> <?= $babyCar->description ?></p>

                        <ul class="list-unstyled small">
                            <li><strong>Age:</strong> <?= $babyCar->age ?></li>
                            <li><strong>Max Weight:</strong> <?= $babyCar->weight ?></li>
                            <li><strong>Materials:</strong>
                                <?php foreach($babyCar->materials as $material):?>
                                <ul class="list-unstyled small">
                                    <li><?= $material ?></li>
                                </ul>
                                <?php endforeach?>
                            </li>
                        </ul>
                    </div>

                    <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">
                        <span class="fw-bold"><?= $babyCar->price ?> EGP</span>
                        <button class="btn btn-success btn-sm">Add to Cart</button>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>

</main>