@include('templates.header2')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-light mb-4 animated slideInDown">Solafibe Suplement Drink</h1>
            <nav aria-label="breadcrumb animated slideInDown">                
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
<div class="container mt-5">
<iframe
    src="{{ asset('assets/pdf/Solafibe.pdf') }}"
    frameBorder="1"
    scrolling="auto"
    height="1000"
    width="100%"
></iframe>
    <!-- <embed type="application/pdf" src="{{ asset('assets/pdf/Solafibe.pdf') }}" style="width: 100%; height:2100px;"></embed> -->
</div>
@include('templates.footer')