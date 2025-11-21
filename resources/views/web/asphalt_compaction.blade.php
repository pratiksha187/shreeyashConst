@extends('layouts.app')

@section('title', 'Asphalt Compaction Services in Maharashtra – Shreeyash Construction')

@push('meta')
<meta name="description" content="Shreeyash Construction provides asphalt & bitumen road construction services across Maharashtra — precision paving, compaction & quality-controlled execution.">
@endpush

@section('content')

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
  body { font-family: 'Poppins', sans-serif; background:#f8f9fa; }

  /* Consistent section heading */
  .sec-heading { font-size:2.4rem; font-weight:700; color:#1f2937; }
  .sec-line { width:60px; height:4px; background:#f59e0b; margin:12px auto 35px; border-radius:6px; }

  /* Clean bullet list */
  .yellow-bullet { width:10px; height:10px; background:#f59e0b; border-radius:50%; margin-top:6px; margin-right:10px; }

  /* Process Cards */
  .process-card {
      background:#fff;
      border-radius:14px;
      padding:25px 28px;
      border-top:5px solid #f59e0b;
      box-shadow:0 8px 15px rgba(0,0,0,0.08);
      transition:.25s;
  }
  .process-card:hover { transform:translateY(-6px); }

  /* Technical Table */
  .tech-table th { background:#f59e0b; color:#fff; padding:12px; font-weight:600; }
  .tech-table td { padding:12px; border-bottom:1px solid #ddd; }
  .tech-table tr:nth-child(even) { background:#f1f5f9; }

</style>


<!-- ========================= HERO ========================= -->
<section class="relative h-[430px] overflow-hidden">
    <img src="/storage/logo/header/Compaction.png" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative h-full flex items-center justify-center text-center px-6">
        <div class="bg-black/40 px-10 py-6 rounded-xl backdrop-blur-sm">
            <h1 class="text-white text-4xl md:text-5xl font-bold">Asphalt Compaction Services</h1>
            <p class="text-gray-200 mt-3 text-lg tracking-wide">Precision • Durability • Strength</p>
        </div>
    </div>
</section>



<!-- ========================= INTRO ========================= -->
<!-- <section class="py-20 bg-white text-center">
    <div class="container mx-auto px-4 max-w-4xl">

        <h2 class="sec-heading">Asphalt Compaction Excellence Across Maharashtra</h2>
        <div class="sec-line"></div>

        <p class="text-lg text-gray-700 leading-relaxed">
            Shreeyash Construction specializes in engineered asphalt compaction, delivering high-performance
            road surfaces for highways, industrial estates, townships, and municipal roads. Our approach
            ensures <strong class="text-gray-900">maximum density, durability, and long-term road performance</strong>,
            fully compliant with MoRTH & IRC standards.
        </p>

    </div>
</section> -->

<section class="py-20 bg-white">
    <div class="container mx-auto px-4 max-w-6xl">

        <!-- MAIN HEADING -->
        <h2 class="sec-heading text-center">Asphalt Compaction Excellence Across Maharashtra</h2>
        <div class="sec-line"></div>

        <!-- OVERVIEW TEXT -->
        <p class="text-lg text-gray-700 leading-relaxed text-center max-w-4xl mx-auto mb-14">
            Shreeyash Construction specializes in engineered asphalt compaction, delivering high-performance
            road surfaces for highways, industrial estates, townships, and municipal roads. Our approach ensures
            <strong class="text-gray-900">maximum density, durability, and long-term road performance</strong>,
            fully compliant with MoRTH & IRC standards.
        </p>

        <!-- TWO COLUMN LAYOUT -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <!-- LEFT COLUMN : WHAT IS ASPHALT COMPACTION -->
            <div>
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">
                    What is Asphalt Compaction?
                </h3>

                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                    Asphalt compaction densifies the asphalt layer immediately after laying. This process increases
                    structural stability, reduces air voids, and greatly enhances long-term pavement performance.
                </p>
            </div>

            <!-- RIGHT COLUMN : BENEFITS -->
            <div>
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">
                    Key Benefits of Proper Compaction
                </h3>

                <ul class="space-y-4 text-gray-700 text-lg leading-relaxed">
                    <li class="flex items-start">
                        <span class="yellow-bullet"></span>
                        <span class="ml-2">Increased load-bearing capacity</span>
                    </li>

                    <li class="flex items-start">
                        <span class="yellow-bullet"></span>
                        <span class="ml-2">Improved water resistance</span>
                    </li>

                    <li class="flex items-start">
                        <span class="yellow-bullet"></span>
                        <span class="ml-2">Reduced air voids for extended pavement life</span>
                    </li>

                    <li class="flex items-start">
                        <span class="yellow-bullet"></span>
                        <span class="ml-2">Superior long-term road performance</span>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</section>


<!-- ========================= MERGED SECTION ========================= -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4 max-w-7xl">

    <!-- MAIN HEADING -->
    <h2 class="sec-heading text-center">Why Choose Us & Asphalt Compaction Details</h2>
    <div class="sec-line"></div>

    <!-- TWO COLUMN LAYOUT -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

      <!-- LEFT : WHY CHOOSE SHREEYASH -->
      <div class="pr-0 lg:pr-6">

        <h3 class="text-2xl font-semibold text-gray-900 mb-5">
          Why Choose Shreeyash Construction?
        </h3>

        <ul class="space-y-4 text-gray-700 text-lg leading-relaxed">

          @foreach([
              'Experienced Engineers & Operators',
              'High-Efficiency Rollers & Paving Equipment',
              'Strict Quality Control & On-Site Testing',
              'Compliance with MoRTH, IRC & NHAI Standards',
              'On-time Project Execution & Dedicated Supervision'
          ] as $item)

          <li class="flex items-start">
            <span class="yellow-bullet flex-shrink-0"></span>
            <span class="ml-2">{{ $item }}</span>
          </li>

          @endforeach

        </ul>

      </div>


      <!-- RIGHT : WHAT IS ASPHALT + TECH INFO -->
      <div class="pl-0 lg:pl-6">

       
        <!-- TECH SPECS -->
        <h3 class="text-2xl font-semibold text-gray-900 mt-10 mb-4">
          Technical Specifications
        </h3>

        <div class="overflow-x-auto bg-white rounded-lg shadow-md border border-gray-200">
          <table class="min-w-full tech-table text-gray-700">

            <thead>
              <tr>
                <th class="text-left px-4 py-3">Parameter</th>
                <th class="text-left px-4 py-3">Specification</th>
              </tr>
            </thead>

            <tbody>

              @foreach([
                ['Compaction Target', '92% – 97% of Maximum Theoretical Density (MTD)'],
                ['Layer Thickness', '40mm to 100mm'],
                ['Rolling Temperature Range', '120°C to 140°C'],
                ['Roller Passes', '6 to 10 passes'],
                ['Roller Types', 'Vibratory, Pneumatic-Tired, Static Rollers'],
                ['Moisture Content', '< 0.5%'],
                ['Air Voids', '3% – 6%'],
              ] as $spec)

              <tr class="border-b border-gray-200">
                <td class="px-4 py-3 font-medium">{{ $spec[0] }}</td>
                <td class="px-4 py-3">{{ $spec[1] }}</td>
              </tr>

              @endforeach

            </tbody>

          </table>
        </div>

      </div>

    </div>

  </div>
</section>



<!-- ========================= PROCESS ========================= -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4 max-w-6xl">

    <h2 class="sec-heading text-center">Our Asphalt Compaction Process</h2>
    <div class="sec-line"></div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

      <div class="process-card">
        <h3 class="text-xl font-semibold mb-3">Initial Breakdown Rolling</h3>
        <ul class="space-y-2 text-gray-700">
          <li>✔ Done immediately after laying the mix</li>
          <li>✔ High-frequency vibratory rollers</li>
          <li>✔ Achieves max density while asphalt is hottest</li>
        </ul>
      </div>

      <div class="process-card">
        <h3 class="text-xl font-semibold mb-3">Intermediate Compaction</h3>
        <ul class="space-y-2 text-gray-700">
          <li>✔ Pneumatic-tired rollers</li>
          <li>✔ Eliminates remaining voids</li>
          <li>✔ Strengthens bonding of layers</li>
        </ul>
      </div>

      <div class="process-card">
        <h3 class="text-xl font-semibold mb-3">Finish Rolling</h3>
        <ul class="space-y-2 text-gray-700">
          <li>✔ Smooth steel-wheel rollers</li>
          <li>✔ Final surface leveling</li>
          <li>✔ Removes roller marks</li>
        </ul>
      </div>

    </div>

  </div>
</section>

@endsection
