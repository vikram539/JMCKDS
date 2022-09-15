<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?=$root?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$root?>store.php">store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Provenance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
        <ul class="d-flex list-unstyled p-0 m-0 socialIcons">
            <li>
                <a href="#">
                    <img src="<?= $images?>user.svg" alt="<?=$name?>" class="img-fluid" />
                </a>
            </li>
            <li>
                <a  href="#">                        
                    <img src="<?= $images?>search.svg" alt="<?=$name?>" class="img-fluid" />
                </a>
            </li>
            <li>
                <a  href="#">                       
                    <img src="<?= $images?>beg.svg" alt="<?=$name?>" class="img-fluid" />
                </a>
            </li>
        </ul>
    </div>
</nav>