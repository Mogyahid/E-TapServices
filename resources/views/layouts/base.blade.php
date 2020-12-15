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
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.css" rel="stylesheet">

        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

        <!-- Custom CSS -->
        <style>
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
                background: url(page_loader.gif) center no-repeat #fff;
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

        <!-- Include the Quill library -->
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/js/fontawesome.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

        <!-- Quill -->
        <script>        

            var quill = new Quill('#editor-container', {
            modules: {
                toolbar: true,
            },
            placeholder: 'Compose an epic...',
            theme: 'snow'  // or 'bubble'
            });
        
            // Wait for window load
            $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");
            });

            var flky = new Flickity( '.carousel', {
                // options, defaults listed

                accessibility: true,
                // enable keyboard navigation, pressing left & right keys

                adaptiveHeight: true,
                // set carousel height to the selected slide

                autoPlay: true,
                // advances to the next cell
                // if true, default is 3 seconds
                // or set time between advances in milliseconds
                // i.e. `autoPlay: 1000` will advance every 1 second
            });

            //TotalAmount Calculation
            document.querySelectorAll('.service_name').forEach((element,index) =>{
                element.addEventListener("change", function(){
                    document.querySelectorAll('.price')[index].checked = this.checked;
                });
            });

            $(function(){
                var dtToday = new Date();
                
                var month = dtToday.getMonth() + 1;
                var day = dtToday.getDate();
                var year = dtToday.getFullYear();
                if(month < 10)
                    month = '0' + month.toString();
                if(day < 10)
                    day = '0' + day.toString();
                
                var maxDate = year + '-' + month + '-' + day;
                $('#deliveryDate').attr('min', maxDate);
            });

        </script>
    </body>
</html>
