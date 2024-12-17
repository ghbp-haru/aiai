@extends('test.layout')

{{-- メインコンテンツ　--}}
@section('contets')
        <form action="./test/input" method="post">
            ユーザーID：<input name="emali"><br>
            パスワード：<input name="password" type="password"><br>
            <button>送信する</button>
        </form>
@endsection