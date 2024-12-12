@extends('main')

<link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .tab-content p {
        line-height: 1.6;
    }
</style>

@section('titlePage', 'About')

@section('content')

<main class="p-4">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold text-center mb-6">Welcome to Our den’ coffee</h1>

        <!-- Tabs Navigation -->
        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
            <li class="mr-2">
                <button id="about-tab" data-tab-target="#about" type="button" class="inline-block p-4 rounded-t-lg active text-blue-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:text-blue-500">
                Introduction
                </button>
            </li>
            <li class="mr-2">
                <button id="visi-tab" data-tab-target="#visi" type="button" class="inline-block p-4 rounded-t-lg hover:text-blue-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-blue-500">
                    Visi Kami
                </button>
            </li>
            <li class="mr-2">
                <button id="mission-tab" data-tab-target="#mission" type="button" class="inline-block p-4 rounded-t-lg hover:text-blue-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-blue-500">
                    Misi Kami
                </button>
            </li>
            <li class="mr-2">
                <button id="menu-tab" data-tab-target="#menu" type="button" class="inline-block p-4 rounded-t-lg hover:text-blue-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-blue-500">
                    Menu Favorit
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div id="about" class="tab-content mt-6">
            <p><h1><b>Selamat Datang di DEN' COFFEE!</b></h1><br>
            Kami percaya bahwa setiap cangkir kopi memiliki cerita yang unik, dari biji yang dipetik dengan hati-hati hingga saat pertama Anda mencicipinya. DEN' COFFEE hadir untuk menjadi tempat di mana aroma kopi yang harum, suasana yang hangat, dan keramahan berpadu untuk menciptakan pengalaman yang tak terlupakan.<br>
            <h1 class="my-4"><b>Apa yang Kami Tawarkan?</b></h1>
            <h2><b>1.Kopi Berkualitas Premium</b></h2>
            Kami hanya menggunakan biji kopi terbaik yang dipilih dari petani lokal dan internasional. Dengan proses roasting yang presisi, kami menjaga cita rasa asli dari setiap biji kopi.<br>
            <h2><b>2.Suasana Nyaman</b></h2>
            Nikmati tempat yang sempurna untuk bersantai, bekerja, atau berkumpul bersama teman. Interior kami dirancang untuk menciptakan suasana hangat dan menginspirasi.<br>
            <h2><b>3.Menu Beragam</b></h2>
            Dari espresso klasik hingga kreasi unik seperti Cold Brew Citrus dan Latte Velvet, kami memiliki sesuatu untuk semua pencinta kopi. Jangan lupa mencoba pilihan camilan kami, mulai dari kue homemade hingga roti panggang yang menggugah selera.<br>
            <h1 class="my-4"><b>Mari Bersantai dan Nikmati Hidangan Anda</b></h1>
            Kopi bukan hanya sekadar minuman; ia adalah jembatan yang menghubungkan cerita, tawa, dan momen indah. Kami siap menyambut Anda di DEN' COFFEE dan memberikan pengalaman kopi yang tak terlupakan.<br>
            <h1 class="my-4"><b>Datang dan Temukan Cerita di Setiap Cangkir.</b></h1>
        </p>
        </div>
        <div id="visi" class="tab-content mt-6">
            <p>DEN' COFFEE bercita-cita untuk menjadi pelopor dalam menciptakan pengalaman kopi yang tidak hanya memuaskan selera, tetapi juga menyentuh hati setiap pelanggan. Kami berkomitmen untuk menghadirkan produk berkualitas tinggi yang diolah dari biji kopi pilihan terbaik, dipadukan dengan suasana yang ramah, nyaman, dan penuh kehangatan.
            Sebagai bagian dari visi kami, DEN' COFFEE tidak hanya ingin menjadi tempat menikmati kopi, tetapi juga sebuah ruang yang menyatukan manusia, ide, dan cerita. Kami ingin mendukung petani lokal dengan mengedepankan praktik berkelanjutan, menciptakan dampak positif bagi komunitas, dan mempromosikan nilai-nilai kejujuran, keramahan, serta kreativitas.
            Dalam setiap cangkir yang kami sajikan, kami berusaha menyampaikan dedikasi terhadap detail, rasa, dan estetika. Kami ingin menjadi pilihan utama bagi setiap individu, keluarga, dan komunitas yang menghargai waktu berkualitas sambil menikmati kopi yang luar biasa.
            Dengan semangat inovasi, keberlanjutan, dan pelayanan prima, DEN' COFFEE ingin menjadi lebih dari sekadar kopi shop—kami ingin menjadi bagian dari kehidupan pelanggan kami, tempat mereka merasa diterima, terinspirasi, dan selalu ingin kembali.<br>
            <class="my-4">Visi ini memadukan elemen kualitas, komunitas, keberlanjutan, dan inovasi untuk menciptakan kesan yang mendalam dan profesional bagi DEN' COFFEE.</p>
        </div>
        <div id="mission" class="tab-content mt-6 hidden">
            <p><h1><b>DEN' COFFEE</b></h1> memiliki misi untuk menciptakan pengalaman kopi yang luar biasa dengan pendekatan yang menyeluruh, mencakup aspek kualitas, keberlanjutan, inovasi, dan layanan pelanggan. Kami berdedikasi untuk mencapai hal ini melalui:<br>
            <h1>Menyediakan Kopi Premium Berkualitas Tinggi</h1>
        </p>
        </div>
        <div id="menu" class="tab-content mt-6 hidden">
            <p>Beberapa menu favorit kami yang wajib Anda coba: <br>
                - Coffee MilkShake<br>
                - Salted Caramel<br>
                - Strobery Pudding<br>
                - Eeg Pumpkin<br>
                - Ricebwol Sambal Matah<br>
                - Mix pleter<br>
                - Nasi Goreng Daun Jeruk</p>
        </div>
    </div>
</main>

<script>
    const tabs = document.querySelectorAll('[data-tab-target]');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            contents.forEach(content => content.classList.add('hidden'));
            tabs.forEach(btn => btn.classList.remove('active', 'text-blue-600'));
            document.querySelector(tab.dataset.tabTarget).classList.remove('hidden');
            tab.classList.add('active', 'text-blue-600');
        });
    });
</script>
@endsection
