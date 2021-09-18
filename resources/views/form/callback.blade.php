@extends('layouts.main')
@section('content')


    <div class="col-md-8">
    <h4>Форма обратной связи</h4>
    <form action={{ route('callback_post') }} method="post">
        @csrf
        <div class="form-group">
            <label for="name">Ваше имя:</label>
            <input type="name" name="name" class="form-control" id="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="email1">E-mail:</label>
            <input type="email" name="email" class="form-control" id="email1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="phone">Номер телефона:</label>
            <input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone">
        </div>
        <div class="form-group">
            <label for="message">Сообщение, отзыв:</label>
            <textarea class="form-control" name="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-info">Отправить сообщение</button>
    </form>
</div>

@endsection
