@include('templates.header')

    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/img/banner/healthy-banner.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-center">
                                    <!-- <p class="fs-4 text-white animated zoomIn">Welcome to <strong class="text-light">COMPANY NAME</strong></p> -->
                                    <b><p class="displays mb-2 mt-5 animated zoomIn">HEALTHY AND WELLNESS</p></b>
                                        <hr>
                                    <i><p class="displays1 mb-5 animated zoomIn">Grow Together with Us!</p></i>
                                    <!-- <a href="" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>            
        </div>
    </div>
    <!-- Carousel End -->
<?php
 $date = date('dmY');
 if ($date >= '13062024' && $date <= '20062024') :  
?>
    <!-- promo -->
    <!-- <div class="container-xxl buesiness-opt py-3 my-3"  style="background-color: bisque;">
    <div class="section-title text-center mx-auto wow fadeInUp">
                <h1>PROMO TERSEDIA!</h1>
            </div>
        <div class="text-center justify-content-center mx-3">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-promo" src="{{ asset('assets/img/promo/iduladha-2024-01.jpg') }}" alt="">
                </div>
                <div class="col-md-6">
                    <img class="img-promo" src="{{ asset('assets/img/promo/iduladha-2024-02.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- end promo -->
<?php 
endif;
?>
    <!-- Article Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid w-100 h-100" src="{{ asset('assets/img/landing/discuss1.jpg') }}" alt="">
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">                        
                        <h1 class="display-6">Sekilas Tentang PT. BIG</h1>
                    </div>
                    <p class="mb-4">PT BIG memberikan kesempatan kepada anda untuk mengubah kehidupan dan dapatmembantu orang lain.</p>
                    <p class="mb-4">Sistem MLM di PT BIG adalah benar-benar satu peluang bisnis yang berkualitas dan dapat mengungguli sistem MLM biasa. Bersama PT BIG kami menyiapkan rencana menarik dan berinovasi, dimana prinsip- prinsip transparansi dan keadilan terhadap mitra menjadi dasar utama kami.</p>
                    <!-- <a href="" class="btn btn-secondary rounded-pill py-3 px-5">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Article End -->
      

    <!-- product Start -->
    <div class="container-xxl buesiness-opt py-5 my-5">
        <div class="container text-center">
            <p class="fs-5 fw-medium fst-italic text-secondary">Our Products</p>
            <div class="section-title text-center mx-auto wow fadeInUp">
                <h1 class="display-6"><span class="detox-title detox-purple">SOLA</span><span class="detox-title detox-green">FIBE</span></h1>
            </div>                    
            <div class="row justify-content-center">
                <img class="img-grade-bpom" data-wow-delay="0.2s" src="{{ asset('assets/img/logo/bpom.png') }}" alt="">
                <img class="img-grade-gmp" data-wow-delay="0.2s" src="{{ asset('assets/img/logo/gmp.png') }}" alt="">
                <img class="img-grade-haccp" data-wow-delay="0.2s" src="{{ asset('assets/img/logo/haccp.png') }}" alt="">
                <img class="img-grade-halal" data-wow-delay="0.2s" src="{{ asset('assets/img/logo/halal.png') }}" alt="">
            </div>
            <img class="img-fluid bg-white w-50 wow fadeIn img-suplement" data-wow-delay="0.2s" src="{{ asset('assets/img/img-product/solafibe.jpg') }}" alt="">                       
        </div>
            <p class="mt-5 p-3 product" data-wow-delay="0.5s">            
            <span class="detox-title">Suplemen yang baik untuk <span class="detox-title detox-orange">detox</span></span><br><br>
            Suplemen serat makanan yang ditemukan dalam buah-buahan, sayuran, biji-bijian dan kacang-kacangan. Bermanfaat untuk : <br>
            > Membantu buang air besar yang teratur <br>
            > Mencegah dan mengatasi sembelit <br>
            > Meredakan gejala sindrom iritasi usus (IBS) <br>
            > Membantu menurunkan kadar kolesterol dalam darah <br>
            > Membantu menurunkan kadar gula darah <br>
            > Membantu penurunan berat badan <br>
            > Mengurangi risiko kanker usus <br><br>            
            </p>

    </div>
    <!-- product End -->
    
    <!-- Testimonial Start -->
    <div class="container-fluid testimonial">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-secondary">Testimonial</p>
                <h1 class="display-6">Testimoni Pengguna SOLAFIBE</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
                <!-- <div class="testimonial-item">
                    <img src="{{ asset('assets/img/testimoni/foto-testimoni5.png')}}" alt="">
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid img-user flex-shrink-0" src="{{ asset('assets/img/profile-pict/woman.png')}}" alt="">
                        <div class="text-start ms-3">
                            <h5>Ina</h5>
                            <span class="text-secondary">Cilincing, Jakarta</span>
                        </div>
                    </div>
                </div> -->
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Pada pemakaian pertama reaksi 2x setelah 6jam minum, Hasil fases mengambang kepermukaan. Tidak menimbulkan mules berlebihan. Perbedaaan dengan fiber lain nya, reaksi nya dpt di kontrol. Sementara product sebelum nya. Jika ingin reaksi. Langsung tidak bisa di kendalikan. Sehingga repot jika Kita  dalam perjalanan</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid img-user flex-shrink-0" src="{{ asset('assets/img/profile-pict/man.png')}}" alt="">
                        <div class="text-start ms-3">
                            <h5>Pak Sam</h5>
                            <span class="text-secondary">Jakarta</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Reaksi di Sy banyak hingga bisa 3-4x Dan hasil buang nya banyak. Reaksi di saya +/- 6 jam Rasanya enak. Serasa minum jus buah. Tidak seperti minum fiber yang lain nya .</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid img-user flex-shrink-0" src="{{ asset('assets/img/profile-pict/woman.png')}}" alt="">
                        <div class="text-start ms-3">
                            <h5>Ina</h5>
                            <span class="text-secondary">Cilincing, Jakarta</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Saya sudah nyoba 2 kali teh buang2 air besar pada paginya dua x buang air besar.... setiap minum it perute plong soale kaya hbis dikuras teh🙏. Bikin badane enak. BAB lebih enak banding dengan produk lain</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid img-user flex-shrink-0" src="{{ asset('assets/img/profile-pict/man.png')}}" alt="">
                        <div class="text-start ms-3">
                            <h5>Pak Joko</h5>
                            <span class="text-secondary">Guru PNS Kendal</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Setelah coba , sembelit sy tdk keras lagi tdk perlu mengejan, pup dan kentut keluar lancar tidak perlu lama lama di toilet. Perut tidak kembung, Makan sedikit , bisa banyak yang di keluarkan. Perut jadi enak krn tidak penuh gas.</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid img-user flex-shrink-0" src="{{ asset('assets/img/profile-pict/woman.png')}}" alt="">
                        <div class="text-start ms-3">
                            <h5>Bu Yanti</h5>
                            <span class="text-secondary">Bandung</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Minum Fiber selain rasanya yg enak.. Efek nya buang air setelah 8 jam minum..bisa 3 kali.. Dan napsu makan berkurang 🙏</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid img-user flex-shrink-0" src="{{ asset('assets/img/profile-pict/woman.png')}}" alt="">
                        <div class="text-start ms-3">
                            <h5>Levi</h5>
                            <span class="text-secondary">Jakarta</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Ini lebih enak dari produk lain yang pernah saya minum. Ini rasa buah tetap ada, tapi ga kemanisan, enak.</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid img-user flex-shrink-0" src="{{ asset('assets/img/profile-pict/woman.png')}}" alt="">
                        <div class="text-start ms-3">
                            <h5>Wanda</h5>
                            <span class="text-secondary">Surabaya</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Saya sudah minum Solafibe 9 hari So far teratur, Yang pasti mulesnya tidak mengganggu, Dan badan terasa lebih enteng, Paling terasa di bagian perut agak sedikit mengecil, Sepertinya lemak2 di bagian tertentu juga sedikit hilang.</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid img-user flex-shrink-0" src="{{ asset('assets/img/profile-pict/woman.png')}}" alt="">
                        <div class="text-start ms-3">
                            <h5>Ibu Grace</h5>
                            <span class="text-secondary">Jakarta</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Berat Badan sy dari Hari Minggu kmrn Tgl 26 Mei 2024, setelah Makan di SPH ( Soto Pak Hasan ) mencapai 98,70, tp Dari Tgl 27 - 30 Mei sy minum SOLAFIBE ( 1 Hari = 1 Sachet ) saat sebelum tidur, Puji Tuhan Pagi ini Tgl 31 Mei timbangan sy sdh turun mencapai = 94,65 ( Tanpa Gym & Jaga Makan ) karena sejak minum SOLAFIBE BAB sy lancar🙏🙏🙏</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid img-user flex-shrink-0" src="{{ asset('assets/img/profile-pict/man.png')}}" alt="">
                        <div class="text-start ms-3">
                            <h5>Pak Lukman</h5>
                            <span class="text-secondary">Jakarta</span>
                        </div>
                    </div>
                </div>                
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Gw dah 1 minggu ga bisa BAB, yg bikin kalau gw makan malah gw jd mual & muntah. Gw trus mikir mau nyoba sola fibe nya ko pin, kemarin gw di kasih sample 2 bks, gw coba minum 1 semalam. Pagi ini gw bab 1* cuma dikit, barusan gw bab lg lumayan lancar dan cukup banyak, badan otomatis jd rada enteng😁</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid img-user flex-shrink-0" src="{{ asset('assets/img/profile-pict/woman.png')}}" alt="">
                        <div class="text-start ms-3">
                            <h5>Lina Soeliarty</h5>
                            <span class="text-secondary">Jakarta</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Contact Start -->
    <div class="container-xxl about-us contact py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-secondary">Contact Us</p>
                <h1 class="display-6">Contact us right now</h1>
            </div>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-9">
                    <p class="text-center mb-5">Minat untuk bergabung? Hubungi Kontak kami Dibawah ini</p>
                    <div class="row g-5">
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-envelope fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">support@berkatintiguna.com</p>
                            <!-- <p class="mb-0">support@example.com</p> -->
                        </div>
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-phone fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">0813-20009-819</p>
                            <!-- <p class="mb-0">+012 345 67890</p> -->
                        </div>
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">Bella Terra Lifestyle Center Lt. UG</p>
                            <p class="mb-0">Jl. Boulevard Raya Kav.1, Kelapa Gading, Jakarta Utara 14240</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Start -->   
</body>
@include('templates.footer')