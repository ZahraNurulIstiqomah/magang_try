@include('templates.header')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-light mb-4 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-light" aria-current="page"><u>Products</u></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    
    <!-- product Start -->
    <div class="container-xxl buesiness-opt py-5 my-5">
        <div class="container text-center">
            <p class="fs-5 fw-medium fst-italic text-secondary">Our Products</p>
            <div class="section-title text-center mx-auto wow fadeInUp">
                <h1 class="display-6">PROGRAM DETOX 2 BULAN</h1>
            </div>                    
            <img class="img-fluid bg-white w-50 wow fadeIn img-suplement" data-wow-delay="0.2s" src="{{ asset('assets/img/img-product/solafibe.jpg') }}" alt="">                       
        </div>
            <p class="mt-5 p-3 mb-5" data-wow-delay="0.5s">
            Saat ini, detox menjadi salah satu metode kesehatan populer yang bisa mengeliminasi toksin berbahaya di tubuh. Detox biasanya dilakukan dengan cara berpuasa, minum suplemen, atau mengonsumsi beberapa makanan tertentu.<br><br>
            <span class="detox-title">Apa itu <span class="detox-title detox-orange">detox</span>?</span><br><br>
            Detox adalah cara membersihkan toksin dari dalam organ tubuh, seperti dari darah, usus, hati, kulit, dan paru-paru. Toksin bisa berupa polusi, bahan kimia yang terserap ke tubuh, makanan “kotor” yang kita konsumsi dari fast food dan makanan instan, serta zat berbahaya lainnya. Detox memiliki banyak manfaat untuk kesehatan tubuhmu, di antaranya: <br>
            > Menstimulasi liver untuk mengurangi toksin di tubuh. <br>
            > Memicu pembersihan toksin dari feses, urine, dan keringat. <br>
            > Meningkatkan sirkulasi darah. <br>
            > Menjaga berat badan tetap ideal. <br>
            > Menambah nutrisi yang dibutuhkan oleh tubuh. <br>
            Detox dapat membantu mengatasi berbagai gangguan kesehatan, seperti obesitas, masalah pencernaan, penyakit autoimun, peradangan, diabetes, alergi, masalah kulit, mudah lelah, asam urat, kolesterol, dan perut kembung. <br><br>
            <span class="detox-title">Suplemen Yang baik untuk <span class="detox-title detox-orange">detox</span></span><br><br>
            Suplemen serat makanan yang ditemukan dalam buah-buahan, sayuran, biji-bijian dan kacang-kacangan. Bermanfaat untuk : <br>
            > Membantu buang air besar yang teratur <br>
            > Mencegah dan mengatasi sembelit <br>
            > Meredakan gejala sindrom iritasi usus (IBS) <br>
            > Membantu menurunkan kadar kolesterol dalam darah <br>
            > Membantu menurunkan kadar gula darah <br>
            > Membantu penurunan berat badan <br>
            > Mengurangi risiko kanker usus <br><br>
            <span class="detox-title">ANJURAN MINUM SOLA<span class="detox-title detox-green">FIBE</span></span><br><br>
            Setiap malam sebelum tidur. Campurkan 1 sachet dengan 150 ml air
            </p>

        <div class="keunggulan mt-5">
            <div class="section-title text-center mx-auto wow fadeInUp">
                <h2>KEUNGGULAN SOLAFIBE</h2>
            </div>
            <img src="{{ asset('assets/img/img-product/keunggulan.jpg') }}" class="px-3 w-100" alt="">
        </div>

        <div class="ingredient mt-5">
            <div class="section-title text-center wow fadeInUp">
                <h2>INGREDIENTS</h2>
            </div>
            <img src="{{ asset('assets/img/img-product/ingredient.jpg') }}" class="px-3 w-100" alt="">
        </div>

    </div>
    <!-- product End -->
@include('templates.footer')