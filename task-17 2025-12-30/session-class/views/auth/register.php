<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="my-5">
                    <form action="index.php?page=auth-register" method="POST">
                        <div class="form-floating">
                            <label for="name">Name</label>
                            <input class="form-control" name="name" type="text" placeholder="Enter your name...">
                        </div>

                        <div class="form-floating">
                            <label for="email">Email address</label>
                            <input class="form-control" name="email" type="email" placeholder="Enter your email...">
                        </div>

                        <div class="form-floating">
                            <label for="phone">Phone Number</label>
                            <input class="form-control" name="phone" type="tel" placeholder="Enter your phone number...">
                        </div>

                        <div class="form-floating">
                            <label for="password">Password</label>
                            <input class="form-control" name="password" type="password" placeholder="Enter a password...">
                        </div>

                        <div class="form-floating">
                            <label for="confirmPassword">Confirm Password</label>
                            <input class="form-control" name="confirmPassword" type="password" placeholder="Enter the password again...">
                        </div>
                        <br />

                        <button class="btn btn-primary text-uppercase" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>