<!DOCTYPE html>
<html lang="en" x-data>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'Shreeyash Construction')</title>
  <link rel="icon" type="image/png" href="{{ asset('storage/logo/logor.png') }}" sizes="32x32" />
  <link rel="apple-touch-icon" href="{{ asset('storage/logo/logor.png') }}" />

  {{-- META RESOLUTION: prefer @section('meta'), else @push('meta'), else fallback --}}
  @php
    $pushedMeta = trim($__env->yieldPushContent('meta'));
  @endphp

  @hasSection('meta')
    @yield('meta')
  @elseif (!empty($pushedMeta))
    {!! $pushedMeta !!}
  @else
    <meta name="description" content="Shreeyash Construction delivers roads, civil & industrial infrastructure projects across Maharashtra with quality and on-time execution.">
  @endif

  @stack('head')

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Alpine.js -->
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  <!-- Font Awesome (once only) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- Google tag (gtag.js) -->
  <meta name="google-site-verification" content="GfMVjFuS2NSpl5t-LirQJ4EIorI5NQEia_3qmeGr-U4" />

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-VQKZ0NE0RS"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-VQKZ0NE0RS');
    gtag('config', 'AW-17683199901');
  </script>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Header + mobile menu styles -->
  <style>
    body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Inter", sans-serif;
    }

    /* HEADER WRAPPER */
    .header-wrapper {
      position: sticky;
      top: 0;
      z-index: 50;
      background: #ffffff;
      box-shadow: 0 1px 0 rgba(15, 23, 42, 0.06);
      transition: all 0.3s ease;
    }
    .header-wrapper.scrolled {
      box-shadow: 0 8px 30px rgba(15, 23, 42, 0.15);
      transform: translateY(-1px);
    }

    /* TOP BAR */
    .top-bar {
      background: #0f172a;
      color: #e5e7eb;
      font-size: 13px;
      padding: 6px 0;
    }
    .top-link {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      color: #e5e7eb;
      text-decoration: none;
      font-weight: 500;
    }
    .top-link i {
      font-size: 13px;
    }
    .top-link:hover {
      color: #fbbf24;
    }

    /* MAIN NAV */
    .main-nav {
      background: #ffffff;
      border-bottom: 1px solid rgba(15, 23, 42, 0.05);
    }
    .nav-content {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px 0;
      gap: 24px;
    }

    /* LOGO */
    .logo-wrapper {
      display: flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
    }
    .logo-icon-img {
      height: 56px;
      width: auto;
      object-fit: contain;
    }
    .logo-text {
      display: flex;
      flex-direction: column;
      line-height: 1.1;
    }
    .logo-primary {
      font-size: 18px;
      font-weight: 800;
      color: #0f172a;
      letter-spacing: -0.02em;
    }
    .logo-secondary {
      font-size: 13px;
      font-weight: 600;
      text-transform: uppercase;
      color: #64748b;
      letter-spacing: 0.18em;
    }

    /* DESKTOP MENU */
    .desktop-menu {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      gap: 28px;
    }
    .desktop-menu .nav-link {
      position: relative;
      color: #0f172a;
      text-decoration: none;
      font-weight: 500;
      font-size: 15px;
      padding: 8px 0;
      display: inline-flex;
      align-items: center;
      gap: 4px;
      transition: color 0.25s ease;
    }
    .desktop-menu .nav-link::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      width: 0;
      height: 2px;
      border-radius: 999px;
      background: linear-gradient(90deg, #f97316, #fbbf24);
      transition: width 0.25s ease;
    }
    .desktop-menu .nav-link:hover {
      color: #f97316;
    }
    .desktop-menu .nav-link:hover::after {
      width: 100%;
    }

    .dropdown-wrapper {
      position: relative;
    }
    .chevron-icon {
      font-size: 11px;
      transition: transform 0.25s ease;
    }
    .dropdown-wrapper:hover .chevron-icon {
      transform: rotate(180deg);
    }

    /* MEGA MENU */
    .mega-menu {
      position: absolute;
      left: 50%;
      transform: translateX(-50%) translateY(10px);
      top: 100%;
      min-width: 780px;
      background: #ffffff;
      border-radius: 18px;
      padding: 20px 22px;
      box-shadow: 0 24px 60px rgba(15, 23, 42, 0.18);
      opacity: 0;
      visibility: hidden;
      transition: all 0.25s ease;
    }
    .dropdown-wrapper:hover .mega-menu {
      opacity: 1;
      visibility: visible;
      transform: translateX(-50%) translateY(0);
    }
    .mega-menu-content {
      padding: 4px 2px;
    }
    .service-category {
      padding: 14px 14px 12px;
      border-radius: 14px;
      background: linear-gradient(145deg, #ffffff, #f9fafb);
      border: 1px solid rgba(148, 163, 184, 0.2);
      height: 100%;
    }
    .category-header {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 10px;
    }
    .category-icon {
      font-size: 20px;
    }
    .category-title {
      font-size: 14px;
      font-weight: 700;
      color: #0f172a;
      letter-spacing: -0.01em;
    }
    .service-list {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .service-list li {
      margin-bottom: 6px;
    }
    .service-list a {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      color: #64748b;
      font-size: 13px;
      font-weight: 500;
      text-decoration: none;
      padding: 4px 0;
      transition: all 0.2s ease;
    }
    .service-list a::before {
      content: "";
      width: 6px;
      height: 6px;
      border-radius: 999px;
      background: rgba(248, 171, 25, 0.6);
      transform: scale(0.8);
      transition: transform 0.2s ease, background 0.2s ease;
    }
    .service-list a:hover {
      color: #f97316;
      transform: translateX(3px);
    }
    .service-list a:hover::before {
      background: #f97316;
      transform: scale(1);
    }

    /* CTA BUTTON */
    .cta-button {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 10px 20px;
      border-radius: 999px;
      border: none;
      text-decoration: none;
      font-weight: 600;
      font-size: 14px;
      background: linear-gradient(135deg, #f97316, #facc15);
      color: #111827;
      box-shadow: 0 14px 30px rgba(248, 171, 25, 0.45);
      transition: all 0.2s ease;
      white-space: nowrap;
    }
    .cta-button:hover {
      transform: translateY(-1px);
      box-shadow: 0 18px 40px rgba(248, 171, 25, 0.6);
      color: #111827;
    }

    /* MOBILE */
    @media (max-width: 991.98px) {
      .desktop-menu {
        display: none;
      }
    }

    /* --- MOBILE MENU BUTTON & PANEL (from your code) --- */

    .mobile-menu-btn {
      width: 48px;
      height: 48px;
      border: none;
      background: linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(249, 115, 22, 0.1));
      color: #0f172a;
      font-size: 20px;
      cursor: pointer;
      border-radius: 12px;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .mobile-menu-btn:hover {
      background: linear-gradient(135deg, rgba(245, 158, 11, 0.2), rgba(249, 115, 22, 0.2));
      transform: scale(1.05);
    }

    .mobile-menu-overlay {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(8px);
      z-index: 1040;
      opacity: 0;
      visibility: hidden;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .mobile-menu-overlay.active {
      opacity: 1;
      visibility: visible;
    }

    .mobile-menu {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      width: 340px;
      max-width: 90vw;
      background: linear-gradient(135deg, #ffffff 0%, #fafafa 100%);
      box-shadow: -8px 0 32px rgba(0, 0, 0, 0.15);
      z-index: 1050;
      transform: translateX(100%);
      transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      overflow-y: auto;
    }
    .mobile-menu.active {
      transform: translateX(0);
    }

    .mobile-menu-header {
      padding: 28px 24px;
      border-bottom: 2px solid rgba(245, 158, 11, 0.1);
      background: linear-gradient(135deg, rgba(245, 158, 11, 0.05), transparent);
    }
    .mobile-close-btn {
      width: 44px;
      height: 44px;
      border: none;
      background: rgba(245, 158, 11, 0.1);
      color: #f59e0b;
      font-size: 22px;
      cursor: pointer;
      border-radius: 12px;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      margin-left: auto;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .mobile-close-btn:hover {
      background: rgba(245, 158, 11, 0.2);
      transform: rotate(90deg) scale(1.05);
    }

    .mobile-menu-content {
      padding: 28px 24px;
    }
    .mobile-nav-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .mobile-nav-list > li {
      margin-bottom: 6px;
    }
    .mobile-nav-link {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
      padding: 16px 18px;
      color: #1e293b;
      text-decoration: none;
      font-weight: 600;
      font-size: 16px;
      border-radius: 12px;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      background: white;
      border: 2px solid transparent;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
      text-align: left;
      letter-spacing: -0.2px;
    }
    .mobile-nav-link:hover {
      background: linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(249, 115, 22, 0.1));
      border-color: rgba(245, 158, 11, 0.3);
      color: #f59e0b;
      transform: translateX(4px);
    }

    .mobile-dropdown-toggle {
      cursor: pointer;
    }
    .mobile-dropdown-toggle i {
      transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      font-size: 14px;
    }
    .mobile-dropdown-toggle.active i {
      transform: rotate(180deg);
    }

    .mobile-dropdown-content {
      max-height: 0;
      overflow: hidden;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      margin-left: 20px;
      border-left: 3px solid #f59e0b;
      padding-left: 20px;
      margin-top: 0;
    }
    .mobile-dropdown-content.active {
      max-height: 1200px;
      margin-top: 12px;
    }

    .mobile-service-group {
      margin-bottom: 20px;
      padding: 16px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
    }
    .mobile-service-header {
      display: flex;
      align-items: center;
      color: #0f172a;
      font-weight: 700;
      font-size: 15px;
      margin-bottom: 12px;
      letter-spacing: -0.2px;
    }
    .mobile-service-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .mobile-service-list li {
      margin-bottom: 6px;
    }
    .mobile-service-list a {
      display: flex;
      align-items: center;
      padding: 8px 12px;
      color: #64748b;
      text-decoration: none;
      font-size: 14px;
      font-weight: 500;
      border-radius: 8px;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .mobile-service-list a::before {
      content: '•';
      margin-right: 8px;
      color: #f59e0b;
      font-size: 18px;
    }
    .mobile-service-list a:hover {
      color: #f59e0b;
      background: rgba(245, 158, 11, 0.08);
      transform: translateX(4px);
    }

    .mobile-cta {
      padding-top: 20px;
      margin-top: 28px;
      border-top: 2px solid rgba(245, 158, 11, 0.1);
    }

    .mobile-contact-info {
      padding-top: 28px;
      display: flex;
      flex-direction: column;
      gap: 14px;
    }
    .mobile-contact-link {
      display: flex;
      align-items: center;
      gap: 14px;
      color: #64748b;
      text-decoration: none;
      font-size: 14px;
      font-weight: 500;
      padding: 12px 16px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .mobile-contact-link i {
      color: #f59e0b;
      width: 20px;
      font-size: 16px;
      text-align: center;
    }
    .mobile-contact-link:hover {
      color: #f59e0b;
      transform: translateX(4px);
      box-shadow: 0 4px 12px rgba(245, 158, 11, 0.15);
    }
    .top-bar1 {
    background: #0f172a;
    color: #e5e7eb;
    font-size: 13px;
    padding: 6px 0;
}
  </style>
</head>

<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

  <!-- HEADER -->
  <header id="mainHeader" class="header-wrapper">

    <!-- Top Bar -->
    <div id="topBar" class="top-bar1">
      <div class="container-xl">
        <div class="row align-items-center">
          <div class="col-md-8">
            <div class="d-flex align-items-center gap-4">
              <a href="tel:+919326216153" class="top-link">
                <i class="fas fa-phone me-2"></i>
                <span>+91 93262 16153</span>
              </a>
              <a href="mailto:sc@shreeyashconstruction.co.in" class="top-link d-none d-md-inline-flex">
                <i class="fas fa-envelope me-2"></i>
                <span>sc@shreeyashconstruction.co.in</span>
              </a>
            </div>
          </div>
          <div class="col-md-4 d-none d-lg-block text-end">
            <span class="small opacity-90">Monday - Saturday: 9:00 AM - 6:00 PM</span>
          </div>
        </div>
      </div>
    </div>
    <nav class="bg-white shadow"
         x-data="{ servicesOpen: false, roadOpen: false, infraOpen: false, landOpen: false, waterOpen: false, compoundOpen: false, residentialOpen: false, retrofitOpen: false }"
         @click.outside="servicesOpen = false; roadOpen = false; infraOpen = false; landOpen = false; waterOpen = false; compoundOpen = false; residentialOpen = false; retrofitOpen = false;">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center space-x-3">
          <img src="{{ asset('storage/logo/logor.png') }}" alt="Logo" class="h-16 w-auto object-contain">
        </a>

        <!-- Navigation -->
        <ul class="flex space-x-6 items-center">
          <li><a href="{{ route('home') }}" class="text-gray-700 hover:text-yellow-600 font-medium">Home</a></li>
          <li><a href="{{ route('about') }}" class="text-gray-700 hover:text-yellow-600 font-medium">About</a></li>

          <!-- Services Dropdown -->
          <li class="relative">
            <button @click="servicesOpen = !servicesOpen"
                    class="text-gray-700 hover:text-yellow-600 font-medium flex items-center focus:outline-none">
              Services
              <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"/>
              </svg>
            </button>

            <div x-show="servicesOpen" x-transition x-cloak class="absolute bg-white shadow-lg rounded mt-2 py-2 w-64 z-50">

              <div class="relative">
                <div class="flex justify-between items-center px-4 py-2 hover:bg-yellow-100 text-gray-700 cursor-pointer" @click="roadOpen = !roadOpen">
                  <a href="/road-construction" class="flex items-center space-x-2 hover:text-orange-600">
                    <span class="flex-1">Road Construction</span>
                  </a>
                  <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 4-6 4V6z"/></svg>
                </div>
                <div x-show="roadOpen" x-transition x-cloak class="absolute left-full top-0 bg-white shadow-lg rounded w-56 z-50">
                  <a href="{{ route('asphalt_paving') }}" class="block px-4 py-2 hover:bg-yellow-100">Asphalt / Bitumen Road</a>
                  <a href="{{ route('inset_concrete_paving') }}" class="block px-4 py-2 hover:bg-yellow-100">Concrete Road (Inset & Offset)</a>
                  <a href="{{ route('asphalt_compaction') }}" class="block px-4 py-2 hover:bg-yellow-100">Asphalt Compaction</a>
                  <a href="{{ route('gsb_wmm_laying') }}" class="block px-4 py-2 hover:bg-yellow-100">GSB & WMM Laying</a>
                  <a href="{{ route('base_layer_subgrade_preparation') }}" class="block px-4 py-2 hover:bg-yellow-100">Base Layer & Subgrade</a>
                </div>
              </div>

              <!-- Industrial Infrastructure -->
              <div class="relative">
                <div class="flex justify-between items-center px-4 py-2 hover:bg-yellow-100 text-gray-700 cursor-pointer" @click="infraOpen = !infraOpen">
                  <a href="{{ route('industrial_infrastructure') }}" class="flex items-center space-x-2 hover:text-orange-600">
                    <span class="flex-1">Industrial Infrastructure</span>
                  </a>
                  <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 4-6 4V6z"/></svg>
                </div>
                <div x-show="infraOpen" x-transition x-cloak class="absolute left-full top-0 bg-white shadow-lg rounded w-56 z-50">
                  <a href="{{ route('industrial_shed_work') }}" class="block px-4 py-2 hover:bg-yellow-100">Industrial Shed Work</a>
                  <a href="{{ route('factory_building_civil_work') }}" class="block px-4 py-2 hover:bg-yellow-100">Factory Building Civil Work</a>
                </div>
              </div>

              <!-- Land Development -->
              <div class="relative">
                <div class="flex justify-between items-center px-4 py-2 hover:bg-yellow-100 text-gray-700 cursor-pointer" @click="landOpen = !landOpen">
                  <a href="{{ route('land_development') }}" class="flex items-center space-x-2 hover:text-orange-600">
                    <span class="flex-1">Land Development</span>
                  </a>
                  <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 4-6 4V6z"/></svg>
                </div>
                <div x-show="landOpen" x-transition x-cloak class="absolute left-full top-0 bg-white shadow-lg rounded w-56 z-50">
                  <a href="{{ route('plot_leveling_grading_road_access') }}" class="block px-4 py-2 hover:bg-yellow-100">Plot Leveling, Grading, Access</a>
                  <a href="{{ route('earth_cutting_filling_compaction') }}" class="block px-4 py-2 hover:bg-yellow-100">Earth Cutting & Compaction</a>
                  <a href="{{ route('townshipandlanddevelopment') }}" class="block px-4 py-2 hover:bg-yellow-100">Township & Land Development</a>

                </div>
              </div>

              <!-- Water & Drainage -->
              <div class="relative">
                <div class="flex justify-between items-center px-4 py-2 hover:bg-yellow-100 text-gray-700 cursor-pointer" @click="waterOpen = !waterOpen">
                  <a href="{{ route('water_drainage') }}" class="flex items-center space-x-2 hover:text-orange-600">
                    <span class="flex-1">Water & Drainage</span>
                  </a>
                  <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 4-6 4V6z"/></svg>
                </div>
                <div x-show="waterOpen" x-transition x-cloak class="absolute left-full top-0 bg-white shadow-lg rounded w-56 z-50">
                  <a href="{{ route('storm_water_drainage') }}" class="block px-4 py-2 hover:bg-yellow-100">Storm Water Drainage</a>
                  <a href="{{ route('underground_water_supply') }}" class="block px-4 py-2 hover:bg-yellow-100">Underground Water Supply</a>
                  <a href="{{ route('drainage_line_sewer_work') }}" class="block px-4 py-2 hover:bg-yellow-100">Drainage & Sewer Work</a>
                  <a href="{{ route('rcc_chamber_installation') }}" class="block px-4 py-2 hover:bg-yellow-100">RCC / Precast Chamber</a>
                  <a href="{{ route('precast_u_drain') }}" class="block px-4 py-2 hover:bg-yellow-100">Precast U Drain</a>
                </div>
              </div>

              <!-- Compound Wall -->
              <div class="relative">
                <div class="flex justify-between items-center px-4 py-2 hover:bg-yellow-100 text-gray-700 cursor-pointer" @click="compoundOpen = !compoundOpen">
                  <a href="{{ route('compound_wall') }}" class="flex items-center space-x-2 hover:text-orange-600">
                    <span class="flex-1">Compound Wall Construction</span>
                  </a>
                  <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 4-6 4V6z"/></svg>
                </div>
                <div x-show="compoundOpen" x-transition x-cloak class="absolute left-full top-0 bg-white shadow-lg rounded w-56 z-50">
                  <a href="{{ route('ucr_masonry_compound_walls') }}" class="block px-4 py-2 hover:bg-yellow-100">UCR Masonry Compound Walls</a>
                  <a href="{{ route('precast_compound_walls') }}" class="block px-4 py-2 hover:bg-yellow-100">Precast Compound Walls</a>
                  <a href="{{ route('fencing_work') }}" class="block px-4 py-2 hover:bg-yellow-100">Fencing Work</a>
                </div>
              </div>

              <!-- Residential & Commercial -->
              <div class="relative">
                <div class="flex justify-between items-center px-4 py-2 hover:bg-yellow-100 text-gray-700 cursor-pointer" @click="residentialOpen = !residentialOpen">
                  <a href="{{ route('residencial_commercial') }}" class="flex items-center space-x-2 hover:text-orange-600">
                    <span class="flex-1">Residential & Commercial Civil Work</span>
                  </a>
                  <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 4-6 4V6z"/></svg>
                </div>
                <div x-show="residentialOpen" x-transition x-cloak class="absolute left-full top-0 bg-white shadow-lg rounded w-56 z-50">
                  <a href="{{ route('bungalow_construction') }}" class="block px-4 py-2 hover:bg-yellow-100">Bungalow Construction</a>
                  <a href="{{ route('commercial_unit_civil_work') }}" class="block px-4 py-2 hover:bg-yellow-100">Commercial Unit Civil Work</a>
                </div>
              </div>

              <!-- Retrofitting & Demolition -->
              <div class="relative">
                <div class="flex justify-between items-center px-4 py-2 hover:bg-yellow-100 text-gray-700 cursor-pointer" @click="retrofitOpen = !retrofitOpen">
                  <a href="{{ route('retrofiting_demolition') }}" class="flex items-center space-x-2 hover:text-orange-600">
                    <span class="flex-1">Retrofitting & Demolition</span>
                  </a>
                  <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 4-6 4V6z"/></svg>
                </div>
                <div x-show="retrofitOpen" x-transition x-cloak class="absolute left-full top-0 bg-white shadow-lg rounded w-56 z-50">
                  <a href="{{ route('structural_modification') }}" class="block px-4 py-2 hover:bg-yellow-100">Structural Retrofitting</a>
                  <a href="{{ route('repair_strengthening_reinforcement') }}" class="block px-4 py-2 hover:bg-yellow-100">structural-repair</a>
                  <a href="{{ route('demolition_work') }}" class="block px-4 py-2 hover:bg-yellow-100">Demolition Work</a>
                </div>
              </div>

            </div>
          </li>

          <li><a href="{{ route('project') }}" class="text-gray-700 hover:text-yellow-600 font-medium">Projects</a></li>
          <li><a href="{{ route('contact_us') }}" class="text-gray-700 hover:text-yellow-600 font-medium">Contact</a></li>
        </ul>

        <!-- Quote button -->
        <a href="{{ route('contact_us') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded font-medium">Get Quote</a>
      </div>
    </nav>
  </header>

  <!-- Mobile Menu Overlay -->
  <div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>

  <!-- Mobile Menu Sidebar -->
  <div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-header">
      <button class="mobile-close-btn" id="mobileCloseBtn">
        <i class="fas fa-times"></i>
      </button>
    </div>

    <div class="mobile-menu-content">
      <ul class="mobile-nav-list">
        <li><a href="{{ route('home') }}" class="mobile-nav-link">Home</a></li>
        <li><a href="{{ route('about') }}" class="mobile-nav-link">About</a></li>

        <!-- Mobile Services Accordion -->
        <li>
          <button class="mobile-nav-link mobile-dropdown-toggle" id="mobileServicesToggle">
            <span>Services</span>
            <i class="fas fa-chevron-down"></i>
          </button>
          <div class="mobile-dropdown-content" id="mobileServicesContent">

            <!-- Road Work -->
            <div class="mobile-service-group">
              <div class="mobile-service-header">
                <span class="me-2">🛣️</span>
                <span>Road Work</span>
              </div>
              <ul class="mobile-service-list">
                <li><a href="{{ route('asphalt_paving') }}">Asphalt Road</a></li>
                <li><a href="{{ route('inset_concrete_paving') }}">Concrete Road</a></li>
                <li><a href="{{ route('gsb_wmm_laying') }}">GSB / WMM</a></li>
              </ul>
            </div>

            <!-- Industrial Infra -->
            <div class="mobile-service-group">
              <div class="mobile-service-header">
                <span class="me-2">🏭</span>
                <span>Industrial Infra</span>
              </div>
              <ul class="mobile-service-list">
                <li><a href="{{ route('industrial_shed_work') }}">Industrial Shed</a></li>
                <li><a href="{{ route('factory_building_civil_work') }}">Factory Building</a></li>
                <li><a href="{{ route('land_development') }}">Land Development</a></li>
              </ul>
            </div>

            <!-- Water Work -->
            <div class="mobile-service-group">
              <div class="mobile-service-header">
                <span class="me-2">💧</span>
                <span>Water Work</span>
              </div>
              <ul class="mobile-service-list">
                <li><a href="{{ route('storm_water_drainage') }}">Storm Water</a></li>
                <li><a href="{{ route('drainage_line_sewer_work') }}">Drainage Line</a></li>
                <li><a href="{{ route('precast_u_drain') }}">Precast U Drain</a></li>
              </ul>
            </div>

          </div>
        </li>

        <li><a href="{{ route('project') }}" class="mobile-nav-link">Projects</a></li>
        <li><a href="{{ route('contact_us') }}" class="mobile-nav-link">Contact</a></li>
      </ul>

      <div class="mobile-cta">
        <a href="{{ route('contact_us') }}" class="cta-button w-100">Get Quote</a>
      </div>

      <div class="mobile-contact-info">
        <a href="tel:+919326216153" class="mobile-contact-link">
          <i class="fas fa-phone"></i>
          <span>+91 93262 16153</span>
        </a>
        <a href="mailto:sc@shreeyashconstruction.co.in" class="mobile-contact-link">
          <i class="fas fa-envelope"></i>
          <span>sc@shreeyashconstruction.co.in</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <main class="flex-grow">
    @yield('content')
  </main>

  <!-- Footer (unchanged) -->
  <footer class="bg-gray-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-4 gap-8">

        <div>
          <div class="flex items-center mb-6">
            <a href="{{ url('/') }}" class="flex items-center space-x-3">
              <img src="{{ asset('storage/logo/logor.png') }}"
                   alt="Shreeyash Construction Logo"
                   class="h-16 w-auto max-w-[200px] object-contain">
            </a>
          </div>
          <p class="text-sm text-gray-400 mb-4">Civil Contractors - Maharashtra</p>
          <p class="text-gray-300 mb-4">
            Premier civil contracting company specializing in road construction, industrial infrastructure, and comprehensive project execution across Maharashtra.
          </p>
          <div class="flex space-x-4">
            <div class="bg-yellow-400 p-2 rounded">
              <i class="fas fa-certificate text-gray-800"></i>
            </div>
            <div class="bg-yellow-400 p-2 rounded">
              <i class="fas fa-industry text-gray-800"></i>
            </div>
            <div class="bg-yellow-400 p-2 rounded">
              <i class="fas fa-file-invoice text-gray-800"></i>
            </div>
          </div>
        </div>

        <div>
          <h4 class="text-lg font-bold mb-6">Quick Links</h4>
          <ul class="space-y-3">
            <li><a href="{{ url('/') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Home</a></li>
            <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">About Us</a></li>
            <li><a href="{{ route('project') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Projects</a></li>
            <li><a href="{{ route('testimonials') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Testimonials</a></li>
            <li><a href="{{ route('contact_us') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Contact Us</a></li>
            <li><a href="{{ route('company_profile') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Company Profile</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-lg font-bold mb-6">Our Services</h4>
          <ul class="space-y-3 text-sm">
            <li><a href="{{ route('road_construction') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Road Construction</a></li>
            <li><a href="{{ route('industrial_infrastructure') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Industrial Infrastructure</a></li>
            <li><a href="{{ route('land_development') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Land Development</a></li>
            <li><a href="{{ route('water_drainage') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Water & Drainage</a></li>
            <li><a href="{{ route('compound_wall') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Compound Wall Construction</a></li>
            <li><a href="{{ route('residencial_commercial') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Residential & Commercial Civil Work</a></li>
            <li><a href="{{ route('retrofiting_demolition') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Retrofitting & Demolition</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-lg font-bold mb-6">Contact Info</h4>
          <div class="space-y-4 text-sm">
            <div class="flex items-start">
              <i class="fas fa-map-marker-alt text-yellow-400 mr-3 mt-1"></i>
              <div>
                <p class="text-gray-300">Crescent Pearl - B, B-G/1,</p>
                <p class="text-gray-300">Veena Nagar, Katrang Road,</p>
                <p class="text-gray-300">Nr. St. Anthony Church, Khopoli, Maharashtra 410203</p>
              </div>
            </div>
            <div class="flex items-center">
              <i class="fas fa-phone text-yellow-400 mr-3"></i>
              <p class="text-gray-300">+91 93262 16153</p>
            </div>
            <div class="flex items-center">
              <i class="fas fa-envelope text-yellow-400 mr-3"></i>
              <p class="text-gray-300">sc@shreeyashconstruction.co.in</p>
            </div>
          </div>
        </div>
      </div>

      <div class="border-t border-gray-700 mt-12 pt-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
          <div class="text-gray-400 text-sm mb-4 md:mb-0">
            &copy; {{ date('Y') }} Shreeyash Construction. All rights reserved.
          </div>
          <div class="flex space-x-4">
            <a href="https://www.facebook.com/shreeyashconstruction/" target="_blank" class="text-gray-300 hover:text-yellow-400 transition-colors">
              <i class="fab fa-facebook-f text-lg"></i>
            </a>
            <a href="https://www.instagram.com/shreeyashconstruction?igsh=MWphMmoxc3Z3c3hieQ==" target="_blank" class="text-gray-300 hover:text-yellow-400 transition-colors">
              <i class="fab fa-instagram text-lg"></i>
            </a>
            <a href="https://www.linkedin.com/company/shreeyash-construction/" target="_blank" class="text-gray-300 hover:text-yellow-400 transition-colors">
              <i class="fab fa-linkedin-in text-lg"></i>
            </a>
            <a href="https://wa.me/919326216153" target="_blank" class="text-gray-300 hover:text-yellow-400 transition-colors">
              <i class="fab fa-whatsapp text-lg"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  {{-- Header / Mobile menu JS --}}
  <script>
    const header = document.getElementById('mainHeader');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });

    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileCloseBtn = document.getElementById('mobileCloseBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');

    function openMobileMenu() {
      mobileMenu.classList.add('active');
      mobileMenuOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
      mobileMenu.classList.remove('active');
      mobileMenuOverlay.classList.remove('active');
      document.body.style.overflow = '';
    }

    mobileMenuBtn.addEventListener('click', openMobileMenu);
    mobileCloseBtn.addEventListener('click', closeMobileMenu);
    mobileMenuOverlay.addEventListener('click', closeMobileMenu);

    // Mobile services dropdown
    const mobileServicesToggle = document.getElementById('mobileServicesToggle');
    const mobileServicesContent = document.getElementById('mobileServicesContent');

    if (mobileServicesToggle && mobileServicesContent) {
      mobileServicesToggle.addEventListener('click', () => {
        mobileServicesToggle.classList.toggle('active');
        mobileServicesContent.classList.toggle('active');
      });
    }

    // Close on link click
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link:not(.mobile-dropdown-toggle)');
    mobileNavLinks.forEach(link => {
      link.addEventListener('click', () => {
        closeMobileMenu();
      });
    });

    // Close on resize
    let resizeTimer;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(() => {
        if (window.innerWidth >= 992) {
          closeMobileMenu();
        }
      }, 250);
    });
  </script>

  @stack('scripts')
</body>
</html>
