@extends('layouts.app')
@section('title', 'Asphalt & Bitumen Road Construction Services - Shreeyash Construction')
@section('content')
<!-- ✅ JSON-LD Schema Markup for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://shreeyash.co.in/asphalt-bitumen-road-construction"
  },
  "headline": "Asphalt & Bitumen Road Construction Services - Shreeyash Construction",
  "description": "Shreeyash Construction delivers roads, civil industrial infrastructure projects across Maharashtra with quality and on time execution",
  "image": "https://shreeyash.co.in/storage/logo/main/roadconst.jpg",  
  "author": {
    "@type": "Organization",
    "name": "Shreeyash Construction",
    "url": "https://shreeyash.co.in/"
  },  
  "publisher": {
    "@type": "Organization",
    "name": "Shreeyash Construction",
    "logo": {
      "@type": "ImageObject",
      "url": "https://shreeyash.co.in/storage/logo/logor.png"
    }
  },
  "datePublished": "2025-10-09T10:00:00+05:30",
  "dateModified": "2025-10-09T10:00:00+05:30"
}
</script>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
   body {
   font-family: 'Montserrat', sans-serif;
   scroll-behavior: smooth;
   }
   .hero-pattern {
   background-color: #1a202c;
   background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%232d3748' fill-opacity='0.4'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
   }
   .section-transition {
   position: relative;
   height: 100px;
   overflow: hidden;
   }
   .section-transition::after {
   content: '';
   position: absolute;
   bottom: 0;
   left: 0;
   width: 100%;
   height: 100%;
   /* background: linear-gradient(to bottom right, transparent 49.5%, #ffffff 50%); */
   }
   .road-pattern {
   background-color: #2d3748;
   background-image: linear-gradient(90deg, #f7fafc 0%, #f7fafc 10%, transparent 10%, transparent 90%, #f7fafc 90%, #f7fafc 100%);
   height: 8px;
   width: 100%;
   margin: 20px 0;
   }
   .tab-content {
   display: none;
   }
   .tab-content.active {
   display: block;
   }
   .process-step {
   transition: all 0.3s ease;
   }
   .process-step:hover {
   transform: translateY(-5px);
   }
</style>

 <section class="relative h-[430px] overflow-hidden">
    {{-- Image fills the header, crops gracefully like CSS background-cover --}}
    <img src="/storage/logo/header/Asphalt.png"
         alt="Precast Compound Walls"
         class="absolute inset-0 w-full h-full object-cover object-center">
    {{-- Dark overlay for text readability --}}
    <div class="absolute inset-0 bg-black/30"></div>

    <div class="relative container mx-auto px-4 md:px-6 lg:px-8 h-full flex items-center justify-center">
      <div class="max-w-5xl mx-auto text-center bg-black/50 p-6 rounded-lg">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white">
         Asphalt / Bitumen Road Construction
        </h1>
        
      </div>
    </div>
  </section>
<!-- ================= OVERVIEW (Clean & Compressed) ================= -->
<section id="overview" class="py-14 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            <!-- LEFT TEXT -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Overview</h2>

                <p class="text-gray-700 leading-relaxed">
                    Shreeyash Construction is a trusted <strong>asphalt / bitumen road contractor in Maharashtra</strong>,
                    delivering flexible pavement solutions for <strong>highways, industrial roads, and township
                    developments</strong>. Using advanced paver finishers, hot mix plants, and vibratory rollers, we ensure
                    long-lasting, smooth, and durable asphalt surfaces.
                </p>

                <p class="text-gray-700 mt-3 leading-relaxed">
                    From <strong>Khopoli, Raigad, Pune, Mumbai to Nashik</strong>, our road construction services focus on
                    <strong>speed, quality control, and long-term performance</strong>.
                </p>

                <!-- FEATURES -->
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-6">

                    @foreach([
                        ['fas fa-dollar-sign', 'Cost-Effective'],
                        ['fas fa-clock', 'Fast Installation'],
                        ['fas fa-shield-alt', 'Durable'],
                        ['fas fa-recycle', 'Recyclable'],
                        ['fas fa-tools', 'Maintainable'],
                        ['fas fa-check-circle', 'Smooth Finish'],
                    ] as $f)

                    <div class="flex items-center gap-3 bg-gray-50 p-3 rounded-lg shadow-sm hover:shadow-md transition">
                        <div class="bg-yellow-500 text-gray-900 p-2 rounded-full">
                            <i class="{{ $f[0] }}"></i>
                        </div>
                        <span class="text-gray-800 text-sm font-medium">{{ $f[1] }}</span>
                    </div>

                    @endforeach

                </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div>
                <img src="{{ asset('storage/logo/main/roadconst.jpg') }}"
                     class="rounded-xl shadow-xl w-full object-cover max-h-[380px]"
                     alt="Asphalt Road Construction">
            </div>

        </div>

    </div>
</section>
<!-- ================= PAVEMENT TYPES (Premium + Compressed) ================= -->
<section id="pavement-types" class="py-14 bg-gray-100">
    <div class="container mx-auto px-4 max-w-7xl">

        <h2 class="text-3xl font-bold text-center text-gray-900 mb-10">Pavement Types</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- CARD 1 -->
            <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition p-6 border border-gray-200">
                <div class="h-1.5 bg-yellow-500 rounded mb-5"></div>

                <h3 class="text-xl font-semibold text-gray-800 mb-4">1. Flexible Pavements</h3>

                <ul class="space-y-3 text-gray-700 text-sm leading-relaxed">
                    <li class="flex items-start">
                        <span class="text-yellow-500 mt-1 mr-2">✔</span>
                        Made up of bituminous and granular layers that distribute traffic loads.
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-500 mt-1 mr-2">✔</span>
                        Flexible structure — deforms under load but regains shape when unloaded.
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-500 mt-1 mr-2">✔</span>
                        Includes subgrade, sub-base, base course, binder course & surface course.
                    </li>
                </ul>

                <img src="{{ asset('storage/logo/main/Layers-of-a-flexible-pavement.jpg') }}"
                     alt="Flexible Pavement"
                     class="w-full mt-6 rounded-xl shadow-lg object-cover max-h-[320px]">
            </div>

            <!-- CARD 2 -->
            <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition p-6 border border-gray-200">
                <div class="h-1.5 bg-yellow-500 rounded mb-5"></div>

                <h3 class="text-xl font-semibold text-gray-800 mb-4">2. Rigid Pavements with Bituminous Overlay</h3>

                <ul class="space-y-3 text-gray-700 text-sm leading-relaxed">
                    <li class="flex items-start">
                        <span class="text-yellow-500 mt-1 mr-2">✔</span>
                        Concrete base slab overlaid with a high-performance bituminous layer.
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-500 mt-1 mr-2">✔</span>
                        Enhances ride quality, skid resistance & user comfort.
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-500 mt-1 mr-2">✔</span>
                        Protects the rigid base from cracks, moisture & environmental damage.
                    </li>
                </ul>

                <img src="{{ asset('storage/logo/main/RigidPavements.png') }}"
                     alt="Rigid Pavement"
                     class="w-full mt-6 rounded-xl shadow-lg object-cover max-h-[320px]">
            </div>

        </div>

    </div>
</section>

<!-- 
<section id="pavement-types" class="py-16 bg-gray-100">
   <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-12 text-center text-gray-800">Pavement Types</h2>
      <div class="flex flex-col md:flex-row space-y-8 md:space-y-0 md:space-x-8">
         <div class="bg-white rounded-lg shadow-lg overflow-hidden md:w-1/2 transform transition hover:scale-105">
            <div class="bg-yellow-500 h-2"></div>
            <div class="p-6">
               <h3 class="text-xl font-bold mb-4 text-gray-800">1. Flexible Pavements</h3>
               <ul class="space-y-3 text-gray-700">
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     Made up of layers of materials that distribute traffic loads to the subgrade
                  </li>
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     Deform when loaded but rebound after unloading
                  </li>
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     Typically made up of subgrade, sub-base, base course, binder course, and surface course
                  </li>
               </ul>
               <div class="mt-6">
                  <img src="{{ asset('storage/logo/main/Layers-of-a-flexible-pavement.jpg') }}" 
                     alt="Road Construction"
                     class="w-full h-auto max-h-[400px] object-cover rounded-lg shadow-md">
               </div>
            </div>
         </div>
         <div class="bg-white rounded-lg shadow-lg overflow-hidden md:w-1/2 transform transition hover:scale-105">
            <div class="bg-yellow-500 h-2"></div>
            <div class="p-6">
               <h3 class="text-xl font-bold mb-4 text-gray-800">2. Rigid Pavements with Bituminous Overlay</h3>
               <ul class="space-y-3 text-gray-700">
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     Involves a rigid concrete slab base overlaid with a bituminous surface layer
                  </li>
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     Improves riding comfort and enhances surface friction
                  </li>
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     Protects the underlying structure from wear and environmental factors
                  </li>
               </ul>
               <div class="mt-6">
                  <img src="{{ asset('storage/logo/main/RigidPavements.png') }}" 
                     alt="Road Construction"
                     class="w-full h-auto max-h-[400px] object-cover rounded-lg shadow-md">
               </div>
            </div>
         </div>
      </div>
   </div>
</section> -->
<!-- Construction Methods Section -->
<!-- ================= CONSTRUCTION METHODS (Premium + Compressed) ================= -->
<section id="construction-methods" class="py-14 bg-gray-50">
    <div class="container mx-auto px-4 max-w-7xl">

        <h2 class="text-3xl font-bold text-center text-gray-900 mb-10">Construction Methods</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach([
                [
                    'Hot Mix Asphalt (HMA)',
                    'Produced by heating asphalt binder & aggregates at 150–190°C.',
                    ['Suitable for high-traffic roads', 'Requires high-precision QC', 'Needs rapid compaction']
                ],
                [
                    'Cold Mix Asphalt',
                    'Made using emulsified/cutback bitumen at normal temperature.',
                    ['Ideal for remote & rural areas', 'Can be stockpiled for months', 'Low energy consumption']
                ],
                [
                    'Warm Mix Asphalt',
                    'Mixed at 100–140°C, saving energy and reducing emissions.',
                    ['Lower fuel cost', 'Better workability', 'Extended paving season']
                ],
                [
                    'Bituminous Macadam (BM)',
                    'An open-graded base layer using large aggregates.',
                    ['Strong load distribution', 'Common for base layers', 'Used in rural/secondary roads']
                ],
                [
                    'Penetration Macadam',
                    'Bitumen poured over compacted aggregates allowing penetration.',
                    ['Suitable for low-traffic roads', 'Simple technique', 'Minimal equipment needed']
                ]
            ] as $method)

            <!-- Card -->
            <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transition border border-gray-200">
                
                <!-- Gold line -->
                <div class="h-1.5 bg-yellow-500 rounded mb-4"></div>

                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $method[0] }}</h3>

                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    {{ $method[1] }}
                </p>

                <ul class="space-y-2 text-sm text-gray-700">
                    @foreach($method[2] as $point)
                    <li class="flex items-start">
                        <span class="text-yellow-500 text-lg mr-2 leading-tight">✔</span>
                        <span>{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>

            </div>
            @endforeach

        </div>

    </div>
</section>

<div class="road-pattern"></div>
<!-- Materials Section -->
<!-- <section id="materials" class="py-16 bg-gray-100">
   <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-12 text-center text-gray-800">Materials Used</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
         <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
            <div class="bg-yellow-500 h-2"></div>
            <div class="p-6">
               <div class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center mb-4 mx-auto">
                  <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm11 1H6v8l4-2 4 2V6z" clip-rule="evenodd"></path>
                  </svg>
               </div>
               <h3 class="text-xl font-bold mb-4 text-center text-gray-800">Bitumen Types</h3>
               <ul class="space-y-2 text-gray-700">
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     60/70, 80/100 penetration grade
                  </li>
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     Modified Bitumen (PMB, CRMB)
                  </li>
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     Cutback and emulsified bitumen
                  </li>
               </ul>
            </div>
         </div>
         <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
            <div class="bg-yellow-500 h-2"></div>
            <div class="p-6">
               <div class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center mb-4 mx-auto">
                  <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M6 3a1 1 0 011-1h.01a1 1 0 010 2H7a1 1 0 01-1-1zm2 3a1 1 0 00-2 0v1a2 2 0 00-2 2v1a2 2 0 00-2 2v.683a3.7 3.7 0 011.055.485 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0A3.7 3.7 0 0118 12.683V12a2 2 0 00-2-2V9a2 2 0 00-2-2V6a1 1 0 10-2 0v1h-1V6a1 1 0 10-2 0v1H8V6zm10 8.868a3.704 3.704 0 01-4.055-.036 1.704 1.704 0 00-1.89 0 3.704 3.704 0 01-4.11 0 1.704 1.704 0 00-1.89 0A3.704 3.704 0 012 14.868V17a1 1 0 001 1h14a1 1 0 001-1v-2.132zM9 3a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H13a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                  </svg>
               </div>
               <h3 class="text-xl font-bold mb-4 text-center text-gray-800">Aggregates</h3>
               <ul class="space-y-2 text-gray-700">
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     Crushed stone
                  </li>
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     Gravel
                  </li>
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     Well-graded and clean sand
                  </li>
               </ul>
            </div>
         </div>
         <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
            <div class="bg-yellow-500 h-2"></div>
            <div class="p-6">
               <div class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center mb-4 mx-auto">
                  <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z" clip-rule="evenodd"></path>
                  </svg>
               </div>
               <h3 class="text-xl font-bold mb-4 text-center text-gray-800">Filler Materials</h3>
               <ul class="space-y-2 text-gray-700">
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     Stone dust
                  </li>
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     Hydrated lime
                  </li>
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     Cement (in some cases)
                  </li>
               </ul>
            </div>
         </div>
         <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
            <div class="bg-yellow-500 h-2"></div>
            <div class="p-6">
               <div class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center mb-4 mx-auto">
                  <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path>
                     <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
                  </svg>
               </div>
               <h3 class="text-xl font-bold mb-4 text-center text-gray-800">Tack & Prime Coat</h3>
               <ul class="space-y-2 text-gray-700">
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     Bitumen emulsions
                  </li>
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     Cutback bitumen
                  </li>
                  <li class="flex items-start">
                     <svg class="w-5 h-5 text-yellow-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                     </svg>
                     Enhances bonding between layers
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section> -->
<!-- ================= MATERIALS USED (Premium + Compressed) ================= -->
<section id="materials" class="py-14 bg-gray-100">
    <div class="container mx-auto px-4 max-w-7xl">

        <h2 class="text-3xl font-bold text-center text-gray-900 mb-10">Materials Used</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            @foreach([
                [
                    'Bitumen Types',
                    [
                        '60/70, 80/100 penetration grade',
                        'Modified Bitumen (PMB, CRMB)',
                        'Cutback / Emulsified Bitumen'
                    ],
                    'fas fa-oil-can'
                ],
                [
                    'Aggregates',
                    [
                        'Crushed stone',
                        'Gravel for bases',
                        'Well-graded clean sand'
                    ],
                    'fas fa-mountain'
                ],
                [
                    'Filler Materials',
                    [
                        'Stone dust',
                        'Hydrated lime',
                        'Cement (optional use)'
                    ],
                    'fas fa-layer-group'
                ],
                [
                    'Tack & Prime Coat',
                    [
                        'Bitumen emulsions',
                        'Cutback bitumen',
                        'Ensures bonding between layers'
                    ],
                    'fas fa-fill-drip'
                ]
            ] as $m)

            <!-- Card -->
            <div class="bg-white rounded-2xl shadow-md p-6 border border-gray-200 hover:shadow-xl transition">

                <!-- Icon -->
                <div class="w-14 h-14 bg-yellow-500 text-gray-900 rounded-full flex items-center justify-center mx-auto mb-4 shadow">
                    <i class="{{ $m[2] }} text-xl"></i>
                </div>

                <h3 class="text-xl font-semibold text-center text-gray-800 mb-4">{{ $m[0] }}</h3>

                <ul class="space-y-2 text-gray-700 text-sm">
                    @foreach($m[1] as $point)
                    <li class="flex items-start">
                        <span class="text-yellow-500 mr-2 mt-0.5">✔</span>
                        <span>{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>

            </div>
            @endforeach

        </div>

    </div>
</section>

<!-- ================= MERGED : CONSTRUCTION TECHNIQUES + DESIGN CONSIDERATIONS ================= -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">

        <!-- Main Title -->
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-4">
            Construction Techniques & Design Considerations
        </h2>

        <!-- Added One Line Under Main Title -->
        <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">
            Engineered with precision to ensure durability, safety, and long-term performance.
        </p>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            <!-- LEFT SIDE : CONSTRUCTION TECHNIQUES -->
            <div>

                <!-- Added Line for LEFT Section -->
                <p class="text-sm text-gray-600 mb-2">
                    Step-by-step execution methods followed during road construction.
                </p>

                <h3 class="text-2xl font-semibold text-gray-900 mb-6">Construction Techniques</h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    @foreach([
                        ['1','Site Preparation','Excavation, clearing, grading & compaction of subgrade for a stable foundation.'],
                        ['2','Sub-base & Base Course','Granular layers (WBM/WMM) compacted to required density.'],
                        ['3','Application of Prime Coat','Promotes bonding between base and bituminous layers.'],
                        ['4','Binder Course','Intermediate layer distributing stress and loads effectively.'],
                        ['5','Tack Coat','Thin bitumen layer ensuring proper bonding before surfacing.'],
                        ['6','Surface Course','Final DBM/BC layer providing smoothness & skid resistance.'],
                        ['7','Compaction','Vibratory rollers achieve target density & remove air voids.'],
                    ] as $step)

                    <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 bg-yellow-500 text-gray-900 rounded-full flex items-center justify-center mb-3 font-bold">
                            {{ $step[0] }}
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">{{ $step[1] }}</h4>
                        <p class="text-gray-700 text-sm leading-relaxed">{{ $step[2] }}</p>
                    </div>

                    @endforeach
                </div>
            </div>

            <!-- RIGHT SIDE : DESIGN CONSIDERATIONS -->
            <div>

                <!-- Added Line for RIGHT Section -->
                <p class="text-sm text-gray-600 mb-2">
                    Essential engineering parameters that influence pavement design & performance.
                </p>

                <h3 class="text-2xl font-semibold text-gray-900 mb-6">Design Considerations</h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    @foreach([
                        ['fas fa-chart-line','Traffic Load Analysis','ESAL calculations determine layer thickness based on expected traffic.'],
                        ['fas fa-cloud-sun','Climatic Conditions','Temperature & moisture influence material selection and pavement design.'],
                        ['fas fa-mountain','Subgrade Strength','CBR test results guide foundation layer thickness.'],
                        ['fas fa-water','Drainage Design','Proper slopes & drains prevent water damage and base deterioration.'],
                        ['fas fa-road','Surface Slope & Camber','Ensures smooth drainage, safety & comfortable vehicle movement.'],
                        ['fas fa-cogs','Material Performance','Selection based on durability, stability & environmental suitability.'],
                    ] as $item)

                    <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition text-center">
                        <div class="w-14 h-14 bg-yellow-500 rounded-full flex items-center justify-center mx-auto mb-3 shadow">
                            <i class="{{ $item[0] }} text-gray-900 text-xl"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">{{ $item[1] }}</h4>
                        <p class="text-gray-700 text-sm leading-relaxed">{{ $item[2] }}</p>
                    </div>

                    @endforeach
                </div>
            </div>

        </div>

    </div>
</section>


<!-- Quality Control Section -->
<section class="py-16 bg-white">
   <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-12 text-center text-gray-800">Quality Control & Testing</h2>
      <div class="flex flex-col md:flex-row">
         <div class="md:w-1/2 pr-0 md:pr-8 mb-8 md:mb-0">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md h-full">
               <h3 class="text-xl font-bold mb-6 text-gray-800">Material Testing</h3>
               <div class="space-y-4">
                  <div class="flex items-start">
                     <div class="bg-yellow-500 p-2 rounded-full mr-4 mt-1">
                        <svg class="w-4 h-4 text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                     </div>
                     <div>
                        <h4 class="font-bold text-gray-800">Bitumen Testing</h4>
                        <p class="text-gray-700">Penetration, ductility, softening point, viscosity, and flash point tests to ensure quality.</p>
                     </div>
                  </div>
                  <div class="flex items-start">
                     <div class="bg-yellow-500 p-2 rounded-full mr-4 mt-1">
                        <svg class="w-4 h-4 text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                     </div>
                     <div>
                        <h4 class="font-bold text-gray-800">Aggregate Testing</h4>
                        <p class="text-gray-700">Gradation, impact value, Los Angeles Abrasion (LAA), water absorption, and specific gravity tests.</p>
                     </div>
                  </div>
                  <div class="flex items-start">
                     <div class="bg-yellow-500 p-2 rounded-full mr-4 mt-1">
                        <svg class="w-4 h-4 text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                     </div>
                     <div>
                        <h4 class="font-bold text-gray-800">Mix Design</h4>
                        <p class="text-gray-700">Marshall Mix Design method or Superpave method to determine optimal mix proportions.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="md:w-1/2">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md h-full">
               <h3 class="text-xl font-bold mb-6 text-gray-800">Field Tests</h3>
               <div class="space-y-4">
                  <div class="flex items-start">
                     <div class="bg-yellow-500 p-2 rounded-full mr-4 mt-1">
                        <svg class="w-4 h-4 text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                     </div>
                     <div>
                        <h4 class="font-bold text-gray-800">Density Testing</h4>
                        <p class="text-gray-700">Nuclear density gauge or core samples to verify compaction meets specifications.</p>
                     </div>
                  </div>
                  <div class="flex items-start">
                     <div class="bg-yellow-500 p-2 rounded-full mr-4 mt-1">
                        <svg class="w-4 h-4 text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                     </div>
                     <div>
                        <h4 class="font-bold text-gray-800">Core Cutting</h4>
                        <p class="text-gray-700">Extraction of pavement cores to check layer thickness and bond between layers.</p>
                     </div>
                  </div>
                  <div class="flex items-start">
                     <div class="bg-yellow-500 p-2 rounded-full mr-4 mt-1">
                        <svg class="w-4 h-4 text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                     </div>
                     <div>
                        <h4 class="font-bold text-gray-800">Surface Evenness</h4>
                        <p class="text-gray-700">Straight edge or profilometer to measure surface regularity and riding comfort.</p>
                     </div>
                  </div>
                  <div class="flex items-start">
                     <div class="bg-yellow-500 p-2 rounded-full mr-4 mt-1">
                        <svg class="w-4 h-4 text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                     </div>
                     <div>
                        <h4 class="font-bold text-gray-800">Compaction Testing</h4>
                        <p class="text-gray-700">Temperature monitoring during compaction to ensure optimal rolling conditions.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="road-pattern"></div>
<!-- Applications Section -->
<section id="applications" class="py-16 bg-gray-100">
   <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-12 text-center text-gray-800">Applications</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
         <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
            <div class="h-48 bg-cover bg-center" style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'400\' height=\'200\' viewBox=\'0 0 400 200\'><rect width=\'400\' height=\'200\' fill=\'%234a5568\'/><path d=\'M0,100 L400,100\' stroke=\'%23f7fafc\' stroke-width=\'4\' stroke-dasharray=\'20,20\'/><path d=\'M50,50 L350,50 L350,150 L50,150 Z\' fill=\'none\' stroke=\'%23f6ad55\' stroke-width=\'2\'/><rect x=\'100\' y=\'70\' width=\'60\' height=\'30\' fill=\'%232d3748\'/><rect x=\'240\' y=\'70\' width=\'60\' height=\'30\' fill=\'%232d3748\'/><rect x=\'100\' y=\'120\' width=\'60\' height=\'30\' fill=\'%232d3748\'/><rect x=\'240\' y=\'120\' width=\'60\' height=\'30\' fill=\'%232d3748\'/></svg>')"></div>
            <div class="p-6">
               <h3 class="text-xl font-bold mb-3 text-gray-800">National and State Highways</h3>
               <p class="text-gray-700">High-performance asphalt pavements designed for heavy traffic loads and high speeds, with multiple structural layers for durability.</p>
            </div>
         </div>
         <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
            <div class="h-48 bg-cover bg-center" style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'400\' height=\'200\' viewBox=\'0 0 400 200\'><rect width=\'400\' height=\'200\' fill=\'%234a5568\'/><path d=\'M0,100 L400,100\' stroke=\'%23f7fafc\' stroke-width=\'4\' stroke-dasharray=\'10,10\'/><rect x=\'50\' y=\'30\' width=\'80\' height=\'140\' fill=\'%232d3748\'/><rect x=\'160\' y=\'30\' width=\'80\' height=\'140\' fill=\'%232d3748\'/><rect x=\'270\' y=\'30\' width=\'80\' height=\'140\' fill=\'%232d3748\'/><rect x=\'60\' y=\'40\' width=\'60\' height=\'30\' fill=\'%23a0aec0\'/><rect x=\'60\' y=\'80\' width=\'60\' height=\'30\' fill=\'%23a0aec0\'/><rect x=\'60\' y=\'120\' width=\'60\' height=\'30\' fill=\'%23a0aec0\'/><rect x=\'170\' y=\'40\' width=\'60\' height=\'30\' fill=\'%23a0aec0\'/><rect x=\'170\' y=\'80\' width=\'60\' height=\'30\' fill=\'%23a0aec0\'/><rect x=\'170\' y=\'120\' width=\'60\' height=\'30\' fill=\'%23a0aec0\'/><rect x=\'280\' y=\'40\' width=\'60\' height=\'30\' fill=\'%23a0aec0\'/><rect x=\'280\' y=\'80\' width=\'60\' height=\'30\' fill=\'%23a0aec0\'/><rect x=\'280\' y=\'120\' width=\'60\' height=\'30\' fill=\'%23a0aec0\'/></svg>')"></div>
            <div class="p-6">
               <h3 class="text-xl font-bold mb-3 text-gray-800">Urban Roads and Expressways</h3>
               <p class="text-gray-700">Designed for moderate to high traffic volumes with special attention to noise reduction, drainage, and integration with urban infrastructure.</p>
            </div>
         </div>
         <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
            <div class="h-48 bg-cover bg-center" style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'400\' height=\'200\' viewBox=\'0 0 400 200\'><rect width=\'400\' height=\'200\' fill=\'%234a5568\'/><path d=\'M0,100 L400,100\' stroke=\'%23f7fafc\' stroke-width=\'4\'/><rect x=\'50\' y=\'30\' width=\'100\' height=\'60\' fill=\'%232d3748\'/><rect x=\'250\' y=\'30\' width=\'100\' height=\'60\' fill=\'%232d3748\'/><rect x=\'50\' y=\'110\' width=\'100\' height=\'60\' fill=\'%232d3748\'/><rect x=\'250\' y=\'110\' width=\'100\' height=\'60\' fill=\'%232d3748\'/><rect x=\'60\' y=\'40\' width=\'80\' height=\'40\' fill=\'%23a0aec0\'/><rect x=\'260\' y=\'40\' width=\'80\' height=\'40\' fill=\'%23a0aec0\'/><rect x=\'60\' y=\'120\' width=\'80\' height=\'40\' fill=\'%23a0aec0\'/><rect x=\'260\' y=\'120\' width=\'80\' height=\'40\' fill=\'%23a0aec0\'/><rect x=\'170\' y=\'30\' width=\'60\' height=\'140\' fill=\'%232d3748\'/></svg>')"></div>
            <div class="p-6">
               <h3 class="text-xl font-bold mb-3 text-gray-800">Industrial Roads</h3>
               <p class="text-gray-700">Heavy-duty asphalt pavements designed to withstand concentrated loads from industrial vehicles and equipment in manufacturing and logistics zones.</p>
            </div>
         </div>
         <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
            <div class="h-48 bg-cover bg-center" style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'400\' height=\'200\' viewBox=\'0 0 400 200\'><rect width=\'400\' height=\'200\' fill=\'%234a5568\'/><path d=\'M50,100 L350,100\' stroke=\'%23f7fafc\' stroke-width=\'8\' stroke-dasharray=\'30,30\'/><path d=\'M200,30 L350,100 L200,170 L50,100 Z\' fill=\'%232d3748\' stroke=\'%23f6ad55\' stroke-width=\'2\'/><circle cx=\'200\' cy=\'100\' r=\'30\' fill=\'%23a0aec0\' stroke=\'%23f6ad55\' stroke-width=\'2\'/><path d=\'M170,100 L230,100 M200,70 L200,130\' stroke=\'%23f6ad55\' stroke-width=\'2\'/></svg>')"></div>
            <div class="p-6">
               <h3 class="text-xl font-bold mb-3 text-gray-800">Airport Runways</h3>
               <p class="text-gray-700">Specialized high-strength asphalt pavements designed to withstand aircraft loads, with strict requirements for smoothness and durability.</p>
            </div>
         </div>
         <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
            <div class="h-48 bg-cover bg-center" style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'400\' height=\'200\' viewBox=\'0 0 400 200\'><rect width=\'400\' height=\'200\' fill=\'%234a5568\'/><rect x=\'50\' y=\'50\' width=\'300\' height=\'100\' fill=\'%232d3748\'/><path d=\'M50,70 L350,70 M50,90 L350,90 M50,110 L350,110 M50,130 L350,130\' stroke=\'%23f7fafc\' stroke-width=\'2\'/><path d=\'M70,50 L70,150 M90,50 L90,150 M110,50 L110,150 M130,50 L130,150 M150,50 L150,150 M170,50 L170,150 M190,50 L190,150 M210,50 L210,150 M230,50 L230,150 M250,50 L250,150 M270,50 L270,150 M290,50 L290,150 M310,50 L310,150 M330,50 L330,150\' stroke=\'%23f7fafc\' stroke-width=\'1\'/></svg>')"></div>
            <div class="p-6">
               <h3 class="text-xl font-bold mb-3 text-gray-800">Parking Lots</h3>
               <p class="text-gray-700">Asphalt surfaces designed for low-speed traffic with emphasis on proper drainage, marking visibility, and resistance to standing loads.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- CTA Section -->
<section class="py-16 bg-gray-800 text-white">
   <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-6">Need Expert Consultation?</h2>
      <p class="text-lg mb-8 max-w-2xl mx-auto">Our team of experienced engineers can help you design and implement the perfect asphalt road solution for your specific requirements.</p>
      <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
         <a href="{{ route('contact_us') }}" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold py-3 px-8 rounded-lg transition">Contact Us</a>
      </div>
   </div>
</section>
<script>
   // Smooth scrolling for anchor links
   document.querySelectorAll('a[href^="#"]').forEach(anchor => {
       anchor.addEventListener('click', function(e) {
           e.preventDefault();
           const targetId = this.getAttribute('href');
           const targetElement = document.querySelector(targetId);
           if (targetElement) {
               window.scrollTo({
                   top: targetElement.offsetTop - 70,
                   behavior: 'smooth'
               });
           }
       });
   });

   // Navbar shadow on scroll
   window.addEventListener('scroll', function() {
       const nav = document.querySelector('nav');
       if (window.scrollY > 10) {
           nav.classList.add('shadow-lg');
       } else {
           nav.classList.remove('shadow-lg');
       }
   });
</script>
<script>
   // Mobile menu toggle
   document.getElementById('menu-toggle').addEventListener('click', function() {
       document.getElementById('mobile-menu').classList.toggle('hidden');
   });
   
   // Tab functionality
   const tabButtons = document.querySelectorAll('.tab-button');
   const tabContents = document.querySelectorAll('.tab-content');
   
   tabButtons.forEach(button => {
       button.addEventListener('click', () => {
           // Remove active class from all buttons and contents
           tabButtons.forEach(btn => btn.classList.remove('active', 'bg-yellow-500'));
           tabContents.forEach(content => content.classList.remove('active'));
           
           // Add active class to clicked button and corresponding content
           button.classList.add('active', 'bg-yellow-500');
           const tabId = button.getAttribute('data-tab');
           document.getElementById(tabId).classList.add('active');
       });
   });
   
   // Smooth scrolling for anchor links
   document.querySelectorAll('a[href^="#"]').forEach(anchor => {
       anchor.addEventListener('click', function(e) {
           e.preventDefault();
           
           const targetId = this.getAttribute('href');
           if (targetId === '#') return;
           
           const targetElement = document.querySelector(targetId);
           if (targetElement) {
               window.scrollTo({
                   top: targetElement.offsetTop - 70,
                   behavior: 'smooth'
               });
               
               // Close mobile menu if open
               document.getElementById('mobile-menu').classList.add('hidden');
           }
       });
   });
   
   // Add shadow to navbar on scroll
   window.addEventListener('scroll', function() {
       const nav = document.querySelector('nav');
       if (window.scrollY > 10) {
           nav.classList.add('shadow-lg');
       } else {
           nav.classList.remove('shadow-lg');
       }
   });
</script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'965a9bc314318afd',t:'MTc1MzYwMzI4Mi4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
@endsection