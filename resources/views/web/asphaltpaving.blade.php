@extends('layouts.app')
@section('title', 'Asphalt & Bitumen Road Construction Services - Shreeyash Construction')
@section('content')
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
<!-- Hero Section -->
<header class="hero-pattern text-white">
   <div class="container mx-auto px-4 py-20 md:py-32">
      <div class="max-w-3xl">
         <h1 class="text-4xl md:text-5xl font-bold mb-6">Asphalt / Bitumen Road Construction</h1>
         <p class="text-lg md:text-xl mb-8">Reliable, durable, and cost-effective solutions for modern infrastructure development</p>
         <a href="#overview" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold py-3 px-6 rounded-lg transition inline-flex items-center">
            Learn More
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
         </a>
      </div>
   </div>
   <div class="section-transition"></div>
</header>

<section id="overview" class="py-16 bg-white">
   <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row items-center">
         <!-- Text Section -->
         <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Overview</h2>
            <p class="text-gray-700 mb-4">
               As a leading <strong>asphalt road contractor in Maharashtra,</strong> Shreeyash Construction specializes in the construction of <strong>flexible pavements using hot mix bitumen</strong> for <strong>highways, internal roads, and industrial zones</strong>. Our team uses <strong>advanced paver finishers and vibratory rollers</strong> to ensure a smooth and long-lasting finish. Whether you're planning a township approach road or <strong>bitumen road construction in Khopoli,</strong> Raigad, Pune, Mumbai — we deliver <strong>quality-driven execution</strong> with timely delivery.
            </p>
            <!-- Feature Icons -->
            <div class="flex flex-wrap mt-8">
               <div class="w-1/2 md:w-1/3 mb-4">
                  <div class="flex items-center">
                     <div class="bg-yellow-500 p-2 rounded-full mr-3">
                        <i class="fas fa-dollar-sign text-gray-800"></i>
                     </div>
                     <span class="text-gray-800 font-medium">Cost-Effective</span>
                  </div>
               </div>
               <div class="w-1/2 md:w-1/3 mb-4">
                  <div class="flex items-center">
                     <div class="bg-yellow-500 p-2 rounded-full mr-3">
                        <i class="fas fa-clock text-gray-800"></i>
                     </div>
                     <span class="text-gray-800 font-medium">Fast Installation</span>
                  </div>
               </div>
               <div class="w-1/2 md:w-1/3 mb-4">
                  <div class="flex items-center">
                     <div class="bg-yellow-500 p-2 rounded-full mr-3">
                        <i class="fas fa-shield-alt text-gray-800"></i>
                     </div>
                     <span class="text-gray-800 font-medium">Durable</span>
                  </div>
               </div>
               <div class="w-1/2 md:w-1/3 mb-4">
                  <div class="flex items-center">
                     <div class="bg-yellow-500 p-2 rounded-full mr-3">
                        <i class="fas fa-recycle text-gray-800"></i>
                     </div>
                     <span class="text-gray-800 font-medium">Recyclable</span>
                  </div>
               </div>
               <div class="w-1/2 md:w-1/3 mb-4">
                  <div class="flex items-center">
                     <div class="bg-yellow-500 p-2 rounded-full mr-3">
                        <i class="fas fa-tools text-gray-800"></i>
                     </div>
                     <span class="text-gray-800 font-medium">Maintainable</span>
                  </div>
               </div>
            </div>
         </div>
         <!-- Image Section -->
         <div class="md:w-1/2">
            <img src="{{ asset('storage/logo/main/roadconst.jpg') }}" 
               alt="Road Construction"
               class="w-full h-auto max-h-[400px] object-cover rounded-lg shadow-md">
         </div>
      </div>
   </div>
</section>
<div class="road-pattern"></div>
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
</section>
<!-- Construction Methods Section -->

<section id="construction" class="py-20 bg-gray-50">
   <div class="container mx-auto px-4">
      <h2 class="text-4xl font-bold text-center text-gray-900 mb-14">Construction Methods</h2>
      <div class="grid gap-10 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
         <!-- Card Template -->
         <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300">
            <div class="bg-red-600 h-2"></div>
            <div class="p-6">
               <h3 class="text-xl font-semibold text-gray-800 mb-2">Hot Mix Asphalt (HMA)</h3>
               <p class="text-gray-600 text-sm mb-4">Produced by heating the asphalt binder and mixing it with aggregates at 150–190°C.</p>
               <ul class="space-y-2 text-sm text-gray-700">
                  <li>✅ Suitable for high-traffic roads</li>
                  <li>✅ Requires high-quality control</li>
                  <li>✅ Needs rapid compaction after laying</li>
               </ul>
            </div>
         </div>
         <!-- Card 2 -->
         <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300">
            <div class="bg-blue-600 h-2"></div>
            <div class="p-6">
               <h3 class="text-xl font-semibold text-gray-800 mb-2">Cold Mix Asphalt</h3>
               <p class="text-gray-600 text-sm mb-4">Produced without heating, using emulsified or cutback bitumen, applied at ambient temperatures.</p>
               <ul class="space-y-2 text-sm text-gray-700">
                  <li>✅ Ideal for remote or low-traffic areas</li>
                  <li>✅ Can be stockpiled for later use</li>
                  <li>✅ Lower energy consumption and emissions</li>
               </ul>
            </div>
         </div>
         <!-- Card 3 -->
         <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300">
            <div class="bg-green-600 h-2"></div>
            <div class="p-6">
               <h3 class="text-xl font-semibold text-gray-800 mb-2">Warm Mix Asphalt</h3>
               <p class="text-gray-600 text-sm mb-4">Produced at lower temperatures (100–140°C), offering environmental and cost advantages.</p>
               <ul class="space-y-2 text-sm text-gray-700">
                  <li>✅ Reduced emissions and energy use</li>
                  <li>✅ Extended paving season</li>
                  <li>✅ Improved workability and compaction</li>
               </ul>
            </div>
         </div>
         <!-- Card 4 -->
         <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300">
            <div class="bg-yellow-500 h-2"></div>
            <div class="p-6">
               <h3 class="text-xl font-semibold text-gray-800 mb-2">Bituminous Macadam (BM)</h3>
               <p class="text-gray-600 text-sm mb-4">An open-graded bituminous base layer commonly used in rural and secondary roads.</p>
               <ul class="space-y-2 text-sm text-gray-700">
                  <li>✅ Uses larger aggregate sizes</li>
                  <li>✅ Provides good load distribution</li>
                  <li>✅ Often used as a base layer</li>
               </ul>
            </div>
         </div>
         <!-- Card 5 -->
         <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300">
            <div class="bg-purple-600 h-2"></div>
            <div class="p-6">
               <h3 class="text-xl font-semibold text-gray-800 mb-2">Penetration Macadam</h3>
               <p class="text-gray-600 text-sm mb-4">Aggregates are placed and bitumen is poured in layers to penetrate the structure.</p>
               <ul class="space-y-2 text-sm text-gray-700">
                  <li>✅ For low-traffic or temporary roads</li>
                  <li>✅ Simple construction technique</li>
                  <li>✅ Lower equipment requirements</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="road-pattern"></div>
<!-- Materials Section -->
<section id="materials" class="py-16 bg-gray-100">
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
</section>
<!-- Construction Techniques Section -->
<section class="py-16 bg-white">
   <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-12 text-center text-gray-800">Construction Techniques</h2>
      <div class="flex flex-wrap -mx-4">
         <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
            <div class="process-step bg-gray-100 rounded-lg shadow-md p-6 h-full">
               <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center mb-4">
                  <span class="text-gray-800 font-bold text-lg">1</span>
               </div>
               <h3 class="text-xl font-bold mb-3 text-gray-800">Site Preparation</h3>
               <p class="text-gray-700">Excavation, clearing, grading, and compaction of subgrade to create a stable foundation for the road structure.</p>
            </div>
         </div>
         <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
            <div class="process-step bg-gray-100 rounded-lg shadow-md p-6 h-full">
               <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center mb-4">
                  <span class="text-gray-800 font-bold text-lg">2</span>
               </div>
               <h3 class="text-xl font-bold mb-3 text-gray-800">Sub-base and Base Course</h3>
               <p class="text-gray-700">Laid with granular material (WBM/WMM), compacted to design density to provide structural support.</p>
            </div>
         </div>
         <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
            <div class="process-step bg-gray-100 rounded-lg shadow-md p-6 h-full">
               <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center mb-4">
                  <span class="text-gray-800 font-bold text-lg">3</span>
               </div>
               <h3 class="text-xl font-bold mb-3 text-gray-800">Application of Prime Coat</h3>
               <p class="text-gray-700">Applied to base layer to promote bonding with the bituminous layers that will be placed above.</p>
            </div>
         </div>
         <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
            <div class="process-step bg-gray-100 rounded-lg shadow-md p-6 h-full">
               <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center mb-4">
                  <span class="text-gray-800 font-bold text-lg">4</span>
               </div>
               <h3 class="text-xl font-bold mb-3 text-gray-800">Binder Course</h3>
               <p class="text-gray-700">A bituminous intermediate layer designed to absorb stress and distribute loads from the surface to the base.</p>
            </div>
         </div>
         <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
            <div class="process-step bg-gray-100 rounded-lg shadow-md p-6 h-full">
               <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center mb-4">
                  <span class="text-gray-800 font-bold text-lg">5</span>
               </div>
               <h3 class="text-xl font-bold mb-3 text-gray-800">Tack Coat</h3>
               <p class="text-gray-700">Thin bitumen layer applied before the final surfacing to ensure proper bonding between layers.</p>
            </div>
         </div>
         <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
            <div class="process-step bg-gray-100 rounded-lg shadow-md p-6 h-full">
               <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center mb-4">
                  <span class="text-gray-800 font-bold text-lg">6</span>
               </div>
               <h3 class="text-xl font-bold mb-3 text-gray-800">Surface Course</h3>
               <p class="text-gray-700">Final layer (DBM or BC), providing smoothness, skid resistance, and protection from environmental factors.</p>
            </div>
         </div>
         <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8 md:mx-auto">
            <div class="process-step bg-gray-100 rounded-lg shadow-md p-6 h-full">
               <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center mb-4">
                  <span class="text-gray-800 font-bold text-lg">7</span>
               </div>
               <h3 class="text-xl font-bold mb-3 text-gray-800">Compaction</h3>
               <p class="text-gray-700">Carried out with vibratory rollers while the mix is hot to achieve target density and avoid air voids.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="road-pattern"></div>
<!-- Design Considerations Section -->
<section class="py-16 bg-gray-100">
   <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-12 text-center text-gray-800">Design Considerations</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
         <div class="bg-white rounded-lg shadow-lg p-6 transform transition hover:scale-105">
            <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center mb-4 mx-auto">
               <svg class="w-8 h-8 text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
               </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 text-center text-gray-800">Traffic Load Analysis</h3>
            <p class="text-gray-700 text-center">ESALs (Equivalent Single Axle Load) calculation to determine appropriate layer thickness based on expected traffic volume and composition.</p>
         </div>
         <div class="bg-white rounded-lg shadow-lg p-6 transform transition hover:scale-105">
            <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center mb-4 mx-auto">
               <svg class="w-8 h-8 text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z"></path>
               </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 text-center text-gray-800">Climatic Conditions</h3>
            <p class="text-gray-700 text-center">Temperature and moisture influence material choice and design parameters to ensure durability in local environmental conditions.</p>
         </div>
         <div class="bg-white rounded-lg shadow-lg p-6 transform transition hover:scale-105">
            <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center mb-4 mx-auto">
               <svg class="w-8 h-8 text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path>
               </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 text-center text-gray-800">Subgrade Strength</h3>
            <p class="text-gray-700 text-center">CBR (California Bearing Ratio) test results guide pavement layer design to ensure adequate support from the foundation soil.</p>
         </div>
         <div class="bg-white rounded-lg shadow-lg p-6 transform transition hover:scale-105">
            <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center mb-4 mx-auto">
               <svg class="w-8 h-8 text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
               </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 text-center text-gray-800">Drainage Design</h3>
            <p class="text-gray-700 text-center">Essential to prevent water accumulation and base layer deterioration, including proper cross slopes and drainage structures.</p>
         </div>
         <div class="bg-white rounded-lg shadow-lg p-6 transform transition hover:scale-105">
            <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center mb-4 mx-auto">
               <svg class="w-8 h-8 text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4.649 3.084A1 1 0 015.163 4.4 13.95 13.95 0 004 10c0 1.993.416 3.886 1.164 5.6a1 1 0 01-1.832.8A15.95 15.95 0 012 10c0-2.274.475-4.44 1.332-6.4a1 1 0 011.317-.516zM12.96 7a3 3 0 00-2.342 1.126l-.328.41-.111-.279A2 2 0 008.323 7H8a1 1 0 000 2h.323l.532 1.33-1.035 1.295a1 1 0 01-.781.375H7a1 1 0 100 2h.039a3 3 0 002.342-1.126l.328-.41.111.279A2 2 0 0011.677 14H12a1 1 0 100-2h-.323l-.532-1.33 1.035-1.295A1 1 0 0112.961 9H13a1 1 0 100-2h-.039zm1.874-2.6a1 1 0 011.833-.8A15.95 15.95 0 0118 10c0 2.274-.475 4.44-1.332 6.4a1 1 0 11-1.832-.8A13.949 13.949 0 0016 10c0-1.993-.416-3.886-1.165-5.6z" clip-rule="evenodd"></path>
               </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 text-center text-gray-800">Surface Slope & Camber</h3>
            <p class="text-gray-700 text-center">Designed for proper water runoff and user comfort, with appropriate cross slopes and superelevation at curves.</p>
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