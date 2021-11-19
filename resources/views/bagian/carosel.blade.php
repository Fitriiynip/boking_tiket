@extends('admin')

<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/2.jpg" class="d-block w-100" alt="...">

                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/3.jpg" class="d-block w-100" alt="...">


                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/4.jpg" class="d-block w-100" alt="...">


                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
<center><h1>Protokol Kesehatan</h1></center>
      <hr class="featurette-divider">


        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img src="../img/tangan.png" class="bd-placeholder-img rounded-circle" alt="...">



                <h2>Cuci Tangan</h2>
                <p>Memcuci tangan sebelum memasuki gerbong kereta api</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                 <img src="../img/masker.png" class="bd-placeholder-img rounded-circle" alt="...">


                <h2>Memakai masker</h2>
                <p>Wajib memakai masker minimal membawa 2 masker</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="../img/jarak.jpg" class="bd-placeholder-img rounded-circle" alt="...">


                <h2>Jaga Jarak</h2>
                <p>Jaga jarak dan duduk sesuai arahan petugas kereta</p>

            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">
        <div class="container marketing">
            <center>
                <h1>Sejarah-Sejarah Kereta Api</h1>
            </center>
            <hr class="featurette-divider">



         <div class="row featurette">
             <div class="col-md-7">
                 <h2 class="featurette-heading">Sejarah Kereta Api Ciremai<span class="text-muted"></span></h2><br>


                 <p class="lead">Pada 3 Maret 2009, terdapat rencana pengoperasian kereta api yang menghubungkan Bandung dan Cirebon sudah disiapkan dengan nama "Papandayan Ekspres". Adanya pertentangan dari pelaku moda transportasi lain di jalur yang sama dan pihak dari Dinas Perhubungan (Dishub) mengakibatkan kereta api tersebut batal beroperasi.[1]

                     Pada 28 September 2013, kereta api dengan lintasan yang telah direncanakan sebelumnya akhirnya beroperasi untuk melayani satu kali perjalanan lintas Bandung-Cirebon dengan nama "Ciremai".

                     {{-- Mulai 11 Agustus 2014, layanan kereta api Ciremai ditambahkan kelas bisnis dan jumlah perjalanan ditambah sehingga ia melayani empat kali perjalanan—dua di antaranya merupakan kereta api tambahan yang memiliki layanan kelas eksekutif dan bisnis hingga layanan dihapus mulai tanggal 16 Januari 2015.

                     Mulai 3 Oktober 2016, lintas pelayanan kereta api Ciremai diperpanjang hingga Semarang yang disebabkan oleh banyaknya penumpang ingin berpergian dari Bandung menuju arah Semarang.[2][3] Selain itu, kereta api ini mengalami perpindahan operasional dari Daerah Operasi II Bandung menjadi Daerah Operasi IV Semarang, beserta rangkaiannya dimutasi ke Depo Kereta Semarang Poncol (SMC).</p> --}}


             </div>
             <div class="col-md-5">
                 <img src="../img/ciremai.jpg" class="d-block w-100" alt="...">



             </div>
         </div>



        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Sejarah Kereta Api Malabar</h2>
                <p class="lead">Kereta api Malabar merupakan layanan kereta api penumpang kelas eksekutif, bisnis, dan ekonomi yang dioperasikan oleh Kereta Api Indonesia untuk melayani rute Malang–Bandung melalui Blitar–Yogyakarta dan sebaliknya. Kereta api Malabar merupakan kereta api penumpang pertama dan satu-satunya yang memiliki semua layanan kelas dalam satu rangkaian kereta. Nama "Malabar" diambil dari salah satu nama gunung berapi di Jawa Barat, Gunung Malabar.

                    Kereta api Malabar pertama kali beroperasi pada 30 April 2010, melayani penumpang dari Malang dan sekitarnya yang melakukan perjalanan menuju Bandung dan sebaliknya karena pada saat itu tidak ada satu kereta pun yang</p>

            </div>
            <div class="col-md-5 order-md-1">
                <img src="../img/malabar.jpg" class="d-block w-100" alt="...">


            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Sejarah Kereta Api Gumarang </h2>
                <p class="lead">Kereta api Gumarang mulai beroperasi pada 20 Mei 2001 melayani Jakarta Kota–Surabaya Pasar Turi melewati Stasiun Gambir. ... Nama 'Gumarang' berasal dari cerita rakyat Sri, itu adalah sebutan untuk banteng (atau sapi hutan) dalam mitologi Jawa yang digambarkan sebagai satwa yang gagah berani.</p>

            </div>
            <div class="col-md-5">
                 <img src="../img/gumarang1(1).jpg" class="d-block w-100" alt="...">


            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</main>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')

</script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
