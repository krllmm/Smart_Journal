<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">


    <script src="{{ asset('build/assets/app.js') }}" defer></script>

    <title>Login</title>
</head>
<body>

    <header class="container-fluid col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container">
            <a class="navbar-brand" href="#">Smart Journal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link text-black" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#">Register</a>
                </li>
                <li class="nav-item">
                    {{-- Якорь до секции снизу --}}
                    <a class="nav-link text-black" href="#faq_section">About</a>
                </li>
                <li class="nav-item">
                    {{-- Еще якорь до секции снизу --}}
                    <a class="nav-link text-black" href="#socials_section">Contacts</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>

    <div class="main">
        <div class="slider">


            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://source.unsplash.com/RCAhiGJsUUE/1920x1080" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://source.unsplash.com/lHGeqh3XhRY/1920x1080" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://source.unsplash.com/wfh8dDlNFOk/1920x1080" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>


        </div>
        <div class="advantages">
            advantages
        </div>
        <div class="services">
            что можно делать на сайте
        </div>
        <div class="faq_section d-flex" id="faq_section">
            <div class="faq">
                Ответы на вопросы
            </div>
            <div class="about">
                О нас
            </div>
        </div>
        <div class="socials_section d-flex" id="socials_section">
            <div class="response ">
                Отправь мне письмо
            </div>
            <div class="socials">
                Соц сети
            </div>
        </div>
    </div>

    <footer class="container-fluid col-12">
        footer
    </footer>


</body>
</html>
