@extends('layouts.main')
@section('content')

    <div class="col-lg-8">
        <h2>Привет</h2>

        <p>первая страница</p>

        <a href={{ route('news') }}>Новости</a>
        <br>
        <a href={{ route('news.category') }}>Категории новостей</a>
        <br>
        <a href={{ route('callback') }}>Форма обратной связи</a>
        <br>
        <a href="{{ route('data') }}">Форма заказа на получение выгрузки данных</a>
    </div>


@endsection
