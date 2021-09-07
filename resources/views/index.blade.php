@extends('layouts.main')
@section('content')

    <div class="col-lg-8">
        <h2>Привет</h2>

        <p>первая страница</p>

        <a href={{ route('news') }}>Новости</a>
        <a href={{ route('news.category') }}>Категории новостей</a>
    </div>


@endsection
