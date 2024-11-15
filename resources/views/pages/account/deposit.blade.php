@php
    $user = auth()->user();
@endphp

@extends('modules.main')

@section('content')
    <form class="deposit_form" id="deposit_form">
        <h2>Пополнение баланса</h2>

        <div class="deposit_form-info">
            <div>
                <label for="deposit_form-info-amount">Сумма пополнения (USD):</label>
                <input id="deposit_form-info-amount" type="number">
            </div>
            <div>
                <h3>Способ оплаты:</h3>
                <div class="grid-wrapper grid-col-auto">
                    <label for="usdtRadio" class="radio-card">
                        <input type="radio" name="radio-card" id="usdtRadio" value="usdt" data-show="usdt" />
                        <div class="card-content-wrapper">
                            <div class="card-content">
                                <img src="{{ asset('img/usdt_logo.svg') }}" alt="usdt_logo" />
                                <h4>USDT TRC-20</h4>
                            </div>
                        </div>
                    </label>

                    <label for="cardRadio" class="radio-card">
                        <input type="radio" name="radio-card" id="cardRadio" value="card" data-show="card" />
                        <div class="card-content-wrapper">
                            <div class="card-content">
                                <img src="{{ asset('img/card_logo.svg') }}" alt="card_logo" />
                                <h4>Банковская карта</h4>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>


        <div class="deposit_form-info--usdt" id="usdt-form">
            <div>
                <h3>Сумма к переводу (USDT TRC-20): <span id="highlite">50</span></h3>
                <h5 id="highlite">Внимание! на кошелек должна поступить указанная сумма.</h5>
            </div>
            <h3>Адрес пополнения: <span id="highlite">{{ $user->wallet_id }}</span></h3>
            <div>
                <label for="hash">После перевода, предоставьте хэш-транзакции:</label>
                <input id="hash" type="text">
            </div>
        </div>

        <div class="submit" id="submit">
            <button id="submit-button">Проверить транзакцию</button>
        </div>
    </form>
@endsection
