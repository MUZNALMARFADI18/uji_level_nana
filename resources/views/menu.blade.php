@extends('main')

@section('content')


<div id="gallery" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('img/buka.png') }}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="{{ asset('img/dj.jpg') }}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('img/seller1.png') }}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('img/promo.jpg') }}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('img/paket.png') }}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<style>
.food-item {
    text-align: center;
    font-family: Arial, sans-serif;
    margin: 20px;
}

.food-details {
    background-color: #2C2E39; /* Warna latar belakang kotak */
    border: 1px solid #ddd; /* Border untuk kotak */
    border-radius: 8px; /* Membuat sudut kotak membulat */
    padding: 15px;
    margin-top: 10px;
    display: inline-block;
    text-align: left;
    width: fit-content;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Memberikan efek bayangan */
}

.food-name, .food-price, .food-category, .food-status {
    margin: 5px 0;
    font-size: 1rem;
}
</style>

<div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
<div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
    <a href="#coffee-section" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Coffe</a>
    <a href="#dessert-section" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Dessert</a>
    <a href="#makanan-berat-section" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Makanan Berat</a>
    <a href="#makanan-ringan-section" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Makanan Ringan</a>
</div>
</div>
<div id="coffee-section" class="grid grid-cols-2 md:grid-cols-3 gap-4">
    <!-- Semua gambar kategori Coffee -->
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/gulaaren.jpg') }}" alt="Kopi Gula Aren">
        <p class="food-name text-lg font-semibold">Nama Minuman: Kopi Gula Aren</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Coffee</p>
        <p class="food-status">Status: Tersedia</p> 
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Kopi Gula Aren">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>

    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/dc.jpg') }}" alt="Dalgona Coffee">
        <p class="food-name text-lg font-semibold">Nama Minuman: Dalgona Coffee</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Coffee</p>
        <p class="food-status">Status: Tersedia</p> 
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Dalgona Coffee">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>

    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/SaltedCaramel.jpg') }}" alt="Salted Caramel">
        <p class="food-name text-lg font-semibold">Nama Minuman: Salted Caramel</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Coffee</p>
        <p class="food-status">Status: Tersedia</p> 
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Salted Caramel">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/boba.jpg') }}" alt="Brown Sugar">
        <p class="food-name text-lg font-semibold">Nama Minuman: Brown Sugar</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Minuman</p>
        <p class="food-status">Status: Tersedia</p> 
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Brown Sugar">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/CaramelLatte.jpg') }}" alt="Caramel Latte">
        <p class="food-name text-lg font-semibold">Nama Minuman: Caramel Latte</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Coffee</p>
        <p class="food-status">Status: Tersedia</p> 
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Caramel Latte">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/CoffeeMilkshake.jpg') }}" alt="Coffee MilkShake">
        <p class="food-name text-lg font-semibold">Nama Minuman: Coffee MilkShake</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Coffee</p>
        <p class="food-status">Status: Tersedia</p> 
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Coffee MilkShake">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
</div>

<div id="dessert-section" class="grid grid-cols-2 md:grid-cols-3 gap-4">
    <!-- Semua gambar kategori Dessert -->
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/Cheesecake.jpg') }}" alt="Cheesecake">
        <p class="food-name text-lg font-semibold">Nama Makanan: Cheesecake</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Deesert</p>
        <p class="food-status">Status: Tersedia</p> 
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Cheesecake">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/str.jpg') }}" alt="Strobery Pudding">
        <p class="food-name text-lg font-semibold">Nama Makanan: Strobery Pudding</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Deesert</p>
        <p class="food-status">Status: Tersedia</p>
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Strobery Pudding">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/dragon.jpg') }}" alt="DragonFruit">
        <p class="food-name text-lg font-semibold">Nama Makanan: DragonFruit</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori:Deesert</p>
        <p class="food-status">Status: Tersedia</p>
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="DragonFruit">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/salad.jpg') }}" alt="Salad Buah">
        <p class="food-name text-lg font-semibold">Nama Makanan: Salad Buah</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Deesert</p>
        <p class="food-status">Status: Tersedia</p>
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Salad Buah">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/Es Teler.jpg') }}" alt="Es Teler">
        <p class="food-name text-lg font-semibold">Nama Minuman: Es teler</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Minuman</p>
        <p class="food-status">Status: Tersedia</p>
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Es Teler">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/podeng.jpg') }}" alt="Es Podeng">
        <p class="food-name text-lg font-semibold">Nama Minuman: Es Podeng</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Minuman</p>
        <p class="food-status">Status: Tersedia</p>
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Es Podeng">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/wortel.jpg') }}" alt="Honey Carrot">
        <p class="food-name text-lg font-semibold">Nama Makanan: Honey Carrot</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Deesert</p>
        <p class="food-status">Status: Tersedia</p>
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Hony Carrot">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/Berry Pudding.jpg') }}" alt="Berry Pudding">
        <p class="food-name text-lg font-semibold">Nama Makanan: Berry Pudding</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Deesert</p>
        <p class="food-status">Status: Tersedia</p>
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Berry Pudding">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/Pumpkin.jpg') }}" alt="Eeg Pumpkin">
        <p class="food-name text-lg font-semibold">Nama Makanan: Eeg Pumpkin</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Deesert</p>
        <p class="food-status">Status: Tersedia</p>
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Eeg Pumpkin">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
</div>

<div id="makanan-berat-section" class="grid grid-cols-2 md:grid-cols-3 gap-4">
    <!-- Semua gambar kategori Makanan Berat -->
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/nasigorengdaunjeruk1.jpg') }}" alt="Nasi Goreng Daun Jeruk">
        <p class="food-name text-lg font-semibold">Nama Makanan: Nasi Goreng Daun Jeruk</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Makanan Berat</p>
        <p class="food-status">Status: Tersedia</p>
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Nasi Goreng Daun Jeruk">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/nasigoreng1 .jpg') }}" alt="Nasi Goreng">
        <p class="food-name text-lg font-semibold">Nama Makanan: Nasi Goreng</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Makanan Berat</p>
        <p class="food-status">Status: Tersedia</p> 
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Nasi Goreng">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/nasi goreng s.jpg') }}" alt="Nasi Goreng Seafood">
        <p class="food-name text-lg font-semibold">Nama Makanan: Nasi Goreng Seafood</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Makanan Berat</p>
        <p class="food-status">Status: Tersedia</p> 
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Nasi Goreng Seafood">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/katsu.jpg') }}" alt="Ricebwol Ayam Katsu">
        <p class="food-name text-lg font-semibold">Nama Makanan: Ricebwol Ayam Katsu</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Makanan Berat</p>
        <p class="food-status">Status: Tersedia</p> 
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Ricebwol Ayam Katsu">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/teriyaki.jpg') }}" alt="Ricebwol Teriyaki">
        <p class="food-name text-lg font-semibold">Nama Makanan: Ricebwol Teriyaki</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Makanan Berat</p>
        <p class="food-status">Status: Tersedia</p> 
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Ricebwol Teriyaki">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/sambalmatah.jpg') }}" alt="Ricebwol Sambal Matah">
        <p class="food-name text-lg font-semibold">Nama Makanan: Ricebwol Sambal Matah</p>
        <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
        <p class="food-category">Kategori: Makanan Berat</p>
        <p class="food-status">Status: Tersedia</p> 
        <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Ricebwol Sambal Matah">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
    </div>
</div>

<div id="makanan-ringan-section" class="grid grid-cols-2 md:grid-cols-3 gap-4">
    <!-- Semua gambar kategori Makanan Ringan -->
    <div class="food-item">
    <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/mix.jpg') }}" alt="Mix pleter">
    <p class="food-name text-lg font-semibold">Nama Makanan: Mix pleter</p>
    <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
    <p class="food-category">Kategori: Makanan Ringan</p>
    <p class="food-status">Status: Tersedia</p>
    <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Mix pleter">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
</div>
        
    <div class="food-item">
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/k.jpg') }}" alt="kentang goreng">
        <p class="food-name text-lg font-semibold">Nama Makanan: kentang goreng</p>
    <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
    <p class="food-category">Kategori: Makanan Ringan</p>
    <p class="food-status">Status: Tersedia</p>
    
    <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Kentang Goreng">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>

    </div>
    <div class="food-item">
    <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/bawang.jpg') }}" alt="Bawang Goreng">
    <p class="food-name text-lg font-semibold">Nama Makanan: Bawang Goreng</p>
    <p class="food-price text-lg font-semibold">Harga: IDR 40,000</p>
    <p class="food-category">Kategori: Makanan Ringan</p>
    <p class="food-status">Status: Tersedia</p>

    <form action="{{ route('keranjang.tambah') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="nama" value="Bawang Goreng">
        <input type="hidden" name="harga" value="40000">
        <input type="hidden" name="jumlah" value="1">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pesan
        </button>
    </form>
</div>

</div>
</div>

@endsection