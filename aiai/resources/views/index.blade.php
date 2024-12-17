@extends('layout')

@section('contets')
    <title>ログイン</title>
    <h1>相積みアイアイ</h1>

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

        <form action="./login" method="post">
            @csrf
            ユーザーID：<input name="emali" value="{{ old('email') }}"><br>
            パスワード：<input name="password" type="password"><br>
            <button>ログイン</button>
            <button>新規登録</button>
        </form>
@endsection