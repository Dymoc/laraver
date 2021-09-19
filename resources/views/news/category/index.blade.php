@extends('layouts.main')
@section('content')

    <div class="col-lg-8">
        <h2>Список категорий</h2>

        @foreach ($categoryes as $category)
            <div>
                <h3><a href={{ route('category.one', ['category' => $category]) }}>{{ $category->title }}</a></h3>
            </div>
        @endforeach
    </div>

@endsection
