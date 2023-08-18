   @extends('layouts.main')

   @section('baju')
   <h1>Halaman About</h1>
   <h3>{{ $name }}</h3>
   <p>{{ $email }}</p>
   <img src="{{ asset('img/'. $image) }}" alt="{{ $image }}" width="200">
   @endsection
