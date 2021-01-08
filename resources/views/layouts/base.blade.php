<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        @hasSection('title')

            <title>@yield('title')</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <!-- Material Icon -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ url(mix('js/app.js')) }}" defer></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Quill Rich Text -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.css" rel="stylesheet">


        <link rel="stylesheet" href="{{ asset('owlcarousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('owlcarousel/owl.theme.default.min.css') }}">

        <!-- Custom CSS -->
        <style>
            tr:nth-child(even) {background-color: #DBDCDD;}
             /* Rules for sizing the icon. */
            .material-icons.md-18 { font-size: 18px; }
            .material-icons.md-24 { font-size: 24px; }
            .material-icons.md-36 { font-size: 36px; }
            .material-icons.md-48 { font-size: 48px; }
            .material-icons.md-60 { font-size: 7rem; }

            /* Rules for using icons as black on a light background. */
            .material-icons.md-dark { color: rgba(0, 0, 0, 0.54); }
            .material-icons.md-dark.md-inactive { color: rgba(0, 0, 0, 0.26); }

            /* Rules for using icons as white on a dark background. */
            .material-icons.md-light { color: rgba(255, 255, 255, 1); }
            .material-icons.md-light.md-inactive { color: rgba(255, 255, 255, 0.3); }

            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
            }

            /* Firefox */
            input[type=number] {
            -moz-appearance: textfield;
            }

            [x-cloak] { display: none; }

            /* This only works with JavaScript, 
            if it's not present, don't show loader */
            .no-js #loader { display: none;  }
            .js #loader { display: block; position: absolute; left: 100px; top: 0; }
            .se-pre-con {
                position: fixed;
                overflow:hidden;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url('/page_loader.gif') center no-repeat #fff;
            }

            #editor-container {
                height: 120px;
            }

            /* width */
            ::-webkit-scrollbar {
            width: 5px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
            background: #f1f1f1; 
            }
            
            /* Handle */
            ::-webkit-scrollbar-thumb {
            background: #888; 
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
            background: #555; 
            }

        </style>      

        <!-- <link rel="styleshee" -->
    </head>

    <body class="font-poppins">
        @yield('body')

        <div class="se-pre-con"></div>
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"></script>

        <!-- Include the Quill library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/js/fontawesome.js"></script>
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
        <script src="{{ asset('owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- Quill -->
        <script> 
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation : true, // Show next and prev buttons
                slideSpeed : 300,
                paginationSpeed : 400,
                items : 1, 
                loop:true,
                autoplay:true,
                autoplayTimeout:3000,
                autoplayHoverPause:true,
                animateOut: 'fadeOut',
                mouseDrag: true,
                touchDrag: true,
                freeDrag: true,
                pullDrag: true,
                dots: true,
                lazyLoad: true
            });

            var dtToday = new Date();
            
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if(month < 10)
                month = '0' + month.toString();
            if(day < 10)
                day = '0' + day.toString();
            
            var maxDate = year + '-' + month + '-' + day;
            $('#delDate').attr('min', maxDate);
        });

            // Laravel Listener for notification
            window.addEventListener('DOMContentLoaded', function(){
                Echo.channel(`approved`)
                .listen('ApprovedRequest', (e) => {
                    console.log('It is working...');
                    window.livewire.emit('ApproveRequest');
                });
            });               
            // Wait for window load
            $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");
            });

            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;

                // Hiding Scrollbar
                var style = document.createElement("style");
                style.innerHTML = `body::-webkit-scrollbar {display: none;}`;
                document.head.appendChild(style);

                // Get the current page scroll position 
                scrollTop = window.pageYOffset || document.documentElement.scrollTop; 
                scrollLeft = window.pageXOffset || document.documentElement.scrollLeft, 
            
                // if any scroll is attempted, set this to the previous value 
                window.onscroll = function() { 
                    window.scrollTo(scrollLeft, scrollTop); 
                }; 
            }

            function enableScroll() { 
                window.onscroll = function() {}; 

                // Hiding Scrollbar
                var style = document.createElement("style");
                style.innerHTML = `body::-webkit-scrollbar {display: block;}`;
                document.head.appendChild(style);
            } 
        </script>
    </body>
</html>
