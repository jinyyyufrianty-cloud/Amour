@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="flex flex-col items-center justify-center text-center py-16">
    <p class="text-xs uppercase tracking-[0.25em] text-[#8A847E] mb-4">
        Since {{ $startDate->format('F d, Y') }}
    </p>
    
    <!-- Judul utama (ganti ke ucapan spesial saat hari-H) -->
    <h1 class="font-serif-editorial text-5xl md:text-7xl font-normal tracking-tight mb-6">
        Welcome to Our Space.
    </h1>
    
    <p class="text-sm md:text-base text-[#6E6A66] max-w-md leading-relaxed mb-10">
        Sebuah ruang kecil di internet untuk menyimpan cerita, foto, dan hal-hal sederhana yang berkesan.
    </p>

    <div class="border-y border-[#E8E2D9] py-6 px-12 mb-10">
        <span class="font-serif-editorial text-4xl md:text-5xl block">{{ $daysTogether }}</span>
        <span class="text-[11px] uppercase tracking-[0.2em] text-[#8A847E]">Days Together</span>
    </div>

    <div class="flex space-x-4">
        <a href="{{ route('story') }}" class="bg-[#2C2A29] text-[#FAF8F5] px-7 py-3 text-xs uppercase tracking-widest hover:bg-[#4A4745] transition">
            Baca Cerita
        </a>
        <a href="{{ route('album') }}" class="border border-[#2C2A29] px-7 py-3 text-xs uppercase tracking-widest hover:bg-[#EFECE6] transition">
            Lihat Album
        </a>
    </div>
</div>
@endsection