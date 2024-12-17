@extends('layout')

@section('contets')
        <title>ログイン</title>
        <h1>相積みアイアイ</h1>
        <form action="./login" method="post">
            ユーザーID：<input name="emali"><br>
            パスワード：<input name="password" type="password"><br>
            <button>ログイン</button>
            <button>新規登録</button>
        </form>
  @endsection