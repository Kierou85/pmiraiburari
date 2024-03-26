<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peraturan Organisasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<style>
    /* navbar */
    .navbar {
        background-color: #fff;
        height: 80px;
        margin: 20px;
        border-radius: 16px;
        padding: 0.5rem;
    }

    .navbar-brand {
        font-weight: 500;
        color: #ED2B2A;
        font-size: 24px;
        transition: 0.3s color;
    }

    .login-button {
        background-color: #ED2B2A;
        color: #fff;
        font-size: 14px;
        padding: 8px 20px;
        border-radius: 50px;
        text-decoration: none;
        transition: 0.3s background-color;
    }

    .login-button:hover {
        background-color: #F15A59;
    }

    .navbar-toggler {
        border: none;
        font-size: 1.25rem;
    }

    .navbar-toggler:focus,
    .btn-close:focus {
        box-shadow: none;
        outline: none;
    }

    .nav-link {
        color: #666777;
        font-weight: 500;
        position: relative;
    }

    @media (min-width: 991px) {
        .nav-link::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background-color: #ED2B2A;
            visibility: hidden;
            transition: 0.3s ease-in-out;
        }

        .nav-link:hover::before,
        .nav-link.active::before {
            width: 100%;
            visibility: visible;
        }
    }

    /* daftar buku */
    #Book {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 20px;
        margin-top: 120px; /* Sesuaikan nilai sesuai kebutuhan untuk memberikan jarak dari navbar */
        padding: 20px;
    }

    #Book h2 {
        width: 200%;
    }

    .card {
        width: 255px;
        border: 1px solid #ccc;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .card-title {
        font-size: 15px;
        margin-top: 10px;
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <!--<a class="navbar-brand me-auto" href="#">Logo</a>-->
            <img src="https://pmi-jateng.or.id/asset/logo/logo1.png">
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 active" aria-current="page"
                                href="{{ route('pengguna') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="{{ route('pengguna') }}#contact-section">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="/login" class="login-button">Login</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Juklak-Juknis -->
    <!-- juklakjuknis.blade.php -->
    <div id="Book" style="text-align: center; padding-bottom: 50px;">
        <h2 class="book-title">Juklak-Juknis</h2>
        @foreach ($books as $book)
            <div class="card">
                <a href="{{ route('article', $book->id_bo) }}">
                    <img src="{{ asset('/images/' . $book->image) }}" class="card-img-top" alt="{{ $book->judul }}"
                        style="height: 400px;">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $book->judul }}</h5>
                </div>
            </div>
        @endforeach
    </div>
    <!-- End Juklak-Juknis -->

</body>

</html>