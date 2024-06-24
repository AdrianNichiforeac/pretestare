@extends('layouts.guest')

@section('content')
<!-- Header -->
<header>
    <div class="container d-flex align-items-center bg-site-image">
        <div class="col-lg-20">
            <h1 class="text-center text-lg-center text-black mb-5 header-title ">
                Platforma de Promovare <br>
            </h1>
            <p class="text-black mb-5 text-center text-lg-center header-description">
                Centrul Republican de Invatamant din subordinea Ministerului Educatiei Publice Platforma unica serveste la popularizarea celor ma bune practici ale pedagogilor
            </p>
            <div class="d-flex justify-content-center justify-content-lg-center">
                <a href="#" class="btn btn-bg-lightgreen border text-white px-4 py-2 me-3">
                    Inscrie-te
                </a>
                <a href="#" class="btn btn-bg-light border  px-4 py-2">                    Autentificare
                </a>
            </div>
        </div>
</header>
<!-- End Header -->
    <div class=" container d-flex align-items-center bg-site-image">
        <div class="col-lg-7">
            <h1 class="color-white">We connect our customers with the best, and help them keep up-and stay open.</h1>
            <img src="{{ asset('assets/images/section1/buttons.png') }}" class="col-lg-10 " alt="#">
        </div>
        <div class="col-lg-8">            <img src="{{ asset('assets/images/section1/photo1.png') }}" class="w-50 p-2 radius" alt="#">
        </div>

    </div>
    
           
<!-- Collections -->
<section class="collections my-30 py-30">
    <div class="container title d-flex flex-column justify-content-center align-items-center flex-lg-row my-3">
        <h2 class="text-white text-center text-lg-center">Produse metodice</h2>
      
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-card ">
                    <div class="card-body">
                        <div class="d-flex flex-wrap">
                            <img src="{{ asset('assets/images/section2/photo1.png') }}" class="w-100  " alt="Metaverse">
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-black mb-2">Dezvoltarea lectiei</h5>
                                    <p class="text-secondary mb-0">Este dezvoltarea unei clase de eșantion de o oră de nivel înalt sau a unui training de grup, bazat pe experiențe internaționale, desfășurat cu metode interactive avansate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-card ">
                    <div class="card-body">
                        <div class="d-flex flex-wrap">
                            <img src="{{ asset('assets/images/section2/photo2.png') }}" class="w-100  " alt="Metaverse">
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-black mb-2">Lectie video</h5>
                                    <p class="text-secondary mb-0">Un videoclip cu o durată de până la 7 minute și un volum de cel mult 300 mb, care explică o prezentare a unei lecții sau o experiență metodică inovatoare personală care luminează metodele interactive în clasă sau activități extracurriculare. Nu contează pe ce dispozitiv a fost făcut videoclipul. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-card ">
                    <div class="card-body">
                        <div class="d-flex flex-wrap">
                            <img src="{{ asset('assets/images/section2/photo3.png') }}" class="w-100 " alt="Metaverse">
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-black mb-2">Ghid metodic</h5>
                                    <p class="text-secondary mb-0">Manuale educaționale metodice; scrisoare de recomandare; brosurile sunt trimise in format pdf.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="collections my-30 py-30">
    <div class="container title d-flex flex-column justify-content-center align-items-center flex-lg-row my-5">
        <h2 class="text-black text-center text-lg-center">Exemple de Lucrari</h2>
      
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-card radius">
                    <div class="card-body">
                        
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-LightSeaGreen mb-0">Xalida Turakulova</h5>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <img src="{{ asset('assets/images/section3/book.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-card radius">
                    <div class="card-body">
                        
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-LightSeaGreen mb-0">Xalida Turakulova</h5>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <img src="{{ asset('assets/images/section3/book.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-card radius">
                    <div class="card-body">
                        
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-LightSeaGreen mb-0">Xalida Turakulova</h5>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <img src="{{ asset('assets/images/section3/book.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Collections -->
@endsection