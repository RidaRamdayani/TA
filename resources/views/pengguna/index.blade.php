<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Personal - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('tampilanuser/css/styles.css') }}" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Running Text</title>
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
            /* looker studio */
            .container-fluid {
                max-width: 100%; /* Ensure the container takes the full width */
                padding: 0 15px; /* Padding for container */
                margin: 0;
            }

            .embed-responsive {
                position: relative;
                overflow: hidden;
                width: 100%;
                padding-top: 56.25%; /* 16:9 aspect ratio */
                max-width: 80%; /* Max width of the iframe container */
                margin: 0 auto; /* Center the container */
            }

            .embed-responsive-item {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                width: 100%;
                height: 100%;
                border: 0;
            }
            .bg-custom-blue {
                background-color: #37B7C3; /* Ganti dengan kode warna biru yang diinginkan */
            }
        </style>
    </head>
    <body class="d-flex flex-column h-100">
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
            <!-- Header-->
            <header class="py-5">
                <div class="container-fluid px-5 pb-5">
                    <div class="card-body">
                        <div class="embed-responsive">
                            <iframe
                                class="embed-responsive-item"
                                src="https://lookerstudio.google.com/embed/reporting/be617ece-926a-42e1-9984-5a37b81aa3cc/page/1uJmD" 
                                frameborder="0" 
                                style="border:0" 
                                allowfullscreen 
                                sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox">
                            </iframe>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About Section-->
            <section class="bg-custom-blue py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">DISBUNNAK</span></h2>
                                <h3 class="display-5 fw-bolder"><span class="text-gradient d-inline">Kabupaten Kubu Raya</span></h3>
                                <p class="lead fw-light mb-4">Bidang Prasarana dan Bina Usaha</p>
                                <p class="lead fw-light mb-4">Website Visualisasi Data Perkebunan Rakyat Kabupaten Kubu Raya</p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" href="https://www.instagram.com/disbunnakkuburaya?igsh=eWFhbDF0NHByOHY2"><i class="bi bi-instagram"></i></a>
                                    <a class="text-gradient" href="https://youtube.com/@disbunnakkuburaya90?si=zfa6j1powP9RhwFe"><i class="bi bi-youtube"></i></a>
                                </div>
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
                        <a class="small" href="{{ url('/dashboard') }}">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('tampilanuser/js/scripts.js') }}"></script>
    </body>
</html>