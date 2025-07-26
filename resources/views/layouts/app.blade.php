<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shreeyash Construction - Premier Civil Contractor in Maharashtra | Road Construction, Industrial Sheds</title>
    <meta name="description" content="Leading civil contractor in Maharashtra specializing in asphalt road construction, concrete roads, GSB/WMM laying, industrial sheds, and infrastructure projects across Mumbai, Pune, Raigad.">
    <meta name="keywords" content="asphalt contractor Maharashtra, GSB WMM road laying, concrete road contractor, compound wall builder, civil contractor Mumbai Pune">

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font Awesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- Custom Styles --}}
    <style>
        .hero-bg {
            background: linear-gradient(135deg, rgba(75, 85, 99, 0.9), rgba(251, 191, 36, 0.8)), 
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23f3f4f6" width="1200" height="600"/><path fill="%23e5e7eb" d="M0 300L50 280C100 260 200 220 300 200C400 180 500 180 600 200C700 220 800 260 900 280C1000 300 1100 300 1150 300L1200 300V600H1150C1100 600 1000 600 900 600C800 600 700 600 600 600C500 600 400 600 300 600C200 600 100 600 50 600H0V300Z"/></svg>');
            background-size: cover;
            background-position: center;
        }
        .service-card:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
        .sticky-nav {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
        }
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        .page-section {
            display: none;
        }
        .page-section.active {
            display: block;
        }
    </style>
</head>

{{-- <body class="bg-gray-100 text-gray-800"> --}}

    {{-- Header --}}
    @include('layouts.header')

    {{-- Main Content --}}
    {{-- <main class="container"> --}}
        <main class="container ">

        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

{{-- </body> --}}
</html>
