<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a rel="home" href="<?= $helper->url(); ?>">
            <h3><?= $helper->siteName(); ?></h3>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation">
            <svg class="gi gi-menu fs-lg" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="11" width="18" height="2" rx=".95" ry=".95"/>
                <rect x="3" y="16" width="18" height="2" rx=".95" ry=".95"/>
                <rect x="3" y="6" width="18" height="2" rx=".95" ry=".95"/>
            </svg>
        </button>
        <?php
        if(isset($_POST['changeToDark'])){
            $theme = 'dark';
            $helper->setCookie('theme',$theme,'864000','/');
            echo sendInfo('Deine Codeansicht wurde geändert');
        }

        if(isset($_POST['changeToLight'])){
            $theme = 'light';
            $helper->setCookie('theme',$theme,'864000','/');
            echo sendInfo('Deine Codeansicht wurde geändert');
        }
        ?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">

                <li class="nav-item dropdown">
                    <a class="nav-link" id="navbarDropdownOne" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Theme<svg class="gi gi-arrow-down-fill ml-1 align-text-top" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 17a1.72 1.72 0 0 1-1.33-.64l-4.21-5.1a2.1 2.1 0 0 1-.26-2.21A1.76 1.76 0 0 1 7.79 8h8.42a1.76 1.76 0 0 1 1.59 1.05 2.1 2.1 0 0 1-.26 2.21l-4.21 5.1A1.72 1.72 0 0 1 12 17z"/>
                        </svg></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownOne">
                        <form method="post">
                            <button type="submit" name="changeToDark" class="dropdown-item">Dark</button>
                            <button type="submit" name="changeToLight" class="dropdown-item">Light</button>
                        </form>
                    </div>
                </li>

            </ul>


        </div>
    </div>
</nav>