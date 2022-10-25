<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="<?=$root?>">
            <img src="<?=$imgPath?>logo.png" alt="<?= $name ?>">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarItems" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarItems">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?=$root?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Training</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$root?>plane.php">Flight Experiences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$root?>pilot.php">Visitor Pilot</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$root?>membership.php">Membership</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>