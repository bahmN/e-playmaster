@php
    $user = auth()->user();
@endphp

<header>
    <a href="{{ route('products.index') }}">Товары</a>
    <a href="{{ route('steam.index') }}">Пополнить steam</a>
    <a href="{{ route('account.index') }}">Аккаунт</a>
    <div class="deposit">
        <a href="{{ route('account.deposit') }}">+</a>
        <p>{{ $user->deposit }}$</p>
    </div>
</header>
