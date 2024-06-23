@include('templates.header')
 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-light mb-4 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-light text-underline" aria-current="page"><u>About</u></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl about-us py-5 my-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">                    
                    <img class="img-fluid bg-white w-100 h-100 wow fadeIn" data-wow-delay="0.2s" src="{{ asset('assets/img/landing/bella-terra1.jpg') }}" alt="">                       
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title text-center mx-auto wow fadeInUp">
                        <p class="fs-5 fw-medium fst-italic text-secondary">About Us</p>
                        <h1 class="display-6">PT. Berkat Inti Guna (BIG)</h1>
                    </div>                    
                    <div class="mb-4"></div>
                        <div class="col-sm-12">
                            <p class="mb-0">PT Berkat Inti Guna (BIG) adalah perusahaan MLM yang didirikan pada tahun 2024 dengan komitmen untuk menyediakan produk yang berkualitas dan inovatif. Di sini anda akan mendapatkan kesempatan menjadi wirausaha yang unggul serta kompeten di tengah masyarakat.</p>
                            <p class="mb-0">PT BIG memberikan kesempatan kepada anda untuk mengubah kehidupan dan dapatmembantu orang lain.</p>
                            <p class="mb-0">Sistem MLM di PT BIG adalah benar-benar satu peluang bisnis yang berkualitas dan dapat mengungguli sistem MLM biasa. Bersama PT BIG kami menyiapkan rencana menarik dan berinovasi, dimana prinsip- prinsip transparansi dan keadilan terhadap mitra menjadi dasar utama kami.</p>
                        </div>
                        
                        
                </div>
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-title text-center mx-auto wow fadeInUp">
                            <p class="fs-5 fw-medium fst-italic text-secondary"></p>
                            <h1 class="display-6">Visi - Misi</h1>
                        </div>
                        <p class="mb-4">>   Visi : Menjadi perusahaan yang bermartabat dan peduli terhadap network marketing untuk mewujudkan wirausaha-wirausaha mandiri yang berwawasan sosial menuju masa depan yang lebih baik dari waktu ke waktu.
                        <p class="mb-4">>	Misi : Dengan teknologi sistem informatika yang unggul dan terpercaya, menghasilkan sistem bisnis yang menguntungkan dan produk-produk yang berkualitas serta didukung dengan sistem edukasi usaha yang handal dan profesional.</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@include('templates.footer')