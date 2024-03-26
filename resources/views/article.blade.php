<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
          body {
            background-image: url('https://pmi-jateng.or.id/asset/img_playlist/markas.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

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

.visitor-counter {
    position: absolute;
    top: 20px; 
    right: 20px;
    border-radius: 8px; 
    margin-top: 40px;
}

.visitor-count {
    font-size: 15px;
    color: #3d000054;
}


.container-book {
    position: relative; /* Container untuk pengaturan posisi absolut */
    background-color: rgba(255, 255, 255, 0.9); /* Latar belakang semi-transparan */
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    padding: 30px;
    margin-top: 20px;
    margin-bottom: 20px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.mb-3 {
    margin-bottom: 15px;
    padding: 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease; /* Animasi perubahan warna latar belakang */
}

strong {
    color: #dc3545; /* Warna teks untuk elemen strong */
}

p {
    color: #555; /* Warna teks untuk elemen p */
    font-size: 1rem;
    line-height: 1.6;
}

.btn-download {
    display: inline-block;
    padding: 5px 9px;
    background-color: #dc3545;
    color: #fff;
    text-decoration: none;
    border-radius: 8px;
    transition: background-color 0.5s ease;
}

.btn-download:hover {
    background-color: #c82333;
}

    </style>
</head>

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


    <!-- Container for Book Details -->
<div class="container container-book mt-5">   
    <!-- Jumlah Pengunjung -->
    <div class="visitor-counter">
        <p class="mb-0"><strong style="font-size:15px; color: #3d000054;">VIEW : </strong> <span class="visitor-count"; style="font-weight: bold;">{{ $book->jml_pengunj }}</span></p>
    </div> 

    <h1 class="mt-4 mb-5">{{ $book->judul }}</h1>
    <div class="row">
        <div class="col-md-8">
            <img src="{{ asset('/images/' . $book->image) }}" alt="{{ $book->judul }}"
                class="img-fluid rounded mb-4">
            <p class="mb-3"><strong>Pengarang:</strong> {{ $book->pengarang }}</p>
            <p class="mb-3"><strong>Penerbit:</strong> {{ $book->penerbit }}</p>
            <p class="mb-3"><strong>Tahun Terbit:</strong> {{ $book->tahun_terbit }}</p>
            <p class="mb-3"><strong>Jumlah Halaman:</strong> {{ $book->jumlah_halaman }}</p>
            <h3 class="mb-3">Deskripsi:</h3>
            <p class="mb-3">{{ $book->deskripsi }}</p>
            <p class="mb-3"><strong>Download:</strong>
                <a href="{{ route('download', ['id' => $book->id_bo]) }}" class="btn-download" target="_blank">Unduh Berkas</a>
            </p>

            <!-- Menampilkan jumlah unduhan -->
            <p class="mb-3"><strong>Jumlah Unduhan:</strong> {{ $book->jml_dl }}</p>

        </div>
    </div>
</div>
<!-- End Container -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- Link JavaScript Anda, jika diperlukan -->
    <script src="{{ asset('scripts.js') }}"></script>
</body>

</html>