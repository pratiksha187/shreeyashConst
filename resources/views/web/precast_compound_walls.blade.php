@extends('layouts.app')

@section('title', 'Precast Compound Walls | Readymade Boundary Wall Supplier – Shreeyash Construction')

@push('head')
  <meta name="description" content="Looking for precast compound wall near me? Shreeyash Construction provides durable, affordable readymade compound walls across Maharashtra. Quick install & best price!">
  {{-- Remove this if Tailwind is already loaded in layouts.app --}}
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; background:#f8f9fa; }
  </style>
@endpush

@section('content')

  {{-- HERO / HEADER --}}
  <section class="relative h-[430px] overflow-hidden">
    {{-- Image fills the header, crops gracefully like CSS background-cover --}}
    <img src="/storage/logo/header/Fencing.png"
         alt="Precast Compound Walls"
         class="absolute inset-0 w-full h-full object-cover object-center">
    {{-- Dark overlay for text readability --}}
    <div class="absolute inset-0 bg-black/30"></div>

    <div class="relative container mx-auto px-4 md:px-6 lg:px-8 h-full flex items-center justify-center">
      <div class="max-w-5xl mx-auto text-center bg-black/50 p-6 rounded-lg">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white">
          Precast Compound Walls
        </h1>
        <p class="text-lg md:text-xl mt-3 text-white/90">
          Fast, Durable &amp; Cost-Effective Boundary Solutions
        </p>
      </div>
    </div>
  </section>

  {{-- DESCRIPTION --}}
 <section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">
 <div class="text-center mb-10">
      <h2 class="text-2xl font-bold text-yellow-500">
        Precast Compound Wall Overview
      </h2>
    </div>
    <div class="max-w-8xl mx-auto bg-white shadow-lg rounded-xl p-8 md:p-10">
      
      <p class="text-gray-700 leading-relaxed">
        Shreeyash Construction offers high-quality <strong>precast compound walls</strong> for industrial,
        residential, and commercial applications across Maharashtra. These readymade walls are produced
        in controlled factory conditions using premium-grade concrete and steel, ensuring 
        <strong>faster installation</strong>, <strong>uniform finish</strong>, and <strong>long-lasting durability</strong>.
      </p>

      <p class="text-gray-700 leading-relaxed mt-6">
        Whether you need to secure an <strong>industrial plot</strong>, <strong>housing society</strong>,
        <strong>warehouse</strong>, or <strong>agricultural land</strong>, our precast boundary wall systems
        provide a superior alternative to traditional masonry walls — offering significant 
        <strong>time and cost savings</strong> with enhanced structural reliability.
      </p>

    </div>

  </div>
</section>

<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">

    <!-- Heading -->
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-800">Precast Compound Wall – Why Choose & Technical Specs</h2>
      <div class="w-24 h-1 bg-yellow-700 mx-auto mt-4"></div>
    </div>

    <!-- Two Column Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

      <!-- LEFT: WHY CHOOSE -->
      <div class="bg-white p-8 rounded-xl shadow-md border border-gray-200">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Why Choose Precast Compound Walls?</h3>
        <ul class="space-y-3 text-gray-700">
          <li><span class="font-semibold">Quick Installation:</span> Installed within hours, minimal site work</li>
          <li><span class="font-semibold">Cost-Effective:</span> Save up to 40% over traditional construction</li>
          <li><span class="font-semibold">Strong &amp; Durable:</span> Reinforced concrete, 20+ year life</li>
          <li><span class="font-semibold">Portable &amp; Reusable:</span> Panels can be extended or relocated</li>
          <li><span class="font-semibold">Clean Finish:</span> Factory finish; painting or texturing optional</li>
        </ul>
      </div>

      <!-- RIGHT: TECHNICAL SPECS -->
      <div class="bg-white p-8 rounded-xl shadow-md border border-gray-200 overflow-x-auto">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Technical Specifications</h3>

        <table class="min-w-full border">
          <thead>
            <tr class="bg-yellow-600 text-white">
              <th class="py-3 px-4 text-left">Component</th>
              <th class="py-3 px-4 text-left">Specification</th>
            </tr>
          </thead>

          <tbody>
            <tr class="odd:bg-gray-50">
              <td class="py-3 px-4 font-medium">Panel Size</td>
              <td class="py-3 px-4">2100 mm × 300 mm × 50 mm (customizable)</td>
            </tr>

            <tr class="odd:bg-gray-50">
              <td class="py-3 px-4 font-medium">Pillar Height</td>
              <td class="py-3 px-4">7 ft to 12 ft RCC Posts</td>
            </tr>

            <tr class="odd:bg-gray-50">
              <td class="py-3 px-4 font-medium">Concrete Grade</td>
              <td class="py-3 px-4">M25 or higher</td>
            </tr>

            <tr class="odd:bg-gray-50">
              <td class="py-3 px-4 font-medium">Reinforcement</td>
              <td class="py-3 px-4">3 to 5 high-tensile steel bars (8–10 mm)</td>
            </tr>

            <tr class="odd:bg-gray-50">
              <td class="py-3 px-4 font-medium">Foundation Depth</td>
              <td class="py-3 px-4">450–600 mm depending on height</td>
            </tr>

            <tr class="odd:bg-gray-50">
              <td class="py-3 px-4 font-medium">Panel Installation</td>
              <td class="py-3 px-4">Slotted into pre-fixed RCC columns</td>
            </tr>

            <tr class="odd:bg-gray-50">
              <td class="py-3 px-4 font-medium">Finish</td>
              <td class="py-3 px-4">Smooth grey / painted / textured</td>
            </tr>

            <tr class="odd:bg-gray-50">
              <td class="py-3 px-4 font-medium">Wind Load Tolerance</td>
              <td class="py-3 px-4">Designed as per IS 875 wind zones</td>
            </tr>

          </tbody>
        </table>
      </div>

    </div>

  </div>
</section>

<section class="py-16 bg-white">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">

    <!-- Heading -->
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-800">Types of Readymade Compound Walls & Applications</h2>
      <div class="w-24 h-1 bg-yellow-700 mx-auto mt-4"></div>
    </div>

    <!-- Two Column Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

      <!-- LEFT SIDE – TYPES -->
      <div>
        <h3 class="text-2xl font-semibold text-gray-800 mb-6">Types of Readymade Compound Walls We Provide</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          @foreach ([ 
            ['Industrial Precast Boundary Wall','Suitable for factories, warehouses, and MIDC zones'],
            ['Residential Readymade Wall','Ideal for plots, bungalows, and housing societies'],
            ['Commercial & Institutional Walls','Great for schools, hospitals, showrooms, godowns'],
            ['Custom Precast Compound Walls','Designed per elevation / branding needs'],
          ] as [$title, $desc])
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:-translate-y-1 hover:shadow-lg transition">
              <div class="h-1.5 bg-yellow-500"></div>
              <div class="p-6">
                <h3 class="text-lg font-semibold mb-2">{{ $title }}</h3>
                <p class="text-gray-700">{{ $desc }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      <!-- RIGHT SIDE – USE CASES -->
      <div>
        <h3 class="text-2xl font-semibold text-gray-800 mb-6">Use Cases & Applications</h3>

        <div class="bg-gray-50 p-8 rounded-xl shadow">
          <ul class="list-disc list-inside text-gray-700 space-y-3">
            <li>Factory & warehouse fencing</li>
            <li>Real estate project boundaries</li>
            <li>Farmhouses & agricultural land</li>
            <li>Parking lots, utility zones & transit yards</li>
            <li>Temporary and permanent site security</li>
          </ul>
        </div>
      </div>

    </div>

  </div>
</section>


 <section class="py-16 bg-white">
  <div class="container mx-auto px-4 md:px-6 lg:px-8">

    <!-- MAIN HEADING -->
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-800">
        Precast Compound Wall – Service Areas, Pricing & Why Choose Us
      </h2>
      <div class="w-24 h-1 bg-yellow-800 mx-auto mt-4"></div>
    </div>

    <!-- GRID: LEFT + RIGHT -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

      <!-- LEFT: SERVICE AREAS -->
      <div class="bg-gray-50 rounded-xl p-6 shadow">
        <h3 class="text-xl font-semibold text-gray-800 mb-4 text-center">Service Areas</h3>
        <div class="w-16 h-1 bg-yellow-700 mx-auto mb-4"></div>

        <p class="text-gray-700 leading-relaxed text-center">
          We provide readymade compound wall installation services across:
        </p>

        <ul class="mt-4 space-y-2 text-gray-700 text-center font-medium">
          <li>Pune • Mumbai • Navi Mumbai • Raigad</li>
          <li>Khopoli • Khalapur • Pen • Panvel</li>
          <li>Nagpur • Nashik • Aurangabad • Satara</li>
        </ul>
      </div>

      <!-- CENTER: PRICING -->
      <div class="bg-white rounded-xl p-6 shadow">
        <h3 class="text-xl font-semibold text-gray-800 mb-4 text-center">Price Range</h3>
        <div class="w-16 h-1 bg-yellow-700 mx-auto mb-4"></div>

        <p class="text-gray-700 text-center leading-relaxed">
          Pricing varies by height, finish, and quantity.
        </p>

        <p class="text-xl text-gray-900 font-semibold text-center mt-3">
          Starting from ₹80–₹120 per sq. ft.
        </p>

        <p class="text-gray-600 text-center text-sm">(Material + Installation)</p>
      </div>

      <!-- RIGHT: WHY US -->
      <div class="bg-gray-50 rounded-xl p-6 shadow">
        <h3 class="text-xl font-semibold text-gray-800 mb-4 text-center">Why Shreeyash Construction?</h3>
        <div class="w-16 h-1 bg-yellow-700 mx-auto mb-4"></div>

        <ul class="list-disc list-inside text-gray-700 space-y-2">
          <li>ISI-grade materials and certified suppliers</li>
          <li>Trained manpower and timely delivery</li>
          <li>Custom design, color & height options</li>
          <li>Strong presence across Maharashtra</li>
        </ul>
      </div>

    </div>

  </div>
</section>


@endsection
