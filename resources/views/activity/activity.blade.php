@include('templates.header')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-light mb-4 animated slideInDown">Gallery</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>                    
                    <li class="breadcrumb-item text-light" aria-current="page"><u>Gallery</u></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- <div class="container-xxl buesiness-opt py-5 my-5">
        <div class="container text-center">            
            <div class="section-title text-center mx-auto wow fadeInUp">
                <h1 class="display-6">ARTICLES</h1>
            </div>
            <img class="img-fluid bg-white w-50 wow fadeIn img-suplement" data-wow-delay="0.2s" src="{{ asset('assets/img/img-product/solafibe.jpg') }}" alt="">
        </div>
    </div> -->
    <!-- product Start -->
    <div class="container-xxl buesiness-opt py-5 my-5">
        <div class="container text-center">            
            <div class="section-title text-center mx-auto wow fadeInUp">
                <h1 class="display-6">GALLERY</h1>
            </div>
            <!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="{{ asset('assets/img/gallery/gallery-1.jpeg') }}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="{{ asset('assets/img/gallery/gallery-3.jpeg') }}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="{{ asset('assets/img/gallery/gallery-5.jpeg') }}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="{{ asset('assets/img/gallery/gallery-6.jpeg') }}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="{{ asset('assets/img/gallery/gallery-2.jpeg') }}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="{{ asset('assets/img/gallery/gallery-4.jpeg') }}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
<!-- Gallery -->
        </div>            
    </div>
    <!-- product End -->
@include('templates.footer')