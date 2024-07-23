<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
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
            .bg-custom-blue {
                background-color: #CDE8E5; /* Ganti dengan kode warna biru yang diinginkan */
            }
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
        </style>
    </head>
    <body class="d-flex flex-column">
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
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-custom-blue rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Hubungi Kami</h1>
                            <p class="lead fw-normal text-muted mb-0">Aduan atau Laporan!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- * * SB Forms Contact Form * *-->
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- This form is pre-integrated with SB Forms.-->
                                <!-- To make this form functional, sign up at-->
                                <!-- https://startbootstrap.com/solution/contact-forms-->
                                <!-- to get an API token!-->
                                <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Nama</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                    <label for="email">Email address</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                </div>
                                <!-- Kecamatan input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="kecamatan" name="kecamatan" type="text" placeholder="Enter your kecamatan..." data-sb-validations="required" />
                                    <label for="kecamatan">Kecamatan</label>
                                    <div class="invalid-feedback" data-sb-feedback="kecamatan:required">A kecamatan is required.</div>
                                </div>
                                <!-- Desa input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="desa" name="desa" type="text" placeholder="Enter your desa..." data-sb-validations="required" />
                                    <label for="desa">Desa</label>
                                    <div class="invalid-feedback" data-sb-feedback="desa:required">A desa is required.</div>
                                </div>
                                <!-- Message input-->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                    <label for="message">Pesan</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                </div>
                                <!-- Submit success message-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error sending message!</div>
                                </div>
                                <!-- Submit Button-->
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                                </div>
                            </form>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
