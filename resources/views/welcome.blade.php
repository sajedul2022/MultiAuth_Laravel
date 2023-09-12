<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bike Management Sytem</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <!-- Icon Font  awesome Stylesheet -->
      <script src="https://kit.fontawesome.com/230a51e61c.js" crossorigin="anonymous"></script>
    <!-- custom css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-8 col-sm-12 col-12">
                    <div class="header_title text-center">
                        <h1 class="text-center responsiteh1">Bike Desk Board </h1>
                        <p class="text-center">Car Management Software.</p>
                    </div>
                    <div class="login_registration  text-end text-white">
                        @if (Route::has('login'))
                            <div class=" loginauthentication">
                                @auth
                                    <a href="{{ url('/home') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Login  </a> |

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                    </div>
                    @endif
                </div>
            </div>
            <!-- 2nd row start -->
            <div class="contactinfo">
                <div class="row">
                    <div class="col-lg-4 col-md-4  ">
                        <div class="part1">
                            <i class="fa-solid fa-location-dot"></i>
                                <p> Baltimore, Maryland, USA</p>
                                {{-- <p> House #: 01 (4th Floor), Road #: 20, Block - J, Baridhara, Dhaka 1212, --}}
                                <p> Baridhara, Dhaka Bangladesh  <p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 ">
                        <div class="part1">
                        <i class="fa-solid fa-envelope"></i>
                            <p> info@aaconsulting.tech </p>
                            <p> sales@aaconsulting.tech </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 ">
                        <div class="part1">
                        <i class="fa-brands fa-whatsapp"></i>
                            <p>+1 443 253 0203 (USA)</p>
                            <p> +880 2 4881 2159   || <span> +88 01672 996464 (BD)  </span> </p>


                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </header>
    <Footer>
        <p>Copyright © 2023 | All Rights Reserved by
            <a target="_blank" href="https://bonikbook.com/aaconsulting/"> A & A Consulting Limited.</a>
        </p>
    </Footer>
    <script src="{{ asset('js/bundle.min.js') }}"></script>
</body>

</html>
