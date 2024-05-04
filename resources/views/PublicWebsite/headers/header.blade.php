  

<!DOCTYPE html>
{{-- <html lang="en"> --}}
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
            <title>Mena MPL </title>
        
            <meta name="description" content="MPL">
            <meta name="keywords" content="game, gaming, mpl, mobile legends">
            <meta name="author" content="_nK">
        
            <link rel="icon" type="image/png" href="{{ asset('publicAssetFile/assets/images/favicon.png') }}">
        
            <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <!-- START: Styles -->
        
            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">
        
            <!-- Bootstrap -->
            <link rel="stylesheet" href="{{ asset('publicAssetFile/assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
        
            <!-- FontAwesome -->
            <script defer src="{{ asset('publicAssetFile/assets/vendor/fontawesome-free/js/all.js') }}"></script>
            <script defer src="{{ asset('publicAssetFile/assets/vendor/fontawesome-free/js/v4-shims.js') }}"></script>
        
            <!-- IonIcons -->
            <link rel="stylesheet" href="{{ asset('publicAssetFile/assets/vendor/ionicons/css/ionicons.min.css') }}">
        
            <!-- Flickity -->
            <link rel="stylesheet" href="{{ asset('publicAssetFile/assets/vendor/flickity/dist/flickity.min.css') }}">
        
            <!-- Photoswipe -->
            <link rel="stylesheet" type="text/css" href="{{ asset('publicAssetFile/assets/vendor/photoswipe/dist/photoswipe.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('publicAssetFile/assets/vendor/photoswipe/dist/default-skin/default-skin.css') }}">
        
            <!-- Seiyria Bootstrap Slider -->
            <link rel="stylesheet" href="{{ asset('publicAssetFile/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css') }}">
        
            <!-- Summernote -->
            <link rel="stylesheet" type="text/css" href="{{ asset('publicAssetFile/assets/vendor/summernote/dist/summernote-bs4.css') }}">
        
            <!-- GoodGames -->
            <link rel="stylesheet" href="{{ asset('publicAssetFile/assets/css/goodgames.css') }}">
        
            <!-- Custom Styles -->
            <link rel="stylesheet" href="{{ asset('publicAssetFile/assets/css/custom.css') }}">
            
            <!-- END: Styles -->
        
            <!-- jQuery -->
            <script src="{{ asset('publicAssetFile/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
            
            
        </head>
        
        
        <!--
            Additional Classes:
                .nk-page-boxed
        -->
        <body>
            
                
        
        
        
        <!--
            Additional Classes:
                .nk-header-opaque
        -->
        <header class="nk-header nk-header-opaque">
        
            
            
        <!-- START: Top Contacts -->
        <div class="nk-contacts-top">
            <div class="container">
                <div class="nk-contacts-left">
                    <ul class="nk-social-links">
                        <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                        <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                        <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a class="nk-social-twitter" href="#" target="_blank"><span class="fab fa-twitter"></span></a></li>
                    </ul>
                </div>
                <div class="nk-contacts-right">
                    <ul class="nk-contacts-icons">
                        <!-- <li>
                            <a href="#" data-toggle="modal" data-target="#modalSearch">
                                <span class="fa fa-search"></span>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Top Contacts -->
        
            
        
            <!--
                START: Navbar
        
                Additional Classes:
                    .nk-navbar-sticky
                    .nk-navbar-transparent
                    .nk-navbar-autohide
            -->
            <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
                <div class="container">
                    <div class="nk-nav-table">
                        
                        <a href="" class="nk-nav-logo">
                            <img src="{{ asset('publicAssetFile/assets/MPL/logo.png') }}" alt="GoodGames" width="100px">
                        </a>
                        
            <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                <li>
                    <a href="{{ Route('public.index') }}">
                        {{ __('messages.home') }}        
                    </a>
                </li>
                <li>
                    <a href="{{ Route('public.news') }}">
                        {{ __('messages.News') }}                
                    </a>
                </li>
                <li>
                    <a href="{{ Route('public.scheduales') }}">
                        {{ __('messages.Schedule') }}                
                        
                    </a>
                </li>
                
                <li>
                    <a href="{{ Route('public.teams') }}">
                    {{ __('messages.teams') }}                
                    </a>
                </li>
        
                <li>
                    <a href="{{ Route('public.lives') }}">
                        {{ __('messages.lives_recorded') }}                
                    </a>        
                </li>
    
                @foreach (config('localization.locales') as $locale)
                    <li>
                        <a class="dropdown-item text-white" href="{{ route('localization',$locale) }}">{{ __($locale) }}</a>
                    </li>
                @endforeach        

            </ul>
                        </ul>
                        <ul class="nk-nav nk-nav-right nk-nav-icons">
                                <li class="single-icon d-lg-none">
                                    <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                        <span class="nk-icon-burger">
                                            <span class="nk-t-1"></span>
                                            <span class="nk-t-2"></span>
                                            <span class="nk-t-3"></span>
                                        </span>
                                    </a>
                                </li>        
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- END: Navbar -->
        
        </header>
        
            
            
                <!--
            START: Navbar Mobile
        
            Additional Classes:
                .nk-navbar-left-side
                .nk-navbar-right-side
                .nk-navbar-lg
                .nk-navbar-overlay-content
        -->
        <div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
            <div class="nano">
                <div class="nano-content">
                    <a href="index.html" class="nk-nav-logo">
                        <img src="{{ asset('publicAssetFile/assets/MPL/logo.png') }}" alt="" width="120">
                    </a>
                    <div class="nk-navbar-mobile-content">
                        <ul class="nk-nav">
                            <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Navbar Mobile -->
        
            
        
            <div class="nk-main">
                
                    <div class="nk-gap-2"></div>
                
        
                