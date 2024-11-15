@php
    $user = auth()->user();
@endphp

<header>
    <a href="{{ route('products.index') }}"><img id="epmLogo"src="{{ asset('img/epm_logo.png') }}" alt="epm_logo"></a>
    <a href="{{ route('products.index') }}">Товары</a>
    <a href="{{ route('steam.index') }}">Пополнить steam</a>
    <a href="{{ route('account.index') }}">Аккаунт</a>
    <div class="deposit">
        <a href="{{ route('account.deposit') }}">+</a>
        <p>{{ $user->deposit }}$</p>
    </div>
</header>
