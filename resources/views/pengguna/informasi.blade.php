<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            .marquee-section {
                position: relative;
                overflow: hidden;
                background-color: #37B7C3; /* Background color for the entire section */
                padding: 10px 0; /* Padding for the top and bottom */
            }

            .running-text-container {
                position: relative;
                overflow: hidden;
                height: 40px; /* Height of the running text container */
            }

            .running-text {
                position: absolute;
                white-space: nowrap;
                animation: marquee 20s linear infinite;
            }

            .running-text p {
                display: inline-block;
                padding: 10px 20px; /* Padding inside the text */
                color: #FCF8F3;
                border-radius: 5px; /* Rounded corners for the background */
            }

            @keyframes marquee {
                0% { transform: translateX(100%); }
                100% { transform: translateX(-100%); }
            }
            .bg-custom-blue {
                background-color: #021526; /* Ganti dengan kode warna biru yang diinginkan */
            }
        </style>
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('layouts.navbaruser')
            <div class="marquee-section">
                <div class="running-text-container">
                    <div class="running-text">
                        <p>
                           Dinas Perkebunan dan Peternakan Kabupaten Kubu Raya Jl. Adisucipto No.15,2, Arang Limbung, Kec. Sungai Raya, Kabupaten Kubu Raya, Kalimantan Barat 78391
                        </p>
                    </div>
                </div>
            </div>
            <!-- Projects Section-->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="container">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/EhZrBvXfSL0?si=f42Ulf6aa811uxIC" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="row gx-5 justify-content-center mt-5">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h4 class="fw-bolder">Dinas Perkebunan dan Peternakan Kabupaten Kubu Raya</h4>
                                            <p>memiliki 4 bidang yaitu prasarana dan bina usaha, peternakan, pengolahan data dan perkebunan.
                                                website ini menampilkan terkait informasi data perkebunan rakyat di kabupaten Kubu Raya yang di olah oleh bidang prasarana dan bina usaha.
                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Project Card 1-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Informasi 1</h2>
                                            <p>Mengunjungi lahan perkebunan pada kecamatan Batu Ampar bersama kepala bidang</p>
                                        </div>
                                        <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                                    </div>
                                </div>
                            </div>
                            <!-- Project Card 2-->
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Informasi 2</h2>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!</p>
                                        </div>
                                        <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to action section-->
            <section class="bg-custom-blue py-5 text-white">
                <div class="container px-5 my-5">
                    <div class="row">
                        <div class="col-md-6 pr-md-4 mb-4 mb-md-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13488.256275036645!2d109.38829176246304!3d-0.1328947478142915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d503b10dec02b%3A0x5014d0243aa9f9ff!2sDinas%20Perkebunan%20Kubu%20Raya!5e0!3m2!1sen!2sid!4v1721714356655!5m2!1sen!2sid" 
                                    width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-4">
                            <div class="text-left text-md-left">
                                <h5 class="address">Alamat:</h5>
                                <p style="font-size: 16px; color: #73BBA3;" class="mb-4">Jl. Adi Sucipto No.15,2, Arang Limbung, Kec. Sungai Raya, Kabupaten Kubu Raya, Kalimantan Barat 78391</p>
                                <h5 class="address">Email:</h5>
                                <p style="font-size: 18px; color: #73BBA3;">disbunnak@kuburaya.go.id</p>
                                <h5 class="address">Telepon:</h5>
                                <p style="font-size: 18px; color: #73BBA3;">0561722381</p>
                                <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.html">Contact me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
