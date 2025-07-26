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
        'title' => 'Asphalt / Bitumen Road Construction',
        'desc' => 'As a leading <strong>asphalt road contractor in Maharashtra,</strong> Shreeyash Construction specializes in the construction of <strong>flexible pavements using hot mix bitumen </strong>for <strong>highways, internal roads, and industrial zones</strong>. Our team uses <strong>advanced paver finishers and vibratory rollers </strong>to ensure a smooth and long-lasting finish. Whether youre planning a township approach road or <strong>bitumen road construction in Khopoli,</strong> Raigad, Pune, Mumbai or— we deliver <strong>quality-driven execution</strong> with timely delivery.',
        'img' => asset('storage/logo/main/roadconst.jpg'),
        
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
