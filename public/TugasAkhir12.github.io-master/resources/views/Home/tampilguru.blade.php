<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" href="images/logomidarulilmi.png" type="image/ico" />

  <title>tampilsiswa</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <h3>
              MI DARUL ILMI
            </h3>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index"> HOME <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="tampilguru" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profil
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="kepsek">Kepala Sekolah</a></li>
                  <li><a class="dropdown-item" href="tampilguru">Guru-guru</a></li>
                  <li><a class="dropdown-item" href="visimisi">Visi-misi</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="keterangan" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PPDB Online
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="daftarulang">Daftar Ulang</a></li>
                  <li><a class="dropdown-item" href="keterangan">Keterangan Siswa</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="galery"> GALERY </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="saran"> KONTAK </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="tampilguru" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  ADMIN
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="loginadmin">Admin</a></li>
                  <li><a class="dropdown-item" href="loginadmin">Kepala Sekolah</a></li>
                </ul>
              </li>
            </ul>          
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- course section -->
  <section class="contact_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h3>
                Data Guru-guru
              </h3>
              <p>
                Tabel Guru MI DARUL ILMI
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="table">
    </div>
    <table class="table">
      <thead>
          <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Jabatan</th>
              <th scope="col">Jenis kelamin</th>
          </tr>
      </thead>
      <tbody>
        @php
         $no =1;   
        @endphp
          @foreach ($data as $index => $row)
          <tr>
            <th scope="row">{{ $index + $data->firstItem() }}</th>
              <td>{{ $row->nama }}</td>
              <td>{{ $row->jabatan }}</td>
              <td>{{ $row->jeniskelamin }}</td>
          </tr>
          @endforeach
      </tbody>
  </table>
  {{ $data->links()}}
</div>
</div> 
        </section>


  <!-- end course section -->

  <!-- info section -->
  

  <!-- end info section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      MI DARUL ILMI
      <a href="#">Sekolah Kita</a>
    </p>
  </footer>
  <footer class="container-fluid footer_section">
  
    <p>
      By 
      <a href="#">Yogi Restu Dwi Prasetyo</a>
    </p>

</footer>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>