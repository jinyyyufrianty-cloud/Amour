@extends('layouts.app')

@section('title', 'Album')

@section('content')
<div>
    <div class="text-center mb-14">
        <p class="text-xs uppercase tracking-[0.2em] text-[#8A847E] mb-2">Captured Moments</p>
        <h2 class="font-serif-editorial text-4xl">Album Foto</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach($photos as $photo)
        <div class="bg-white p-3 border border-[#E8E2D9] shadow-sm group">
            <div class="aspect-[4/5] bg-[#EFECE6] overflow-hidden mb-4">
                <img src="{{ asset('images/' . $photo['image']) }}" 
                     alt="{{ $photo['title'] }}" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-700 ease-out">
            </div>
            <div class="px-1 pb-2">
                <div class="flex justify-between items-baseline mb-1">
                    <h3 class="font-serif-editorial text-xl">{{ $photo['title'] }}</h3>
                    <span class="text-[11px] uppercase tracking-wider text-[#9A948E]">{{ $photo['date'] }}</span>
                </div>
                <p class="text-xs text-[#6E6A66] leading-relaxed">{{ $photo['caption'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection