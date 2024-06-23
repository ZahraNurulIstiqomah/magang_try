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
    <div class="container-xxl buesiness-opt py-5 my-5">
        <div class="container text-center mb-5">            
            <div class="section-title text-center mx-auto wow fadeInUp mb-5">
                <h1 class="display-6">[VIDEO] USUS BERSIH VS USUS KOTOR</h1>
            </div>
            <!-- <img class="img-fluid bg-white w-50 wow fadeIn img-suplement" data-wow-delay="0.2s" src="{{ asset('assets/img/article/usus.jpg') }}" alt=""> -->
            <p>Berikut adalah cuplikan video yang memperlihatkan perbandingan usus yang bersih dan usus yang kotor.</p>
            <iframe style="width: 100%; height:500px;" src="https://www.youtube.com/embed/I69oefwcU9M" frameborder="0" allowfullscreen></iframe>
            <!-- <video style="width: 100%;" controls><source src="{{ asset('assets/video/article/usus.mp4') }}" type="video/mp4"></video> -->
        </div>
        <div class="container-xxl">

    </div>        
</div>    
@include('templates.footer')