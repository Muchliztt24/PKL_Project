<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand ml-lg-3">
            <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>SMKN 1</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Halaman Beranda</a>
                @auth
                <a href="{{ route('home') }}#jadwal" class="nav-item nav-link">Jadwal Latihan</a>
                <div class="nav-item dropdown">
                    <div class="dropdown-menu m-0">
                    </div>
                </div>
            </div>
            <a href="{{ route('home') }}#form" class="btn btn-primary py-2 px-4 d-none d-lg-block">Daftar Ekstrakurikuler</a>
            @endauth
        </div>
    </nav>
</div>