<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" >
    <img class="img-profile rounded-circle"
    src="/assets/images/logo.png" width=25px;> Princess Solution</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/">Dashboard<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="/daftar">Daftar</a>
      <a class="nav-item nav-link" href="#">Paket Kursus</a>
    </div>
  </div>
</nav>
<div
  class="p-5 text-center bg-image"
    style=" background-image: url(/assets/images/bgg.jpeg);"
>
<div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/assets/images/MobilBanyak.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/assets/images/MobilBanyak.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/assets/images/MobilBanyak.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</head>


<!-- Grid container -->
<div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0 text-justify">
          <h5 class="text-uppercase mb-4">Sejarah</h5>

          <p>
          Perusahaan PRINCESS berawal dari sebuah usaha Kursus Mengemudi yang kemudian juga dikembangkan di bidang Biro Jasa. Perusahaan ini didirikan oleh Bapak Rinaldo PB dan Ibu Fatmawati S. pada tanggal 5 Mei 1990 yang bertempat di sebuah lokasi kecil di sisi Jalan Raden Intan, Bandar Lampung. Perusahaan ini dirintis pertama kali dengan hanya memiliki 3 karyawan untuk melayani konsumen Biro Jasa dan memiliki sebuah mobil Jimny Katana merah sebagai armada Kursus Mengemudi. Pendiri memberi nama usahanya tersebut dengan nama PRINCESS.
          </p>
        </div>
      

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0 text-justify">
            <h5 class="text-uppercase mb-4">Visi</h5>
            <p>
            Menjadi Perusahaan Jasa yang profesional dan berkualitas dalam memberikan pelayanan serta menjadi sebuah solusi yang tepat bagi masyarakat.
            </p>
        </div>


       <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0 text-justify">
          <ol class="fa-ol" >
          <h5 class="text-uppercase mb-4">Misi</h5>
            <li>Memberikan pelayanan terbaik terhadap konsumen dan mitra perusahaan.</li>
            <li>Menciptakan kemandirian masyarakat di bidang berkendara.</li>
            <li>Menjadi suatu solusi, baik dalam permasalahan waktu ataupun jarak yang dirasakan masyarakat dalam melakukan tanggung jawab pembayaran pajak, sehingga menjadi acuan pelaksanaan terhadap suatu kepatuhan atas sebuah kewajiban pembayaran pajak.</li>
            <li>Membantu instansi pemerintah dalam hal pendapatan daerah dengan menjadi acuan pelaksanaan kewajiban yang didasari solusi bagi masyarakat dalam kemudahan pembayaran pajak wilayah setempat.</li>
          </ol>
        </div>
        
      </div>
</div>

        


<!-- <div class="card-columns pl-4 pr-4">
  <div class="card bg-white text-dark text-justify p-3">
  <h3 class="card-title text-center ">Sejarah</h3>
      <blockquote class="blockquote mb-0">
        <p>Perusahaan PRINCESS berawal dari sebuah usaha Kursus Mengemudi yang kemudian juga dikembangkan di bidang Biro Jasa. Perusahaan ini didirikan oleh Bapak Rinaldo PB dan Ibu Fatmawati S. pada tanggal 5 Mei 1990 yang bertempat di sebuah lokasi kecil di sisi Jalan Raden Intan, Bandar Lampung. Perusahaan ini dirintis pertama kali dengan hanya memiliki 3 karyawan untuk melayani konsumen Biro Jasa dan memiliki sebuah mobil Jimny Katana merah sebagai armada Kursus Mengemudi. Pendiri memberi nama usahanya tersebut dengan nama PRINCESS.</p>
      </blockquote>
    </div>

    <div class="card bg-white text-dark text-center p-3">
    <div class="card-body py-3 ">      
    <h3 class="card-title">Visi</h3>
      <blockquote class="blockquote mb-0">
        <p> Menjadi Perusahaan Jasa yang profesional dan berkualitas dalam memberikan pelayanan serta menjadi sebuah solusi yang tepat bagi masyarakat.</p>
      
      </blockquote>
    </div>
    </div>

    <div class="card text-justify">
      <div class="card-body ">
        <h3 class="card-title text-center">Misi</h3>
        <ol>
          <li>Memberikan pelayanan terbaik terhadap konsumen dan mitra perusahaan.</li>
          <li>Menciptakan kemandirian masyarakat di bidang berkendara.</li>
          <li>Menjadi suatu solusi, baik dalam permasalahan waktu ataupun jarak yang dirasakan masyarakat dalam melakukan tanggung jawab pembayaran pajak, sehingga menjadi acuan pelaksanaan terhadap suatu kepatuhan atas sebuah kewajiban pembayaran pajak.</li>
          <li>Membantu instansi pemerintah dalam hal pendapatan daerah dengan menjadi acuan pelaksanaan kewajiban yang didasari solusi bagi masyarakat dalam kemudahan pembayaran pajak wilayah setempat.</li>
        </ol>
      
      </div>
    </div>
</div> -->


    <h1>Kursus Mengemudi Mobil</h1>


<div class="card-deck pl-4 pr-4">
  <div class="card">
    <img class="card-img-top" src="/assets/images/1.png" alt="Card image cap"> 
  </div>
  <div class="card">
    <img class="card-img-top" src="/assets/images/2.png" alt="Card image cap"> 
  </div>
  <div class="card">
    <img class="card-img-top" src="/assets/images/3.png" alt="Card image cap">
  </div>
</div>

<h1>Testimonial</h1>


<!-- Carousel wrapper -->
<div id="carouselMulti" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
  <!-- Controls -->
  <a class="carousel-control-prev" href="#carouselMulti" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselMulti" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Anna Deynah</h5>
            <p>UX Designer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">John Doe</h5>
            <p>Web Developer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
              suscipit laboriosam, nisi ut aliquid commodi.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li>
                <i class="fas fa-star-half-alt fa-sm"></i>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Maria Kate</h5>
            <p>Photographer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque corrupti.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">John Doe</h5>
            <p>UX Designer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Alex Rey</h5>
            <p>Web Developer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
              suscipit laboriosam, nisi ut aliquid commodi.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li>
                <i class="fas fa-star-half-alt fa-sm"></i>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(5).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Maria Kate</h5>
            <p>Photographer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque corrupti.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(6).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Anna Deynah</h5>
            <p>UX Designer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(8).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">John Doe</h5>
            <p>Web Developer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
              suscipit laboriosam, nisi ut aliquid commodi.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li>
                <i class="fas fa-star-half-alt fa-sm"></i>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(7).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Maria Kate</h5>
            <p>Photographer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque corrupti.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Inner -->
</div>
<!-- Carousel wrapper -->

<div class="container-fluid">

  <footer class="text-white text-center text-lg-start bg-dark">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">About company</h5>

          <p>
            Biro Jasa dan Kursus Mengemudi Princess Solution 
          </p>

          <p>
         Biro Jasa dan Kursus Mengemudi Mobil di Lampung yang berdiri sejak pulluhan tahun yang lalu
          </p>

          
          <div class="mt-4">
            <!-- Facebook -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-facebook-f"></i></a>
            <!-- Dribbble -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-dribbble"></i></a>
            <!-- Twitter -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-twitter"></i></a>
            <!-- Google + -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-google-plus-g"></i></a>
            <!-- Linkedin -->
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
         
          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">No.06, Jl.Jenderal Ahmad Yani, Gotong Royong, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119.</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">contact@example.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 48 234 567 88</span>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Opening hours</h5>

          <table class="table text-center text-white">
            <tbody class="fw-normal">
              <tr>
                <td>Senin - Jum'at:</td>
                <td>08.00 - 17.00</td>
              </tr>
              <tr>
                <td>Sabtu:</td>
                <td>08.00 - 15.00</td>
              </tr>
            
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">DotaAprilLase@2022</a>
    </div>
    <!-- Copyright -->
  </footer>

</div>
<!-- End of .container -->

<?php $this->endSection(); ?>
