
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

        <a href="/" class="navbar-brand"><img src="../img/logo-erasmus-ff.jpg" style="height: 70px;" alt=""> My Photos</a>

        <ul class="navbar-nav  ml-auto">
            <li class="nav-item">
                <a href="/about" class="nav-link text-info">About</a>
            </li>
        </ul>

        <?php if ($user['loggedIn']) : ?>
            <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><?= $user['name']; ?> Username</button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button"><a href="/profile">Profile</a></button>
                    <button class="dropdown-item" type="button"><a href="/profile"><a href="/logout">Logout</a></a></button>
                </div>
            </div>
        <?php else : ?>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
            </ul>
        <?php endif; ?>

    </div>
</nav>