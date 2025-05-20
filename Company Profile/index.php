
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Responsive.css">

    <link rel="icon" type="image/x-icon" href="Assets/Logo.png">

    <title>Rumah Impian</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="Assets/Logo.png" alt="" width="30" class="d-inline-block align-text-top me-1h">
                Rumah Impian</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="#hero">BERANDA</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#layanan">LAYANAN</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" class="nav-link" href="#Fitur">FITUR</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" class="nav-link" href="#contact">KONTAK</a>
                    </li>
                </ul>
            </div>
            <button class="button-primary" onclick="window.location.href='daftar.php'">DAFTAR</button>
            <button class="button-secondary" onclick="window.location.href='login.php'">Masuk</button>
        </div>
    </nav>

    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1>Membantu Temukan
                        Rumah Impian.</h1>
                    <p><span class="fw-bold">Rumah Impian</span> hadir untuk temukan rumah terbaik
                        untukmu, untuk dijual ataupun di sewa dengan sumber
                        terpercaya</p>

                    <button class="button-lg-primary">Temukan Rumah</button>
                    <a href=""><img src="Assets/arrow.png" alt=""></a>
                </div>
            </div>
            <img src="Assets/HeroBanner.png" alt="" class="position-absolute end-0 bottom-0 img-hero" />
            <img src="Assets/Asscent.png" alt="" class="accsent-img h-100 position-absolute top-0 start-0" />
        </div>
    </section>

    <section id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Layanan Kami</h2>
                    <span class="sub-title">Rumah impian hadir menjadi solusi bagi kamu</span>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 text-center ">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="Assets/house 1.png" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Property Baru</h3>
                        <p class="mt-3">Rumah Impian kini jadi kenyataan, Beli
                            rumah baru dengan fasilitas terbaik
                            dengan lingkungan yang nyaman.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center ">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="Assets/layanan2.png" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Sewa Rumah</h3>
                        <p class="mt-3">Sewa rumah yang indah untuk keluarga
                            anda, pilihan terbaik untuk tempat
                            tinggal keluarga mu.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center ">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="Assets/layanan3.png" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Beli Rumah</h3>
                        <p class="mt-3">Beli rumah sempurna dengan harga
                            terbaik kualitas terjamin dari sumber
                            terpercaya.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="search" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Temukan Rumah Impianmu</h2>
                    <p class="text-center">Sekarang Anda dapat menghemat semua hal stres, waktu, dan biaya
                        tersembunyi, dengan ratusan rumah untuk anda</p>
                </div>

                <div class="col-8 mx-auto mt-5">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#jual"
                                type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">Jual</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#sewa"
                                type="button" role="tab" aria-controls="profile-tab-pane"
                                aria-selected="false">Sewa</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#propertybaru" type="button" role="tab" aria-controls="contact-tab-pane"
                                aria-selected="false">Property Baru</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="jual" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">

                            <div class="input-group input-cari mb-3">
                                <button class="btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><img src="Assets/homeDROP.png" alt="">Tipe Rumah</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>

                                <button class="btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><img src="Assets/moneyDROP.png" alt="">Range Harga</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>

                                <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                    placeholder="Cari bedasarkan lokasi, ID, Property">
                                <button class="btn-primary" type="button" id="button-addon2">Cari </button>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="sewa" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <div class="input-group input-cari mb-3">
                                <button class="btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><img src="Assets/homeDROP.png" alt="">Tipe Rumah</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>

                                <button class="btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><img src="Assets/moneyDROP.png" alt="">Range Harga</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>

                                <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                    placeholder="Cari bedasarkan lokasi, ID, Property">
                                <button class="btn-primary" type="button" id="button-addon2">Cari </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="propertybaru" role="tabpanel" aria-labelledby="contact-tab"
                            tabindex="0">
                            <div class="input-group input-cari mb-3">
                                <button class="btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><img src="Assets/homeDROP.png" alt="">Tipe Rumah</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>

                                <button class="btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><img src="Assets/moneyDROP.png" alt="">Range Harga</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>

                                <input type="text" class="form-control input-C"
                                    aria-label="Text input with dropdown button"
                                    placeholder="Cari bedasarkan lokasi, ID, Property">
                                <button class="btn-primary" type="button" id="button-addon2">Cari </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <section id="rekomendasi">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center mt-5">
                    <h2>Rekomendasi Rumah Untuk Mu</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="Assets/RUMAH1.png" alt="">
                        <div class="card-body">
                            <h4>IDR 800.000.000</h4>
                            <p class="mb-4 ln-sm">Jl. Soekarno Hatta No.1 <br /><span class="text-danger">Sewa</span>
                            </p>
                        </div>
                        <div class="card-fasilitas d-flex justify-content-between px-2">
                            <span>
                                <img src="Assets/bed.png" alt="">3
                                <p>Kamar Tidur</p>
                            </span>
                            <span>
                                <img src="Assets/bath.png" alt="">3
                                <p>Kamar Mandi</p>
                            </span>
                            <span>
                                <img src="Assets/LuasIcon.png" alt="">3
                                <p>Luas Rumah</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="Assets/RUMAH2.png" alt="">
                        <div class="card-body">
                            <h4>IDR 800.000.000</h4>
                            <p class="mb-4 ln-sm">Jl. Soekarno Hatta No.1 <br /><span class="text-danger">Sewa</span>
                            </p>
                        </div>
                        <div class="card-fasilitas d-flex justify-content-between px-2">
                            <span>
                                <img src="Assets/bed.png" alt="">3
                                <p>Kamar Tidur</p>
                            </span>
                            <span>
                                <img src="Assets/bath.png" alt="">3
                                <p>Kamar Mandi</p>
                            </span>
                            <span>
                                <img src="Assets/LuasIcon.png" alt="">3
                                <p>Luas Rumah</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="Assets/RUMAH3.png" alt="">
                        <div class="card-body">
                            <h4>IDR 800.000.000</h4>
                            <p class="mb-4 ln-sm">Jl. Soekarno Hatta No.1 <br /><span class="text-danger">Sewa</span>
                            </p>
                        </div>
                        <div class="card-fasilitas d-flex justify-content-between px-2">
                            <span>
                                <img src="Assets/bed.png" alt="">3
                                <p>Kamar Tidur</p>
                            </span>
                            <span>
                                <img src="Assets/bath.png" alt="">3
                                <p>Kamar Mandi</p>
                            </span>
                            <span>
                                <img src="Assets/LuasIcon.png" alt="">3
                                <p>Luas Rumah</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="Assets/RUMAH4.png" alt="">
                        <div class="card-body">
                            <h4>IDR 800.000.000</h4>
                            <p class="mb-4 ln-sm">Jl. Soekarno Hatta No.1 <br /><span class="text-danger">Sewa</span>
                            </p>
                        </div>
                        <div class="card-fasilitas d-flex justify-content-between px-2">
                            <span>
                                <img src="Assets/bed.png" alt="">3
                                <p>Kamar Tidur</p>
                            </span>
                            <span>
                                <img src="Assets/bath.png" alt="">3
                                <p>Kamar Mandi</p>
                            </span>
                            <span>
                                <img src="Assets/LuasIcon.png" alt="">3
                                <p>Luas Rumah</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="Assets/RUMAH5.png" alt="">
                        <div class="card-body">
                            <h4>IDR 800.000.000</h4>
                            <p class="mb-4 ln-sm">Jl. Soekarno Hatta No.1 <br /><span class="text-danger">Sewa</span>
                            </p>
                        </div>
                        <div class="card-fasilitas d-flex justify-content-between px-2">
                            <span>
                                <img src="Assets/bed.png" alt="">3
                                <p>Kamar Tidur</p>
                            </span>
                            <span>
                                <img src="Assets/bath.png" alt="">3
                                <p>Kamar Mandi</p>
                            </span>
                            <span>
                                <img src="Assets/LuasIcon.png" alt="">3
                                <p>Luas Rumah</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="Assets/RUMAH6.png" alt="">
                        <div class="card-body">
                            <h4>IDR 800.000.000</h4>
                            <p class="mb-4 ln-sm">Jl. Soekarno Hatta No.1 <br /><span class="text-danger">Sewa</span>
                            </p>
                        </div>
                        <div class="card-fasilitas d-flex justify-content-between px-2">
                            <span>
                                <img src="Assets/bed.png" alt="">3
                                <p>Kamar Tidur</p>
                            </span>
                            <span>
                                <img src="Assets/bath.png" alt="">3
                                <p>Kamar Mandi</p>
                            </span>
                            <span>
                                <img src="Assets/LuasIcon.png" alt="">3
                                <p>Luas Rumah</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="Fitur" class="mt-5 overflow-hidden">
        <div class="container">
            <div class="row mb-4">
                <div class="col-9">
                    <h2>
                        Fitur Rumah
                    </h2>
                </div>
                <div class="col-3">
                    <button class="button-fitur">Lihat Semua...
                        <img src="Assets/arrow.png" alt="" class="ms-2" height="70%">
                    </button>
                </div>
            </div>

            <div class="container position-relative">
                <div class="row">
                    <div class="col-12 d-flex justify-content-start">

                        <div class="card-fitur me-2 position-relative">
                            <img src="Assets/CAROSEL.png" alt="">
                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center">
                                    <h5>Kamar Tidur</h5>
                                    <span>Rumah Minimalist Type-A2</span>
                                    <h6>IDR 200jt</h6>
                                    <button>Lihat Rumah</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-fitur me-2 position-relative">
                            <img src="Assets/CAROSEL.png" alt="">
                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center">
                                    <h5>Kamar Tidur</h5>
                                    <span>Rumah Minimalist Type-A2</span>
                                    <h6>IDR 200jt</h6>
                                    <button>Lihat Rumah</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-fitur me-2 position-relative">
                            <img src="Assets/CAROSEL.png" alt="">
                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center">
                                    <h5>Kamar Tidur</h5>
                                    <span>Rumah Minimalist Type-A2</span>
                                    <h6>IDR 200jt</h6>
                                    <button>Lihat Rumah</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-fitur me-2 position-relative">
                            <img src="Assets/CAROSEL.png" alt="">
                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center">
                                    <h5>Kamar Tidur</h5>
                                    <span>Rumah Minimalist Type-A2</span>
                                    <h6>IDR 200jt</h6>
                                    <button>Lihat Rumah</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button class="btn-kiri position-absolute start-0 top-50 translate-middle-y">
                    <img src="Assets/arrow kiri.png" alt="" height="70%">
                </button>
                <button class="btn-kanan position-absolute end-0 top-50 translate-middle-y">
                    <img src="Assets/arrow.png" alt="" height="70%">
                </button>
            </div>

        </div>
    </section>

    <section id="contact">
        <div class="container-fluid overlay h-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>
                            Butuh Konsultasi... ?
                            Silahkan Hubungi Kami
                            Kami Siap Membantu
                        </h3>
                        <div class="kontak">
                            <h6>Kontak</h6>
                            <div class="mb-2 d-flex">
                                <div><img src="Assets/location.png" alt=""></div>
                                <a href="#">Jl Soekarno Hatta No. 77, Tangerang, Indonesia</a>
                            </div>
                            <div class="mb-2 d-flex">
                                <img src="Assets/Telpon.png" alt="">
                                <a href="#">+1 234 567 890</a>
                            </div>
                            <div class="mb-2 d-flex">
                                <img src="Assets/email.png" alt="">
                                <a href="#">rumahimpian@estate.com</a>
                            </div>
                        </div>
                        <h6>Social Media</h6>
                        <a href="#" class="me-2"><img src="Assets/mingcute_instagram-line.png" alt=""></a>
                        <a href="#" class="me-2"><img src="Assets/mingcute_facebook-fill.png" alt=""></a>
                        <a href="#" class="me-2"><img src="Assets/mdi_twitter.png" alt=""></a>
                        <a href="#" class="linkrumahimpian">Rumah Impian</a>
                    </div>
                    <div class="col-md-6">
                        <div class="card-contact w-100">
                            <form action="">
                                <h2>Ada Pertanyaan?</h2>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" required>
                                    <label for="floatingInput" class="d-flex align-items-center">Masukan Email Anda
                                        disini...</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="input" class="form-control" id="floatingInput" required>
                                    <label for="floatingInput" class="d-flex align-items-center">Pertanyaan
                                        Anda...</label>
                                </div>
                                <button type="submit" class="btn-kontak">Kirim</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="d-flex align-items-center position-relative">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 d-flex align-items-center">
                        <img src="Assets/Logo.png" alt="" height="70%">
                        <a class="ms-2" href="#">Rumah Impian</a>
                    </div>
                    <div class="col-md-5 d-flex justify-content-evenly">
                        <a href="#hero">Beranda</a>
                        <a href="#layanan">Layanan</a>
                        <a href="#Fitur">Fitur</a>
                        <a href="#contact">Kontak</a>
                    </div>
                </div>
                <div class="row position-absolute copyright start-50 translate-middle">
                    <div class="col-12">Copyright bg Wiii All Right Reserved</div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</body>

</html>
</body>

</html>