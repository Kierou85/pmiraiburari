<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tampilan | USERS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<!-- Style -->
<style>
    /* Navbar */
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

    .nav-link:hover,
    .nav-link.active {
        color: #000;
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

    /*awalan kategories*/
    .service-section {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
            url("https://pmi-jateng.or.id/asset/img_playlist/markas.jpg");
        background-size: cover;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 150px;
        /* Jarak dari atas agar tidak tertutup oleh navbar */
        padding-bottom: 100px;
        /* Jarak dari bawah agar tidak tertutup oleh footer */
    }

    .search-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-bottom: 40px;
        /* Jarak antara search container dan service items */
    }

    .search-container h2 {
        color: white;
        margin-top: 20px;
        /* Jarak antara h2 dan search */
    }

    .search-wrapper {
        display: flex;
        align-items: center;
    }

    input[type="text"] {
        padding: 10px 20px;
        /* Padding horizontal diperkecil agar tetap sesuai di perangkat kecil */
        border: none;
        border-radius: 80px 0 0 80px;
        font-size: 16px;
        width: 100%;
        /* Lebar input disesuaikan dengan parentnya */
        margin-right: -5px;
    }

    button[type="submit"] {
        padding: 10px 15px;
        background-color: #ff0000;
        border: none;
        border-radius: 0 20px 20px 0;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #cc0000;
    }

    .search-wrapper button i {
        color: white;
        /* Warna putih untuk ikon */
    }

    .service-items {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .service-item {
        width: calc(20% - 20px);
        /* Lebar item, dikurangi dengan margin */
        max-width: 700px;
        /* Lebar maksimum untuk menghindari perubahan drastis pada layar besar */
        margin: 10px;
        /* Jarak antar item */
        background-color: rgba(255, 255, 255, 0.966);
        /* Warna latar belakang */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        /* Radius sudut */
        cursor: pointer;
        transition: background-color 0.3s ease;
        padding-top: 15px;
        /* Tambahkan padding-top di sini */
    }

    .service-item i {
        font-size: 24px;
        /* Ukuran ikon */
    }

    .service-item:nth-child(odd) i {
        color: #dd2d06;
        /* Warna untuk ikon pada item ganjil */
    }

    .service-item:nth-child(even) i {
        color: #ff8521;
        /* Warna untuk ikon pada item genap */
    }

    .service-item h3 {
        margin-top: 10px;
        /* Jarak antara ikon dan teks */
        font-size: 18px;
        /* Ukuran teks */
        text-align: center;
    }

    /* Contact */
    .contact-info {
        background-color: #f8f9fa;
        padding: 9px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .contact-item {
        margin-bottom: 20px;
    }

    .contact-item .icon {
        display: inline-block;
        width: 30px;
        height: 33px;
        background-color: #D00000;
        text-align: center;
        line-height: 30px;
    border-radius: 50%;
    margin-right: 10px;
}

/* Gaya untuk Tombol Sosial Media */
.social-media {
    text-align: center;
    margin-top: 30px;
}

.list-inline {
    padding-left: 0;
    list-style: none;
}

.list-inline-item {
    display: inline-block;
    margin: 0 10px;
}

.social-link {
    display: block;
    width: 40px;
    height: 40px;
    background-color: #D00000; /* Warna latar belakang */
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    transition: transform 0.3s ease-in-out, background-color 0.3s ease-in-out;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Efek bayangan */
}

.social-link:hover {
    transform: translateY(-3px);
    background-color: #FF0000; /* Warna latar belakang saat dihover */
}

.social-link svg {
    width: 20px; /* Sesuaikan ukuran ikon */
    height: 20px; /* Sesuaikan ukuran ikon */
    fill: #FFF; /* Warna ikon */
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
                            <a class="nav-link mx-lg-2 active" aria-current="page" href="{{ route('pengguna') }}">Beranda</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#Book">Daftar Buku</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#contact-section">Contact</a>
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

    <!-- Menu Kategori -->
      <div class="service-section">
        <div class="search-container">
          <h2>Dokumen apa yang Anda cari?</h2>
          <form action="#">
            <div class="search-wrapper" style="padding-top: 15px;">
                <input type="text" placeholder="Ketik Judul Dokumen">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
          </form>
        </div>

        <div class="service-items">
            <div class="service-item" onclick="location.href='{{ route('peraturanorganisasi') }}';">
                <i class="fa-solid fa-building-columns"></i>
                <h3>Peraturan Organisasi</h3>
            </div>
            <div class="service-item" onclick="location.href='{{ route('juklakjuknis') }}';">
                <i class="fa-solid fa-file-lines"></i>
                <h3>Juklak-Juknis</h3>
            </div>
            <div class="service-item" onclick="location.href='{{ route('pedoman') }}';">
                <i class="fa-solid fa-file-lines"></i>
                <h3>Pedoman</h3>
            </div>
            <div class="service-item" onclick="location.href='{{ route('buku') }}';">
                <i class="fas fa-book"></i>
                <h3>Buku</h3>
            </div>
            <div class="service-item" onclick="location.href='{{ route('materimateri') }}';">
                <i class="fas fa-book-open"></i>
                <h3>Materi-Materi</h3>
            </div> 
            <div class="service-item" onclick="location.href='{{ route('poster') }}';">
                <i class="far fa-image"></i>
                <h3>Poster</h3>
            </div>
            <div class="service-item" onclick="location.href='{{ route('leaflet') }}';">
                <i class="far fa-newspaper"></i>
                <h3>Leaflet</h3>
            </div>
            <div class="service-item" onclick="location.href='{{ route('suratkeputusan') }}';">
                <i class="fa-solid fa-file-lines"></i>
                <h3>Surat Keputusan</h3>
            </div>
            <div class="service-item" onclick="location.href='{{ route('undangundang') }}';">
                <i class="fa-solid fa-building-columns"></i>
                <h3>Undang-Undang</h3>
            </div>
            <div class="service-item" onclick="location.href='{{ route('adart') }}';">
                <i class="fa-solid fa-coins"></i>
                <h3>AD/ART</h3>
            </div>
        </div>   
      </div>
    <!-- End Menu Kategori -->

    <hr style="width: 80%; margin: 0 auto;">

    <!-- Contact -->
    <div id="contact-section" class="footer" style="padding-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d494.9779713538575!2d110.4561718525317!3d-7.02998980240853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2e708dd72fedc661%3A0xcd7dd2a390a9004!2sXFC4%2B2H5%2C%20Jl.%20Arum%20Sari%20Raya%2C%20RT.11%2FRW.02%2C%20Sambiroto%2C%20Kec.%20Tembalang%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2059111!3m2!1d-7.029997!2d110.4564982!5e0!3m2!1sid!2sid!4v1708654289735!5m2!1sid!2sid"
                            width="100%" height="auto" style="border:0;height: 350px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <h1>Contact Us</h1>
                        <div class="contact-item">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                    style="width: 16.906; height: 20.297;">
                                    <path fill="#ffffff"
                                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                </svg>
                            </span>
                            <p>Jl. Arum Sari Raya, RT.11/RW.02, Sambiroto, Kec. Tembalang, Kota Semarang, Jawa Tengah
                                59111</p>
                        </div>
                        <div class="contact-item">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    style="width: 16.906; height: 20.297;">
                                    <path fill="#ffffff"
                                        d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z" />
                                </svg>
                            </span>
                            <p>(024) 76746733</p>
                        </div>
                        <div class="contact-item">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    style="width: 16.906; height: 20.297;">
                                    <path fill="#ffffff"
                                        d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                                </svg>
                            </span>
                            <p>pmi@pmi-jateng.or.id</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Tombol Sosial Media -->
    <div class="social-media">
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="https://web.facebook.com/pmijateng" class="social-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                        style="width: 15.453; height: 40.148;">
                        <path
                            d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                    </svg>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://twitter.com/PMIJawaTengah" class="social-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                        style="width: 20.453; height: 40.148;">
                        <path
                            d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                    </svg>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.instagram.com/pmijateng" class="social-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                        style="width: 20.453; height: 40.148;">
                        <path
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                    </svg>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.youtube.com/@PMIJateng" class="social-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                        style="width: 22.453; height: 40.148;">
                        <path
                            d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
    <!-- End Tombol Sosial Media -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    </body>

   <!-- <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> -->

</html>