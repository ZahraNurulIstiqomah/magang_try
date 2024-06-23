@include('templates.header')


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-1 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-light mb-4 animated slideInDown">Promo</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-light text-underline" aria-current="page"><u>Promo</u></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl buesiness-opt py-3 my-3">
        <div class="text-center justify-content-center mx-3">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-promo" src="{{ asset('assets/img/promo/iduladha-2024-05.png') }}" alt="">
                </div>
                <div class="col-md-6">
                    <img class="img-promo" src="{{ asset('assets/img/promo/iduladha-2024-06.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


@include('templates.footer')