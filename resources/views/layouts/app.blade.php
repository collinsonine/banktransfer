<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @livewireStyles
</head>

<body>
    <div class="container-fluid">
        {{-- start navbar --}}
        <div class="card mt-2 bg-light text-primary border-0">
            <marquee behavior="" direction=""> Welcome to Crypto Live Prices</marquee>
        </div>
        <nav class="navbar bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="font-family: 'Bebas Neue', sans-serif; font-family: 'Raleway', sans-serif;">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000"
                        style="enable-background:new 0 0 1000 1000;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                                fill: #ffffff;
                            }

                            .st1 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                                fill: #0055D5;
                            }
                        </style>
                        <g>
                            <g>
                                <g>
                                    <path id="SVGID_1_" class="st0"
                                        d="M500,0c276.1,0,500,223.9,500,500s-223.9,500-500,500S0,776.1,0,500S223.9,0,500,0L500,0z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path id="SVGID_3_" class="st1"
                                        d="M272,330.8c0,0-53.8-43-57.5,63.2c-3.7,82.3-3.6,242.1,34.5,317.6
				c16.1,28.4,37.6,19.7,77.6-8.6c34.8-25.7,160.7-141.7,214-192.6S702,313.5,724.5,412.7c8.9,41.7,19.9,77.1,11.5,169.6
				c-2.6,28.5-14.8,50.1-70.4,11.5c-42-27-81.9-56-81.9-56s-7.7-13.8-25.9,8.6c-14.3,17.9-21.5,22.3,1.4,35.9
				c23,13.6,139.3,93.8,183.9,106.3c36.8,10.7,57.8,10.5,58.9-61.8c-0.2-57.4-3.5-221.7-24.4-291.7c-15.8-43.6-39-63.4-89.1-14.4
				S480.4,522.9,394,592.3c-57.3,43-81.8,81.8-103.4,10.1c-15.2-54.3-34.9-223.3,27.3-191.1c38.9,18.6,58.3,18.5,43.1,30.2
				c-15.2,11.6-58.9,51.7-58.9,51.7s-13.5,10.9-7.2,34.5c6.3,16.5,6.3,24.7,40.2-7.2s58.9-56,58.9-56s5.4-8.5,21.5,7.2
				s18.7,20.1,18.7,20.1s4.3,11.7,21.5-8.6c17.3-20.3,28.4-32.7-4.3-51.7C418.8,412.3,272,330.8,272,330.8L272,330.8z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Pricing</a>
                        <a class="nav-link" href="{{route('make.transfer')}}">Make Transfer</a>
                    </div>
                </div>
            </div>
        </nav>
        {{-- end navbar --}}

        {{-- start content --}}
        @yield('content')
        {{-- end content --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
    @livewireScripts
</body>

</html>
