<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-style.css') }}">
    <style>
        .navbar-custom {
            flex-wrap: nowrap;
        }

        .navbar-custom ul {
            flex-wrap: nowrap;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .navbar-custom ul li {
            display: inline-block;
        }

        .navbar-custom ul li a {
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            color: #333;
        }

        @media (max-width: 767px) {
            .navbar-custom ul {
                display: none;
            }

            .navbar-custom .navbar-toggle-btn {
                display: block;
            }

            .navbar-custom .navbar-toggle-btn a {
                display: block;
                padding: 10px 15px;
                text-decoration: none;
                color: #333;
            }
        }

        .navbar-brand img {
            width: 100px;
            height: 100px;
        }
    </style>
    <title>Puffy's | {{ __('About') }}</title>
</head>

<body>
    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>

    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a href="{{ route('index') }}" class="navbar-brand"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
            </div>
            <!-- MENU LINKS -->
            <div class="navbar-custom">
                <ul>
                <li><a href="{{ route('index') }}">{{ __('Home') }}</a></li>
                    <li><a href="{{route('about')}}">{{ __('About') }}</a></li>
                    <li><a href="{{route('team')}}">{{ __('Chef') }}</a></li>
                    <li><a href="{{route('menu')}}">{{ __('Menu') }}</a></li>
                    <li><a href="{{route('contact')}}">{{ __('Contact') }}</a></li>
                </ul>

            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="about-info">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                            <h4>{{ __('Read our story') }}</h4>
                            <h2>{{ __("We've been Crafting Delicious Pancakes Since 2009") }}</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>{{ __("At Fluffy Pancakes, our journey began in 2009 with a simple yet delicious mission: to serve the fluffiest, most mouthwatering pancakes imaginable. Over the years, we've perfected our recipes, honed our techniques, and delighted countless taste buds with our delightful creations. From classic buttermilk to indulgent chocolate chip, each pancake is lovingly made with the finest ingredients and served with a smile.") }}</p>
                            <p>{{ __("With a passion for pancakes and a commitment to quality, we strive to create an unforgettable dining experience for our customers. Whether you're craving a comforting breakfast or treating yourself to a sweet treat, Fluffy Pancakes is the place to be. Join us in savoring the magic of pancakes, and don't forget to spread the word about Puffy's – because great taste is meant to be shared. Thank you for choosing Fluffy Pancakes!") }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                        <img src="{{ asset('assets/images/about-image.jpg') }}" class="img-responsive" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="footer" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-8">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">{{ __('Find us') }}</h2>
                        </div>
                        <address class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>2419 Botao, <br> Santa Barbara,<br> Pangasinan</p>
                        </address>
                    </div>
                </div>
                <div class="col-md-3 col-sm-8">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">{{ __('Reservation') }}</h2>
                        </div>
                        <address class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>09813216185 | 09776986298</p>
                            <p><a href="#">jpfcompany@gmail.com</a></p>
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-8">
                    <div class="footer-info footer-open-hour">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">{{ __('Open Hours') }}</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>{{ __('Monday: Closed') }}</p>
                            <div>
                                <strong>{{ __('Tuesday to Friday') }}</strong>
                                <p>{{ __('7:00 AM - 9:00 PM') }}</p>
                            </div>
                            <div>
                                <strong>{{ __('Saturday - Sunday') }}</strong>
                                <p>{{ __('11:00 AM - 10:00 PM') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                        <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-google"></a></li>
                    </ul>
                    <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s">
                        <p><br>{{ __('Copyright &copy; 2024') }}<br>JPF
                            <br><br>{{ __('Design:') }} <a rel="nofollow" href="#">Judy Ann Flores</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.1/jquery.stellar.min.js" integrity="sha512-MZiEKWRoqHmTsaur2/0bTQaOT5DqmnMDWuXoYXgNwFzCq+J2rQRIa4uVOmkL7SnIIhis6V4IcPnhqKxgOt8zDg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
