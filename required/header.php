<!-- user check and navbar button check-->
<nav class="navbar bg-light navbar-expand-md navbar-light">
    <div class="container">

        <a style="text-decoration:none;" href="<?=ROOT?>">
            <h2 class="p-2 text-dark">De Natte Zeehond</h2>
        </a> 

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
        <div class="collapse navbar-collapse" id="navmenu">    
            <ul class="nav nav-pills nav-fill ms-auto">
                <?php if($page == "donation") : ?>
                    <li>
                        <a href="<?= ROOT ?>/donation" class="nav-link bg-primary text-light fs-5">Doneren</a>
                    </li>
                <?php else : ?>
                    <li>
                        <a href="<?= ROOT ?>/donation" class="nav-link text-primary border border-primary border-1 rounded fs-5">Doneren</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div> 
        <div class="collapse navbar-collapse" id="navmenu">    
            <ul class="nav nav-pills nav-fill ms-auto">
                <?php if($page == "administration") : ?>
                    <li>
                        <a href="<?= ROOT ?>/administration" class="nav-link bg-primary text-light fs-5">Overzicht</a>
                    </li>
                <?php else : ?>
                    <li>
                        <a href="<?= ROOT ?>/administration/overview" class="nav-link text-primary border border-primary border-1 rounded fs-5">Overzicht</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div> 
        <div class="collapse navbar-collapse" id="navmenu">    
            <ul class="nav nav-pills nav-fill ms-auto">
                <?php if($page == "profile") : ?>
                    <li>
                        <a href="<?= ROOT ?>/profile" class="nav-link bg-primary text-light fs-5">Profiel</a>
                    </li>
                <?php else : ?>
                    <li>
                        <a href="<?= ROOT ?>/profile" class="nav-link text-primary border border-primary border-1 rounded fs-5">Profiel</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="nav nav-pills nav-fill ms-auto">
                <?php if($page == "account/login") : ?>
                    <li>
                        <a href="<?= ROOT ?>/account/login" class="nav-link bg-primary text-light fs-5">Inloggen</a>
                    </li>
                <?php else : ?>
                    <li>
                        <a href="<?= ROOT ?>/account/login" class="nav-link text-primary border border-primary border-1 rounded fs-5">Inloggen</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>