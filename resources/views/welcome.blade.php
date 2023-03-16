<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pengkat</title>
        <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|IBM+Plex+Sans:600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('landing/dist/css/style.css') }}">
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    </head>
    <body class="is-boxed has-animations">
        <div class="body-wrap boxed-container">
            <header class="site-header">
                <div class="container">
                    <div class="site-header-inner">
                        <div class="brand header-brand">
                            <h1 class="m-0">
                                <a href="#">
                                    <img class="header-logo-image asset-light" src="landing/dist/images/logo-light.svg" alt="Logo">
                                    <img class="header-logo-image asset-dark" src="landing/dist/images/logo-dark.svg" alt="Logo">
                                </a>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>

            <main>
                <section class="hero">
                    <div class="container">
                        <div class="hero-inner">
                            <div class="hero-copy">
                                <h1 class="hero-title mt-0">Pengaduan Masyarakat</h1>
                                <p class="hero-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis earum quas, adipisci sapiente dolor ipsam corrupti consectetur omnis provident ad, fugiat molestiae. Placeat, excepturi dolores. Commodi quo fugit consequuntur obcaecati.</p>
                                <div class="hero-cta">
                                    <a class="button button-primary" href="{{ route('pengaduan.index') }}">Laporkan!!</a>
                                    <div class="lights-toggle">
                                        <input id="lights-toggle" type="checkbox" name="lights-toggle" class="switch" checked="checked">
                                        <label for="lights-toggle" class="text-xs"><span>Turn me <span class="label-text">dark</span></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-media">
                                <div class="header-illustration">
                                    <img class="header-illustration-image asset-light" src="landing/dist/images/header-illustration-light.svg" alt="Header illustration">
                                    <img class="header-illustration-image asset-dark" src="landing/dist/images/header-illustration-dark.svg" alt="Header illustration">
                                </div>
                                <div class="hero-media-illustration">
                                    <img class="hero-media-illustration-image asset-light" src="landing/dist/images/hero-media-illustration-light.svg" alt="Hero media illustration">
                                    <img class="hero-media-illustration-image asset-dark" src="landing/dist/images/hero-media-illustration-dark.svg" alt="Hero media illustration">
                                </div>
                                <div class="hero-media-container">
                                    <img class="hero-media-image asset-light" src="{{ asset('landing/dist/images/hero-light.png') }}" alt="Hero media">
                                    <img class="hero-media-image asset-dark" src="{{ asset('landing/dist/images/hero-dark.png') }}" alt="Hero media">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            @include('includes.masyarakat.footer')
        </div>

        <script src="{{ asset('landing/dist/js/main.min.js') }}"></script>
    </body>
</html>
