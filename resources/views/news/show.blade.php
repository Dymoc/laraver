@extends('layouts.main')
@section('content')
<!-- Featured blog post-->
<div class="col-lg-8">
<div class="card mb-4">
    <a href="#!">
        <img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." />
    </a>
    <div class="card-body">
        <div class="small text-muted">{{ $news->id }}</div>
        <h2 class="card-title">{{ $news->title }}</h2>
        <p class="card-text">{{ $news->description }}</p>
        <a class="btn btn-primary" href="#!">Read more →</a>
    </div>
</div>
</div>
@endsection
@push('js')
    <script>
        // alert("Hello!");
    </script>
@endpush
