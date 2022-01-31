<nav class="navbar navbar-expand-lg">
    <?php if(isMobile()):?>
        <a class="navbar-brand" href="#"><img src="./img/logo.svg" alt=""></a>
    <?php else: ?>
        
    <?php endif;?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Our story</a>
            </li>
        </ul>
        <?php if(isMobile()):?>

        <?php else: ?>
            <a class="navbar-brand" href="#"><img src="./img/logo.svg" alt=""></a>
        <?php endif;?>
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Brew guides</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="./img/icons/search-line.svg" alt="">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="./img/icons/profile.svg" alt="">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="./img/icons/cart.svg" alt="">
                </a>
            </li>
        </ul>
    </div>
</nav>