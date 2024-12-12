<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
  <style>
    

    .wrapper{
      display: grid;
      grid-template-columns: repeat(30, 1fr);
      grid-template-rows: 90px minmax(200px, auto);
    }

    .wrapper > div:nth-child(1){
      grid-column: 1/30;
      grid-rows: 1/15;
    }

    .wrapper > div:nth-child(2){
      grid-column: 1/20;
      grid-rows: 1;
    }

    .gambar{
      position: absolute;
      z-index: 1;
    }

    .text{
      z-index: 2;
    }

    
  </style>
</head>
<body>
  

<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="{{ asset('img/nana11.jpeg') }}" class="h-8 w-8 rounded-full" alt="Flowbite Logo" >
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">@mznlmrfddd</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
      <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
            <a href="{{ route('home') }}" class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500" aria-current="page">Home</a>
        </li>
        <li>
            <a href="{{ route('about') }}" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
        </li>
        <li>
            <a href="{{ route('menu') }}" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Menu</a>
        </li>
        <li>
            <a href="{{ route('contact') }}" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
        </li>
        <!-- Keranjang -->
        <li>
        <a href="{{ route('keranjang') }}" class="relative block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
            <span class="flex items-center">
                <!-- Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l3-8H6.4M7 13L5.4 7M7 13l-2 6m2-6h10m-9 6a1 1 0 102 0m6 0a1 1 0 102 0" />
                </svg>
            </span>
        </a>
    </li>
</ul>
    </ul>
</div>

  </div>
</nav>

    <!-- Footer di sini -->
</body>
</html>

  <main>
    @yield('content')
</main>

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>
<footer style="background-color:#yello; color:#500; padding:30px 20px; text-align:center;">
    <p>&copy; mznlmrfddd.</p>
    <p>Alamat: Jl. Makam Kauman Wonorejo. Kecamatan Wonorejo,Kabupaten Pasuruan</p>
    <p>Email: <a href="mailto:info@flobite.com" style="color:#ffcc00;">nanaiyawww@gmail.com</a> | Telepon: (+62) 857-3063-7764</p>
    <p>
        <a href="/tentang-kami" style="color:#ffcc00; text-decoration:none; margin:0 10px;">Tentang Saya</a> |
        <a href="/kontak" style="color:#ffcc00; text-decoration:none; margin:0 10px;">Kontak</a> |
        <a href="/privasi" style="color:#ffcc00; text-decoration:none; margin:0 10px;">Kebijakan Privasi</a> |
        <a href="/syarat-dan-ketentuan" style="color:#ffcc00; text-decoration:none; margin:0 10px;">Syarat dan Ketentuan</a>
    </p>
    <p>Ikuti Akun Sosmed saya:
        <a href="https://www.facebook.com/profile.php?id=100056903618931&mibextid=ZbWKwL" target="_blank" style="color:#ffcc00;">Facebook</a> |
        <a href="https://www.tiktok.com/@mznlmrfdddd?_t=8pRHMiFI3XU&_r=1" target="_blank" style="color:#ffcc00;">TikTok</a> |
        <a href="https://www.instagram.com/mznlmrfddd?igsh=aWRzMTY4bWlrc3Fj" target="_blank" style="color:#ffcc00;">Instagram</a>
    </p>
</footer>
</html>