<?php

use PmsOop\App\Cart;

$cart = new Cart();

$items = $cart->get_cart_items();
$total = $cart->get_total();
$products_total_qty = $cart->get_total_quantity();

?>

<div class="row">
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                    <tr>
                        <th scope="row"><?= $item->get_product()->get_id(); ?></th>
                        <td><?= $item->get_product()->get_name(); ?></td>
                        <td><?= $item->get_product()->get_price(); ?></td>
                        <td>
                            <input type="number" value=<?= "{$item->get_qty()}"; ?>>
                        </td>
                        <td><?= $item->get_subtotal(); ?></td>
                        <td>
                            <a href="index.php?page=cart-control&action=remove&id=<?= $item->get_product()->get_id(); ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3">
                        Tatal Price
                    </td>
                    <td colspan="3">
                        <h3><?= $cart->get_total(); ?></h3>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="index.php?page=cart-control&action=clear" class="btn btn-danger">Clear</a>
    </div>
</div>
</div>
</section>