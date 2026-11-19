@extends('layouts.app')

@section('title', 'Story')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="text-center mb-14">
        <p class="text-xs uppercase tracking-[0.2em] text-[#8A847E] mb-2">Chapter by Chapter</p>
        <h2 class="font-serif-editorial text-4xl">Perjalanan Kita</h2>
    </div>

    <div class="space-y-10 border-l border-[#DCD5CA] pl-8 ml-4">
        <div class="relative">
            <span class="w-2.5 h-2.5 bg-[#2C2A29] rounded-full absolute -left-[37px] top-1.5"></span>
            <p class="text-xs uppercase tracking-widest text-[#8A847E] mb-1">Awal Mula</p>
            <h3 class="font-serif-editorial text-2xl mb-2">Pertama Kali Kenal</h3>
            <p class="text-sm text-[#5C5854] leading-relaxed">
                Tulis cerita singkat di sini tentang awal mula kenalan atau momen pertama yang paling diingat.
            </p>
        </div>

        <div class="relative">
            <span class="w-2.5 h-2.5 bg-[#2C2A29] rounded-full absolute -left-[37px] top-1.5"></span>
            <p class="text-xs uppercase tracking-widest text-[#8A847E] mb-1">Resmi Bersama</p>
            <h3 class="font-serif-editorial text-2xl mb-2">Hari Kita Memulai</h3>
            <p class="text-sm text-[#5C5854] leading-relaxed">
                Ceritakan momen waktu mulai jalan bareng dan obrolan sederhana yang bikin yakin.
            </p>
        </div>

        <div class="relative">
            <span class="w-2.5 h-2.5 bg-[#2C2A29] rounded-full absolute -left-[37px] top-1.5"></span>
            <p class="text-xs uppercase tracking-widest text-[#8A847E] mb-1">Hari Ini &amp; Seterusnya</p>
            <h3 class="font-serif-editorial text-2xl mb-2">Masih Terus Bertumbuh</h3>
            <p class="text-sm text-[#5C5854] leading-relaxed">
                Terima kasih sudah jadi tempat pulang yang nyaman dan teman cerita paling asik setiap hari.
            </p>
        </div>
    </div>
</div>
@endsection