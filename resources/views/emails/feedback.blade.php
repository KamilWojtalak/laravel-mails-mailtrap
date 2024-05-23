<div class="">
    <h2>To jest mail ze strony {{ config('app.name') }}</h2>
    <p>
        {{-- I do tego masz dostęp jak do normalnej zmiennej, bo miałeś to w class jako property --}}
        {{ $content }}
    </p>
</div>
