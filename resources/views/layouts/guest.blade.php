<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="pixelstrap">
        <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">

        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
        @include('layouts.css')
        @yield('style')
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
            @yield('content')

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        @include('layouts.script')
        <script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
        <script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
        <script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
        <script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
        <script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
        <script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
        <script src="{{asset('assets/js/email-app.js')}}"></script>
        <script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
    </body>
</html>
