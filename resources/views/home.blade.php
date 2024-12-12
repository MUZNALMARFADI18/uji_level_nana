@extends('main')

@section('titlePage','home')

@section('content')


<section class="wrapper">
    <div class="gambar">
        <img src="{{asset('img/putih.jpg')}}" alt="">
    </div>
    <div class="text px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl text-yellow-500">DEN’ COFFEE</h1>
        <p class="mb-8 text-lg font-normal text-blac lg:text-xl sm:px-16 lg:px-48">DEN’ COFFEE adalah sebuah caffee yang terletak di daerah Malang, Jawa Timur. Cafe ini di bangun sejak Agustus 2024. Desain bangunan Cafe ini terlihat sangat unik, hingga banyak mahasiswa maupun anak sekolah yang sering mengunjungi cafe ini.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
        </div>
    </div>
  </section>

@endsection