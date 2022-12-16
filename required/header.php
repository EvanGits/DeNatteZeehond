<!-- user check and navbar button check-->
<nav class="navbar bg-light navbar-expand-md navbar-light">
    <div class="container">
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="nav nav-pills nav-fill ms-auto">
                <?php if($page == "home" || $page == "") : ?>
                    <li>
                        <a href="<?= ROOT ?>/home" class="nav-link bg-primary text-light fs-5">Home</a>
                    </li>
                <?php else : ?>
                    <li>
                        <a href="<?= ROOT ?>/home" class="nav-link text-primary border border-primary border-1 rounded fs-5">Home</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>