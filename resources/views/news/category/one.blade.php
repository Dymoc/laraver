@extends('layouts.main')
@section('content')

    <div class="col-lg-8">

        <h2>Список новостей по категориям</h2>

        @foreach ($categoryNews as $news)
            <div>
                <h3><a href={{ route('news.show', ['id' => $news->id]) }}>{{ $news->title }}</a></h3>
                <p>{{ $news->description }}</p>
                <p>{{ $news->category }}</p>
            </div>
        @endforeach

    </div>

@endsection
