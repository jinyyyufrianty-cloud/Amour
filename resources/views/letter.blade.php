@extends('layouts.app')

@section('title', 'Note')

@section('content')
<div class="max-w-xl mx-auto text-center py-6">
    <p class="text-xs uppercase tracking-[0.2em] text-[#8A847E] mb-2">For You</p>
    <h2 class="font-serif-editorial text-4xl mb-8">Sepucuk Pesan</h2>

    <div id="envelope-box" class="bg-white border border-[#E8E2D9] p-12 shadow-sm">
        <p class="font-serif-editorial italic text-xl text-[#6E6A66] mb-6">
            "Ada sedikit catatan yang aku tulis khusus buat kamu."
        </p>
        <button onclick="openLetter()" class="bg-[#2C2A29] text-[#FAF8F5] px-8 py-3 text-xs uppercase tracking-widest hover:bg-[#4A4745] transition">
            Buka Pesan
        </button>
    </div>

    <div id="letter-content" class="hidden bg-white border border-[#E8E2D9] p-8 md:p-12 text-left shadow-sm transition-all duration-500">
        <p class="font-serif-editorial italic text-lg text-[#8A847E] mb-6">Dear Kamu,</p>
        
        <div class="space-y-4 text-sm text-[#4A4745] leading-loose">
            <p>
                Nggak kerasa waktu jalan cepat banget sejak hari pertama kita mutusin buat bareng.
            </p>
            <p>
                Makasih udah selalu sabar, mau dengerin cerita-cerita random aku, dan selalu ada di samping aku di hari-hari baik maupun hari yang lagi capek banget.
            </p>
            <p>
                Semoga ke depannya kita bisa terus jalan bareng, ngelewatin lebih banyak tempat baru, dan nambah lebih banyak foto di halaman album website ini.
            </p>
        </div>

        <div class="mt-10 pt-6 border-t border-[#EFECE6] text-right">
            <p class="text-xs uppercase tracking-widest text-[#8A847E]">With love,</p>
            <p class="font-serif-editorial text-2xl mt-1">Aku</p>
        </div>
    </div>
</div>

<script>
    function openLetter() {
        document.getElementById('envelope-box').classList.add('hidden');
        document.getElementById('letter-content').classList.remove('hidden');
    }
</script>
@endsection