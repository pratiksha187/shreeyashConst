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
        'title' => 'Offset Concrete Paving',
       
        'desc' => '<strong>Offset Concrete Paving</strong> is a specialized technique used for constructing <strong>roadside structures</strong> such as <strong>curbs, gutters, barriers,</strong> and <strong>shoulders</strong>. This method involves placing concrete to the <strong>side of the slipform paving machine,</strong> allowing for greater <strong>flexibility in tight or narrow spaces.</strong> Ideal for urban roadwork, highway medians, and perimeter elements, offset paving ensures precise shaping and high structural integrity even in constrained construction zones. It is widely adopted for its ability to streamline construction of non-central elements without interrupting mainline paving, delivering fast, consistent, and durable results in complex road infrastructure projects.',

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
