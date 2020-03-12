<main class="container pt-5">

    <?php if ($containsError) : ?>
        <div class="alert alert-danger">
            A felhasználónév vagy a jelszó nem megfelelő...
        </div>
    <?php endif; ?>

    <form action="/login" method="POST">
        <div class="form-group">
            <label for="email">Email address: </label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email address...">
        </div>

        <div class="form-group">
            <label for="password">Passsword: </label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password...">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>

</main>