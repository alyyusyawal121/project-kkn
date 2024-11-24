<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>@yield('Company Bootstrap Template')</title>
        <meta name="description" content="">
        <meta name="keywords" content=""> 
        @include('assets')
    </head>

<body>
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container position-relative d-flex align-items-center">
            <a href="{{ route('index') }}" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">Company</h1><span>.</span>
            </a>
            @include('partials.navbar') 
        </div>
    </header>
    


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>
</html>