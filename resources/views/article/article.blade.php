@include('templates.header')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-light mb-4 animated slideInDown">Artikel Kesehatan</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>   
                    <li class="breadcrumb-item"><a href="#">Aktivitas</a></li>                     
                    <li class="breadcrumb-item text-light" aria-current="page"><u>Artikel Kesehatan</u></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
     <!-- start article  -->
     <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <a class="link-article" href="{{ route('usus'); }}">
                <div class="card card-article my-3">
                    <img src="{{ asset('assets/img/article/usus.jpg') }}" class="card-img-top img-article" >
                    <div class="card-body">
                        <p class="card-title article-title">Pentingnya Menjaga Kesehatan Usus</p>
                        <div class="card-text px-2">
                            <p class="calendar"><i class="fas fa-calendar-alt"></i>&ensp;17 Mei 2024 &emsp;&emsp;<i class="fas fa-user"></i>&ensp;Admin</p>
                            <p class="article-resume">Meskipun tidak mungkin menyebabkan secara langsung, kebersihan usus yang buruk dapat berkontribusi ...</p>
                        </div>                 
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-4">
            <a class="link-article" href="{{ route('solafibe'); }}">
                <div class="card card-article my-3">
                    <img src="{{ asset('assets/img/article/solafibe.jpg') }}" class="card-img-top img-article" alt="...">
                    <div class="card-body">
                        <p class="card-title article-title">Diet Mudah Dengan SOLAFIBE!</p>
                        <div class="card-text px-2">
                            <p class="calendar"><i class="fas fa-calendar-alt"></i>&ensp;17 Mei 2024 &emsp;&emsp;<i class="fas fa-user"></i>&ensp;Admin</p>
                            <p class="article-resume">SOLAFIBE, Suplemen Kesehatan untuk diet dengan kandungan fiber yang tinggi dan mengandung Spirulina dan ...</p>
                        </div>
                    </div>
                </div>
            </a>
            </div>

            <div class="col-md-4">
            <a class="link-article" href="{{ route('spirulina'); }}">
                <div class="card card-article my-3">
                    <img src="{{ asset('assets/img/article/spirulina.jpg') }}" class="card-img-top img-article" >
                    <div class="card-body">
                        <p class="card-title article-title">Manfaat Spirulina untuk Kesehatan Tubuh</p>
                        <div class="card-text px-2">
                            <p class="calendar"><i class="fas fa-calendar-alt"></i>&ensp;17 Mei 2024 &emsp;&emsp;<i class="fas fa-user"></i>&ensp;Admin</p>
                            <p class="article-resume">Spirulina termasuk ke dalam jenis ganggang dengan ciri fisik berwarna hijau kebiruan. Tanaman ini tumbuh ...</p>
                        </div>
                    </div>
                </div>
            </a>
            </div>

            <div class="col-md-4">
            <a class="link-article" href="{{ route('klorofil'); }}">
                <div class="card card-article my-3">
                    <img src="{{ asset('assets/img/article/klorofil.jpg') }}" class="card-img-top img-article" >
                    <div class="card-body">
                        <p class="card-title article-title">6 Manfaat Daun Klorofil bagi Kesehatan</p>
                        <div class="card-text px-2">
                            <p class="calendar"><i class="fas fa-calendar-alt"></i>&ensp;17 Mei 2024 &emsp;&emsp;<i class="fas fa-user"></i>&ensp;Admin</p>
                            <p class="article-resume">Klorofil adalah salah satu nutrisi yang terdapat pada warna hijau di daun ...</p>
                        </div>
                    </div>
                </div>
            </a>
            </div>

            <div class="col-md-4">
            <a class="link-article" href="{{ route('psyllium'); }}">
                <div class="card card-article my-3">
                    <img src="{{ asset('assets/img/article/psyllium-husk.jpg') }}" class="card-img-top img-article" >
                    <div class="card-body">
                        <p class="card-title article-title">7 Manfaat Psyllium yang Kaya Serat</p>
                        <div class="card-text px-2">
                            <p class="calendar"><i class="fas fa-calendar-alt"></i>&ensp;17 Mei 2024 &emsp;&emsp;<i class="fas fa-user"></i>&ensp;Admin</p>
                            <p class="article-resume">Psyllium husk adalah sejenis serat larut yang berasal dari sekam biji psyllium ...</p>
                        </div>
                    </div>
                </div>
            </a>
            </div>

            <div class="col-md-4">
            <a class="link-article" href="{{ route('video-usus'); }}">
                <div class="card card-article my-3">
                    <img src="{{ asset('assets/img/article/video-usus.jpeg') }}" class="card-img-top img-article" >
                    <div class="card-body">
                        <p class="card-title article-title">[VIDEO] Usus Bersih VS Usus Kotor</p>
                        <div class="card-text px-2">
                            <p class="calendar"><i class="fas fa-calendar-alt"></i>&ensp;22 Mei 2024 &emsp;&emsp;<i class="fas fa-user"></i>&ensp;Admin</p>
                            <p class="article-resume">[VIDEO] Berikut adalah cuplikan video mengenai perbandingan antara ...</p>
                        </div>
                    </div>
                </div>
            </a>
            </div>

            <div class="col-md-4">
            <a class="link-article" href="{{ route('asam-askorbat'); }}">
                <div class="card card-article my-3">
                    <img src="{{ asset('assets/img/article/askorbat.jpg') }}" class="card-img-top img-article" >
                    <div class="card-body">
                        <p class="card-title article-title">Kenalan dengan Asam Askorbat</p>
                        <div class="card-text px-2">
                            <p class="calendar"><i class="fas fa-calendar-alt"></i>&ensp;07 Juni 2024 &emsp;&emsp;<i class="fas fa-user"></i>&ensp;Admin</p>
                            <p class="article-resume">Asam askorbat atau vitamin C merupakan nutrisi yang berfungsi untuk membentuk ...</p>
                        </div>
                    </div>
                </div>
            </a>
            </div>

            <div class="col-md-4">
            <a class="link-article" href="{{ route('kesehatan-usus'); }}">
                <div class="card card-article my-3">
                    <img src="{{ asset('assets/img/article/usus2.jpg') }}" class="card-img-top img-article" >
                    <div class="card-body">
                        <p class="card-title article-title">Mengapa Kesehatan Usus Penting?</p>
                        <div class="card-text px-2">
                            <p class="calendar"><i class="fas fa-calendar-alt"></i>&ensp;11 Juni 2024 &emsp;&emsp;<i class="fas fa-user"></i>&ensp;Admin</p>
                            <p class="article-resume">“Otak” usus merevolusi pemahaman kita tentang hubungan antara pencernaan ...</p>
                        </div>
                    </div>
                </div>
            </a>
            </div>

        </div>
     </div>
@include('templates.footer')