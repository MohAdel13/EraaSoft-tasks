<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

            <!-- Profile Header -->
            <div class="post-preview text-center">
                <?php
                    $user = Session::get('user');
                ?>
                <h2 class="post-title"><?= $user['name'] ?></h2>
            </div>

            <hr class="my-4" />

            <!-- Personal Info -->
            <div class="post-preview">
                <h2 class="post-title">Personal Information</h2>
                <p class="post-meta">
                    <strong>Email: </strong><?= $user['email'] ?><br>
                    <strong>Phone: </strong><?= $user['phone'] ?><br>
                </p>
            </div>

            <hr class="my-4" />

        </div>
    </div>
</div>