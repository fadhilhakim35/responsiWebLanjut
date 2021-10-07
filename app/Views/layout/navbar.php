<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Jess</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == '' ? 'active' : '' ?> " aria-current="page" href="<?= base_url('/'); ?>">Home </a>
                    <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'post' ? 'active' : '' ?> " href="<?= base_url('/post'); ?>">Post</a>
                    <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'about' ? 'active' : '' ?> " href="<?= base_url('/about'); ?>">About</a>
                </div>
            </div>
        </div>
    </nav>