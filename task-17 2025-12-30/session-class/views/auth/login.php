<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="my-5">
                    <form action="index.php?page=auth-login" method="POST">
                        <div class="form-floating">
                            <label for="email">Email address</label>
                            <input class="form-control" name="email" type="email" placeholder="Enter your email...">
                        </div>

                        <div class="form-floating">
                            <label for="password">Password</label>
                            <input class="form-control" name="password" type="password" placeholder="Enter a password...">
                        </div>
                        <br />

                        <button class="btn btn-primary text-uppercase" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>