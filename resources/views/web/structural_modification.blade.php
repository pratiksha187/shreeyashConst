@extends('layouts.app')

@section('title', 'Home')

@section('content')

<style>
.fade-in {
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 0.6s ease forwards;
}
@keyframes fadeInUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>

<div class="max-w-8xl">
  <div class="bg-white rounded-xl shadow-lg p-8">
    
    @php
    $methods = [
      [
        'title' => 'Structural Modification (Retrofitting)',
        'desc' => 'We offer <strong>structural retrofitting services for industrial sheds and buildings</strong> needing layout changes, load-bearing upgrades, or utility conversions. Our team uses jacketing, carbon fiber wrapping, and RCC civil modifications — making us a trusted <strong>retrofitting contractor in Patalganga MIDC, Roha MIDC, and Taloja MIDC</strong>',
        'img' => asset('storage/img/roadconst.jpg'),
      ],
    ];
    @endphp

    @foreach($methods as $index => $method)
    <div class="flex flex-col md:flex-row items-center gap-6 my-10 fade-in {{ $index % 2 == 1 ? 'md:flex-row-reverse' : '' }}" style="animation-delay: {{ $index * 0.2 }}s">
      <div class="md:w-1/2 flex justify-center">
        <img src="{{ $method['img'] }}"
             alt="{{ $method['title'] }}"
             class="w-full max-w-[400px] h-[240px] object-cover rounded-xl shadow-lg">
      </div>
      <div class="md:w-1/2">
        <h3 class="text-2xl font-semibold text-yellow-600 mb-3">{{ $method['title'] }}</h3>
        <p class="text-gray-700 leading-relaxed">{!! $method['desc'] !!}</p>
      </div>
    </div>
    @endforeach

  </div>
</div>

@endsection
