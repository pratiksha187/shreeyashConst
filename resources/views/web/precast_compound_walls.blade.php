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
  <section class="py-12 bg-gray-100">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="max-w-5xl mx-auto bg-white shadow-md rounded-lg p-8">
        <p class="text-gray-700 leading-relaxed text-lg">
          Shreeyash Construction offers high-quality precast compound walls for industrial, residential, and commercial applications across Maharashtra.
          These readymade compound walls are factory-manufactured using high-grade concrete and steel, ensuring faster installation, uniform finish, and long-lasting performance.
        </p>
        <p class="text-gray-700 leading-relaxed text-lg mt-4">
          Whether you're securing an industrial plot, housing society, warehouse, or agricultural land, our precast boundary wall systems provide the ideal alternative to conventional masonry walls — saving both time and cost.
        </p>
      </div>
    </div>
  </section>

  {{-- WHY CHOOSE --}}
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Why Choose Precast Compound Walls?</h2>
        <div class="w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6"></div>
      </div>
      <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-4xl mx-auto">
        <li><span class="font-semibold">Quick Installation:</span> Installed within hours, minimal site work</li>
        <li><span class="font-semibold">Cost-Effective:</span> Save up to 40% over traditional construction</li>
        <li><span class="font-semibold">Strong &amp; Durable:</span> Reinforced concrete, 20+ year life</li>
        <li><span class="font-semibold">Portable &amp; Reusable:</span> Panels can be extended or relocated</li>
        <li><span class="font-semibold">Clean Finish:</span> Factory finish; painting/texturing optional</li>
      </ul>
    </div>
  </section>

  {{-- TECHNICAL SPECS --}}
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Technical Specifications</h2>
        <div class="w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6"></div>
      </div>

      <div class="overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="min-w-full">
          <thead>
            <tr class="bg-yellow-600 text-white">
              <th class="py-3 px-4 text-left">Component</th>
              <th class="py-3 px-4 text-left">Specification</th>
            </tr>
          </thead>
          <tbody>
            <tr class="odd:bg-slate-50">
              <td class="py-3 px-4 font-medium">Panel Size</td>
              <td class="py-3 px-4">2100 mm × 300 mm × 50 mm (customizable)</td>
            </tr>
            <tr class="odd:bg-slate-50">
              <td class="py-3 px-4 font-medium">Pillar Height</td>
              <td class="py-3 px-4">7 ft to 12 ft RCC Posts</td>
            </tr>
            <tr class="odd:bg-slate-50">
              <td class="py-3 px-4 font-medium">Concrete Grade</td>
              <td class="py-3 px-4">M25 or higher</td>
            </tr>
            <tr class="odd:bg-slate-50">
              <td class="py-3 px-4 font-medium">Reinforcement</td>
              <td class="py-3 px-4">3 to 5 high-tensile steel bars (8–10 mm)</td>
            </tr>
            <tr class="odd:bg-slate-50">
              <td class="py-3 px-4 font-medium">Foundation Depth</td>
              <td class="py-3 px-4">450–600 mm (depending on height)</td>
            </tr>
            <tr class="odd:bg-slate-50">
              <td class="py-3 px-4 font-medium">Panel Installation</td>
              <td class="py-3 px-4">Slotted into pre-fixed RCC columns</td>
            </tr>
            <tr class="odd:bg-slate-50">
              <td class="py-3 px-4 font-medium">Finish</td>
              <td class="py-3 px-4">Smooth grey / painted / textured</td>
            </tr>
            <tr class="odd:bg-slate-50">
              <td class="py-3 px-4 font-medium">Wind Load Tolerance</td>
              <td class="py-3 px-4">As per IS 875 wind zones</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  {{-- TYPES --}}
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Types of Readymade Compound Walls We Provide</h2>
        <div class="w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
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
  </section>

  {{-- USE CASES --}}
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Use Cases &amp; Applications</h2>
        <div class="w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6"></div>
      </div>
      <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-3xl mx-auto">
        <li>Factory &amp; warehouse fencing</li>
        <li>Real estate project boundaries</li>
        <li>Farmhouses &amp; agricultural land</li>
        <li>Parking lots, utility zones &amp; transit yards</li>
        <li>Temporary and permanent site security</li>
      </ul>
    </div>
  </section>

  {{-- SERVICE AREAS --}}
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Looking for “Precast Compound Wall Near Me”?</h2>
        <div class="w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6"></div>
      </div>
      <p class="text-gray-700 max-w-4xl mx-auto text-center">
        We provide readymade compound wall installation services across:<br>
        <strong>Pune, Mumbai, Navi Mumbai, Raigad</strong> |
        <strong>Khopoli, Khalapur, Pen, Panvel</strong> |
        <strong>Nagpur, Nashik, Aurangabad, Satara &amp; nearby regions</strong>
      </p>
    </div>
  </section>

  {{-- PRICING --}}
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Readymade Compound Wall Price Range</h2>
        <div class="w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6"></div>
      </div>
      <p class="text-gray-700 text-center">
        Pricing varies by height, finish, and quantity.<br>
        <strong>Starting from ₹80–₹120 per sq. ft.</strong> (material + installation)
      </p>
    </div>
  </section>

  {{-- WHY US --}}
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Why Shreeyash Construction?</h2>
        <div class="w-20 h-1 bg-yellow-800 mx-auto mt-4 mb-6"></div>
      </div>
      <ul class="list-disc list-inside text-gray-700 space-y-2 max-w-4xl mx-auto">
        <li>ISI-grade materials and certified suppliers</li>
        <li>Trained manpower and timely delivery</li>
        <li>Custom design, color &amp; height options</li>
        <li>Strong presence across Maharashtra</li>
      </ul>
    </div>
  </section>

@endsection
