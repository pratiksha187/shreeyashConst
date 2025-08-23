{{-- resources/views/admin/sitemap-upload.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-6 bg-white rounded shadow">
  @if(session('status'))
    <div class="mb-4 p-3 bg-green-50 text-green-700 rounded">{{ session('status') }}</div>
  @endif

  <h1 class="text-xl font-semibold mb-4">Upload sitemap.xml</h1>

  <form method="POST" action="{{ route('sitemap.store') }}" enctype="multipart/form-data" class="space-y-4">
    @csrf
    <input type="file" name="sitemap" accept=".xml" class="w-full border rounded p-2" required>
    @error('sitemap') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror

    <button class="px-4 py-2 bg-blue-600 text-white rounded">Upload</button>
  </form>

  <p class="mt-4 text-sm text-gray-600">
    Current URL: <a class="text-blue-600 underline" href="{{ route('sitemap.show') }}" target="_blank">{{ route('sitemap.show') }}</a>
  </p>
</div>
@endsection
