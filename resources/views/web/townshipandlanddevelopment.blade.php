@extends('layouts.app')

@section('title', 'Township & Land Development | Shreeyash Construction')

@section('content')
    <meta charset="UTF-8">
    <meta name="description" content="Shreeyash Construction delivers end-to-end township and land development services across Maharashtra with planning, infrastructure, and quality execution.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; background:#f8f9fa; }
        .hero-pattern {
            background-color:#1f2937;
            background-image:url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .section-title { @apply text-3xl font-bold text-gray-800; }
        .section-underline { @apply w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6; }
        .card { @apply bg-white rounded-lg overflow-hidden shadow-md transition duration-300; }
        .card:hover { transform: translateY(-5px); box-shadow:0 10px 20px rgba(0,0,0,0.1); }
        .spec-row:nth-child(odd){ background:rgba(15,76,129,0.05); }
    </style>


{{-- =============== NEW HEADER SECTION =============== --}}
<section class="relative h-[430px] overflow-hidden">
    <img src="/storage/logo/header/TownshipDev.png"
         alt="Township & Land Development"
         class="absolute inset-0 w-full h-full object-cover object-center">

    <div class="absolute inset-0 bg-black/30"></div>

    <div class="relative container mx-auto px-4 md:px-6 lg:px-8 h-full flex items-center justify-center">
      <div class="max-w-5xl mx-auto text-center bg-black/50 p-6 rounded-lg">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white">
         Township &amp; Land Development
        </h1>
      </div>
    </div>
</section>

{{-- =============== INTRO CONTENT SECTION =============== --}}
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto text-center">
      <p class="text-xl text-gray-800 font-semibold mb-6">
        End-to-End Township & Land Development Across Maharashtra
      </p>

      <div class="bg-white shadow-lg rounded-lg p-6 md:p-10 text-gray-700 leading-relaxed text-left inline-block">
        <p class="mb-4">
          Shreeyash Construction is a trusted name in <strong>township development</strong> and 
          <strong>large-scale land development</strong> projects across Maharashtra.
        </p>

        <p class="mb-4">
          With years of expertise in <strong>civil construction</strong>, infrastructure planning, 
          and site execution, we specialize in transforming raw land parcels into 
          <strong>well-planned, fully developed, and infrastructure-ready townships</strong>.
        </p>

        <p>
          Our work is backed by professional engineering standards, systematic project
          execution, and a deep understanding of local regulations, community requirements,
          and environmental considerations.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="bg-yellow-600 py-10">
  <div class="container mx-auto text-center text-white">
    <h2 class="text-3xl font-bold mb-3">Planning a Township or Land Development Project?</h2>
    <p class="mb-4 text-lg">Get expert engineering, fast execution, and complete infrastructure development under one roof.</p>
    <a href="{{route('contact_us')}}"
       class="bg-white text-yellow-700 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-100">
       Contact Shreeyash Construction Today
    </a>
  </div>
</section>


@endsection
