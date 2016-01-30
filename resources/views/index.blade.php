@extends('layout')
@section('content')
<!--header-->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="img/profile.png" alt="">
                <div class="intro-text">
                    <span class="name">Gospelpillars TV</span>
                    <hr class="star-light">
                    <span class="skills">VIDEOS - AUDIOS - LIVE BROADCAST</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Featured Video</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/cabin.png" class="img-responsive" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- about gospelpillars-->
<section id="aboutGpillars">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>About Gospelpillars TV</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="" class="img-thumbnail">
            </div>
            <div class="col-md-6">
                <blockquote>
                    "On this platform, you can watch and listen to life transforming messages from the word of God through His Prophet and Dynamic Teacher Dr Isaiah Wealth.

                    As a revelatory prophet, his principal gift of teaching answers questions, dissolves doubts, sets people free and ushers them into a life of all round success backed with supernatural proofs from God.

                    His prophetic voice is rapidly going far and wide from Nigeria (the present Head quarters of Gospel Pillars Ministry Inc.) through an ever growing network of churches and campus fellowships in Nigeria, Ghana and North America."
                </blockquote>
            </div>
        </div>
    </div>
</section>

@endsection