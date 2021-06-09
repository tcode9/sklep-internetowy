@extends('site.app')
@section('title', 'Checkout')
@section('content')
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Złóż zamówienie</h2>
        </div>
    </section>
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if (Session::has('error'))
                        <p class="alert alert-danger">{{ Session::get('error') }}</p>
                    @endif
                </div>
            </div>
            <form action="{{ route('checkout.place.order') }}" method="POST" role="form">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <header class="card-header">
                                <h4 class="card-title mt-2">Szczegóły</h4>
                            </header>
                            <article class="card-body">
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label>Imię</label>
                                        <input type="text" class="form-control" name="first_name" value="{{ auth()->user()->first_name }}">
                                    </div>
                                    <div class="col form-group">
                                        <label>Nazwisko</label>
                                        <input type="text" class="form-control" name="last_name" value="{{ auth()->user()->last_name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Adres</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Miasto</label>
                                        <input type="text" class="form-control" name="city">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kraj</label>
                                        <input type="text" class="form-control" name="country">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-6">
                                        <label>Kod pocztowy</label>
                                        <input type="text" class="form-control" name="post_code">
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>Numer telefonu</label>
                                        <input type="text" class="form-control" name="phone_number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Adres e-mail</label>
                                    <input type="email" class="form-control" name="email"
                                           value="{{ auth()->user()->email }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Uwagi dotyczące zamówienia</label>
                                    <textarea class="form-control" name="notes" rows="6"></textarea>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <header class="card-header">
                                        <h4 class="card-title mt-2">Twoje zamówienie</h4>
                                    </header>
                                    <article class="card-body">
                                        <dl class="dlist-align">
                                            <dt>Koszt całkowity:</dt>
                                            <dd class="text-right h5 b"> {{ \Cart::getSubTotal() }} {{ config('settings.currency_symbol') }} </dd>
                                        </dl>
                                    </article>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="subscribe btn btn-success btn-lg btn-block">Złóż zamówienie
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@stop
